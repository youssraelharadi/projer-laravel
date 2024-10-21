<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        // Ajoutez vos événements et écouteurs ici, ou laissez vide si vous n'en avez pas.
    ];

    public function boot()
    {
        parent::boot();
    }
}
