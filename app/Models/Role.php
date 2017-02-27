<?php 

/**
* app/Models/Role.php
*
* Model to interact with the roles table.
*
* @author Vince Kronlein <vince@19peaches.com>
* @license https://github.com/19peaches/empress/blob/master/LICENSE
* @copyright Periapt, LLC. All Rights Reserved.
*/

namespace Empress\Models;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
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
     * The rules used to validate.
     *
     * @var array
     */
    public static $rules = [
		'name'         => 'required|string',
		'display_name' => 'string',
		'description'  => 'string'
    ];
}
