<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Models\User;


class PasswordController extends Controller
{
	public function adminPass()
    {
        $users = User::all();
        return view('admin_password',['users' => $users]);
    }


	public function admPas (LoginRequest $request)
    {
        $users = new User();

        $users->name = $request->input('name');
        $users->password = $request->input('password');
        $users->save();

        return redirect()->route('categories.index');
    }
}
