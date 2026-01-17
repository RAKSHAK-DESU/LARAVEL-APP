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
}
