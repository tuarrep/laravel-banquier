<?php

namespace Banquier\Banquier\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Banquier\Banquier\Banquier
 */
class Banquier extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-banquier';
    }
}
