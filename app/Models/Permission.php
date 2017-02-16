<?php 

/**
 * app/Models/Permission.php
 *
 * Model for interacting with the permissions table.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/19peaches/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Empress\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "permissions";
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'inherit_id',
		'name',
		'slug',
		'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
		'inherit_id'  => 'integer',
		'name'        => 'string',
		'slug'        => 'string',
		'description' => 'string'
    ];

    /**
     * The rules that is used to validate.
     *
     * @var array
     */
    public static $rules = [
		'inherit_id' => 'integer|exists:permissions,id',
		'name'       => 'required|string',
		'slug'       => 'required|string'
    ];

	/**
	 * Has many relationship.
	 *
	 * @return Empress\Models\PermissionRole
	 */
	public function permissionRoles()
	{
		return $this->hasMany(PermissionRole::class, 'permission_id', 'id');
	}

	/**
	 * Has many relationship.
	 *
	 * @return Empress\Models\PermissionUser
	 */
	public function permissionUsers()
	{
		return $this->hasMany(PermissionUser::class, 'permission_id', 'id');
	}

	/**
	 * Belongs to many relationship.
	 *
	 * @return Empress\Models\Role
	 */
	public function roles()
	{
		return $this->belongsToMany(Role::class, 'permission_role', 'permission_id', 'role_id');
	}

	/**
	 * Belongs to many relationship.
	 *
	 * @return Empress\Models\User
	 */
	public function users()
	{
		return $this->belongsToMany(User::class, 'permission_user', 'permission_id', 'user_id');
	}
}
