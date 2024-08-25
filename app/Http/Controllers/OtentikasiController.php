<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class OtentikasiController extends Controller
{
    public function index(){
        return view('otentikasi.login');
    }

    // public function loginn(Request $request)
    // {
    //     // $data = User::where('email', $request->email)->firstOrFail();
    //     // if ($data) {
    //     //     if(Hash::check($request->password, $data->password)) {
    //     //         session(['Login successfuly' => true]);
    //     //         return redirect('/dashboard');
    //     //     }
    //     // }
    //     if (Auth::attempt(['username' => $request->username, 'password' => $request->password]))
    //     {
    //         return redirect('/dashboard');
    //     }
    //     return redirect('/')->with('success', 'Emai or password wrong !');
    // }
}
