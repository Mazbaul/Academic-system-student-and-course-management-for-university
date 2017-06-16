<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        $notice=Notice::all();
        return view('adminlte::notice.index')->withNotice($notice);

    }

public function create(){
    return view('adminlte::notice.notice_home');
}


public function store(Request $request){
  $this->validate($request, array(
            'notice'=>'required'



  ));

    $notice = new Notice();
    $notice->notice = $request->notice;

    $notice->save();
    Session::flash('success','Notice published Succesfully');
    return redirect()->route('admin.show',$notice->id);

}

public function show($id){
  $notice=Notice::find($id);
    return view('adminlte::notice.show')->withNotice($notice);

}

}