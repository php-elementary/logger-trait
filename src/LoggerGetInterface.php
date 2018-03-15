<?php

namespace elementary\logger\traits;

use Psr\Log\LoggerInterface;

interface LoggerGetInterface
{
    /**
     * @return LoggerInterface
     */
    public function getLogger();
}