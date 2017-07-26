<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Registered;
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




}
