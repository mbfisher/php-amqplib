<?php

namespace PhpAmqpLib\Channel;

interface ChannelInterface
{
    public function getChannelId();

    public function getConnection();

    /**
     * Wait for some expected AMQP methods and dispatch to them.
     * Unexpected methods are queued up for later calls to this PHP
     * method.
     *
     * @param array $allowed_methods
     * @param bool $non_blocking
     * @param int $timeout
     * @return mixed
     */
    public function wait($allowed_methods = null, $non_blocking = false, $timeout = 0);

    /**
     * start a queue consumer
     * @param string $queue
     * @param string $consumer_tag
     * @param bool $no_local
     * @param bool $no_ack
     * @param bool $exclusive
     * @param bool $nowait
     * @param null $callback
     * @param null $ticket
     * @param array $arguments
     * @return mixed
     */
    public function basic_consume(
        $queue = "",
        $consumer_tag = "",
        $no_local = false,
        $no_ack = false,
        $exclusive = false,
        $nowait = false,
        $callback = null,
        $ticket = null,
        $arguments = array()
    );
}
