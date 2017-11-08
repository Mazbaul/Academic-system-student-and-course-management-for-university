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
        <div class="col-md-12">
            <h3 class="text-center"><strong>Existing Departments</strong></h3>
            <table class="table table-responsive  table-striped table-bordered table-hover">
                <thead style="background-color:#f2dede;">

                <th>Name</th>
                <th>Email</th>
                </thead>
                <tbody>
                @foreach($departments as $department)
                    <tr>

                        <td>{{$department->name}}</td>
                        <td>{{$department->email}}</td>

                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>

    </div>
    <div class="row">
        <div class="col-md-4 ">
            <h3 class="text-right"><strong>Add New Department :</strong></h3>
</div>

  <div class="col-md-8 " style="margin-top:20px;">
            {!! Form::open(['route' => 'departments.store']) !!}

            <div class="col-md-4" >

            {{ Form::text('name', null, ['class' => 'form-control','placeholder'=>'Type department name']) }}
            </div>

            <div class="col-md-4" >

            {{ Form::text('email', null, ['class' => 'form-control','placeholder'=>'Type email' ]) }}
            </div>

                <div class="col-md-4" >
            {{ Form::submit('Add Department', array('class' => 'btn btn-primary btn-sm btn-block', 'style' => 'margin-top: 0px;')) }}
            {!! Form::close() !!}
                </div>
        </div>
    </div>




@endsection
