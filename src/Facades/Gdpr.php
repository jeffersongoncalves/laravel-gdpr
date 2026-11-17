<?php

namespace JeffersonGoncalves\Gdpr\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JeffersonGoncalves\Gdpr\Gdpr
 */
class Gdpr extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-gdpr';
    }
}
