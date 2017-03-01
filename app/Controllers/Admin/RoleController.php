<?php 

/**
 * app/Controllers/Admin/RoleController.php
 *
 * Resourceful controller for Role models.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/19peaches/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Empress\Controllers\Admin;

use Empress\Models\Role;
use Empress\Base\Controller;
use Empress\Requests\CreateRoleRequest;
use Empress\Requests\UpdateRoleRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class RoleController extends Controller
{
    /**
     * Display a listing of the Role.
     *
     * @return Response
     */
    public function index()
    {
        bcs('Roles');

        $roles = Role::paginate(10);

        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new Role.
     *
     * @return Response
     */
    public function create()
    {
        bcs([
            'Roles' => 'admin.roles.index',
            'Create Role' => null
        ]);

        return view('admin.roles.create');
    }

    /**
     * Store a newly created Role in storage.
     *
     * @param  CreateRoleRequest $request
     * @return Response
     */
    public function store(CreateRoleRequest $request)
    {
        Role::create($request->all());

        flash('Role saved successfully.', 'success');

        return redirect(route('admin.roles.index'));
    }
    
    /**
     * Show the form for editing the specified Role.
     *
     * @param  eloquent \Empress\Models\Role
     * @return Response
     */
    public function edit(Role $role)
    {
        bcs([
            'Roles' => 'admin.roles.index',
            $role->display_name => null
        ]);

        return view('admin.roles.edit')->with(compact('role'));
    }

    /**
     * Update the specified Role in storage.
     *
     * @param  eloquent \Empress\Models\Role
     * @param  UpdateRoleRequest $request
     * @return Response
     */
    public function update(Role $role, UpdateRoleRequest $request)
    {
        $role->fill($request->all());

        $role->save();

        flash('Role updated successfully.', 'success');

        return redirect(route('admin.roles.index'));
    }

    /**
     * Remove the specified Role from storage.
     *
     * @param  eloquent \Empress\Models\Role
     * @return Response
     */
    public function destroy(Role $role)
    {
        $role->delete();

        flash('Role deleted successfully.', 'success');

        return redirect(route('admin.roles.index'));
    }
}
