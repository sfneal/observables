<?php

namespace Sfneal\Observables\Tests\Assets\Mocks;

use Sfneal\Listeners\Listener;

class PeopleCreatedListener extends Listener
{
    /**
     * Handle the event.
     *
     * @param PeopleCreatedEvent $event
     * @return void
     */
    public function handle(PeopleCreatedEvent $event)
    {
        $event->people->age;
    }
}
