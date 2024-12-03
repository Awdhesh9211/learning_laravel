<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

    function index(){
        return view('addstudent');
    }
    function addStudent(Request $req){
        $student=new Student();
        $student->name=$req->name;
        $student->email=$req->email;

        if($student->save()){
            $data=Student::all();
            return view('/showstudent',['data'=>$data]);
        }
        return "Error in inserting the data";
    }

    function deleteStudent($id){
        $res=Student::destroy($id);
        if($res){
            $data=Student::all();
            return view('/showstudent',["data"=>$data]);
        }
    }
    function updateUi($id){
        $data=student::find($id);
        if($data){
            return view('updatestudent',['data'=>$data]);
        }
    }
    function updateStudent(Request $req,$id){

        $res=Student::where('id',$id)->update([
           'name'=>$req->name,
           'email'=>$req->email
        ]);

        if($res){
            $data=Student::all();
            return view("/showstudent",["data"=>$data]);
        }
    }
}
