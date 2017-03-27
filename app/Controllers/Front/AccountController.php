<?php

/**
 * app/Controllers/Front/AccountController.php
 *
 * Resourceful controller for settings and passwords.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/19peaches/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Empress\Controllers\Front;

use Empress\Models\Account;
use Empress\Base\Controller;
use Illuminate\Support\Facades\Hash;
use Empress\Requests\UpdateSettingsRequest;
use Empress\Requests\UpdatePasswordRequest;

class AccountController extends Controller
{
    /**
     * Show the form for updatings settings.
     * 
     * @param  \Empress\Models\Account $account
     * @return response
     */
    public function settings(Account $account)
    {
    	bcs(trans('front/settings.title'));

    	$data['account'] = $account;

    	return view('front.account.settings', $data);
    }

    /**
     * Show the form for updatings passwords.
     * 
     * @param  \Empress\Models\Account $account
     * @return response
     */
    public function password(Account $account)
    {
        bcs(trans('front/passwords.title'));

        $data['account'] = $account;

        return view('front.account.password', $data);
    }

    /**
     * Update an Account with new settings.
     * 
     * @param  Account               $account
     * @param  UpdateSettingsRequest $request
     * @return response
     */
    public function updateSettings(Account $account, UpdateSettingsRequest $request)
    {
    	if ($account->email !== $request->email) {
            $account->fill($request->all());
            $account->save();

            $account->sendNotification();

            flash('Please confirm your new email address.', 'success');

            auth()->logout();

            return redirect()->route('auth.login.show');
    	}

    	$account->fill($request->all());
        $account->save();

        flash(trans('front/settings.action'), 'success');

        return redirect()->route('front.dashboard.index');
    }

    /**
     * Persist a new account password.
     * 
     * @param  Account               $account
     * @param  UpdatePasswordRequest $request
     * @return response
     */
    public function updatePasswords(Account $account, UpdatePasswordRequest $request)
    {
        if (! Hash::check($request->password, $account->password)) {
            
            flash(trans('front/passwords.old'), 'danger');

            return redirect()->back();
        }
        
        $account->forceFill([
            'password'       => bcrypt($request->new_password),
            'remember_token' => str_random(60)
        ])->save();

        auth()->logout();

        $request->session()->flush();
        $request->session()->regenerate();

        flash(trans('front/passwords.action'), 'success');

        return redirect()->route('auth.login.show');
    }
}
