<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlashUserController extends Controller
{
    function addUser(Request $request){
        // Your DB Code
        $request->session()->flash('message','User has been added Successfully');
        return redirect('flashuser');
    }
}
