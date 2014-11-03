<?php

namespace PhpAmqpLib\Connection;

interface ConnectionInterface
{
    public function write($data);

    public function getSocket();
}
