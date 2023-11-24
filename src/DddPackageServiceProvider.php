<?php

namespace Bigtechlabs\DddPackage;

use Bigtechlabs\DddPackage\Commands\DddPackageCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DddPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('ddd-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_ddd-package_table')
            ->hasCommand(DddPackageCommand::class);
    }
}
