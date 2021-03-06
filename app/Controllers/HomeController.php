<?php

/**
 * app/Controllers/HomeController.php
 *
 * Resourceful controller for the homepage.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/periaptio/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Empress\Controllers;

use Empress\Base\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application homepage.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }
}
