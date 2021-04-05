<?php

namespace Sfneal\Observables\Tests\Mocks;

use Illuminate\Support\Facades\Event;
use Sfneal\Observables\Tests\Models\People;
use Sfneal\Observers\Created;
use Sfneal\Observers\Observer;

class PeopleObserver extends Observer implements Created
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
