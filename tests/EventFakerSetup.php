<?php

namespace Sfneal\Observables\Tests;

use Illuminate\Support\Facades\Event;

trait EventFakerSetup
{
    // todo: add to test data package

    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        // Enable event faking
        Event::fake();

        // Assert that no events were dispatched...
        Event::assertNothingDispatched();
    }
}
