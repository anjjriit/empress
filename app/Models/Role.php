<?php 

/**
 * app/Models/Role.php
 *
 * Model for interacting with the roles table.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/19peaches/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Empress\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "roles";
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
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
        'name' => 'required|string',
		'slug' => 'required|string'
    ];
    
    /**
	 * Has many relationship.
	 *
	 * @return Empress\Models\PermissionRole
	 */
	public function permissionRoles()
	{
		return $this->hasMany(PermissionRole::class, 'role_id', 'id');
	}

	/**
	 * Has many relationship.
	 *
	 * @return Empress\Models\RoleUser
	 */
	public function roleUsers()
	{
		return $this->hasMany(RoleUser::class, 'role_id', 'id');
	}

	/**
	 * Belongs to many relationship.
	 *
	 * @return Empress\Models\Permission
	 */
	public function permissions()
	{
		return $this->belongsToMany(Permission::class, 'permission_role', 'role_id', 'permission_id');
	}

	/**
	 * Belongs to many relationship.
	 *
	 * @return Empress\Models\User
	 */
	public function users()
	{
		return $this->belongsToMany(User::class, 'role_user', 'role_id', 'user_id');
	}
}
