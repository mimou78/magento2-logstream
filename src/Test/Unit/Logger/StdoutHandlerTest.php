<?php

namespace CleatSquad\Magento2LogStream\Test\Unit\Logger;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Monolog\Formatter\JsonFormatter;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use CleatSquad\Magento2LogStream\Logger\StdoutHandler;
use Monolog\Logger;

/*
 * Class StdoutHandlerTest
 * @covers CleatSquad\Magento2LogStream\Logger\StdoutHandler
 */
class StdoutHandlerTest extends TestCase
{
    private function createStdoutHandler(MockObject|null $scopeConfigMock = null): StdoutHandler
    {
        if ($scopeConfigMock === null) {
            $scopeConfigMock = $this->createMock(ScopeConfigInterface::class);
        }
        $formatter = new JsonFormatter();
        /** @var ScopeConfigInterface $scopeConfigMock */
        return new StdoutHandler($scopeConfigMock, $formatter);
    }

    public function testIsInstanceOfStreamHandler(): void
    {
        $this->assertInstanceOf(StdoutHandler::class, $this->createStdoutHandler());
    }

    public function testGetUrl(): void
    {
        $this->assertEquals('php://stdout', $this->createStdoutHandler()->getUrl());
    }

    public function testGetLevel(): void
    {
        $this->assertEquals(Logger::INFO, $this->createStdoutHandler()->getLevel());
    }

    public function testGetLevelFromConfig(): void
    {
        $scopeConfigMock = $this->createMock(ScopeConfigInterface::class);
        /** @var MockObject $scopeConfigMock */
        $scopeConfigMock->expects($this->once())
            ->method('getValue')
            ->with('log_stream_settings/logging/log_level', 'website')
            ->willReturn(Logger::WARNING);
        $this->assertEquals(Logger::WARNING, $this->createStdoutHandler($scopeConfigMock)->getLevel());
    }

    public function testGetBubble(): void
    {
        $this->assertFalse($this->createStdoutHandler()->getBubble());
    }

    public function testGetFormatter(): void
    {
        $this->assertInstanceOf(JsonFormatter::class, $this->createStdoutHandler()->getFormatter());
    }
}
