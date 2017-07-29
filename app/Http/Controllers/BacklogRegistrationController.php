<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
Use App\Department;
Use App\Backlog;
class BacklogRegistrationController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth:web');
  }



  public function index()
  {
      $department=Department::all();
      return view('adminlte::user.backlog_registration')->withDepartment($department);

  }

  public function add(Request $request){
    //  $this->validate($request, array(
    //      'course_title'=>'required',
      //    'studentid'=>'required',
        //  'course_code'=>'required',
          //'department_id' => 'required',
          //'year'=>'required',
          //'term'=>'required'



      //));
      $backlog=Backlog::Where([['course_code','=',$request->course_code ],['student_id','=',$request->studentid ],['course_name','=',$request->course_name ],['course_year','=',$request->year],['course_term','=',$request->term]])->get();
      If ($backlog->isempty())
          {
      $backlog = new Backlog();
      $backlog->course_code = $request->course_code;
      $backlog->course_name = $request->course_name;
      $backlog->student_id = $request->studentid;
      $backlog->department_id = $request->department_id;
      $backlog->course_year =$request->year;
      $backlog->course_term = $request->term;



      $backlog->save();
      Session::flash('success','New Student Added Succesfully');
      $department=Department::all();
      return view('adminlte::user.backlog_registration')->withDepartment($department);

  }
  else{


    Session::flash('error','You Have Already registered  for This Course If you Want to Retake it Contact ADMIN ');


    $department=Department::all();
    return view('adminlte::user.backlog_registration')->withDepartment($department);


  }
}

}
