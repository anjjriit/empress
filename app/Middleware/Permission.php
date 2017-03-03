<?php

/**
* app/Middleware/Permission.php
*
* Override for EntrustPermission middleware.
*
* @author Vince Kronlein <vince@19peaches.com>
* @license https://github.com/19peaches/empress/blob/master/LICENSE
* @copyright Periapt, LLC. All Rights Reserved.
*/

namespace Empress\Middleware;

use Closure;
use Zizaco\Entrust\Middleware\EntrustPermission;

class Permission extends EntrustPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Closure $next
     * @param  $permissions
     * @return mixed
     */
    public function handle($request, Closure $next, $permissions)
    {
        if ($this->auth->guest() || !$request->user()->can(explode('|', $permissions))) {
            
            bcs('403 Error');
            
            abort(403);
        }

        return $next($request);
    }
}
