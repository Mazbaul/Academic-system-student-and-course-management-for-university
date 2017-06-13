<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Notice;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class NoticeController extends Controller
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
        return view('adminlte::notice.notice_home');

    }

public function create(){

}


public function store(Request $request){
  $this->validate($request, array(
            'notice'=>'required'



  ));

    $notice = new Notice();
    $notice->notice = $request->notice;

    $notice->save();

    return redirect()->route('admin.notice');

}

public function show(){


}

}