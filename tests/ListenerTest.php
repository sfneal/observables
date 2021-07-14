<?php

namespace Sfneal\Observables\Tests;

use Illuminate\Support\Facades\Event;
use Sfneal\Observables\Tests\Mocks\PeopleCreatedEvent;
use Sfneal\Observables\Tests\Mocks\PeopleCreatedListener;
use Sfneal\Observables\Tests\Mocks\TestEvent;
use Sfneal\Observables\Tests\Mocks\TestListener;
use Sfneal\Testing\Utils\Traits\EventFaker;

class ListenerTest extends TestCase
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

        $this->eventFaker();
    }

    /** @test */
    public function listeners_are_attached_to_events()
    {
        Event::assertListening(
            PeopleCreatedEvent::class,
            PeopleCreatedListener::class
        );
        Event::assertListening(
            TestEvent::class,
            TestListener::class
        );
    }
}
