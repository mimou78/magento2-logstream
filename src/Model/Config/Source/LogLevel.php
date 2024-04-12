<?php

declare(strict_types=1);

namespace CleatSquad\LogStream\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;
use Magento\Framework\Phrase;
use Monolog\Logger;

/**
 * Class LogLevel
 * Source model for log level options.
 */
class LogLevel implements OptionSourceInterface
{
   /**
     * Get log levels.
     * returns an array of log levels. Each log level is represented as an associative array
     *
     * @return Phrase[][]|int[][]
     */
    public function toOptionArray(): array
    {
        return [
            ['value' => Logger::DEBUG, 'label' => __('DEBUG')],
            ['value' => Logger::INFO, 'label' => __('INFO')],
            ['value' => Logger::NOTICE, 'label' => __('NOTICE')],
            ['value' => Logger::WARNING, 'label' => __('WARNING')],
            ['value' => Logger::ERROR, 'label' => __('ERROR')],
            ['value' => Logger::CRITICAL, 'label' => __('CRITICAL')],
            ['value' => Logger::ALERT, 'label' => __('ALERT')],
            ['value' => Logger::EMERGENCY, 'label' => __('EMERGENCY')],
        ];
    }
}
