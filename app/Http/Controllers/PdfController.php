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

      public function courseform()
      {
          $studentid=Auth::User()->id;
          $studentdid=Auth::User()->department_id;
          $userinfo=User::find($studentid);
          $registeredyr=Registered::Where([['student_id','=',$studentid],['department_id','=',$studentdid]])->get('year')->last();
          $registeredtrm=Registered::Where([['student_id','=',$studentid],['department_id','=',$studentdid]])->get('term')->last();
          $course=Course::Where([['department_id','=',$studentdid],['year','=',$registeredyr],['term','=',$registeredtrm]])->get();

          $pdf=PDF::loadView('adminlte::pdf.Courseregform', compact('userinfo'));
          return $pdf->download('courseregform.pdf');


      }


}
