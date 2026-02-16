<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EloquentUser;
class EloquentUserController extends Controller
{
    //
    
    function queries(){
        $response= EloquentUser::all();
        return $response;
    }
}
