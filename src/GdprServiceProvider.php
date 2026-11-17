<?php

namespace JeffersonGoncalves\Gdpr;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class GdprServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-gdpr')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
