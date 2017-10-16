<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Registered;
Use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\MessageBag;

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

        $user=User::where('studentid','=' ,$studentid)->get()->pluck('id');
     If(!($user->isempty()))
      {
        $registered=Registered::Where('user_id', '=' ,$user)->get();
        return view('adminlte::registered.registered_studentshow')->withRegistered($registered);
       }
       else{

         $registered=Registered::all();
         Session::flash('error','No Registered Student Found');
         return view('adminlte::registered.registered_student')->withRegistered($registered);
       }

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

     public function update(Request $request, $id)
     {
       Registered::Where([['id','=',$id],['status','=','0']])->update(['status' => '1']);
          $registered=Registered::all();
         return redirect()->route('registered.student')->withRegistered($registered);

     }

}
