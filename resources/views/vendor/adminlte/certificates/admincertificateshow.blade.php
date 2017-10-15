@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead style="background-color:white;">

            <th>Name</th>
            <th>Student Id</th>
            <th>Session</th>
            <th>Department</th>
            <th>Applied for</th>
            <th>Applied At</th>
           <th>Delivered At</th>
           <th></th>
            </thead>
            <tbody>

            @foreach($applicantinfo as $applicantinfo)

                <tr style="background-color:white;">
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
