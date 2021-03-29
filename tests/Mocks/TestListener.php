<?php

namespace Sfneal\Observables\Tests\Mocks;

use Sfneal\Listeners\AbstractListener;

class TestListener extends AbstractListener
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
