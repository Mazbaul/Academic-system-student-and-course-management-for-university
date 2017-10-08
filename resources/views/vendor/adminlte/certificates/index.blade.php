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
    <div class="col-md-12">
        <h1>Apply For Certificates</h1>

        {!! Form::open(['route' => 'certificate.store']) !!}
<div class="col-md-2">
        {{ Form::label('exam_year', 'Exam Year:') }}
        {{ Form::number('exam_year', null, ['class' => 'form-control','placeholder'=>'type exam year']) }}
</div>
<div class="col-md-2">
        {{ Form::label('result_publication_date', 'Result Publication Date:') }}
        {{ Form::number('result_publication_date', null, ['class' => 'form-control','placeholder'=>'type result publication date']) }}
</div>
<div class="col-md-2">
        {{ Form::label('cgpa', 'CGPA:') }}
        {{ Form::number('cgpa', null, ['class' => 'form-control','placeholder'=>'type CGPA']) }}
</div>
<div class="col-md-2">
        {{ Form::label('total_credite', 'Total Credite:') }}
        {{ Form::number('total_credite', null, ['class' => 'form-control','placeholder'=>'type Total credite']) }}
</div>
<div class="col-md-2">
        {{ Form::label('completed_credite', 'Completed Credite:') }}
        {{ Form::number('completed_credite', null, ['class' => 'form-control','placeholder'=>'type completed credite']) }}
</div>
<div class="col-md-2">
        {{ Form::label('date_of_birth', 'Date of Birth:') }}
        {{ Form::number('date_of_birth', null, ['class' => 'form-control','placeholder'=>'type date of birth']) }}
</div>

        {{ Form::label('applicationtype_id', 'Applying For:',['style' => 'margin-top: 20px;']) }}
        <select class="form-control" name="applicationtype_id">
            @foreach($applicationtype as $applicationtype)
                <option value='{{ $applicationtype->id }}'>{{ $applicationtype->application_type}}</option>
            @endforeach
        </select>


        {{ Form::submit('APPLY', array('class' => 'btn btn-primary btn-md btn-block', 'style' => 'margin-top: 20px;')) }}
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
