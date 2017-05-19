<?php 

/**
 * app/Models/Permission.php
 *
 * Model to interact with the permissions table.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/periaptio/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Empress\Models;

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'name',
		'display_name',
		'description'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
		'name'         => 'string',
		'display_name' => 'string',
		'description'  => 'string'
    ];

    /**
     * Relations that should always be eager loaded.
     * 
     * @var array
     */
    protected $with = [
        'roles'
    ];

    /**
     * The rules used to validate.
     *
     * @var array
     */
    public static $rules = [
        'name'         => 'required|string',
        'display_name' => 'string',
        'description'  => 'string',
        'roles'        => 'required|array'
    ];
}
