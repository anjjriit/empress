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

use Kodeine\Acl\Traits\HasRole;
use Empress\Models\Traits\Activatable;
use Empress\Notifications\ResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, Activatable, HasRole;

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
		'username'         => 'required|string',
		'name'             => 'required|string',
		'email'            => 'required|string|max:180',
		'password'         => 'required|string',
		'activation_token' => 'string'
    ];

    /**
     * Get the e-mail address where password reset links are sent.
     *
     * @return string
     */
    public function getEmailForPasswordReset()
    {
        return $this->email;
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }
    
    /**
	 * Has many relationship.
	 *
	 * @return Empress\Models\PermissionUser
	 */
	public function permissionUsers()
	{
		return $this->hasMany(PermissionUser::class, 'user_id', 'id');
	}

	/**
	 * Has many relationship.
	 *
	 * @return Empress\Models\RoleUser
	 */
	public function roleUsers()
	{
		return $this->hasMany(RoleUser::class, 'user_id', 'id');
	}

	/**
	 * Belongs to many relationship.
	 *
	 * @return Empress\Models\Permission
	 */
	public function permissions()
	{
		return $this->belongsToMany(Permission::class, 'permission_user', 'user_id', 'permission_id');
	}

	/**
	 * Belongs to many relationship.
	 *
	 * @return Empress\Models\Role
	 */
	public function roles()
	{
		return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id');
	}

}
