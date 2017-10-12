@extends('adminlte::layouts.app')


@section('main-content')

    <div class="row">
        <div class="col-md-10">

            <h1>ALL Registered STUDENTS</h1>
            <div class="col-md-6">
            {!! Form::open(['route' => 'registered.show']) !!}


                <div class="col-md-3">
            {{ Form::label('student_id', '') }}
            {{ Form::text('student_id', null, ['class' => 'form-control','placeholder'=>'type studentid']) }}
                </div>

                <div class="col-md-3">
            {{ Form::submit('search', array('class' => 'btn btn-success btn-sm btn-block', 'style' => 'margin-top: 30px;')) }}
                </div>
            {!! Form::close() !!}
            </div>

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
                <thead style="background-color:white;">
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
                    <tr style="background-color:white;">
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
