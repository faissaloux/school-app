<?php

namespace App\Providers;

use App\Models\TripStatus;
use App\Policies\TripStatusesPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        TripStatus::class => TripStatusesPolicy::class,
    ];

    public function boot()
    {
        $this->registerPolicies();
    }
}
