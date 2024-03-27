<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Ensayo;
use App\Models\Solicitud;
use App\Models\User;
use App\Policies\EnsayoPolicy;
use App\Policies\SolicitudPolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Solicitud::class => SolicitudPolicy::class,
        Ensayo::class => EnsayoPolicy::class,
        User::class => UserPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
