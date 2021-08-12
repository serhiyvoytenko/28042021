<?php

namespace cli\components;

use App;
use Exception;
use JetBrains\PhpStorm\Pure;
use models\MessageEntity;
use models\UserEntity;
use Ratchet\ConnectionInterface;
use Ratchet\MessageComponentInterface;
use SplObjectStorage;

class WebSocket implements MessageComponentInterface
{
    protected SplObjectStorage $clients;

    #[Pure] public function __construct()
    {
        $this->clients = new SplObjectStorage();
    }

    /**
     * @inheritDoc
     */
    public function onOpen(ConnectionInterface $conn): void
    {
        $this->clients->attach($conn);
    }

    /**
     * @inheritDoc
     */
    public function onClose(ConnectionInterface $conn): void
    {
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
     */
    public function onMessage(ConnectionInterface $from, $msg): void
    {
        $data = json_decode($msg, true);
        $message = new MessageEntity();
        $message->user_id = $data['options']['authorId'];
        $message->room_id = $data['options']['roomId'];
        $message->text = $data['text'];
        $message->created_at = $data['time'];
        $message->save();
        $user = ['userName' => UserEntity::findOne($data['options']['authorId'])->getName()];

        foreach ($this->clients as $client) {
            $messages = $message->toArray();
            $fullMessage = array_merge($user, $messages);
            $client->send(json_encode($fullMessage));
        }
    }
}