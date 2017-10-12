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
      <div class="col-md-9">
          <h1>ALL NOTICES</h1>
      </div>
      <div class="col-md-3">
          <a href="{{route('notice.create')}}" class="btn btn-primary btn-lg">Create new</a>
      </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>
      <div class="row">
         <div class="col-md-12">
             <table class="table">
                 <thead style="background-color:white;">
                    <th>#</th>
                    <th>Tittle</th>
                    <th>Notice</th>
                    <th>Published Date</th>
                    <th></th>
                    <th></th>
                 </thead>
                 <tbody>
                   @foreach($notice as $notice)
                       <tr style="background-color:white;">
                           <td>{{$notice->id}}</td>
                           <td>{!!$notice->tittle!!}</td>
                           <td>{!!substr($notice->notice,0,50)!!}{!!strlen($notice->notice)>50 ?"..........." :""!!}</td>
                           <td>{{date('M j, Y',strtotime($notice->created_at))}}</td>
                           <td><a href="{{route('notice.show',$notice->id)}}" class="btn btn-sm btn-success">VIEW</a> </td>
                           <td><a href="{{route('sendemail',$notice->id)}}" class="btn btn-sm btn-primary">SEND TO DEPARTMENT</a> </td>
                       </tr>
                   @endforeach

                 </tbody>

             </table>
         </div>

      </div>

@endsection
