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
}
