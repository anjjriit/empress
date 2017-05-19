<?php 

/**
 * app/Controllers/Admin/UserController.php
 *
 * Resourceful controller for User models.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/periaptio/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Empress\Controllers\Admin;

use Empress\Models\Role;
use Empress\Models\User;
use Empress\Base\Controller;
use Illuminate\Auth\Events\Registered;
use Empress\Requests\CreateUserRequest;
use Empress\Requests\UpdateUserRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserController extends Controller
{
    /**
     * Display a listing of the User.
     *
     * @return Response
     */
    public function index()
    {
        bcs(trans('admin/users.title'));

        $users = User::paginate(10);

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create(Role $role)
    {
        bcs([
            trans('admin/users.title') => route('admin.users.index'),
            trans('admin/users.add') => null
        ]);

        $data['roles']   = $role->pluck('display_name', 'id');
        $data['current'] = null;

        return view('admin.users.create', $data);
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  CreateUserRequest $request
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $user = User::create([
            'username' => $request->username,
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->username)
        ]);

        $user->roles()->sync($request->roles);

        event(new Registered($user));

        flash(trans('admin/users.action', ['type' => 'success']), 'success');

        return redirect(route('admin.users.index'));
    }
    
    /**
     * Show the form for editing the specified User.
     *
     * @param  eloquent \Empress\Models\User
     * @return Response
     */
    public function edit(User $user, Role $role)
    {
        bcs([
            trans('admin/users.title') => route('admin.users.index'),
            trans('admin/users.edit', ['name' => $user->name]) => null
        ]);

        $data['roles']   = $role->pluck('display_name', 'id');
        $data['user']    = $user;
        $data['current'] = $user->roles()->pluck('id')->toArray();

        return view('admin.users.edit', $data);
    }

    /**
     * Update the specified User in storage.
     *
     * @param  eloquent \Empress\Models\User
     * @param  UpdateUserRequest $request
     * @return Response
     */
    public function update(User $user, UpdateUserRequest $request)
    {
        $user->fill($request->all());

        $user->save();

        $user->roles()->sync($request->roles);

        flash(trans('admin/users.action', ['type' => 'updated']), 'success');

        return redirect(route('admin.users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param  eloquent \Empress\Models\User
     * @return Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        flash(trans('admin/users.action', ['type' => 'deleted']), 'success');

        return redirect(route('admin.users.index'));
    }
}
