<?php

namespace BeachcomberDigital\Fibr;

use BeachcomberDigital\Fibr\Commands\FibrCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FibrServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        dd('FibrServiceProvider configured');
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('fibr')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_fibr_table')
            ->hasCommand(FibrCommand::class);
    }
}
