@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
    <div class="row" >
    <div class="col-md-6">
        {!! Form::open(['route' => 'course.register']) !!}
        {{ Form::submit('Download Course form', array('class' => 'btn btn-success btn-sm btn-block ', 'style' => 'margin-top: 30px;')) }}
        {!! Form::close() !!}
    </div>
    <div class="col-md-6">
        {!! Form::open(['route' => 'course.register']) !!}
        {{ Form::submit('Download Bank Pay Slip', array('class' => 'btn btn-success btn-sm btn-block ', 'style' => 'margin-top: 30px;')) }}
        {!! Form::close() !!}
    </div>
    </div>
@endsection
