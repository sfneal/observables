<?php

namespace Sfneal\Observables\Tests\Assets\Mocks;

use Sfneal\Events\Event;

class TestEvent extends Event
{
    /**
     * @var int
     */
    public $amount;

    /**
     * TestEvent constructor.
     *
     * @param int $amount
     */
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }
}
