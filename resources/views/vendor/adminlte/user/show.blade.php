@extends('adminlte::layouts.app')


@section('main-content')

    <div class="row">
        <div class="col-md-10 text-center">

            <h4><strong>ALL STUDENTS </strong></h4>

        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-responsive table-inverse table-striped table-bordered table-hover">
                <thead style="background-color:#f2dede;" >

                <th>Name</th>
                <th>Student Id</th>
                <th>Email</th>
                <th>Session</th>
                <th>Department</th>

                </thead>
                <tbody>
                @foreach($user as $user)
                    <tr>

                        <td>{{$user->name}}</td>
                        <td>{{$user->studentid}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->academicssn}}</td>
                        <td>{{$user->department->name}}</td>


                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>

    </div>

@endsection
