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
        <div class="col-md-8 col-md-offset-2">
            <h1>Add New Student</h1>

            {!! Form::open(['route' => 'users.store']) !!}

            {{ Form::label('name', 'Name of Student:') }}
            {{ Form::text('name', null, ['class' => 'form-control','placeholder'=>'type student name']) }}

            {{ Form::label('father_name', 'Father Name:') }}
            {{ Form::text('father_name', null, ['class' => 'form-control','placeholder'=>'type student father name']) }}

            {{ Form::label('mother_name', 'Mother Name:') }}
            {{ Form::text('mother_name', null, ['class' => 'form-control','placeholder'=>'type student mother name']) }}

            {{ Form::label('parmanent_address', 'Parmanent Address:') }}
            {{ Form::text('parmanent_address', null, ['class' => 'form-control','placeholder'=>'type parmanent address']) }}

            {{ Form::label('mailing_address', 'Mailing Address:') }}
            {{ Form::text('mailing_address', null, ['class' => 'form-control','placeholder'=>'type mailing address']) }}

            {{ Form::label('mobile_number', 'Mobile Number:') }}
            {{ Form::number('mobile_number', null, ['class' => 'form-control','placeholder'=>'type mobile number']) }}

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



            {{ Form::submit('Add Student', array('class' => 'btn btn-primary btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
            {!! Form::close() !!}

        </div>
    </div>





@endsection
