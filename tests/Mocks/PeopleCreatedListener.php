<?php

namespace Sfneal\Observables\Tests\Mocks;

use Sfneal\Listeners\AbstractListener;

class PeopleCreatedListener extends AbstractListener
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
