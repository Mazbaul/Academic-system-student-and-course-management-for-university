<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Registered;
Use App\User;
use Illuminate\Support\Facades\Session;

class RegisteredUserController extends Controller
{
      public function __construct()
      {
          $this->middleware('auth:admin');
      }



     public function index()
     {

        $registered=Registered::all();
        return view('adminlte::registered.registered_student')->withRegistered($registered);


     }

     public function show(Request $request)
     {
            $studentid=$request->student_id;
        $user=User::find($studentid);

        return view('adminlte::registered.registered_studentshow')->with($user);


     }

     public function newstudentrequest(){
       $user=User::Where('status','=','0')->get();
       if(!($user->isempty()))
      {
         return view('adminlte::user.newstudent_request')->withUser($user);
     }
     else{
       Session::flash('error','No new request');
       return redirect()->route('admin.dashboard');

     }

     }


}
