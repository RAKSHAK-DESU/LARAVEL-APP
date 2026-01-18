<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HttpController extends Controller
{
    function login(Request $request){
        echo $request->method();
        echo "Name is ". $request->input('name') . " Age is ". $request->input('age') ." Gender is ".  $request->input('gender');
    }
}
