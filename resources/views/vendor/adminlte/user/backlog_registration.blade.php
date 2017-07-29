@extends('adminlte::layouts.app_user')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
<div >
    <div >
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">

                {{Session::get('success')}}
            </div>
         @elseif(Session::has('error'))
            <div class="alert alert-danger " role="alert">

                {{Session::get('error')}}
            </div>

    </div>
         @endif

</div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Register For Backlogs</h1>

            {!! Form::open(['route' => 'backlog.add']) !!}

            {{ Form::label('course_code', 'Course Code:') }}
            {{ Form::text('course_code', null, ['class' => 'form-control','placeholder'=>'type Course code']) }}

            {{ Form::label('course_title', 'Course Title:') }}
            {{ Form::text('course_name', null, ['class' => 'form-control','placeholder'=>'type Course title']) }}

            {{ Form::label('studentid', 'Student ID:') }}
            {{ Form::text('studentid', null, ['class' => 'form-control','placeholder'=>'Type Student ID' ]) }}

            {{ Form::label('year', 'Year:') }}
            {{ Form::text('year', null, ['class' => 'form-control','placeholder'=>'Type year' ]) }}

            {{ Form::label('term', 'Term:') }}
            {{ Form::text('term', null, ['class' => 'form-control','placeholder'=>'Type term' ]) }}




            {{ Form::label('department_id', 'Department:') }}
            <select class="form-control" name="department_id">
                @foreach($department as $department)
                    <option value='{{ $department->id }}'>{{ $department->name }}</option>
                @endforeach
            </select>



            {{ Form::submit('Add Backlog Course', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
            {!! Form::close() !!}

        </div>
    </div>





@endsection
