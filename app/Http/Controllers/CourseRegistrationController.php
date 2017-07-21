<?php

namespace App\Http\Controllers;

use App\Course;
use App\Department;

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
    {   $department=Department::all();
        $year=$request->year;
        $term=$request->term;
        $did=$request->department_id;
        $course=Course::Where([['department_id','=',$did],['year','=',$year],['term','=',$term]])->get();

        return view('adminlte::user.show_courses')->withCourse($course)->withDepartment($department);
    }
    public function courseregister(Request $request)
    {
        $register=Registered::Where([['student_id','=',Auth::user()->id ],['year','=',$request->year],['term','=',$request->term]])->get();
        If ( $request->department_id == Auth::user()->department_id && $register->isempty())
            {

            $reg = new Registered();
            $reg->student_id = Auth::user()->id;
            $reg->department_id = $request->department_id;
            $reg->year = $request->year;
            $reg->term = $request->term;

            $reg->save();
            Session::flash('success','Notice Created Succesfully');
                return view('adminlte::user.after_register');

        }
        else{
            return view('adminlte::user.after_register');
        }



    }

}
