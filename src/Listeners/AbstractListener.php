<?php

namespace Sfneal\Listeners;

use Sfneal\Events\AbstractEvent;
use Sfneal\Queueables\AbstractQueueable;

abstract class AbstractListener extends AbstractQueueable
{
    // todo: add void return type hinting

    /**
     * Handle the event.
     *
     * @param AbstractEvent $event
     * @return void
     */
    abstract public function handle(AbstractEvent $event);
}
