<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function dashboard()
    {
        if (!Auth::check())
        {
            return redirect()->route('admin.login');        
        }

        return view('admin.dashboard.dashboard')->with(compact('secaos', 'categorias', 'produtos', 'qrCodes', 'viewId'));      
    }

    public function showLoginForm()
    {
        return view('admin.login.login');
    }

    public function login(Request $request)
    {
        if(!filter_var($request->email, FILTER_VALIDATE_EMAIL))
        {
            return redirect()->back()->withInput()->withErrors(['Email inválido.']);
        }

        $credentials =
        [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (!Auth::attempt($credentials)) 
        {
            return redirect()->back()->withInput()->withErrors(['Login não permitido.']);
        }

        return redirect()->route('admin');
    }

    public function logout()
    {
        if (!Auth::check())
        {
            return redirect()->route('admin.login');        
        }

        Auth::logout();
        return redirect()->route('admin');
    }    
}
