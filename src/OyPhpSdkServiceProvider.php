<?php

namespace CraftCodex\OyPhpSdk;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class OyPhpSdkServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('oy-php-sdk')
            ->hasConfigFile();
    }
}
