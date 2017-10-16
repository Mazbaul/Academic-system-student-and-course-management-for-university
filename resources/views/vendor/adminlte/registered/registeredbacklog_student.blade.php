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
      <div class="col-md-8" style="text-align:left;margin-bottom:10px;">

      <h4>  <strong>ALL Registered STUDENTS for Backlog</strong></h4>

      </div>
      <div class="col-md-4 text-right">

      <!--  {!! Form::open(['route' => 'registered.show']) !!}-->

        <!-- search form (Optional) -->
       <form action="{{ route('backlog.show') }}" method="post" class="sidebar-form">
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
        <div class="col-md-12">
            <table class="table  table-responsive table-inverse table-striped table-bordered table-hover">
                <thead style="background-color:#f2dede;" >
                <th>Course Code</th>
                <th>Course Title</th>
                <th>Student Id</th>
                <th>Department</th>
                <th>Registered for Year</th>
                <th>Registered for Term</th>
                <th></th>
                </thead>
                <tbody>
                @foreach($backlog as $backlog)
                    <tr >
                        <td>{{$backlog->course_code}}</td>
                        <td>{{$backlog->course_name}}</td>
                        <td>{{$backlog->student_id}}</td>
                        <td>{{$backlog->department->name}}</td>
                        <td>{{$backlog->course_year}}</td>
                        <td>{{$backlog->course_term}}</td>
                        <td>
                         @if(($backlog->status) == '0')
                        <a href="{{route('backlog.update',$backlog->id)}}" class="btn btn-sm btn-danger">Click to Verify</a>
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
