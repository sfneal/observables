<?php

namespace Sfneal\Observables\Tests;

use Illuminate\Support\Facades\Event;
use Sfneal\Observables\Tests\Assets\Mocks\TestEvent;
use Sfneal\Observables\Tests\Assets\Models\People;
use Sfneal\Testing\Utils\Traits\EventFaker;

class ObserverTest extends TestCase
{
    use EventFaker;

    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->eventFaker([TestEvent::class]);
    }

    /** @test */
    public function observer_is_attached()
    {
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
