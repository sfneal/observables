<?php

namespace Sfneal\Observables\Tests\Mocks;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Event;
use Sfneal\Observables\Tests\Models\People;
use Sfneal\Observers\CacheInvalidator;
use Sfneal\Observers\Created;
use Sfneal\Observers\Observer;

class PeopleObserver extends Observer implements Created, CacheInvalidator
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
        $this->clearCaches($people);
    }

    /**
     * Clear a Model's related caches.
     *
     * @param People $people
     * @return void
     */
    public function clearCaches(People $people): void
    {
        Cache::flush();
    }
}
