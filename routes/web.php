<?php

/**
 * app/routes/web.php
 *
 * Web based routes.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/19peaches/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

Route::get('/', function () {
    return view('welcome');
});
