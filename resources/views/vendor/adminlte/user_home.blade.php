@extends('adminlte::layouts.app_user')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

  <div class="row">

    <div class="col-md-8">
      <h2><strong>Name : </strong>{{Auth::user()->name}}</h2>
      <h4><strong>Department Name : </strong>{{Auth::user()->department->name}}</h4>
      <h4><strong>Session : </strong>{{Auth::user()->academicssn}}</h4>
      <h4><strong>Student ID : </strong>{{Auth::user()->studentid}}</h4>
      <h4><strong>Email : </strong>{{Auth::user()->email}}</h4>
      <h4><strong>Phone Number : </strong>{{Auth::user()->mobile_number}}</h4>
    </div>
</div>
<div class="row">
  <div class="col-md-6">
    <h2>Registered Courses</h2>
  </div>
  <div class="col-md-6">
    <h2>Registered Backlog courses</h2>
  </div>
</div>

@endsection
