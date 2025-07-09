<?php

namespace Getec\Core\Logging;

use Illuminate\Support\Facades\Http;

class RemoteLogger
{
    public static function log(string $level, string $message): void
    {
        $app = env('APP_SIGLA', 'desconhecido');
        $url = config('getec-core.log_api_url');

        if (!$url) {
            return;
        }

        Http::post($url, [
            'timestamp'  => now()->toISOString(),
            'aplicacao'  => $app,
            'tipo'       => $level,
            'descricao'  => $message,
        ]);
    }

    public static function info(string $message): void
    {
        self::log('info', $message);
    }

    public static function error(string $message): void
    {
        self::log('error', $message);
    }

    public static function debug(string $message): void
    {
        self::log('debug', $message);
    }
}
