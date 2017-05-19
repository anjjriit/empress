<?php 

/**
 * app/Requests/UpdatePageRequest.php
 *
 * Form request for updating pages.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/periaptio/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Empress\Requests;

use Empress\Models\Page;
use Empress\Base\Request;
use Illuminate\Validation\Rule;

class UpdatePageRequest extends Request 
{
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		if (! $this->user()->can('edit_pages')) {
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
		return Page::$rules;
	}
}
