@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
<div >
    <div >
        @if(Session::has('error'))
            <div class="alert alert-danger" role="alert">

                {{Session::get('error')}}
            </div>

    </div>
    @endif

</div>
    <div class="row">
        <div class="col-md-8 text-left">
            <h4><strong>ALL STUDENTS</strong></h4>
        </div>
        <div class="col-md-4 text-right">
        <div class="col-md-6">
            <a href="{{route('departments.create')}}" class="btn btn-primary btn-sm">Add New Department</a>
        </div>
        <div class="col-md-2">
            <a href="{{route('users.create')}}" class="btn btn-primary btn-sm">Add New Student</a>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-responsive  table-striped table-bordered table-hover">
                <thead style="background-color:#f2dede;">

                <th>Department Name</th>
                <th>Total Student</th>

                <th></th>
                </thead>
                <tbody>
                @foreach($departments as $department)
                    <tr >
                        <td>{{$department->name}}</td>
                        <td>{{$department->users()->count()}}</td>

                        <td><a href="{{route('users.show',$department->id)}}" class="btn btn-sm btn-success">VIEW ALL STUDENT</a> </td>
                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>

    </div>

@endsection
