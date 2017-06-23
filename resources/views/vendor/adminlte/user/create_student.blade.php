@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Add New Student</h1>

            {!! Form::open(['route' => 'users.store']) !!}

            {{ Form::label('name', 'Name of Student:') }}
            {{ Form::text('name', null, ['class' => 'form-control','placeholder'=>'type student name']) }}

            {{ Form::label('studentid', 'Student ID:') }}
            {{ Form::text('studentid', null, ['class' => 'form-control','placeholder'=>'Type Student ID' ]) }}

            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email', null, ['class' => 'form-control','placeholder'=>'Type email' ]) }}

            {{ Form::label('password', 'Password:') }}
            {{ Form::password('password', ['class' => 'form-control']) }}



            {{ Form::label('academicssn', 'Academic SESSION:') }}
            {{ Form::text('academicssn', null, ['class' => 'form-control','placeholder'=>'Type Academic SESSION' ]) }}


            {{ Form::label('department_id', 'Department:') }}
            <select class="form-control" name="department_id">
                @foreach($departments as $department)
                    <option value='{{ $department->id }}'>{{ $department->name }}</option>
                @endforeach
            </select>



            {{ Form::submit('Add Student', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
            {!! Form::close() !!}

        </div>
    </div>





@endsection