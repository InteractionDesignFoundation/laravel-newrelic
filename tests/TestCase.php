<?php declare(strict_types=1);

namespace Intouch\LaravelNewrelic\Tests;

use Intouch\LaravelNewrelic\NewrelicServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /**
     * Get the service provider class.
     * @param \Illuminate\Contracts\Foundation\Application $app
     * @return array<string>
     */
    protected function getPackageProviders($app)
    {
        return [
            NewrelicServiceProvider::class,
        ];
    }
}
