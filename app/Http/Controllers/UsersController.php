<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\EloquestUser;
class UsersController extends Controller
{
    function queries(){
       // $results = DB::table('users')->get();
       // $results= DB::table('users')->where('phone','1234')->get();

       //$results = DB::table('users')->where('name','tony')->update(['phone'=>'2222']);
        $results = DB::table('users')->where('name','tony')->delete();

       if($results){
        return "Data Deleted";
       }else{
        return "Data not Deleted";
       }
        return view('Users1',['users'=>$results]);
    }
}
