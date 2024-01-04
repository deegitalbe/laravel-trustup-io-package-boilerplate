<?php
namespace Henrotaym\LaravelTrustupIoPackageBoilerplate\Contracts;

use Henrotaym\LaravelPackageVersioning\Services\Versioning\Contracts\VersionablePackageContract;
use Henrotaym\LaravelContainerAutoRegister\Services\AutoRegister\Contracts\AutoRegistrableContract;

/**
 * Versioning package.
 */
interface LaravelTrustupIoPackageBoilerplateContract extends VersionablePackageContract, AutoRegistrableContract
{
    public function getTrue(): bool;
}