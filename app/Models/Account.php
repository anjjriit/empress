<?php

/**
 * app/Models/Account.php
 *
 * Model for interacting with the users table.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/periaptio/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Empress\Models;

use Illuminate\Database\Eloquent\Model;
use Empress\Models\Traits\Reactivatable;
use Illuminate\Notifications\Notifiable;

class Account extends Model
{
    use Notifiable, Reactivatable;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "users";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'username',
        'name',
        'email',
        'password',
        'activation_token',
        'activated_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
		'username'         => 'string',
        'name'             => 'string',
        'email'            => 'string',
        'password'         => 'string',
        'activation_token' => 'string'
    ];

    /**
     * The rules that is used to validate.
     *
     * @var array
     */
    public static $rules = [
		'username'         => 'required|string|max:180|unique:users,username',
        'name'             => 'required|string',
        'email'            => 'required|string|max:180|unique:users,email',
        'password'         => 'required|string',
        'activation_token' => 'string'
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'username';
    }
}
