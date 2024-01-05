<?php
namespace {{{{phpOrganizationName}}}}\{{{{phpPackageName}}}}\Contracts;

use Henrotaym\LaravelPackageVersioning\Services\Versioning\Contracts\VersionablePackageContract;
use Henrotaym\LaravelContainerAutoRegister\Services\AutoRegister\Contracts\AutoRegistrableContract;

/**
 * Versioning package.
 */
interface {{{{phpPackageName}}}}Contract extends VersionablePackageContract, AutoRegistrableContract
{
    public function getTrue(): bool;
}