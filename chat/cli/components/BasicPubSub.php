<?php

namespace cli\components;

use Ratchet\ConnectionInterface;
use Ratchet\Wamp\Topic;
use Ratchet\Wamp\WampServerInterface;

class BasicPubSub implements WampServerInterface
{

    /**
     * @inheritDoc
     */
    public function onOpen(ConnectionInterface $conn): void
    {
        // TODO: Implement onOpen() method.
        echo "new connect";
    }

    /**
     * @inheritDoc
     */
    public function onClose(ConnectionInterface $conn): void
    {
        // TODO: Implement onClose() method.
    }

    /**
     * @inheritDoc
     */
    public function onError(ConnectionInterface $conn, \Exception $e): void
    {
        // TODO: Implement onError() method.
    }

    /**
     * @inheritDoc
     */
    public function onCall(ConnectionInterface $conn, $id, $topic, array $params): void
    {
        $conn->callError($id, $topic, 'RPC not supported on this demo');
    }

    /**
     * @inheritDoc
     */
    public function onSubscribe(ConnectionInterface $conn, $topic): void
    {
        // TODO: Implement onSubscribe() method.
    }

    /**
     * @inheritDoc
     */
    public function onUnSubscribe(ConnectionInterface $conn, $topic): void
    {
        // TODO: Implement onUnSubscribe() method.
    }

    /**
     * @inheritDoc
     */
    public function onPublish(ConnectionInterface $conn, $topic, $event, array $exclude, array $eligible): void
    {
        $topic->broadcast($event);
    }
}