<?php

namespace beachcomberdigital\Fibr\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \beachcomberdigital\Fibr\Fibr
 */
class Fibr extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \beachcomberdigital\Fibr\Fibr::class;
    }
}
