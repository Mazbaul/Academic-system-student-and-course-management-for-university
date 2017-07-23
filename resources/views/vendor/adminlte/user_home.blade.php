@extends('adminlte::layouts.app_user')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
  <div class="well col-md-4 ">
      <a href="{{route('course.registration')}}" class="btn btn-success btn-lg">Course Registration</a>

  </div>
@endsection
