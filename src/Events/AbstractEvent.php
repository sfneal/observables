<?php

namespace Sfneal\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

/**
 * Class AbstractEvent
 * @package Sfneal\Events
 */
abstract class AbstractEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
}
