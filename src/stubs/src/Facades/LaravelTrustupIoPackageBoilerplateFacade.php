<?php
namespace Henrotaym\LaravelTrustupIoPackageBoilerplate\Facades;

use Henrotaym\LaravelTrustupIoPackageBoilerplate\LaravelTrustupIoPackageBoilerplate;
use Henrotaym\LaravelPackageVersioning\Facades\Abstracts\VersionablePackageFacade;

class LaravelTrustupIoPackageBoilerplateFacade extends VersionablePackageFacade
{
    public static function getPackageClass(): string
    {
        return LaravelTrustupIoPackageBoilerplate::class;
    }
}