<?php

namespace Sfneal\Observables\Tests\Mocks;

use Sfneal\Events\Event;
use Sfneal\Observables\Tests\Models\People;

class PeopleCreatedEvent extends Event
{
    /**
     * @var People
     */
    public $people;

    /**
     * PeopleCreatedEvent constructor.
     *
     * @param People $people
     */
    public function __construct(People $people)
    {
        $this->people = $people;
    }
}
