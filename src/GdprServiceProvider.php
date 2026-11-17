<?php

namespace JeffersonGoncalves\Gdpr;

use JeffersonGoncalves\Gdpr\Commands\InventoryCommand;
use JeffersonGoncalves\Gdpr\Commands\KAnonymityCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class GdprServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('gdpr')
            ->hasConfigFile()
            ->hasCommands([InventoryCommand::class, KAnonymityCommand::class]);
    }

    public function packageRegistered(): void
    {
        $this->app->singleton(Gdpr::class);
    }
}
