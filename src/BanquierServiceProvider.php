<?php

namespace Banquier\Banquier;

use Banquier\Banquier\Commands\BanquierCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BanquierServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-banquier')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-banquier_table')
            ->hasCommand(BanquierCommand::class);
    }
}
