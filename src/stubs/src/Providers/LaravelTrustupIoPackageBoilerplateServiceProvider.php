<?php
namespace Henrotaym\LaravelTrustupIoPackageBoilerplate\Providers;

use Henrotaym\LaravelTrustupIoPackageBoilerplate\LaravelTrustupIoPackageBoilerplate;
use Henrotaym\LaravelPackageVersioning\Providers\Abstracts\VersionablePackageServiceProvider;

class LaravelTrustupIoPackageBoilerplateServiceProvider extends VersionablePackageServiceProvider
{
    public static function getPackageClass(): string
    {
        return LaravelTrustupIoPackageBoilerplate::class;
    }

    protected function addToRegister(): void
    {
        //
    }

    protected function addToBoot(): void
    {
        //
    }
}