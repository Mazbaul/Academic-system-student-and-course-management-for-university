<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Backlog;
use Illuminate\Support\Facades\Route;
class RegisteredbacklogUserController extends Controller
{
      public function __construct()
      {
          $this->middleware('auth:admin');
      }



     public function index()
     {

        $backlog=Backlog::all();
        return view('adminlte::registered.registeredbacklog_student')->withBacklog($backlog);


     }

     public function showlist(Request $request)
     {

        $backlog=Backlog::where('student_id', '=' ,$request->student_id)->get();
        return view('adminlte::registered.registeredbacklog_studentshow')->withBacklog($backlog);


     }

     public function update(Request $request, $id)
     {
       Backlog::Where([['id','=',$id],['status','=','0']])->update(['status' => '1']);
          $backlog=Backlog::all();


         return redirect()->route('registered.studentbacklog')->withBacklog($backlog);


     }


}
