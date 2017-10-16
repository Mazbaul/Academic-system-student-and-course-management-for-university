<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Registered;
Use App\User;
use Illuminate\Support\Facades\Session;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\MessageBag;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class RegisteredUserController extends Controller
{
      public function __construct()
      {
          $this->middleware('auth:admin');
      }



     public function index()
     {

        $registereds=Registered::orderBy('id', 'desc')->paginate(10);
        return view('adminlte::registered.registered_student')->withRegistereds($registereds);


     }

     public function show(Request $request)
     {
            $studentid=$request->student_id;

        $user=User::where('studentid','=' ,$studentid)->get()->pluck('id');
     If(!($user->isempty()))
      {
        $registereds=Registered::Where('user_id', '=' ,$user)->get();
        return view('adminlte::registered.registered_studentshow')->withRegistereds($registereds);
       }
       else{

         $registereds=Registered::orderBy('id', 'desc')->paginate(10);
         Session::flash('error','No Registered Student Found');
         return view('adminlte::registered.registered_student')->withRegistereds($registereds);
       }

     }

     public function newstudentrequest(){
       $users=User::Where('status','=','0')->orderBy('id', 'desc')->paginate(10);
       if(!($users->isempty()))
      {
         return view('adminlte::user.newstudent_request')->withUsers($users);
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
