<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function show(){
        return "list of students";
    }
    function add(){
        return "Add New Student";
    }
    function delete(){
        return "Student Delete";
    }
    function notabout($name){
        return $name;
    }
}
