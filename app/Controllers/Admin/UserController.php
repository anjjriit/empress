<?php 

namespace Empress\Controllers\Admin;

use Empress\Models\User;
use Empress\Base\Controller;
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
        bcs('Users');

        $users = User::paginate(10);

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        bcs([
            'Users' => 'admin.users.index',
            'Create User' => null
        ]);

        return view('admin.users.create');
    }

    /**
     * Store a newly created User in storage.
     *
     * @param  CreateUserRequest $request
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        User::create($request->all());

        flash('User saved successfully.', 'success');

        return redirect(route('admin.users.index'));
    }
    
    /**
     * Show the form for editing the specified User.
     *
     * @param  eloquent \Empress\Models\User
     * @return Response
     */
    public function edit(User $user)
    {
        bcs([
            'Users' => 'admin.users.index',
            $user->name => null
        ]);

        return view('admin.users.edit')->with(compact('user'));
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

        flash('User updated successfully.', 'success');

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

        flash('User deleted successfully.', 'success');

        return redirect(route('admin.users.index'));
    }
}
