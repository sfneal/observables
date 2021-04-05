<?php

namespace Sfneal\Observables\Tests\Mocks;

use Sfneal\Listeners\Listener;

class TestListener extends Listener
{
    /**
     * Handle the event.
     *
     * @param TestEvent $event
     * @return void
     */
    public function handle(TestEvent $event)
    {
        $value = $event->amount * $event->amount;
    }
}
