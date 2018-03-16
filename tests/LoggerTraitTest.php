<?php

namespace elementary\logger\tests;

use elementary\logger\traits\LoggerGetInterface;
use elementary\logger\traits\LoggerTrait;
use PHPUnit\Framework\TestCase;
use Psr\Log\AbstractLogger;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\NullLogger;

/**
 * @coversDefaultClass \elementary\logger\traits\LoggerTrait
 */
class LoggerTraitTest extends TestCase
{
    /**
     * @test
     * @covers ::getLogger()
     */
    public function getLogger()
    {
        $stub = $this->getMockForAbstractClass(AbstractLogger::class);
        $stub->expects($this->any())
             ->method('log');

        $trait = new LoggerTraitForTest();
        $this->assertInstanceOf(NullLogger::class, $trait->getLogger());

        $trait->setLogger($stub);
        $this->assertInstanceOf(AbstractLogger::class, $trait->getLogger());
    }
}

class LoggerTraitForTest implements LoggerGetInterface, LoggerAwareInterface
{
    use LoggerTrait;
}