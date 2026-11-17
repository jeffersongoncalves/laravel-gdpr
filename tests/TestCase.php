<?php

namespace JeffersonGoncalves\Gdpr\Tests;

use JeffersonGoncalves\Gdpr\GdprServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            GdprServiceProvider::class,
        ];
    }
}
