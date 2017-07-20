@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="row">
    <div class="col-md-8">
        <h3>Find Your Course for desired semister</h3>
    </div>
    <div class="col-md-12">
        {!! Form::open(['route' => 'course.show']) !!}
        <div class="col-md-3">
            {{ Form::label('department_id', 'Department:') }}
            <select class="form-control" name="department_id">
                @foreach($department as $department)
                    <option value='{{ $department->id }}'>{{ $department->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3">
            {{ Form::label('year', 'Year:') }}
            {{ Form::text('year', null, ['class' => 'form-control','placeholder'=>'type year']) }}
        </div>
        <div class="col-md-3">
            {{ Form::label('term', 'Term:') }}
            {{ Form::text('term', null, ['class' => 'form-control','placeholder'=>'type term']) }}
        </div>
        <div class="col-md-3">
            {{ Form::submit('search courses', array('class' => 'btn btn-default btn-sm btn-block', 'style' => 'margin-top: 30px;')) }}
        </div>
        {!! Form::close() !!}
    </div>
    </div>
    <br><br>
    <div class="row">
        {!! Form::open(['route' => 'course.show']) !!}
        <div class="col-md-12">
            <table class="table">
                <thead>

                <th>Course Code</th>
                <th>Course Title</th>
                <th>Department Name</th>
                <th>Year</th>
                <th>Term</th>
                <th>credit hour</th>
                </thead>
                <tbody>
                @foreach($course as $course)
                    <tr>
                        <td>{{$course->course_code}}</td>
                        <td>{{$course->course_title}}</td>
                        <td>{{$course->department->name}}</td>
                        <td>{{$course->year}}</td>
                        <td>{{$course->term}}</td>
                        <td>{{$course->credit_hour}}</td>


                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>
        <div class="col-md-3 col-md-offset-9">

            <h5><strong>Total Credit hour :  {{$course->Where([['department_id','=',$course->department_id],['year','=',$course->year],['term','=',$course->term]])->sum('credit_hour')}}</strong> </h5>
        </div>

        <div class="col-md-3 col-md-offset-9">
            {{ Form::submit('register', array('class' => 'btn btn-success btn-sm btn-block ', 'style' => 'margin-top: 30px;')) }}
        </div>
        {!! Form::close() !!}
    </div>
@endsection
