<?php

namespace AhmetErtem\Hook\Facades;

use Illuminate\Support\Facades\Facade;

class Hook extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Hook';
    }
}
