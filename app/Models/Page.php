<?php 

/**
 * app/Models/Page.php
 *
 * Model to interact with the pages table.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/19peaches/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Empress\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    public $table = "pages";
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'title',
		'slug',
		'content'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'title'   => 'string',
        'slug'    => 'string',
        'content' => 'string'
    ];

    /**
     * The rules used to validate.
     *
     * @var array
     */
    public static $rules = [
        'title'   => 'required|string',
        'slug'    => 'required|string',
        'content' => 'required|string'
    ];
}
