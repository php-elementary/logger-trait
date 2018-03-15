<?php

namespace elementary\loggertrait;

use Psr\Log\LoggerAwareTrait;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

/**
 * The trait comes with the corresponding interfaces \elementary\loggertrait\LoggerGetInterface and \Psr\Log\LoggerAwareInterface
 */
trait LoggerTrait
{
    use LoggerAwareTrait;

    /**
     * @return LoggerInterface
     */
    public function getLogger()
    {
        if ($this->logger) {
            return $this->logger;
        } else {
            return new NullLogger();
        }
    }
}