<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RegisterController extends Controller
{
    public function register (Request $request){
        $validatedata = $request->validate([
            'email' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        $validatedata['password'] = bcrypt($validatedata['password']);

        User::create($validatedata);

        Alert::toast('Berhasil Register, Silahkan Login', 'success');
        return redirect('/login');
    }
}
