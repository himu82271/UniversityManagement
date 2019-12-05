<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Website;
use DB;

class StudentsController extends Controller
{
    public function createStudentEntry()
    {
        $departments = Website::get();
        return view('/createStudentEntry',compact('departments'));
    }

public function index(){
    
    $students = DB::table('students')
            ->select('students.*','forms.departmentName')
            ->join('forms','forms.id','students.department')
            ->get();
    return view('/index_student',['students'=>$students]);

}
public function indexView(){
    
    return view('index_student');

}

public function delete($id){

    $form=Student::find($id);
    $form->delete();
    return redirect('/index/student');
}

public function edit($id){

    $registration = Student::find($id);
    return view('/student_edit',['registration'=>$registration]);



}

public function update(Request $request)
{
    //return $request;
    $form=Student::find($request->id);
    $form->firstName=$request->firstName;
    $form->lastName=$request->lastName;
    $form->phoneNumber=$request->phoneNumber;
    $form->email=$request->email;
    $form->nationality=$request->nationality;
    $form->address=$request->address;
    $form->dateOfBirth=$request->dateOfBirth;
    $form->department=$request->department;
    $form->update();
    return redirect('/index/student');

}

    public function storeStudentEntry(Request $request){
        $website= new Student();
        $website->firstName =$request->firstName;
        $website->lastName =$request->lastName;
        $website->phoneNumber =$request->phoneNumber;
        $website->email =$request->email;
        $website->nationality =$request->nationality;
        $website->address =$request->address;
        $website->dateOfBirth =$request->dateOfBirth;
        $website->department =$request->department;
        $website->save();
        return redirect('index/student');
}

}
