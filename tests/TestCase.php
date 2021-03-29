<?php

namespace Sfneal\Observables\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Sfneal\Observables\Tests\Providers\TestingServiceProvider;

class TestCase extends OrchestraTestCase
{
    use RefreshDatabase;

    protected function getPackageProviders($app)
    {
        return [
            TestingServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // Migrate 'people' table
        include_once __DIR__.'/migrations/create_people_table.php.stub';
        (new \CreatePeopleTable())->up();
    }

    protected function setUp(): void
    {
        parent::setUp();

        // Enable event faking
        Event::fake();

        // Assert that no events were dispatched...
        Event::assertNothingDispatched();
    }
}
