@extends('adminlte::layouts.app_user')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

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
<br><br>
<div class="row">
<div class="col-md-12 ">
<div class="well-lg col-md-3 col-md-offset-1" style="background-color:skyblue;">
  <a href="{{route('course.courseentrydownload')}}" style="color:black;"><strong>Download Course Entry Form</strong></a>

</div>
<div class="well-lg col-md-3 col-md-offset-1" style="background-color:skyblue;">
  <a href="{{route('course.formdownload')}}" style="color:black;"><strong>Download Course Form and admit card</strong></a>
</div>
<div class="well-lg col-md-3 col-md-offset-1" style="background-color:skyblue;">
  <a href="{{route('course.bformdownload')}}" style="color:black;"><strong>Download Bank Form</strong></a>

</div>
</div>
</div>

@endsection
