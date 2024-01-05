<?php
namespace {{{{phpOrganizationName}}}}\{{{{phpPackageName}}}}\Facades;

use {{{{phpOrganizationName}}}}\{{{{phpPackageName}}}}\{{{{phpPackageName}}}};
use Henrotaym\LaravelPackageVersioning\Facades\Abstracts\VersionablePackageFacade;

class {{{{phpPackageName}}}}Facade extends VersionablePackageFacade
{
    public static function getPackageClass(): string
    {
        return {{{{phpPackageName}}}}::class;
    }
}