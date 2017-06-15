@extends('adminlte::layouts.app')


@section('main-content')
   <div class="container">
    <div class="container" >
       <div class="row">
           <section class="content-header">
              <h1 style="text-align: center;">
               NOTICE BOARD
              </h1>

            </section>
       </div>
    </div>

    <div class="container" style="margin-bottom: 10px">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Previous Notices</button>
            </div>

        </div>

    </div>
    <form action="{{ route('admin.notice') }}" method="post">
        <div class="form-group has-feedback">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <textarea  class="form-control" placeholder="Type your notice" name="notice" rows="9"  autofocus></textarea>

        </div>
        <div>
            <button type="submit" class="btn btn-primary btn-block btn-flat">Create new</button>
        </div>
    </form>

</div>

@endsection