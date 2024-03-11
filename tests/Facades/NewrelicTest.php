<?php declare(strict_types=1);

namespace Intouch\LaravelNewrelic\Tests\Facades;

use Illuminate\Support\Facades\Facade;
use Intouch\LaravelNewrelic\Facades\Newrelic;
use Intouch\LaravelNewrelic\Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;

final class NewrelicTest extends TestCase
{
    #[Test]
    public function it_creates_facade_instance(): void
    {
        $this->assertInstanceOf(Facade::class, new Newrelic());
    }

    #[Test]
    public function it_creates_newrelic_instance_when_use_facade(): void
    {
        $this->assertInstanceOf(\Intouch\Newrelic\Newrelic::class, Newrelic::getFacadeRoot());
    }
}
