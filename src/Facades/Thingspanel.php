<?php

namespace Thingspanel\Thingspanel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Thingspanel\Thingspanel\Thingspanel
 */
class Thingspanel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Thingspanel\Thingspanel\Thingspanel::class;
    }
}
