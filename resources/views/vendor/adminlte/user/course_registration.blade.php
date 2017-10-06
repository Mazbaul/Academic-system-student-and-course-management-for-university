@extends('adminlte::layouts.app_user')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
<div class="row" >
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
    {{ Form::submit('search courses', array('class' => 'btn btn-success btn-sm btn-block', 'style' => 'margin-top: 30px;')) }}
        </div>
    {!! Form::close() !!}
    </div>
  </div>
  </br></br></br>
    <div class="row" >
    <div class="col-md-12 ">
    <div class="btn btn-primary btn-md btn-block" >
      <a href="{{route('course.courseentrydownload')}}" style="color:black;"><strong>Download Course Entry Form</strong></a>

    </div>
    <div class="btn btn-primary btn-md btn-block">
      <a href="{{route('course.formdownload')}}" style="color:black;"><strong>Download Course Form and admit card</strong></a>
    </div>
    <div class="btn btn-primary btn-md btn-block" >
      <a href="{{route('course.bformdownload')}}" style="color:black;"><strong>Download Bank Form</strong></a>

    </div>
    </div>
    </div>
@endsection
