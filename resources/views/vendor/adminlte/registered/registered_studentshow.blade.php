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
  <div class="col-md-8 text-left" style="margin-bottom:10px;">

  <h4><strong>ALL Registered STUDENTS</strong></h4>

  </div>
    <div class="col-md-4 text-right">

    <!--  {!! Form::open(['route' => 'registered.show']) !!}-->

      <!-- search form (Optional) -->
     <form action="{{ route('registered.show') }}" method="post" class="">
       {{ csrf_field() }}
          <div class="input-group">
              <input type="text" name="student_id" class="form-control" placeholder="Student ID..."/>
            <span class="input-group-btn">
              <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
            </span>
          </div>
      </form>
      <!-- /.search form -->


    </div>

</div>
    <div class="row">
        <div class="col-md-12" >
            <table class="table table-responsive table-inverse table-striped table-bordered table-hover">
                <thead style="background-color:#f2dede;" >
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
                @foreach($registereds as $registered)
                    <tr >
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
