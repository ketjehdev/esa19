<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }


    public function authenticate(Request $request)
    {
        $credentials = $request->validate(
            [
                'name' => 'required',
                'password' => 'required'
            ],
            [
                'name.required' => 'username gak boleh kosong!🚀',
                'password.required' => 'password gak boleh kosong!🚀'
            ]
        );

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (auth()->user()->role === "Admin") {
                return redirect()->route('admin/index');
            } elseif (auth()->user()->role === "Verifikator") {
                return redirect()->route('verifikator/index');
            } elseif (auth()->user()->role === "IT SUPPORT") {
                return redirect()->route('it/index');
            }
        }

        return back()->with('loginError', 'Login Failed!🚀');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('index');
    }
}
