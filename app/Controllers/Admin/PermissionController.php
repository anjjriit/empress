<?php 

namespace Empress\Controllers\Admin;

use Empress\Models\Permission;
use Empress\Base\Controller;
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
        bcs('Permissions');

        $permissions = Permission::paginate(10);

        return view('admin.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new Permission.
     *
     * @return Response
     */
    public function create()
    {
        bcs([
            'Permissions' => 'admin.permissions.index',
            'Create Permission' => null
        ]);

        return view('admin.permissions.create');
    }

    /**
     * Store a newly created Permission in storage.
     *
     * @param  CreatePermissionRequest $request
     * @return Response
     */
    public function store(CreatePermissionRequest $request)
    {
        Permission::create($request->all());

        flash('Permission saved successfully.', 'success');

        return redirect(route('admin.permissions.index'));
    }
    
    /**
     * Show the form for editing the specified Permission.
     *
     * @param  eloquent \Empress\Models\Permission
     * @return Response
     */
    public function edit(Permission $permission)
    {
        bcs([
            'Permissions' => 'admin.permissions.index',
            $permission->display_name => null
        ]);

        return view('admin.permissions.edit')->with(compact('permission'));
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

        flash('Permission updated successfully.', 'success');

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

        flash('Permission deleted successfully.', 'success');

        return redirect(route('admin.permissions.index'));
    }
}
