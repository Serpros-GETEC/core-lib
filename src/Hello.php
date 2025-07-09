<?php

namespace Getec\Core;

class Hello
{
  public static function say()
  {
    return 'Olá da biblioteca GETEC/CORE!!!';
  }

  public static function token()
  {
    return config('getec-core.api_token');
  }
}