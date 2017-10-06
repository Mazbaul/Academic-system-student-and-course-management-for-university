<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Registered;
Use App\User;
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




}
