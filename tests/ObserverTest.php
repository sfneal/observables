<?php

namespace Sfneal\Observables\Tests;

use Illuminate\Support\Facades\Event;
use Sfneal\Observables\Tests\Mocks\TestEvent;
use Sfneal\Observables\Tests\Models\People;

class ObserverTest extends TestCase
{
    /** @test */
    public function observer_is_attached()
    {
        // Enable event faking
        Event::fake([TestEvent::class]);

        // Assert that no events were dispatched...
        Event::assertNothingDispatched();

        // Assert that no events have been pushed
        Event::assertNotDispatched(TestEvent::class);

        // Created a new People instance that should fire an event
        $person = People::factory()->create();

        // Assert the Event was pushed
        Event::assertDispatched(TestEvent::class, function (TestEvent $event) use ($person) {
            return $event->amount == $person->age;
        });
    }
}
