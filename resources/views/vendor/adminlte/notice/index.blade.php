@extends('adminlte::layouts.app')


@section('main-content')

    <div class="row">
      <div class="col-md-10">
          <h1>ALL NOTICES</h1>
      </div>
      <div class="col-md-2">
          <a href="{{route('notice.create')}}" class="btn btn-primary btn-lg">Create new</a>
      </div>
        <div class="col-md-12">
            <hr>
        </div>
    </div>
      <div class="row">
         <div class="col-md-12">
             <table class="table">
                 <thead>
                    <th>#</th>
                    <th>Tittle</th>
                    <th>Notice</th>
                    <th>Published Date</th>
                    <th></th>
                 </thead>
                 <tbody>
                   @foreach($notice as $notice)
                       <tr>
                           <th>{{$notice->id}}</th>
                           <td><pre>{{$notice->tittle}}</pre></td>
                           <td><pre>{{substr($notice->notice,0,50)}}{{strlen($notice->notice)>50 ?"..........." :""}}</pre></td>
                           <td>{{date('M j, Y',strtotime($notice->created_at))}}</td>
                           <td><a href="{{route('notice.show',$notice->id)}}" class="btn btn-sm btn-default">VIEW</a> </td>
                       </tr>
                   @endforeach

                 </tbody>

             </table>
         </div>

      </div>

@endsection