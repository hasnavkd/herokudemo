<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class Herokucontroller extends Controller
{
    //
    function fnStdReg(Request $request){
        $name=$request->sname;
        $contact=$request->scontact;
        $place=$request->splace;
        $studentobj=new Student([
            'name'=>$name,
            'contact'=>$contact,
            'place'=>$place
        ]);
        $studentobj->save();
        if($studentobj){
            return view('registration',['message'=>'registered']);
        }
        else{
            return view('registration',['message'=>'error']);
        }
    }
}
