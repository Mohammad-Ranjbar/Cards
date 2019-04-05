<?php

namespace App\Providers;

use App\Permission;
use App\User;
use function foo\func;
use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Note' => 'App\Policies\NotePolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies();
        foreach ($this->getPermission() as $permission) {

            $gate->define($permission->name,function ($user) use($permission){

              return  $user->hasRole($permission->roles);

            });
}

    }

    protected function getPermission()
    {
        return Permission::with('roles')->get();

    }
}
