<?php

namespace cli\components;

use Ratchet\ConnectionInterface;
use Ratchet\Wamp\Topic;
use Ratchet\Wamp\WampServerInterface;

class WebSocketWamp implements WampServerInterface
{
    protected array $subscribedTopics = [];


    public function onCall(ConnectionInterface $conn, $id, $topic, array $params): void
    {
        $conn->callError($id, $topic, 'Not work!');
    }

    /**
     * @param ConnectionInterface $conn
     * @param Topic|string $topic
     * @return mixed
     */
    public function onSubscribe(ConnectionInterface $conn, $topic): void
    {
        $this->subscribedTopics[$topic->getId()] = $topic;
    }

    /**
     * @param ConnectionInterface $conn
     * @param Topic|string $topic
     * @return mixed
     */
    public function onUnSubscribe(ConnectionInterface $conn, $topic): void
    {
        // TODO: Implement onUnSubscribe() method.
    }

    /**
     * @param ConnectionInterface $conn
     * @param Topic|string $topic
     * @param string $event
     * @param array $exclude
     * @param array $eligible
     * @return mixed
     */
    public function onPublish(ConnectionInterface $conn, $topic, $event, array $exclude, array $eligible): void
    {
        $topic->broadcast($event);
    }

    /**
     * @param ConnectionInterface $conn
     * @return mixed
     */
    public function onOpen(ConnectionInterface $conn): void
    {
        // TODO: Implement onOpen() method.
    }

    /**
     * @param ConnectionInterface $conn
     * @return mixed
     */
    public function onClose(ConnectionInterface $conn): void
    {
        // TODO: Implement onClose() method.
    }

    /**
     * @param ConnectionInterface $conn
     * @param \Exception $e
     * @return mixed
     */
    public function onError(ConnectionInterface $conn, \Exception $e): void
    {
        // TODO: Implement onError() method.
    }

    public function onBlogEntry($entry): void
    {
        $entryData = json_decode($entry, true);

        // If the lookup topic object isn't set there is no one to publish to
        if (!array_key_exists($entryData['category'], $this->subscribedTopics)) {
            return;
        }

        $topic = $this->subscribedTopics[$entryData['category']];

        // re-send the data to all the clients subscribed to that category
        $topic->broadcast($entryData);
    }
}