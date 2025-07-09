<?php

namespace Getec\Core;

class StringHelper
{
    public static function onlyNumbers(string $value): string
    {
        return preg_replace('/\D/', '', $value);
    }
}
