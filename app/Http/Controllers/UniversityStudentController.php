<?php

namespace App\Http\Controllers;
use App\Models\UniversityStudent;
use Illuminate\Http\Request;

class UniversityStudentController extends Controller
{
     function addstudent(Request $request){
       $universitystudent= new UniversityStudent();
        $universitystudent->name=$request->name;
        $universitystudent->email=$request->email;
        $universitystudent->phone=$request->phone;
        $universitystudent->save();
        if($universitystudent){
            echo "New student added";
        }



        return redirect('listunistudent');
    }

    
    function list(){
        $universitystudentData= UniversityStudent::paginate(10);
      //      return "student list";
        return view('list-UniversityStudent',['universitystudents'=>$universitystudentData]);
    }

    //Deletes the ary with same id 
    function delete($id){
     echo   $isDeleted=UniversityStudent::destroy($id);
      if($isDeleted){
        return redirect('listunistudent');
     }
    }


    function edit($id)
    {
      $student= UniversityStudent::find($id);
      return view('editUniversityStudent',['data'=>$student]);
    }

    function editStudent(Request $request,$id){
      $student= UniversityStudent::find($id);
      $student->name=$request->name;
      $student->email=$request->email;
      $student->phone=$request->phone;

      if($student->save()){
        return redirect('listunistudent');
      }else{
        return "Update Operation Failed";
      }
      return $request->input();

    }

    function search(Request $request){
      $studentData= UniversityStudent::where('name','like',"%$request->search%")->get();
      return view('list-UniversityStudent',['universitystudents'=>$studentData,'search'=>$request->search]);
       
    }

    function deleteMultiple(Request $request){
      $result= UniversityStudent::destroy([$request->ids]);
      if($result){
        return redirect('listunistudent');
      }else{
        return "Student Data not deleted";
      }
    }
}


