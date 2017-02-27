<?php 

namespace Empress\Requests;

use Empress\Base\Request;
use Empress\Models\Permission;

class UpdatePermissionRequest extends Request 
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
		return Permission::$rules;
	}
}