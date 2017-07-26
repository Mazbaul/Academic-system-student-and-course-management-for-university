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
                        <td>{{$backlog->course_code}}</td>
                        <td>{{$backlog->course_name}}</td>
                        <td>{{$backlog->student_id}}</td>
                        <td>{{$backlog->department->name}}</td>
                        <td>{{$backlog->course_year}}</td>
                        <td>{{$backlog->course_term}}</td>

                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>

    </div>

@endsection
