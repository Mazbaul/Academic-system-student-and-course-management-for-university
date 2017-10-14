<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\MessageBag;

class WelcomeController extends Controller
{

  public function __construct()
  {

  }

  public function store(Request $request){
      $this->validate($request, array(
          'name'=>'required',
          'studentid'=>'required|unique:users',
          'email'=>'required|unique:users',

          'password' => 'required|min:6',
          'academicssn'=>'required',
          'mobile_number'=> 'required',
          'department_id'=>'required'



      ));

      $user = new User();
      $user->name = $request->name;
      $user->studentid = $request->studentid;
      $user->email = $request->email;
      $user->father_name=$request->father_name;
      $user->mother_name=$request->mother_name;
      $user->parmanent_address=$request->parmanent_address;
      $user->mailing_address=$request->mailing_address;
      $user->mobile_number=$request->mobile_number;
      $user->password = bcrypt($request->password);
      $user->academicssn = $request->academicssn;
      $user->department_id = $request->department_id;
      $user->status = '0';


        $user->save();
      Session::flash('success','Request Sent.Admin Will Review Your Request');
      return redirect()->route('welcome');




  }
}
