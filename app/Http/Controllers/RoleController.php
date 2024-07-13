<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;

use Illuminate\Http\Request;;

use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        $this->authorize('manage-users', User::class);
        return view('laravel-examples.role.role-management', compact('roles'));
    }

    public function create()
    {
        $this->authorize('manage-users', User::class);
        return view('laravel-examples.role.create-role-management');
    }

    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',
        ], [
            'name.required' => 'Name is required',
            'description.required' => 'Description is required',
        ]);

        $role = Role::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect(route('role-management'))->with('success', 'New role added successfully.');
    }

    public function edit($id)
    {
        $role = Role::find($id);

        if (!$role) {
            return redirect(route('role-management'))->with('error', 'Role not found.');
        }
        $this->authorize('manage-users', User::class);
        return view('laravel-examples/role/edit-role-management', compact('role'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:3|max:255',

        ], [
            'name.required' => 'Name is required',
            'description.required' => 'Description is required',
        ]);

        $role = Role::find($request->id);


        $role->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect(route('role-management'))->with('success', 'Role updated successfully.');
    }

    public function destroy($id)
    {
        $role = Role::find($id);

        if (!$role) {
            return redirect(route('role-management'))->with('error', 'Role not found.');
        }

        if (!$role->users->isEmpty()) {
            return redirect(route('role-management'))->with('error', 'Role cannot be deleted because it is associated with one or more users.');
        } else {
            $role->delete();
        }

        return redirect(route('role-management'))->with('success', 'Role deleted successfully.');
    }
}
