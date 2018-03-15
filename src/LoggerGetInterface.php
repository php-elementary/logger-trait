<?php

namespace elementary\loggertrait;

use Psr\Log\LoggerInterface;

interface LoggerGetInterface
{
    /**
     * @return LoggerInterface
     */
    public function getLogger();
}