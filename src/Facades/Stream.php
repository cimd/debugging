<?php

namespace Konnec\Debugging\Facades;

use Illuminate\Support\Facades\Facade;

class Stream extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'Stream';
    }
}
