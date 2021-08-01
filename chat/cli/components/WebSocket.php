<?php

namespace cli\components;

use Exception;
use Ratchet\ConnectionInterface;
use Ratchet\MessageComponentInterface;
use SplObjectStorage;

class WebSocket implements MessageComponentInterface
{
    protected SplObjectStorage $clients;

    public function __construct()
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
    public function onError(ConnectionInterface $conn, \Exception $e): void
    {
        $conn->close();
    }

    /**
     * @inheritDoc
     */
    public function onMessage(ConnectionInterface $from, $msg): void
    {
        foreach ($this->clients as $client){
            $client->send($msg);
        }
    }
}