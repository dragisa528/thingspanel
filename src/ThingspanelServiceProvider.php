<?php

namespace Thingspanel\Thingspanel;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Thingspanel\Thingspanel\Commands\ThingspanelCommand;

class ThingspanelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         */
        $package
            ->name('thingspanel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_thingspanel_table')
            ->hasCommand(ThingspanelCommand::class);
    }
}
