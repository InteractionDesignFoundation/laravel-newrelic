<?php declare(strict_types=1);

namespace Intouch\LaravelNewrelic\Tests\Facades;

use Illuminate\Support\Facades\Facade;
use Intouch\LaravelNewrelic\Facades\Newrelic;
use Intouch\LaravelNewrelic\Tests\TestCase;

final class NewrelicTest extends TestCase
{
    /** @test */
    public function it_creates_facade_instance(): void
    {
        $this->assertInstanceOf(Facade::class, new Newrelic());
    }
}
