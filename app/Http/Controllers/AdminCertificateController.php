<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicantinfo;
use App\Http\Controllers\timestamps;
class AdminCertificateController extends Controller
{



  public function __construct()
  {
      $this->middleware('auth:admin');
  }

  public function index()
  {
    $applicantinfo=Applicantinfo::all();
      return view('adminlte::certificates.admincertificateshow')->withApplicantinfo($applicantinfo);

  }

  public function update(Request $request, $id)
  {

    Applicantinfo::Where([['id','=',$id],['status','=','0']])->update(['status' => '1']);
    $applicantinfo=Applicantinfo::all();

      return redirect()->route('certificateapp.show')->withUser($applicantinfo);

  }

  public function verify(Request $request, $id)
  {

    Applicantinfo::Where([['id','=',$id],['verify','=','0']])->update(['verify' => '1']);
    $applicantinfo=Applicantinfo::all();

      return redirect()->route('certificateapp.show')->withUser($applicantinfo);

  }

}
