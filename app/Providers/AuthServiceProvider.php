<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('only-admin-editor', function(User $user){
            $id = $user->rol->first()->id;
            return in_array($id, [1, 2]);
        });

        Gate::define('only-admin', function(User $user){
            $id = $user->rol->first()->id;
            return $id == 1;
        });

        Gate::define('only-editor', function(User $user){
            $id = $user->rol->first()->id;
            return $id == 2;
        });
        
        Gate::define('same-user', function(User $user, $post){
            $id = $user->id;
            return $id == $post->user->id;
        });



        //
    }
}
