<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class UserController extends Controller
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
        $user=User::all();
        return view('adminlte::user.index')->withUser($user);

    }

    public function create(){
        return view('adminlte::user.user_home');
    }


    public function store(Request $request){
        $this->validate($request, array(
            'name'=>'required',
            'notice'=>'required'



        ));

        $notice = new Notice();
        $notice->tittle = $request->tittle;
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