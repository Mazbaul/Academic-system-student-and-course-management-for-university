<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\User;
Use App\Registered;
Use App\Course;
Use PDF;
class PDFController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth:web');
  }

      public function courseform(Request $request)
      {
          $did=Auth::User()->department_id;
          $userid=Auth::User()->id;
          $registered=Registered::Where([['department_id','=',$did],['user_id','=',$userid]])->first();
          $course=Course::all();

          $pdf=\PDF::loadView('adminlte::pdf.Courseregform',compact('course','registered'));
          return $pdf->download('courseregform.pdf');


      }


}
