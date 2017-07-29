<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\User;
Use App\Registered;
Use App\Course;
Use App\Payment;
Use PDF;
class PDFController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth:web');
  }
//courseform and admit card
      public function courseform(Request $request)
      {
          $did=Auth::User()->department_id;
          $userid=Auth::User()->id;
          $registered=Registered::Where([['department_id','=',$did],['user_id','=',$userid]])->latest()->first();
          $course=Course::all();

          $pdf=\PDF::loadView('adminlte::pdf.Courseregform',compact('course','registered'));
          return $pdf->download('courseregform.pdf');


      }
      //course entry form
      public function courseentryform(Request $request)
      {
          $did=Auth::User()->department_id;
          $userid=Auth::User()->id;
          $registered=Registered::Where([['department_id','=',$did],['user_id','=',$userid]])->latest()->first();
          $course=Course::all();

          $pdf=\PDF::loadView('adminlte::pdf.Courseentryform',compact('course','registered'));
          return $pdf->download('courseentryform.pdf');


      }
//bank form
      public function bankform(Request $request)
      {
          $did=Auth::User()->department_id;
          $userid=Auth::User()->id;
          $registered=Registered::Where([['department_id','=',$did],['user_id','=',$userid]])->latest()->first();
          $course=Course::all();
          $payment=Payment::all();

          $pdf=\PDF::loadView('adminlte::pdf.bankform',compact('course','registered','payment'));
          return $pdf->download('bankform.pdf');


      }


}
