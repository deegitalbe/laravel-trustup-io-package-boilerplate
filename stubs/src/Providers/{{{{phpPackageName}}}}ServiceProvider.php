<?php
namespace {{{{phpOrganizationName}}}}\{{{{phpPackageName}}}}\Providers;

use {{{{phpOrganizationName}}}}\{{{{phpPackageName}}}}\{{{{phpPackageName}}}};
use Henrotaym\LaravelPackageVersioning\Providers\Abstracts\VersionablePackageServiceProvider;

class {{{{phpPackageName}}}}ServiceProvider extends VersionablePackageServiceProvider
{
    public static function getPackageClass(): string
    {
        return {{{{phpPackageName}}}}::class;
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