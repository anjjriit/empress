<?php

/**
 * app/Controllers/Front/DashboardController.php
 *
 * Main member dashboard controller.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/periaptio/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Empress\Controllers\Front;

use Empress\Base\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Local user property.
     * 
     * @var \Empress\Models\User
     */
    protected $user;

    public function index(Request $request)
    {
    	$this->user = $request->user();

    	return view('front.dashboard');
    }
}
