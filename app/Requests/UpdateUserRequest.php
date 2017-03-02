<?php 

/**
 * app/Requests/UpdateUserRequest.php
 *
 * Form request for updating users.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/19peaches/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Empress\Requests;

use Empress\Models\User;
use Empress\Base\Request;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends Request 
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
			'username' => [
				'required', 'string', 'max:180',
				Rule::unique('users')->ignore($this->user->id),
			],
			'name'     => 'required|string',
			'email'    => [
				'required','string','max:180',
				Rule::unique('users')->ignore($this->user->id),
			],
			'roles'    => 'required|array',
	    ];
	}
}
