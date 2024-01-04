<?php
namespace Henrotaym\LaravelTrustupIoPackageBoilerplate;

use Henrotaym\LaravelTrustupIoPackageBoilerplate\Contracts\LaravelTrustupIoPackageBoilerplateContract;
use Henrotaym\LaravelPackageVersioning\Services\Versioning\VersionablePackage;

class LaravelTrustupIoPackageBoilerplate extends VersionablePackage implements LaravelTrustupIoPackageBoilerplateContract
{
    public static function prefix(): string
    {
        return "laravel-trustup-io-package-boilerplate";
    }

    public function getTrue(): bool
    {
      return true;
    }
}