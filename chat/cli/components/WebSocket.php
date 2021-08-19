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

    private const TYPE_SUBSCRIBE = 'subscribe';
    private const TYPE_MESSAGE = 'message';

    protected SplObjectStorage $clients;

    private array $subscribed = [];
    private array $roomsWithUsers = [];


    public function __construct()
    {
        $this->clients = new SplObjectStorage();
    }

    public function onOpen(ConnectionInterface $conn): void
    {
        $this->clients->attach($conn);
//        echo "New connect! {$conn->resourceId}\n";
    }

    public function onClose(ConnectionInterface $conn): void
    {
        $this->clients->detach($conn);
    }

    public function onError(ConnectionInterface $conn, Exception $e): void
    {
        $conn->close();
    }

    public function onMessage(ConnectionInterface $from, $msg): void
    {
        $payload = json_decode($msg, true);
        match ($payload['type']) {
            self::TYPE_SUBSCRIBE => $this->subscribe($payload, $from),
            self::TYPE_MESSAGE => $this > $this->message($payload),
        };
    }

    protected function subscribe(array $data, ConnectionInterface $connection): void
    {
        var_dump($data, $connection->connectionId);
        exit();
    }

    protected function message($data): void
    {
        $message = new MessageEntity();
        $message->user_id = $data['options']['authorId'];
        $message->room_id = $data['options']['roomId'];
        $message->text = $data['text'];
        $message->created_at = $data['time'];
        $message->save();
        $user = ['userName' => UserEntity::findOne($data['options']['authorId'])->getName()];

        foreach ($this->clients as $client) {
            if (true) {

                $messages = $message->toArray();
                $fullMessage = array_merge($user, $messages);
                $client->send(json_encode($fullMessage));
            }
        }

    }
}