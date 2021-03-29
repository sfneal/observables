<?php

namespace Sfneal\Observables\Tests\Mocks;

use Sfneal\Events\AbstractEvent;

class TestEvent extends AbstractEvent
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
