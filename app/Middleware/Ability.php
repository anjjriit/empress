<?php

/**
* app/Middleware/Ability.php
*
* Override for EntrustAbility middleware.
*
* @author Vince Kronlein <vince@19peaches.com>
* @license https://github.com/periaptio/empress/blob/master/LICENSE
* @copyright Periapt, LLC. All Rights Reserved.
*/

namespace Empress\Middleware;

use Closure;
use Zizaco\Entrust\Middleware\EntrustAbility;

class Ability extends EntrustAbility
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param Closure $next
     * @param $roles
     * @param $permissions
     * @param bool $validateAll
     * @return mixed
     */
    public function handle($request, Closure $next, $roles, $permissions, $validateAll = false)
    {
        if ($this->auth->guest() || !$request->user()->ability(explode('|', $roles), explode('|', $permissions), array('validate_all' => $validateAll))) {

            bcs('403 Error');
            
            abort(403);
        }

        return $next($request);
    }
}
