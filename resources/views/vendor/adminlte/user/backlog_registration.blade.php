@extends('adminlte::layouts.app_user')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
<div class="row">
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
        <div class="col-md-12">
            <h1>Register For Backlogs</h1>

            {!! Form::open(['route' => 'backlog.add']) !!}
            <div class="col-md-2">
            {{ Form::label('course_code', 'Course Code:') }}
            {{ Form::text('course_code', null, ['class' => 'form-control','placeholder'=>'type Course code']) }}
            </div>
            <div class="col-md-2">
            {{ Form::label('course_title', 'Course Title:') }}
            {{ Form::text('course_name', null, ['class' => 'form-control','placeholder'=>'type Course title']) }}
          </div>
          <div class="col-md-2">
            {{ Form::label('studentid', 'Student ID:') }}
            {{ Form::text('studentid', null, ['class' => 'form-control','placeholder'=>'Type Student ID' ]) }}
          </div>
          <div class="col-md-2">
            {{ Form::label('year', 'Year:') }}
            {{ Form::text('year', null, ['class' => 'form-control','placeholder'=>'Type year' ]) }}
          </div>
          <div class="col-md-2">
            {{ Form::label('term', 'Term:') }}
            {{ Form::text('term', null, ['class' => 'form-control','placeholder'=>'Type term' ]) }}
          </div>


           <div class="col-md-2">
            {{ Form::label('department_id', 'Department:') }}
            <select class="form-control" name="department_id">
                @foreach($department as $department)
                    <option value='{{ $department->id }}'>{{ $department->name }}</option>
                @endforeach
            </select>
          </div>
        </div>
      </div>

<div class="row">
         <div class="col-md-6 col-md-offset-4">
            {{ Form::submit('Register for Backlog Course', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
            {!! Form::close() !!}
          </div>
        </div>
        </br></br></br>

        <div class="row">
          <div class="col-md-12">
          <div class="btn btn-primary btn-md btn-block ">
            <a href="{{route('course.backlogcourseentrydownload')}}" style="color:black;"><strong>Download Backlog Course Form and admit card</strong></a>
          </div>
          <div class="btn btn-primary btn-md btn-block ">
            <a href="{{route('course.backbformdownload')}}" style="color:black;"><strong>Download Bank Form For Backlog</strong></a>

          </div>

        </div>
        </div>

@endsection
