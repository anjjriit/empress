<?php

/**
 * app/Controllers/Auth/RegisterController.php
 *
 * Registration controller for local application.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/19peaches/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Empress\Controllers\Auth;

use Empress\Models\User;
use Empress\Base\Controller;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|max:255',
            'name'     => 'required|max:255',
            'email'    => 'required|email|max:180|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
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
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

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
