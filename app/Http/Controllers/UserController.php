<?php

namespace App\Http\Controllers;

use App\Models\Role;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $this->authorize('manage-users', User::class);
        $users = User::all();
        return view('laravel-examples.user.users-management', compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        $this->authorize('manage-users', User::class);
        return view('laravel-examples.user.create-user-management', compact('roles'));
    }

    public function store(Request $request)
    {

        $request->validate([

            'name' => 'required|min:3|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:7|confirmed|max:255',
            'role_id' => 'required|integer|between:1,3',
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
            'role_id.required' => 'Role is required',
            'profile_picture.required' => 'Profile picture is required',
        ]);

        $picture = $request->file('profile_picture');
        $photoPath = $picture ? '/storage/' . $picture->store('profile', 'public') : asset('assets/img/default-avatar.png');

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
            'profile_picture' => $photoPath
        ]);


        return redirect(route('users-management'))->with('success', 'New member added successfully.');
    }

    public function edit($id)
    {
        $user = User::find($id);

        if (!$user) {
            return back()->with('error', 'User not found.');
        }
        $this->authorize('manage-users', User::class);
        return view('laravel-examples/user/edit-user-management', compact('user'));
    }

    public function update(Request $request)
    {
        $user = User::find($request->id);

        if (config('app.is_demo') && in_array($user->id, [1, 2, 3])) {
            return redirect(route('users-management'))->with('error', "You are in a demo version. You are not allowed to change the email or password for a default user.");
        }

        $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
            'password' => 'nullable|min:7|confirmed|max:255',
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'role_id' => 'integer|between:1,3',
        ], [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
            'profile_picture.required' => 'Profile picture is required',
        ]);

        $picture = $request->file('profile_picture');


        if ($user->profile_picture && $picture && file_exists(storage_path('app/public/' . $user->profile_picture))) {
            unlink(storage_path('app/public/' . $user->profile_picture));
        }

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => $request->role_id ? $request->role_id : $user->role_id,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
            'profile_picture' => $picture ? '/storage/' . $picture->store('profile', 'public') : $user->profile_picture,
        ]);

        return redirect(route('users-management'))->with('success', 'Profile updated successfully.');
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect(route('users-management'))->with('error', 'User not found.');
        }

        if ($user->isAdmin()) {
            return back()->with('error', "You are not allowed to delete an admin user.");
        }

        if (config('app.is_demo') && in_array($id, [1, 2, 3])) {
            return back()->with('error', 'You are not allowed to delete a default user.');
        }

        $user->delete();

        return redirect(route('users-management'))->with('status', 'User successfully deleted.');
    }
}
