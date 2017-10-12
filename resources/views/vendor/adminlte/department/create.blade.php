@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
    <div >
        <div >
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">

                    {{Session::get('success')}}
                </div>

        </div>
        @endif

    </div>
    <div class="row">
        <div class="col-md-8 ">
            <h1>Add New Department</h1>

            {!! Form::open(['route' => 'departments.store']) !!}

            <div class="col-md-4" >
                {{ Form::label('name', 'Name of department:') }}
            {{ Form::text('name', null, ['class' => 'form-control','placeholder'=>'Type department name']) }}
            </div>

            <div class="col-md-4" >
            {{ Form::label('email', 'Department Email:') }}
            {{ Form::text('email', null, ['class' => 'form-control','placeholder'=>'Type email' ]) }}
            </div>

                <div class="col-md-4" >
            {{ Form::submit('Add Department', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
            {!! Form::close() !!}
                </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1>Existing Departments</h1>
            <table class="table">
                <thead style="background-color:white;">
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                </thead>
                <tbody>
                @foreach($departments as $department)
                    <tr style="background-color:white;">
                        <th>{{$department->id}}</th>
                        <td>{{$department->name}}</td>
                        <td>{{$department->email}}</td>

                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>

    </div>





@endsection
