<?php

namespace App\Providers;

use App\Policies\TopSecretPolicy;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot(GateContract $gate)
    {
        $gate->define('top_secret.index', TopSecretPolicy::class.'@index');
    }
}
