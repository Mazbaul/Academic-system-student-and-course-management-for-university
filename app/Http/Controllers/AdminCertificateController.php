<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicantinfo;
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



}
