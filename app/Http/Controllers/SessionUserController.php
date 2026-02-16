<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionUserController extends Controller
{
    function login(Request $request){
        $request->session()->put('user', $request->input('user'));
     //   echo session('user');
        
        return redirect('sessionprofile');
    }

    function logout(){
        session()->pull('sessionuser');
        return redirect('sessionlogin');
    }
}
