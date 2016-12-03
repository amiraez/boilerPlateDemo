<?php

namespace App\Http\Middleware;

use Closure;

class checkSuperUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next , $role)
    {

        if (strpos($role, ";") !== false) {
            $roles = explode(";", $role);
            $access = access()->hasRoles($roles);
        } else {

            $access = access()->hasRole($role);
        }

        if (! $access) {
            return "YOU Can't See This Page";
        }

        return  "YOU Can't See This Page"; //$next($request);
    }
}
