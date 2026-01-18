<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Children;
class ChildrenController extends Controller
{
    function queries(){
       // $response= Children::all();
       $response= Children::get();

        return view('Children',['children'=>$response]);
    }

    function any(){
        return "this is any method";
    }

    function group1(){
        return "This is Group 1";
    }
    function group2(){
        return "This is Group 2";
    }
}
