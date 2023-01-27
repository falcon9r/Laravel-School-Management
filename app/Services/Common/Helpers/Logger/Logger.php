<?php

namespace App\Services\Common\Helpers\Logger;

use Monolog\Handler\StreamHandler;

class Logger implements LoggerContract
{
    protected \Monolog\Logger $logger;

    public function __construct($folder, $serviceName = '')
    {
        $this->logger = new \Monolog\Logger($serviceName);
        $this->logger->pushHandler(new StreamHandler(sprintf('%s/logs/%s/info-%s.log', storage_path(), $folder, \Carbon\Carbon::now()->toDateString()), \Monolog\Logger::INFO));
        $this->logger->pushHandler(new StreamHandler(sprintf('%s/logs/%s/error-%s.log', storage_path(), $folder, \Carbon\Carbon::now()->toDateString()), \Monolog\Logger::ERROR));
    }

    public function info($message, array $context = [])
    {
        $this->logger->info($message, $context);
    }

    public function error($message, array $context = [])
    {
        $this->logger->error($message, $context);
    }
}
