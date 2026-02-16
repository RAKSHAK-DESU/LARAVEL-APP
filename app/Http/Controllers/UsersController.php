<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\EloquestUser;
class UsersController extends Controller
{
    function queries(){
       $users= DB::table('users')->get();
       // $results= DB::table('users')->where('phone','1234')->get();

       //$results = DB::table('users')->where('name','prayag')->update(['phone'=>'2222']);
        $results = DB::table('users')->insert(['name'=>'shinchan','email'=>'shin@test.com','phone'=>'']);
        //$results = DB::table('users')->where('name','Mad')->delete();

       if($results){
        print "Data Updated";
       }else{
        print "Data not Updated";
       } 
        return view('Users1',['users'=>$users]);
    }
}
