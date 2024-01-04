<?php
namespace Henrotaym\LaravelTrustupIoPackageBoilerplate\Tests;

use Henrotaym\LaravelTrustupIoPackageBoilerplate\LaravelTrustupIoPackageBoilerplate;
use Henrotaym\LaravelPackageVersioning\Testing\VersionablePackageTestCase;
use Henrotaym\LaravelTrustupIoPackageBoilerplate\Providers\LaravelTrustupIoPackageBoilerplateServiceProvider;

class TestCase extends VersionablePackageTestCase
{
    public static function getPackageClass(): string
    {
        return LaravelTrustupIoPackageBoilerplate::class;
    }

    public function getEnvironmentSetUp($app)
    {
        $this->loadMigrations();
    }
    
    public function getServiceProviders(): array
    {
        return [
            LaravelTrustupIoPackageBoilerplateServiceProvider::class
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