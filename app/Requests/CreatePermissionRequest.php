<?php 

/**
 * app/Requests/CreatePermissionRequest.php
 *
 * Form request for creating new permissions.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/periaptio/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Empress\Requests;

use Empress\Base\Request;
use Empress\Models\Permission;
use Illuminate\Validation\Rule;

class CreatePermissionRequest extends Request 
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		if (! $this->user()->can('create_permissions')) {
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
		return Permission::$rules;
	}
}
