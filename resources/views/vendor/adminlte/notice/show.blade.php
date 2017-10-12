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
           <div class="row">
               <div class="col-md-12">
                   <table class="table">

                       <tbody >

                           <tr >


                               {!!$notice->notice!!}


                           </tr>


                       </tbody>

                   </table>
               </div>

       </div>
    @endsection
