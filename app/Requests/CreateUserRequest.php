<?php 

/**
 * app/Requests/CreateUserRequest.php
 *
 * Form request for creating new users.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/periaptio/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Empress\Requests;

use Empress\Models\User;
use Empress\Base\Request;
use Illuminate\Validation\Rule;

class CreateUserRequest extends Request 
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		if (! $this->user()->can('create_users')) {
			return abort(403);
		}
		
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
			'username' => 'required|string|max:180|unique:users,username',
			'name'     => 'required|string',
			'email'    => 'required|string|max:180|unique:users,email',
			'roles'    => 'required|array',
	    ];
	}
}
