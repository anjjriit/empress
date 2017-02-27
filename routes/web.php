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

		Route::get('/admin/roles', [
			'as'   => 'admin.roles.index',
			'uses' => 'RoleController@index'
		]);

		Route::get('/admin/roles/create', [
			'as'   => 'admin.roles.create',
			'uses' => 'RoleController@create'
		]);

		Route::get('/admin/roles/{role}/edit', [
			'as'   => 'admin.roles.edit',
			'uses' => 'RoleController@edit'
		]);

		Route::get('/admin/roles/{role}/delete', [
			'as'   => 'admin.roles.destroy',
			'uses' => 'RoleController@destroy'
		]);

		Route::post('/admin/roles', [
			'as'   => 'admin.roles.store',
			'uses' => 'RoleController@store'
		]);

		Route::post('/admin/roles/{role}', [
			'as'   => 'admin.roles.update',
			'uses' => 'RoleController@update'
		]);

		Route::get('/admin/permissions', [
			'as'   => 'admin.permissions.index',
			'uses' => 'PermissionController@index'
		]);

		Route::get('/admin/permissions/create', [
			'as'   => 'admin.permissions.create',
			'uses' => 'PermissionController@create'
		]);

		Route::get('/admin/permissions/{permission}/edit', [
			'as'   => 'admin.permissions.edit',
			'uses' => 'PermissionController@edit'
		]);

		Route::get('/admin/permissions/{permission}/delete', [
			'as'   => 'admin.permissions.destroy',
			'uses' => 'PermissionController@destroy'
		]);

		Route::post('/admin/permissions', [
			'as'   => 'admin.permissions.store',
			'uses' => 'PermissionController@store'
		]);

		Route::post('/admin/permissions/{permission}', [
			'as'   => 'admin.permissions.update',
			'uses' => 'PermissionController@update'
		]);

		Route::get('/admin/users', [
			'as'   => 'admin.users.index',
			'uses' => 'UserController@index'
		]);

		Route::get('/admin/users/create', [
			'as'   => 'admin.users.create',
			'uses' => 'UserController@create'
		]);

		Route::get('/admin/users/{user}/edit', [
			'as'   => 'admin.users.edit',
			'uses' => 'UserController@edit'
		]);

		Route::get('/admin/users/{user}/delete', [
			'as'   => 'admin.users.destroy',
			'uses' => 'UserController@destroy'
		]);

		Route::post('/admin/users', [
			'as'   => 'admin.users.store',
			'uses' => 'UserController@store'
		]);

		Route::post('/admin/users/{user}', [
			'as'   => 'admin.users.update',
			'uses' => 'UserController@update'
		]);
	});	
});
