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
                        <th>{{$registered->user->name}}</th>
                        <th>{{$registered->user->studentid}}</th>
                        <th>{{$registered->user->email}}</th>
                        <th>{{$registered->user->academicssn}}</th>
                        <th>{{$registered->department->name}}</th>
                        <th>{{$registered->year}}</th>
                        <th>{{$registered->term}}</th>

                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>

    </div>

@endsection
