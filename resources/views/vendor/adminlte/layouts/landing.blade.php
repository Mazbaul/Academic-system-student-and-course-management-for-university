<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@acachawiki" />
    <meta name="twitter:creator" content="@acacha1" />



    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/all-landing.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/all.css') }}" rel="stylesheet" type="text/css" />

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

</head>

<body data-spy="scroll" data-target="#navigation" data-offset="50" style="background-image:url('img/21055156_1314746161980753_8532697384969707705_o.jpg');">


<div id="app" v-cloak>
  <div class="container" >


      <div class="row" >
        <div class="col-md-6">
          <h3 style="color:white;">welcome To ExamController Office's Website</h3>
        </div>

          <div class="col-md-6" style="background-color:#ecf0f5;margin-top:20px;margin-bottom:20px;">
              <h1 style="text-align:center;">Request For Membership</h1>
              <div class="row">
                @if(Session::has('success'))
                    <div class="alert alert-success col-md-8 col-md-offset-2" role="alert">

                        {{Session::get('success')}}
                    </div>


            @endif
                    @if ($errors->any())
              <div class="alert alert-danger col-md-8 col-md-offset-2">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif

              </div>

              {!! Form::open(['route' => 'request']) !!}

              <strong>{{ Form::label('name', 'Name of Student:') }}</strong>
              {{ Form::text('name', null, ['class' => 'form-control','placeholder'=>'type student name']) }}

              {{ Form::label('father_name', 'Father Name:') }}
              {{ Form::text('father_name', null, ['class' => 'form-control','placeholder'=>'type student father name']) }}

              {{ Form::label('mother_name', 'Mother Name:') }}
              {{ Form::text('mother_name', null, ['class' => 'form-control','placeholder'=>'type student mother name']) }}

              {{ Form::label('parmanent_address', 'Parmanent Address:') }}
              {{ Form::text('parmanent_address', null, ['class' => 'form-control','placeholder'=>'type parmanent address']) }}

              {{ Form::label('mailing_address', 'Mailing Address:') }}
              {{ Form::text('mailing_address', null, ['class' => 'form-control','placeholder'=>'type mailing address']) }}

              {{ Form::label('mobile_number', 'Mobile Number:') }}
              {{ Form::number('mobile_number', null, ['class' => 'form-control','placeholder'=>'type mobile number']) }}

              {{ Form::label('studentid', 'Student ID:') }}
              {{ Form::text('studentid', null, ['class' => 'form-control','placeholder'=>'Type Student ID' ]) }}

              {{ Form::label('email', 'Email:') }}
              {{ Form::text('email', null, ['class' => 'form-control','placeholder'=>'Type email' ]) }}

              {{ Form::label('password', 'Password:') }}
              {{ Form::password('password', ['class' => 'form-control']) }}



              {{ Form::label('academicssn', 'Academic SESSION:') }}
              {{ Form::text('academicssn', null, ['class' => 'form-control','placeholder'=>'Type Academic SESSION' ]) }}


              {{ Form::label('department_id', 'Department:') }}
              <select class="form-control" name="department_id">
                  @foreach($departments as $department)
                      <option value='{{ $department->id }}'>{{ $department->name }}</option>
                  @endforeach
              </select>


             @if(Auth::guest())
              {{ Form::submit('Send Request', array('class' => 'btn btn-success btn-md btn-block', 'style' => 'margin-top: 10px;margin-bottom:10px;')) }}
              {!! Form::close() !!}
            @else
            <h4 style="text-align:center;color:red;">You Are Already A member</h4>
            @endif
          </div>
      </div>

</div>
    <!-- Fixed navbar -->
    <div id="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><b>Exam Controller Office Nstu </b></a>
            </div>
            <div class="navbar-collapse collapse">

                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                        <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                    @else
                        <li><a href="/home">{{ Auth::user()->name }}</a></li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>



   </div>






<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ url (mix('/js/app-landing.js')) }}"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
