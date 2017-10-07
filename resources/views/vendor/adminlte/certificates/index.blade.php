@extends('adminlte::layouts.app_user')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')

<div class="row" >
  <h3 style="text-align:center;color:#dd4b39;">Application's for Certifate </h3>
<div class="col-md-12 ">
<div class="btn btn-primary btn-md btn-block" >
  <a href="{{route('course.courseentrydownload')}}" style="color:black;"><strong>Apply for Main Certificate</strong></a>

</div>
<div class="btn btn-primary btn-md btn-block" >
  <a href="{{route('course.courseentrydownload')}}" style="color:black;"><strong>Apply for Provisional certificate</strong></a>

</div>
<div class="btn btn-primary btn-md btn-block" >
  <a href="{{route('course.courseentrydownload')}}" style="color:black;"><strong>Apply for Main Academic Transcript</strong></a>

</div>
<div class="btn btn-primary btn-md btn-block" >
  <a href="{{route('course.courseentrydownload')}}" style="color:black;"><strong>Apply for Grade To Mark Conversion</strong></a>

</div>
<div class="btn btn-primary btn-md btn-block" >
  <a href="{{route('course.courseentrydownload')}}" style="color:black;"><strong>Apply for Result Publication Date Certificate
</strong></a>

</div>
</div>
</div>


@endsection
