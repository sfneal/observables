<?php

namespace Sfneal\Observables\Tests\Assets\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Sfneal\Observables\Tests\Assets\Mocks\PeopleCreatedEvent;
use Sfneal\Observables\Tests\Assets\Mocks\PeopleCreatedListener;
use Sfneal\Observables\Tests\Assets\Mocks\PeopleObserver;
use Sfneal\Observables\Tests\Assets\Mocks\TestEvent;
use Sfneal\Observables\Tests\Assets\Mocks\TestListener;
use Sfneal\Observables\Tests\Assets\Models\People;

class TestEventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        PeopleCreatedEvent::class => [
            PeopleCreatedListener::class,
        ],
        TestEvent::class => [
            TestListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        // Observers
        People::observe(PeopleObserver::class);
    }
}
