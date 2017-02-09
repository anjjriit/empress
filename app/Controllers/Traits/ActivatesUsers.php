<?php

/**
 * app/Controllers/Traits/ActivatesUsers.php
 *
 * Trait for activating users.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/19peaches/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Empress\Controllers\Traits;

use Illuminate\Http\Request;

trait ActivatesUsers
{
	/**
     * Override of AuthenticatesUsers credentials method.
     * 
     * @param  Request $request
     * @return array           
     */
    protected function credentials(Request $request)
    {
        $login = $request->login;
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        return [
            $field             => $login,
            'password'         => $request->password,
            'activation_token' => null
        ];
    }
}
