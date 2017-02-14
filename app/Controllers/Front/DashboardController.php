<?php

/**
 * app/Controllers/Front/DashboardController.php
 *
 * Main member dashboard controller.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/19peaches/empress/blob/master/LICENSE
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

        bcs('One', 'front.dashboard.index');
        bcs('Two', 'front.dashboard.index');
        bcs('Last');

    	return view('front.dashboard');
    }
}
