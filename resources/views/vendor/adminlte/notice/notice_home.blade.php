@extends('adminlte::layouts.app')


@section('main-content')


    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>
    <form action="{{ route('user.create') }}" method="post">
        <div class="form-group has-feedback">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div>
                <label for="name" class="control-label">Tittle Of Notice :</label>
                <input type="text" class="form-control" placeholder="Name of the Student" name="name"/>
            </div>
            <div>
                <label for="notice" class="control-label">Notice :</label>
                <textarea  class="form-control" placeholder="Type your notice" name="notice" rows="9"  autofocus></textarea>
            </div>

        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-block btn-flat">Create new</button>
        </div>
    </form>

        </div>
    </div>

@endsection