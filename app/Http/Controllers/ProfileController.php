<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;



class ProfileController extends Controller
{
    public function update(Request $request)
    {
        if (config('app.is_demo') && in_array(Auth::id(), [1, 2, 3])) {
            if(auth()->user()->email != request()->email){
            return back()->with('error', 'You are in a demo version. You are not allowed to change the email for default users.');
            }
        }

        $request->validate([
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
            'name' => 'required|min:3|max:255',
            'location' => 'max:255',
            'phone' => 'numeric|digits:10',
            'profile_picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'email.required' => 'Email is required',
        ]);

        $user = User::find(Auth::id());
            $picture = $request->file('profile_picture');
            if ($user->profile_picture && $picture && file_exists(storage_path('app/public/' . $user->profile_picture))) {
                unlink(storage_path('app/public/' . $user->profile_picture));
            }

        $user = User::find(Auth::id());

        $user->update([
            'email' => $request->email,
            'name' => $request->name,
            'location' => $request->location,
            'phone' => $request->phone,
            'profile_picture' => $picture ? '/storage/' . $picture->store('profile', 'public') : $user->profile_picture,
        ]);

        return back()->with('success', "Profile updated successfully");
    }

    public function updatePassword(Request $request)
    {
        if (config('app.is_demo') && in_array(Auth::id(), [1, 2, 3])) {
            return back()->with('error', "You are in a demo version. You are not allowed to change the password for default users.");
        }

        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'new_password_confirmation' => 'required|same:new_password',
            'new_password' => 'required|min:6',
        ], [
            'current_password.required' => 'Current password is required',
            'new_password.required' => 'New password is required',
            'new_password.min' => 'New password must be at least 6 characters',
            'new_password.confirmed' => 'New password confirmation does not match',
        ]);

        $id = Auth::id();

        $user = User::findOrFail($id);

        if (!Hash::check($request->current_password, $user->password)) {
            throw ValidationException::withMessages([
                'current_password' => 'The provided current password is incorrect.',
            ]);
        }

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        return back()->with('success-parola', 'Password changed successfully.');
    }
}
