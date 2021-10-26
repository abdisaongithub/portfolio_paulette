<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasswordRequest;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function index()
    {
        return view('dashboard.password.index');
    }

    public function update(PasswordRequest $request){
        $validated = $request->validated();

        $user = User::first();

        if ($validated['password'] == $validated['password2']){
            if (Hash::check($validated['current'], $user->password)){
                $user->password = Hash::make($validated['password']);
                $user->save();
                return redirect(route('pass.index'))->with('success', 'Successfully Updated Password');
            }

            return 'false';

        }
        return 'passwords do not match';
    }
}
