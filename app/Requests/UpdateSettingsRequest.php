<?php

namespace Empress\Requests;

use Empress\Base\Request;
use Illuminate\Validation\Rule;

class UpdateSettingsRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->user()->id !== (int)$this->user_id) {
            abort(401);
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
            'username' => [
                'required', 'string', 'max:180',
                Rule::unique('users')->ignore($this->user()->id),
            ],
            'name'     => 'required|string',
            'email'    => [
                'required','string','max:180',
                Rule::unique('users')->ignore($this->user()->id),
            ]
        ];
    }
}
