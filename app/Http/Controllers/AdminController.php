<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Mail\NewNoticePublish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Department;
use App\Notice;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class AdminController extends Controller
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
        return view('adminlte::home');

    }

    public function email($id)
    {
        $notice=Notice::find($id);
        $department=Department::all();

        foreach( $department as $department ) :


        Mail::to($department->email)->send(new NewNoticePublish($notice));
        endforeach;

        return redirect('admin/notice');

    }

}