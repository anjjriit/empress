<?php

/**
 * routes/web.php
 *
 * Web based routes.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/19peaches/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

Route::group(['namespace' => 'Auth'], function() {
	Route::get('/login', [
		'as'   => 'auth.login.show',
		'uses' => 'LoginController@showLoginForm'
	]);

	Route::get('/password/reset', [
		'as'   => 'auth.forgot.show',
		'uses' => 'ForgotPasswordController@showLinkRequestForm'
	]);

	Route::get('/password/reset/{token}', [
		'as'   => 'auth.reset.show',
		'uses' => 'ResetPasswordController@showResetForm'
	]);

	Route::get('/register', [
		'as'   => 'auth.register.show',
		'uses' => 'RegisterController@showRegistrationForm'
	]);

	Route::get('/register/activate/{activationToken}', [
        'as'   => 'auth.register.activate',
        'uses' => 'RegisterController@activate'
    ]);

	Route::get('/logout', [
		'as'   => 'auth.logout',
		'uses' => 'LoginController@logout'
	]);

	Route::post('/login', [
		'as'   => 'auth.login.store',
		'uses' => 'LoginController@login'
	]);

	Route::post('/password/email', [
		'as'   => 'auth.forgot.store',
		'uses' => 'ForgotPasswordController@sendResetLinkEmail'
	]);

	Route::post('/password/reset', [
		'as'   => 'auth.reset.store',
		'uses' => 'ResetPasswordController@reset'
	]);

	Route::post('/register', [
		'as'   => 'auth.register.store',
		'uses' => 'RegisterController@register'
	]);
});


Route::get('/', [
	'as'   => 'front.index',
	'uses' => 'HomeController@index'
]);

Route::group(['namespace' => 'Front'], function() {

	Route::group(['middleware' => 'auth'], function() {
		Route::get('/dashboard', [
			'as'   => 'front.dashboard.index',
			'uses' => 'DashboardController@index',
		]);
	});
});


/*
|--------------------------------------------------------------------------
| Page routes
|--------------------------------------------------------------------------
*/
Route::resource('pages', 'PageController');