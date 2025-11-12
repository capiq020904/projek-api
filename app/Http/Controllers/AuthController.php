<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function formRegister() {
        return view('auth.register');
    }

    public function post(Request $request) {
        $request->validate([
            'name' =>'required',
            'email' =>'required|email|unique:users',
            'password' =>'required|min:6'
        ]);

        User::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'password' => Hash::make($request -> password)
        ]);

        return redirect()->route('register')->with('success', 'Akun Berhasil Didaftarkan');
        
    }
}