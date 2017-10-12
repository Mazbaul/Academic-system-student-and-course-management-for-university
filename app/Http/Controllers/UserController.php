<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use App\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $departments=Department::all();
        return view('adminlte::user.index')->withDepartments($departments);

    }

    public function create(){
        $departments= Department::all();
        return view('adminlte::user.create_student')->withDepartments($departments);
    }


    public function store(Request $request){
        $this->validate($request, array(
            'name'=>'required',
            'studentid'=>'required',
            'email'=>'required',

            'password' => 'required|min:6',
            'academicssn'=>'required',

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


        $user->save();
        Session::flash('success','New Student Added Succesfully');
        return redirect()->route('users.create');

    }

    public function show($id){
      $user=User::Where('department_id','=',$id)->get();
      if(!($user->isempty()))
      {
        return view('adminlte::user.show')->withUser($user);
      }
     else{
       Session::flash('error','No student in this department');
       return redirect()->route('users.index');

          }
    }

}
