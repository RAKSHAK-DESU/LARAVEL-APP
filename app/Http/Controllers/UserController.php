<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    function getUser(){
        return "Ray McGates";
    }

    function aboutUser(){
        return "Ray McGates is a Software Professional who speaks japanese and british English";
    }

    function getUserName($name){
        return "Hello it is $name";
    }

    function ShowPricing($name){
        return view('pricing',['name'=>$name]);
    }

    function adminLogin(){
        return view('admin.login');
    }

    function userEscape(){
        return view('out');
    }

    function users1(){
        $users= DB::select('select * from users');
        return view('users',['users'=>$users]);
    }

    function getUser1(){
        $response= Http::get('https://jsonplaceholder.typicode.com/users/1');
        $response= $response->body();
        return view('uszzr',['data'=>json_decode($response)]);
    }
}
