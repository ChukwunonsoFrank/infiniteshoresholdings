<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function edit(Request $request)
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    public function show_password(Request $request)
    {
        return view('profile.password', [
            'user' => $request->user(),
        ]);
    }

    public function personal(Request $request)
    {
        $user_id = auth()->user()->id;

        User::where('id', $user_id)->update([
            'fullname' => $request->fullname,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            'marital_status' => $request->marital_status,
            'country' => $request->country,
            'address' => $request->address
        ]);

        $user = User::where('id', $user_id)->first();
        return view('profile.edit', [
            'user' => $user,
        ]);
    }

    public function password(Request $request)
    {
        $user_id = auth()->user()->id;

        $request->validate([
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        User::where('id', $user_id)->update([
            'password' => Hash::make($request->password),
            'unhashed_password' => $request->password
        ]);

        $user = User::where('id', $user_id)->first();
        return view('profile.edit', [
            'user' => $user,
        ]);
    }

    public function contact(Request $request)
    {
        $user_id = auth()->user()->id;

        User::where('id', $user_id)->update([
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        $user = User::where('id', $user_id)->first();
        return view('profile.edit', [
            'user' => $user,
        ]);
    }

    public function profile_picture(Request $request)
    {
        $user_id = auth()->user()->id;

        $profile_picture_path = $request->file('profile_picture')->store('profile_picture', 'public');

        User::where('id', $user_id)->update([
            'profile_picture' => $profile_picture_path
        ]);

        $user = User::where('id', $user_id)->first();
        
        return view('profile.edit', [
            'user' => $user,
        ]);
    }
}
