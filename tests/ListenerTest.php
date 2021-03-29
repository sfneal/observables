<?php

namespace Sfneal\Observables\Tests;


use Illuminate\Support\Facades\Event;
use Sfneal\Observables\Tests\Mocks\PeopleCreatedEvent;
use Sfneal\Observables\Tests\Mocks\PeopleCreatedListener;
use Sfneal\Observables\Tests\Mocks\TestEvent;
use Sfneal\Observables\Tests\Mocks\TestListener;

class ListenerTest extends TestCase
{
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
