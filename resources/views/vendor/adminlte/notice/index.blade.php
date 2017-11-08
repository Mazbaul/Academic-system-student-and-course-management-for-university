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

    <div class="row">
      <div class="col-md-6" style="text-align:left;margin-bottom:10px;">

      <h4><strong>All Notices</strong></h4>

      </div>
      <div class="col-md-6 text-right">
          <a href="{{route('notice.create')}}" class="btn btn-primary btn-lg">Create new</a>
      </div>

    </div>
      <div class="row">
         <div class="col-md-12">
             <table class="table table-responsive  table-striped table-bordered table-hover">
                 <thead style="background-color:#d9edf7;">

                    <th>Tittle</th>
                    <th>Notice</th>
                    <th>Published Date</th>
                    <th></th>
                    <th></th>

                 </thead>
                 <tbody>
                   @foreach($notices as $notice)
                       <tr >

                           <td>{!!$notice->tittle!!}</td>
                           <td>{!!substr($notice->notice,0,50)!!}{!!strlen($notice->notice)>50 ?"..........." :""!!}</td>
                           <td>{{date('M j, Y',strtotime($notice->created_at))}}</td>
                           <td><a href="{{route('notice.show',$notice->id)}}" class="btn btn-sm btn-primary">VIEW</a>
                           <a href="{{route('notice.show',$notice->id)}}" class="btn btn-sm btn-danger">Edit</a></td>
                           <td><a href="{{route('sendemail',$notice->id)}}" class="btn btn-sm btn-primary">SEND TO DEPARTMENT</a> </td>
                       </tr>
                   @endforeach

                 </tbody>

             </table>
             <div class="text-center">
           {!! $notices->links(); !!}
         </div>
         </div>

      </div>

@endsection
