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

Route::group(['namespace' => 'Admin'], function() {

	Route::group(['middleware' => 'auth'], function() {
		Route::resource('pages', 'PageController');

		Route::get('/admin/pages', [
			'as'   => 'admin.pages.index',
			'uses' => 'PageController@index'
		]);

		Route::get('/admin/pages/create', [
			'as'   => 'admin.pages.create',
			'uses' => 'PageController@create'
		]);

		Route::get('/admin/pages/{page}', [
			'as'   => 'admin.pages.show',
			'uses' => 'PageController@show'
		]);

		Route::get('/admin/pages/{page}/edit', [
			'as'   => 'admin.pages.edit',
			'uses' => 'PageController@edit'
		]);

		Route::get('/admin/pages/{page}/delete', [
			'as'   => 'admin.pages.destroy',
			'uses' => 'PageController@destroy'
		]);

		Route::post('/admin/pages', [
			'as'   => 'admin.pages.store',
			'uses' => 'PageController@store'
		]);

		Route::post('/admin/pages/{page}', [
			'as'   => 'admin.pages.update',
			'uses' => 'PageController@update'
		]);
	});	
});
