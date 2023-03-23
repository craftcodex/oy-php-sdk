<?php

namespace CraftCodex\OyPhpSdk\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CraftCodex\OyPhpSdk\OyPhpSdk
 */
class OyPhpSdk extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \CraftCodex\OyPhpSdk\OyPhpSdk::class;
    }
}
