<?php

namespace App\Http\Controllers;

use App\Course;
use App\Department;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
      $department=Department::all();
      return view('adminlte::course.courseentry')->withDepartment($department);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $course=Course::Where([['course_code','=',$request->course_code ],['course_name','=',$request->course_name ],['year','=',$request->year],['term','=',$request->term]])->get();
      If ($course->isempty())
          {

      $course = new Course();
      $course->course_code = $request->course_code;
      $course->course_name = $request->course_name;
      $course->department_id = $request->department_id;
      $course->course_year =$request->year;
      $course->course_term = $request->term;
      $course->credit_hour = $request->credit_hour;



      $backlog->save();
      Session::flash('success','New course Added Succesfully');
      $department=Department::all();
      return view('adminlte::course.courseentry')->withDepartment($department);
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
