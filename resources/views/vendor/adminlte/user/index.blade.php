@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-10">
            <h1>ALL STUDENTS</h1>
        </div>
        <div class="col-md-2">
            <a href="{{route('users.create')}}" class="btn btn-primary btn-lg">Create new</a>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>

                <th>Department Name</th>
                <th>Total Student</th>

                <th></th>
                </thead>
                <tbody>
                @foreach($departments as $department)
                    <tr>
                        <th>{{$department->name}}</th>
                        <th>{{$department->users()->count()}}</th>

                        <td><a href="{{route('users.show',$department->id)}}" class="btn btn-sm btn-default">VIEW ALL STUDENT</a> </td>
                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>

    </div>

@endsection