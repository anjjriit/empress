<?php 

/**
 * app/Models/User.php
 *
 * Model used to interact with the users table.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/19peaches/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Empress\Models;

use Empress\Models\Traits\Activatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, Activatable;

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
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
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
     * The rules that are used to validate.
     *
     * @var array
     */
    public static $rules = [
        'username'         => 'required|string',
        'name'             => 'required|string',
        'email'            => 'required|string|max:180',
        'password'         => 'required|string',
        'activation_token' => 'string'
    ];
    
}
