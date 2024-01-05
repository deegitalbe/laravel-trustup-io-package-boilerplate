<?php
namespace {{{{phpOrganizationName}}}}\{{{{phpPackageName}}}}\Tests;

use {{{{phpOrganizationName}}}}\{{{{phpPackageName}}}}\{{{{phpPackageName}}}};
use Henrotaym\LaravelPackageVersioning\Testing\VersionablePackageTestCase;
use {{{{phpOrganizationName}}}}\{{{{phpPackageName}}}}\Providers\{{{{phpPackageName}}}}ServiceProvider;

class TestCase extends VersionablePackageTestCase
{
    public static function getPackageClass(): string
    {
        return {{{{phpPackageName}}}}::class;
    }

    public function getEnvironmentSetUp($app)
    {
        $this->loadMigrations();
    }
    
    public function getServiceProviders(): array
    {
        return [
            {{{{phpPackageName}}}}ServiceProvider::class
        ];
    }

    protected function loadMigrations()
    {
        foreach($this->getMigrations() as $migration):
            app()->make($migration)->up();
        endforeach;
    }

    /**
     * Define your migrations files here.
     * 
     * @return array<int, string> 
     */
    protected function getMigrations(): array
    {
        return [];
    }
}