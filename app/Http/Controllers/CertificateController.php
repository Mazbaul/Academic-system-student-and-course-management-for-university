<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicationtype;
use App\Applicantinfo;
use Auth;
use Illuminate\Support\Facades\Session;

class CertificateController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth:web');
  }



  public function index()
  {
    $applicationtype=Applicationtype::all();
      return view('adminlte::certificates.index')->withApplicationtype($applicationtype);
  }


  public function store(Request $request)
  {
    $this->validate($request, array(
      'applicationtype_id'=>'required',
      'exam_year'=>'required',
      'result_publication_date'=>'required',
      'cgpa' => 'required',
      'total_credite'=>'required',
      'completed_credite'=>'required',
      'date_of_birth'=>'required'
      ));
      $appl=Applicantinfo::Where([['user_id','=',Auth::user()->id ],['applicationtype_id','=',$request->applicationtype_id]])->get();
      If ($appl->isempty())
          {
             $applicationinfo = new Applicantinfo();
             $applicationinfo->user_id =Auth::User()->id;
             $applicationinfo->department_id =Auth::User()->department_id;
             $applicationinfo->applicationtype_id  = $request->applicationtype_id;
             $applicationinfo->result_publication_date  = $request->result_publication_date;
             $applicationinfo->exam_year  = $request->exam_year;
              $applicationinfo->cgpa  = $request->cgpa;
             $applicationinfo->total_credite  = $request->total_credite;
             $applicationinfo->completed_credite  = $request->completed_credite;
             $applicationinfo->date_of_birth  = $request->date_of_birth;



               $applicationinfo->save();
               Session::flash('success','Applied Succesfully');
              return redirect()->route('certificate.home');

          }
     else{

          Session::flash('error','You Already Have Applied For This Certificate!!!!!');
           return redirect()->route('certificate.home');

         }

  }



}
