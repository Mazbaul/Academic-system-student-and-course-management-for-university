<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use App\User;
Use App\Registered;
Use App\Backlog;
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
       //backlog courseform and admit card
      public function backlogcourseform(Request $request)
      {
          $did=Auth::User()->department_id;
          $userid=Auth::User()->studentid;
          $backloga=Backlog::Where([['department_id','=',$did],['student_id','=',$userid]])->latest()->get();
          $backlogb=Backlog::Where([['department_id','=',$did],['student_id','=',$userid]])->latest()->get();


          $pdf=\PDF::loadView('adminlte::pdf.BacklogCourseregform',compact('backloga','backlogb'));
          return $pdf->download('backlogcourseregform.pdf');


      }

      //backlogbankform
      public function backlogbankform(Request $request)
      {

          $did=Auth::User()->department_id;
          $userid=Auth::User()->id;


         $registered=Registered::Where([['department_id','=',$did],['user_id','=',$userid]])->latest()->first();

         $course=Course::all();
         $payment=Payment::all();


          $pdf=\PDF::loadView('adminlte::pdf.backlogbankform',compact('course','registered','payment'));
          return $pdf->download('backlogbankform.pdf');


      }

      //certificatebankform
      public function certificatebankform(Request $request)
      {

          $did=Auth::User()->department_id;
          $userid=Auth::User()->id;


         $registered=Registered::Where([['department_id','=',$did],['user_id','=',$userid]])->latest()->first();

         $course=Course::all();
         $payment=Payment::all();


          $pdf=\PDF::loadView('adminlte::pdf.backlogbankform',compact('course','registered','payment'));
          return $pdf->download('backlogbankform.pdf');


      }
      //download main certifiacte form
      public function maincertificateform(Request $request)
      {
      
        $pdf=\PDF::loadView('adminlte::pdf.maincertificate');
        return $pdf->download('maincertificateform.pdf');


      }

      //Download Provisional certificate Form
      public function provisionalcertificateform(Request $request)
      {
          $did=Auth::User()->department_id;
          $userid=Auth::User()->studentid;
          $backloga=Backlog::Where([['department_id','=',$did],['student_id','=',$userid]])->latest()->get();
          $backlogb=Backlog::Where([['department_id','=',$did],['student_id','=',$userid]])->latest()->get();


          $pdf=\PDF::loadView('adminlte::pdf.BacklogCourseregform',compact('backloga','backlogb'));
          return $pdf->download('backlogcourseregform.pdf');


      }

      //Download Main Academic Transcript Form
      public function academictranscriptform(Request $request)
      {
          $did=Auth::User()->department_id;
          $userid=Auth::User()->studentid;
          $backloga=Backlog::Where([['department_id','=',$did],['student_id','=',$userid]])->latest()->get();
          $backlogb=Backlog::Where([['department_id','=',$did],['student_id','=',$userid]])->latest()->get();


          $pdf=\PDF::loadView('adminlte::pdf.BacklogCourseregform',compact('backloga','backlogb'));
          return $pdf->download('backlogcourseregform.pdf');


      }
      //Download Grade To Mark Conversion Form
      public function markconversionform(Request $request)
      {
          $did=Auth::User()->department_id;
          $userid=Auth::User()->studentid;
          $backloga=Backlog::Where([['department_id','=',$did],['student_id','=',$userid]])->latest()->get();
          $backlogb=Backlog::Where([['department_id','=',$did],['student_id','=',$userid]])->latest()->get();


          $pdf=\PDF::loadView('adminlte::pdf.BacklogCourseregform',compact('backloga','backlogb'));
          return $pdf->download('backlogcourseregform.pdf');


      }
      //Download Result Publication Date Certificate Form
      public function resultdateform(Request $request)
      {
          $did=Auth::User()->department_id;
          $userid=Auth::User()->studentid;
          $backloga=Backlog::Where([['department_id','=',$did],['student_id','=',$userid]])->latest()->get();
          $backlogb=Backlog::Where([['department_id','=',$did],['student_id','=',$userid]])->latest()->get();


          $pdf=\PDF::loadView('adminlte::pdf.BacklogCourseregform',compact('backloga','backlogb'));
          return $pdf->download('backlogcourseregform.pdf');


      }
}
