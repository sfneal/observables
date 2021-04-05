<?php

namespace Sfneal\Listeners;

use Sfneal\Events\Event;
use Sfneal\Queueables\AbstractQueueable;

/**
 * Class Listener.
 * @method void handle(Event $event)
 */
abstract class Listener extends AbstractQueueable
{
}
