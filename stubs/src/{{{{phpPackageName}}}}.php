<?php
namespace {{{{phpOrganizationName}}}}\{{{{phpPackageName}}}};

use {{{{phpOrganizationName}}}}\{{{{phpPackageName}}}}\Contracts\{{{{phpPackageName}}}}Contract;
use Henrotaym\LaravelPackageVersioning\Services\Versioning\VersionablePackage;

class {{{{phpPackageName}}}} extends VersionablePackage implements {{{{phpPackageName}}}}Contract
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