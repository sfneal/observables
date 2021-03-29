<?php


namespace Sfneal\Observables\Tests;


use Illuminate\Support\Facades\Event;

trait EventFakerSetup
{
    protected function setUp(): void
    {
        parent::setUp();

        // Enable event faking
        Event::fake();

        // Assert that no events were dispatched...
        Event::assertNothingDispatched();
    }
}
