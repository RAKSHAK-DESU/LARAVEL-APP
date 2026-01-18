<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    function upload(Request $request){
       // echo "Upload Function Called";
       // $path= $request->file('file')->store('public');
        $path= $request->file('file')->storeAs('public','dummy1.png');

        $filenameArray= explode("/",$path);
        $filename=$filenameArray[1];
        return view('display',['path'=>$filename]);

    }
}
