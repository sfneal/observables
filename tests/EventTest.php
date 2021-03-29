<?php

namespace Sfneal\Observables\Tests;

use Illuminate\Support\Facades\Event;
use Sfneal\Observables\Tests\Mocks\PeopleCreatedEvent;
use Sfneal\Observables\Tests\Mocks\PeopleCreatedListener;
use Sfneal\Observables\Tests\Mocks\TestEvent;
use Sfneal\Observables\Tests\Mocks\TestListener;
use Sfneal\Observables\Tests\Models\People;

class EventTest extends TestCase
{
    /** @test */
    public function event_can_be_fired_from_model()
    {
        // Enable event faking
        Event::fake();

        // Assert that no events have been pushed
        Event::assertNotDispatched(PeopleCreatedEvent::class);

        // Created a new People instance that should fire an event
        $person = People::factory()->create();

        // Assert the Event was pushed
        Event::assertDispatched(PeopleCreatedEvent::class, function (PeopleCreatedEvent $event) use ($person) {
            return $event->people->getKey() == $person->getKey();
        });

        // Assert that an event listener is listening to a given event
        Event::assertListening(
            PeopleCreatedEvent::class,
            PeopleCreatedListener::class
        );
    }

    /** @test */
    public function event_can_be_fired_statically()
    {
        // Enable event faking
        Event::fake();

        // Assert that no events have been pushed
        Event::assertNotDispatched(TestEvent::class);

        // Set the $amount
        $amount = rand(1, 100);

        // Dispatch the event
        Event::dispatch(new TestEvent($amount));

        // Assert the Event was pushed
        Event::assertDispatched(TestEvent::class, function (TestEvent $event) use ($amount) {
            return $event->amount == $amount;
        });

        // Assert that an event listener is listening to a given event
        Event::assertListening(
            TestEvent::class,
            TestListener::class
        );
    }
}
