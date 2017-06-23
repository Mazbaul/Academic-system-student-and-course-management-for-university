@extends('adminlte::layouts.app')

@section('htmlheader_title')
    {{ trans('adminlte_lang::message.home') }}
@endsection

@section('main-content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Add New Student</h1>
            <form action="{{ route('admin.notice') }}" method="post">
                <div class="form-group has-feedback">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div>
                        <label for="tittle" class="control-label">Tittle Of Notice :</label>
                        <input type="text" class="form-control" placeholder="Tittle of you notice" name="tittle"/>
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