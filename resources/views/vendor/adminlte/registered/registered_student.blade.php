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

            <h1>ALL Registered STUDENTS</h1>
            <div class="col-md-8" style="margin-bottom:10px;">
            {!! Form::open(['route' => 'registered.show']) !!}


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
                <th>Name</th>
                <th>Student Id</th>
                <th>Email</th>
                <th>Session</th>
                <th>Department</th>
                <th>Registered for Year</th>
                <th>Registered for Term</th>
                <th>Bank Form Number</th>
                <th></th>
                </thead>
                <tbody>
                @foreach($registered as $registered)
                    <tr style="background-color:white;">
                        <td>{{$registered->user->name}}</td>
                        <td>{{$registered->user->studentid}}</td>
                        <td>{{$registered->user->email}}</td>
                        <td>{{$registered->user->academicssn}}</td>
                        <td>{{$registered->user->department->name}}</td>
                        <td>{{$registered->year}}</td>
                        <td>{{$registered->term}}</td>
                        <td>{{$registered->id}}</td>
                        <td>
                         @if(($registered->status) == '0')
                        <a href="{{route('registered.update',$registered->id)}}" class="btn btn-sm btn-danger">Click to Verify</a>
                         @else

                         <span >Verified  <i class="fa fa-check-square-o fa-2x " aria-hidden="true"></i></span>

                         @endif
                        </td>
                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>

    </div>

@endsection
