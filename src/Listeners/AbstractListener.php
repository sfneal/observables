<?php

namespace Sfneal\Listeners;

use Sfneal\Events\AbstractEvent;
use Sfneal\Queueables\AbstractQueueable;

/**
 * Class Listener
 * @package Sfneal\Listeners
 * @method void handle(AbstractEvent $event)
 */
abstract class AbstractListener extends AbstractQueueable
{

}
