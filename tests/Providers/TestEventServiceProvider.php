<?php

namespace Sfneal\Observables\Tests\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Sfneal\Observables\Tests\Mocks\PeopleCreatedEvent;
use Sfneal\Observables\Tests\Mocks\PeopleCreatedListener;

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
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}
