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
        {{ Form::date('result_publication_date', null, ['class' => 'form-control','placeholder'=>'type result publication date']) }}
</div>
<div class="col-md-2">
        {{ Form::label('cgpa', 'CGPA:') }}
        {{ Form::number('cgpa', null, ['class' => 'form-control','step' => 'any','placeholder'=>'type CGPA']) }}
</div>
<div class="col-md-2">
        {{ Form::label('total_credite', 'Total Credite:') }}
        {{ Form::number('total_credite', null, ['class' => 'form-control','step' => 'any','placeholder'=>'type Total credite']) }}
</div>
<div class="col-md-2">
        {{ Form::label('completed_credite', 'Completed Credite:') }}
        {{ Form::number('completed_credite', null, ['class' => 'form-control','step' => 'any','placeholder'=>'type completed credite']) }}
</div>
<div class="col-md-2">
        {{ Form::label('date_of_birth', 'Date of Birth:') }}
        {{ Form::date('date_of_birth', null, ['class' => 'form-control','placeholder'=>'type date of birth']) }}
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
    <a href="{{route('certificate.maindownload')}}" style="color:black;"><strong>Download Main Certificate Form</strong></a>

  </div>
  <div class="btn btn-primary btn-md btn-block">
    <a href="{{route('certificate.provisionaldownload')}}" style="color:black;"><strong>Download Provisional certificate Form</strong></a>
  </div>

  <div class="btn btn-primary btn-md btn-block">
    <a href="{{route('certificate.transcriptdownload')}}" style="color:black;"><strong>Download Main Academic Transcript Form</strong></a>
  </div>

  <div class="btn btn-primary btn-md btn-block">
    <a href="{{route('certificate.markconversiondownload')}}" style="color:black;"><strong>Download Grade To Mark Conversion Form</strong></a>
  </div>

  <div class="btn btn-primary btn-md btn-block">
    <a href="{{route('certificate.resultdatedownload')}}" style="color:black;"><strong>Download Result Publication Date Certificate Form</strong></a>
  </div>

  <div class="btn btn-primary btn-md btn-block" >
    <a href="{{route('certificate.bankformdownload')}}" style="color:black;"><strong>Download Bank Form</strong></a>

  </div>
  </div>
  </div>


@endsection
