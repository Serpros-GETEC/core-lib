<?php

namespace Getec\Core\Logging;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Formatter\LineFormatter;

class LoggerFactory
{
    public static function create(string $name = 'getec'): Logger
    {
        $logFile = storage_path("logs/{$name}.log");

        $handler = new StreamHandler($logFile, Logger::DEBUG);

        // Formato opcional da linha
        $formatter = new LineFormatter(null, null, true, true);
        $handler->setFormatter($formatter);

        $logger = new Logger($name);
        $logger->pushHandler($handler);

        return $logger;
    }
}
