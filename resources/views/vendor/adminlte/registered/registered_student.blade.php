@extends('adminlte::layouts.app')


@section('main-content')

    <div class="row">
        <div class="col-md-10">

            <h1>ALL Registered STUDENTS</h1>

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
                <th>Name</th>
                <th>Student Id</th>
                <th>Email</th>
                <th>Session</th>
                <th>Department</th>
                <th>Registered for Year</th>
                <th>Registered for Term</th>
                </thead>
                <tbody>
                @foreach($registered as $registered)
                    <tr>
                        <td>{{$registered->user->name}}</td>
                        <td>{{$registered->user->studentid}}</td>
                        <td>{{$registered->user->email}}</td>
                        <td>{{$registered->user->academicssn}}</td>
                        <td>{{$registered->department->name}}</td>
                        <td>{{$registered->year}}</td>
                        <td>{{$registered->term}}</td>

                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>

    </div>

@endsection
