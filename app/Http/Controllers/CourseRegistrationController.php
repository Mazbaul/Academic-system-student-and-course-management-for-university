<?php

namespace App\Http\Controllers;

use App\Course;
use App\Department;

use App\Payment;
use App\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CourseRegistrationController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index()
    {   $department=Department::all();

        return view('adminlte::user.course_registration')->withDepartment($department);
    }


    public function showcourse(Request $request)
    {    $year=$request->year;
        $term=$request->term;
        $did=$request->department_id;


        $department=Department::all();
        $payments=Payment::all();



        $course=Course::Where([['department_id','=',$did],['year','=',$year],['term','=',$term]])->get();

        return view('adminlte::user.show_courses')->withCourse($course)->withDepartment($department)->withPayment($payments);
    }



    public function courseregister(Request $request)
    {
        $register=Registered::Where([['user_id','=',Auth::user()->id ],['year','=',$request->year],['term','=',$request->term]])->get();
        If ( $request->department_id == Auth::user()->department_id && $register->isempty())
            {

            $reg = new Registered();
            $reg->user_id = Auth::user()->id;
            $reg->department_id = $request->department_id;
            $reg->year = $request->year;
            $reg->term = $request->term;

            $reg->save();
            Session::flash('success','registered Succesfully');
                $year=$request->year;
                $term=$request->term;
                $did=$request->department_id;


                $department=Department::all();
                $payments=Payment::all();



                $course=Course::Where([['department_id','=',$did],['year','=',$year],['term','=',$term]])->get();
                Session::flash('error','You Need to be a student of same department And You can register once for a semister ');
                return view('adminlte::user.show_courses')->withCourse($course)->withDepartment($department)->withPayment($payments);

        }
        else{
            $year=$request->year;
            $term=$request->term;
            $did=$request->department_id;


            $department=Department::all();
            $payments=Payment::all();



            $course=Course::Where([['department_id','=',$did],['year','=',$year],['term','=',$term]])->get();
            Session::flash('error','You Need to be a student of same department And You can register once for a semister ');
            return view('adminlte::user.show_courses')->withCourse($course)->withDepartment($department)->withPayment($payments);


        }



    }

}
