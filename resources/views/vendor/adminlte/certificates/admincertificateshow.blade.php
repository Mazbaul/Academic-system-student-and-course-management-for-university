@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
<div class="row">
  <div class="col-md-8 text-left" style="margin-bottom:10px;">

  <h4><strong>All Application's For Certificate</strong></h4>

  </div>
    <div class="col-md-4 text-right">

    <!--  {!! Form::open(['route' => 'registered.show']) !!}-->

      <!-- search form (Optional) -->
     <form action="{{ route('registered.show') }}" method="post" class="sidebar-form">
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
        <table class="table table-responsive table-inverse table-striped table-bordered table-hover">
            <thead style="background-color:#f2dede;" >

            <th>Name</th>
            <th>Student Id</th>
            <th>Session</th>
            <th>Department</th>
            <th>Applied for</th>
            <th>Applied At</th>
           <th>Delivered At</th>
           <th></th>
           <th></th>
            </thead>
            <tbody>

            @foreach($applicantinfo as $applicantinfo)

                <tr >
                    <td>{{$applicantinfo->user->name}}</td>
                    <td>{{$applicantinfo->user->studentid}}</td>
                    <td>{{$applicantinfo->user->academicssn}}</td>
                    <td>{{$applicantinfo->user->department->name}}</td>
                    <td>{{$applicantinfo->applicationtype->application_type}}</td>
                    <td>{{date('M j, Y',strtotime($applicantinfo->created_at))}}</td>
                    @if(($applicantinfo->status) == '0')
                    <td></td>
                    @else
                    <td>{{date('M j, Y',strtotime($applicantinfo->updated_at))}}</td>
                    @endif
                    <td>
                     @if(($applicantinfo->verify) == '0')
                    <a href="{{route('application.verify',$applicantinfo->id)}}" class="btn btn-sm btn-danger">Not Verified</a>
                     @else

                     <span >Verified  <i class="fa fa-check-square-o fa-2x " aria-hidden="true"></i></span>

                     @endif
                    </td>
                    <td>
                     @if(($applicantinfo->status) == '0')
                    <a href="{{route('application.update',$applicantinfo->id)}}" class="btn btn-sm btn-danger">Not Delivered</a>
                     @else

                     <span >Delivered  <i class="fa fa-check-square-o fa-2x " aria-hidden="true"></i></span>

                     @endif
                    </td>

                </tr>
            @endforeach

            </tbody>

        </table>
    </div>

</div>


@endsection
