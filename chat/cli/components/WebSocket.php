<?php

namespace cli\components;

use Exception;
use models\MessageEntity;
use models\UserEntity;
use Ratchet\ConnectionInterface;
use Ratchet\MessageComponentInterface;
use SplObjectStorage;

class WebSocket implements MessageComponentInterface
{
    protected SplObjectStorage $clients;
    protected array $subscribed;

    public function __construct()
    {
        $this->clients = new SplObjectStorage();
        $this->subscribed = [];
    }

    /**
     * @inheritDoc
     */
    public function onOpen(ConnectionInterface $conn): void
    {
        $this->clients->attach($conn);
        echo "New connect! {$conn->resourceId}\n";
    }

    /**
     * @inheritDoc
     */
    public function onClose(ConnectionInterface $conn): void
    {
        unset($this->subscribed[$conn->resourceId]);
        $this->clients->detach($conn);
    }

    /**
     * @inheritDoc
     */
    public function onError(ConnectionInterface $conn, Exception $e): void
    {
        $conn->close();
    }

    /**
     * @inheritDoc
     *
     */
    public function onMessage(ConnectionInterface $from, $msg): void
    {
        $data = json_decode($msg, true);
        var_dump($data,$this->getSubscribe());
        if (isset($data['subscribeAuthorId'])) {

            $this->onSubscribe($data, $from->resourceId);

        } else {
            $message = new MessageEntity();
            $message->user_id = $data['options']['authorId'];
            $message->room_id = $data['options']['roomId'];
            $message->text = $data['text'];
            $message->created_at = $data['time'];
            $message->save();
            $user = ['userName' => UserEntity::findOne($data['options']['authorId'])->getName()];

            foreach ($this->clients as $client) {
                if (isset($this->subscribed[$client->resourceId]['subscribeRoomId']) &&
                    $this->subscribed[$client->resourceId]['subscribeRoomId'] === $message->room_id) {

                    $messages = $message->toArray();
                    $fullMessage = array_merge($user, $messages);
                    $client->send(json_encode($fullMessage));

                }
            }
        }
    }

    protected function onSubscribe(array $data, int $connId): void
    {
//        var_dump($data,$connId);
        if (array_key_exists($connId, $this->subscribed)) {

            unset($this->subscribed[$connId]);
        }

        $this->subscribed[$connId] = [
            'subscribeRoomId' => $data['subscribeRoomId'],
            'subscribeAuthorId' => $data['subscribeAuthorId']
        ];
    }

    public function getSubscribe(): array
    {
        return $this->subscribed;
    }
}