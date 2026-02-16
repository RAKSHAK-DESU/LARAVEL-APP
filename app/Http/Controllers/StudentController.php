<?php

namespace App\Http\Controllers;
use App\Models\Student;
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
 
    function addstu(Request $request){
       $student= new Student();
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->save();
        if($student){
            echo "New student added";
        }



        return "add function called";
    }

    
    function list(){
        $studentData= Student::all();
      //      return "student list";
        return view('list-student',['students'=>$studentData]);
    }
}
