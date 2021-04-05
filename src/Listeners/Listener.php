<?php

namespace Sfneal\Listeners;

use Sfneal\Events\Event;
use Sfneal\Queueables\Queueable;

/**
 * Class Listener.
 * @method void handle(Event $event)
 */
abstract class Listener extends Queueable
{
}
