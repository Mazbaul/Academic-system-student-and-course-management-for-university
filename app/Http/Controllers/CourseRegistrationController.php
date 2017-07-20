<?php

namespace App\Http\Controllers;

use App\Course;
use App\Department;

use Illuminate\Http\Request;

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

}
