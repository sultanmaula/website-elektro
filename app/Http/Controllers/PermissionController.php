<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        return view('permission.index', compact('permissions'));
    }

    public function add()
    {
        return view('permission.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $permission = new Permission();
        $permission->name = $request->name;
        $permission->guard_name = 'web';
        $permission->save();

        return redirect()->route('permissions');
    }

    public function edit($id)
    {
        $permission = Permission::find($id);

        return view('permission.edit', compact('permission'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $permission = Permission::find($id);
        $permission->name = $request->name;
        $permission->save();

        return redirect()->route('permissions');
    }

    public function destroy($id)
    {
        $permission = Permission::find($id);
        $permission->delete();
    }
}
