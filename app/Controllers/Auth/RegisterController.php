<?php

/**
 * app/Controllers/Auth/RegisterController.php
 *
 * Registration controller for local application.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/periaptio/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Empress\Controllers\Auth;

use Empress\Models\Role;
use Empress\Models\User;
use Empress\Base\Controller;
use Empress\Requests\RegisterRequest;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(RegisterRequest $request)
    {
        event(new Registered($user = $this->create($request->all())));

        $role = Role::where('name', 'customer')->first();

        $user->roles()->sync([$role->id]);

        flash(trans('auth.register.success-message'), 'success');

        return redirect()->route('auth.login.show');
    }

    /**
     * Activate the user via the email link.
     * 
     * @param  string $activationToken
     * @return Response  
     */
    public function activate($activationToken)
    {
        $user = User::where('activation_token', $activationToken)->first();

        if (! $user) {
            
            flash(trans('auth.register.activate-error'), 'danger');

            return redirect()->route('auth.login.show');
        }

        $user->activate();

        $this->guard()->login($user);

        flash(trans('auth.register.activate-success'), 'success');

        return redirect()->route('front.dashboard.index');
    }
}
