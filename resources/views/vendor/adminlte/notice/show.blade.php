@extends('adminlte::layouts.app')

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
       <div>
           <h1>Published at  {{date('M j, Y',strtotime($notice->created_at))}}</h1>
           <h1>{{$notice->notice}}</h1>


       </div>
    @endsection