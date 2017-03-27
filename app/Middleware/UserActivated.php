<?php

/**
 * app/Middleware/UserActivated.php
 *
 * Middleware to ensure a user is activated before allowing them to login.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/19peaches/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Empress\Middleware;

use Closure;

class UserActivated
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
        $user = $request->user();
        
        if (!is_null($user->activated_at)) {
            return $next($request);
        }

        auth()->logout();

        flash(trans('common.not-activated'), 'danger');
        
        return redirect()->route('auth.login.show');
    }
}
