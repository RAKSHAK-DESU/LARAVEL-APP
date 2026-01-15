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

    function getStudent(){
        $data = new \App\Models\Student;
        echo $data->testFun();
        $students=\App\Models\Student::all(); 
        return view('students',['data'=>$students]);
    }
}
