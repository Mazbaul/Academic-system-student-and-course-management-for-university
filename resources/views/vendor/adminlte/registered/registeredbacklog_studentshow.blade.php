@extends('adminlte::layouts.app')


@section('main-content')
<div class="row">
  @if(Session::has('error'))
      <div class="alert alert-danger col-md-8 col-md-offset-2" role="alert">

          {{Session::get('error')}}
      </div>


@endif

</div>
    <div class="row">
        <div class="col-md-10">

            <h1>ALL Registered STUDENTS for Backlog</h1>

        </div>

    </div>
    <div class="row">
        <div class="col-md-10">


            <div class="col-md-8" style="margin-bottom:10px;">
            {!! Form::open(['route' => 'backlog.show']) !!}


                <div class="col-md-6">

            {{ Form::text('student_id', null, ['class' => 'form-control ','placeholder'=>' studentid']) }}
                </div>

                <div class="col-md-2">
            {{ Form::submit('search', array('class' => 'btn btn-success btn-sm btn-block', 'style' => 'margin-top: 0px;')) }}
                </div>
            {!! Form::close() !!}
            </div>

        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead style="background-color:white;">
                <th>Course Code</th>
                <th>Course Title</th>
                <th>Student Id</th>
                <th>Department</th>
                <th>Registered for Year</th>
                <th>Registered for Term</th>
                </thead>
                <tbody>
                @foreach($backlog as $backlog)
                    <tr style="background-color:white;">
                        <td>{{$backlog->course_code}}</td>
                        <td>{{$backlog->course_name}}</td>
                        <td>{{$backlog->student_id}}</td>
                        <td>{{$backlog->department->name}}</td>
                        <td>{{$backlog->course_year}}</td>
                        <td>{{$backlog->course_term}}</td>

                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>

    </div>

@endsection
