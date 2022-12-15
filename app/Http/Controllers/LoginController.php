<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends Controller
{
     /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
      
        
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            Alert::toast('Login Berhasil!', 'success');
            return redirect()->intended('/home');
        }
 
        Alert::toast('Login gagal, perhatikan email dan password', 'error');
        return back();
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        Alert::toast('Berhasil Logout!', 'info');
        return redirect('/login');
    }
}
