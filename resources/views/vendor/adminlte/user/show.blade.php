@extends('adminlte::layouts.app_user')


@section('main-content')

    <div class="row">
        <div class="col-md-10">

            <h1>ALL STUDENTS OF  DEPARTMENT</h1>

        </div>
        <div class="col-md-2">

        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <th>#</th>
                <th>Name</th>
                <th>Student Id</th>
                <th>Email</th>
                <th>Session</th>
                <th>Department</th>
                <th></th>
                </thead>
                <tbody>
                @foreach($user as $user)
                    <tr>
                        <th>{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->studentid}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->academicssn}}</td>
                        <td>{{$user->department->name}}</td>
                        <td>{{date('M j, Y',strtotime($user->created_at))}}</td>

                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>

    </div>

@endsection
