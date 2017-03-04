<?php 

/**
 * app/Controllers/Admin/PermissionController.php
 *
 * Resourceful controller for Permission models.
 *
 * @author Vince Kronlein <vince@19peaches.com>
 * @license https://github.com/19peaches/empress/blob/master/LICENSE
 * @copyright Periapt, LLC. All Rights Reserved.
 */

namespace Empress\Controllers\Admin;

use Empress\Models\Role;
use Empress\Base\Controller;
use Empress\Models\Permission;
use Empress\Requests\CreatePermissionRequest;
use Empress\Requests\UpdatePermissionRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PermissionController extends Controller
{
    /**
     * Display a listing of the Permission.
     *
     * @return Response
     */
    public function index()
    {
        bcs(trans('admin/permissions.title'));

        $permissions = Permission::paginate(10);

        return view('admin.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new Permission.
     *
     * @return Response
     */
    public function create(Role $role)
    {
        bcs([
            trans('admin/permissions.title') => 'admin.permissions.index',
            trans('admin/permissions.add') => null
        ]);

        $data['roles']   = $role->pluck('display_name', 'id');
        $data['current'] = null;
        
        return view('admin.permissions.create', $data);
    }

    /**
     * Store a newly created Permission in storage.
     *
     * @param  CreatePermissionRequest $request
     * @return Response
     */
    public function store(CreatePermissionRequest $request)
    {
        $permission = Permission::create($request->all());

        $permission->roles()->sync($request->roles);

        flash(trans('admin/permissions.action', ['type' => 'saved']), 'success');

        return redirect(route('admin.permissions.index'));
    }
    
    /**
     * Show the form for editing the specified Permission.
     *
     * @param  eloquent \Empress\Models\Permission
     * @return Response
     */
    public function edit(Permission $permission, Role $role)
    {
        bcs([
            trans('admin/permissions.title') => 'admin.permissions.index',
            trans('admin/permissions.edit', ['name' => $permission->display_name]) => null
        ]);

        $data['roles']      = $role->pluck('display_name', 'id');
        $data['permission'] = $permission;
        $data['current']    = $permission->roles()->pluck('id')->toArray();
        
        return view('admin.permissions.edit', $data);
    }

    /**
     * Update the specified Permission in storage.
     *
     * @param  eloquent \Empress\Models\Permission
     * @param  UpdatePermissionRequest $request
     * @return Response
     */
    public function update(Permission $permission, UpdatePermissionRequest $request)
    {
        $permission->fill($request->all());

        $permission->save();

        $permission->roles()->sync($request->roles);

        flash(trans('admin/permissions.action', ['type' => 'updated']), 'success');

        return redirect(route('admin.permissions.index'));
    }

    /**
     * Remove the specified Permission from storage.
     *
     * @param  eloquent \Empress\Models\Permission
     * @return Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();

        flash(trans('admin/permissions.action', ['type' => 'deleted']), 'success');

        return redirect(route('admin.permissions.index'));
    }
}
