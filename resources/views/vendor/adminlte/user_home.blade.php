@extends('adminlte::layouts.app_user')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
  <div class="well-lg col-md-4 col-md-offset-1" style="background-color:skyblue;">
      <a href="{{route('course.registration')}}" style="color:black;"><strong>Course Registration</strong></a>

  </div>
  <div class="well-lg col-md-4 col-md-offset-1" style="background-color:black;">
      <a href="{{route('backlog.registration')}}" style="color:red;"><strong>Backlog Registration</strong></a>
</div>
</div>
</div>
  </div>
@endsection
