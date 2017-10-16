@extends('adminlte::layouts.app')


@section('main-content')

    <div class="row">
      <div class="col-md-8 col-md-offset-2" style="text-align:center;margin-bottom:10px;">

      <h4><strong>All Requests For Membership</strong></h4>

      </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-responsive table-inverse table-striped table-bordered table-hover">
                <thead  style="background-color:#f2dede;" >

                <th>Name</th>
                <th>Student Id</th>
                <th>Email</th>
                <th>Session</th>
                <th>Department</th>
                <th></th>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr >

                        <td>{{$user->name}}</td>
                        <td>{{$user->studentid}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->academicssn}}</td>
                        <td>{{$user->department->name}}</td>
                        <td><a href="{{route('users.update',$user->id)}}" class="btn btn-sm btn-danger">click to Approve</a> </td>


                    </tr>
                @endforeach

                </tbody>

            </table>
            <div class="text-center">
          {!! $users->links(); !!}
        </div>
        </div>

    </div>

@endsection
