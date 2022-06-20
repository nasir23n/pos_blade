<?php

namespace App\Http\Middleware;

use App\Models\Permission;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthGates
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if ($user) {
            $permissions = Permission::all();
            $user_permission = $user->role->permissions;
            foreach ($permissions as $permission){
                Gate::define($permission->slug,function($user) use ($permission, $user_permission){
                    return $user_permission->where('slug', $permission->slug)->first() ? true : false;
                });
            }
        }
        return $next($request);
    }
}
