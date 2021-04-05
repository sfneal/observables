<?php

namespace Sfneal\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

/**
 * Class AbstractEvent.
 */
abstract class Event
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
}
