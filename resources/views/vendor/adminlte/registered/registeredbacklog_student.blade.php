@extends('adminlte::layouts.app')


@section('main-content')

    <div class="row">
        <div class="col-md-10">

            <h1>ALL Registered STUDENTS for Backlog</h1>

        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <th>Course Code</th>
                <th>Course Title</th>
                <th>Student Id</th>
                <th>Department</th>
                <th>Registered for Year</th>
                <th>Registered for Term</th>
                </thead>
                <tbody>
                @foreach($backlog as $backlog)
                    <tr>
                        <th>{{$backlog->course_code}}</th>
                        <th>{{$backlog->course_name}}</th>
                        <th>{{$backlog->student_id}}</th>
                        <th>{{$backlog->department->name}}</th>
                        <th>{{$backlog->course_year}}</th>
                        <th>{{$backlog->course_term}}</th>

                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>

    </div>

@endsection
