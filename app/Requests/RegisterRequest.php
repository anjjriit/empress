<?php

/**
* app/Requests/RegisterRequest.php
*
* Form request for registering users.
*
* @author Vince Kronlein <vince@19peaches.com>
* @license https://github.com/19peaches/empress/blob/master/LICENSE
* @copyright Periapt, LLC. All Rights Reserved.
*/

namespace Empress\Requests;

use Empress\Base\Request;

class RegisterRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|max:180|unique:users',
            'name'     => 'required|max:255',
            'email'    => 'required|email|max:180|unique:users',
            'password' => 'required|min:6|confirmed',
        ];
    }
}
