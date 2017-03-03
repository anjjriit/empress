<?php

/**
* app/Middleware/Role.php
*
* Override for EntrustRole middleware.
*
* @author Vince Kronlein <vince@19peaches.com>
* @license https://github.com/19peaches/empress/blob/master/LICENSE
* @copyright Periapt, LLC. All Rights Reserved.
*/

namespace Empress\Middleware;

use Closure;
use Zizaco\Entrust\Middleware\EntrustRole;

class Role extends EntrustRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Closure $next
     * @param  $roles
     * @return mixed
     */
    public function handle($request, Closure $next, $roles)
    {
        if ($this->auth->guest() || !$request->user()->hasRole(explode('|', $roles))) {
            
            bcs('403 Error');
            
            abort(403);
        }

        return $next($request);
    }
}
