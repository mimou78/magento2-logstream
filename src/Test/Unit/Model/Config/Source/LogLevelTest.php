<?php

declare(strict_types=1);

namespace CleatSquad\LogStream\Test\Unit\Model\Config\Source;

use PHPUnit\Framework\TestCase;
use CleatSquad\LogStream\Model\Config\Source\LogLevel;
use Monolog\Logger;

/**
 * Class LogLevelTest
 * @covers \CleatSquad\LogStream\Model\Config\Source\LogLevel
 */
class LogLevelTest extends TestCase
{
    /**
     * Test the toOptionArray method.
     */
    public function testToOptionArray(): void
    {
        $logLevel = new LogLevel();
        $options = $logLevel->toOptionArray();

        $expectedOptions = [
            ['value' => Logger::DEBUG, 'label' => 'DEBUG'],
            ['value' => Logger::INFO, 'label' => 'INFO'],
            ['value' => Logger::NOTICE, 'label' => 'NOTICE'],
            ['value' => Logger::WARNING, 'label' => 'WARNING'],
            ['value' => Logger::ERROR, 'label' => 'ERROR'],
            ['value' => Logger::CRITICAL, 'label' => 'CRITICAL'],
            ['value' => Logger::ALERT, 'label' => 'ALERT'],
            ['value' => Logger::EMERGENCY, 'label' => 'EMERGENCY'],
        ];

        $this->assertEquals($expectedOptions, $options);
    }
}
