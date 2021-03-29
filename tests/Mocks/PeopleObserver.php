<?php

namespace Sfneal\Observables\Tests\Mocks;

use Illuminate\Support\Facades\Event;
use Sfneal\Observables\Tests\Models\People;
use Sfneal\Observers\AbstractObserver;
use Sfneal\Observers\Created;

class PeopleObserver extends AbstractObserver implements Created
{
    /**
     * Handle a Model's "created" event.
     *
     * @param People $people
     * @return void
     */
    public function created(People $people): void
    {
        Event::dispatch(new TestEvent($people->age));
    }
}
