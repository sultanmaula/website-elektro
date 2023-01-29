<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();

        return view('role.index', compact('roles'));
    }

    public function add()
    {
        $permissions = Permission::all();
        return view('role.add', compact('permissions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'permission' => 'required'
        ]);

        $role = new Role();
        $role->name = $request->name;
        $role->guard_name = 'web';
        $role->active = isset($request->active) && $request->active == 'on' ? true : false;
        $role->save();
        $role->syncPermissions($request->permission);

        return redirect()->route('roles');
    }

    public function edit($id)
    {
        $role = Role::find($id);
        $role->permission = $role->permissions()->pluck('id')->toArray();
        $permissions = Permission::all();

        return view('role.edit', compact('role', 'permissions'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'permission' => 'required'
        ]);

        $role = Role::find($id);
        $role->name = $request->name;
        $role->active = isset($request->active) && $request->active == 'on' ? true : false;
        $role->save();
        $role->syncPermissions($request->permission);

        return redirect()->route('roles');
    }

    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();
    }
}
