@extends('adminlte::layouts.app')


@section('main-content')
<div class="row">
  @if(Session::has('error'))
      <div class="alert alert-danger col-md-8 col-md-offset-2" role="alert">

          {{Session::get('error')}}
      </div>


@endif

</div>

<div class="row">
  <div class="col-md-8 text-left" style="margin-bottom:10px;">

  <h4><strong>ALL Registered STUDENTS</strong></h4>

  </div>
    <div class="col-md-4 text-right">

    <!--  {!! Form::open(['route' => 'registered.show']) !!}-->

      <!-- search form (Optional) -->
     <form action="{{ route('registered.show') }}" method="post" class="sidebar-form">
       {{ csrf_field() }}
          <div class="input-group">
              <input type="text" name="student_id" class="form-control" placeholder="Student ID..."/>
            <span class="input-group-btn">
              <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
            </span>
          </div>
      </form>
      <!-- /.search form -->


    </div>

</div>
    <div class="row">
        <div class="col-md-12" style="background-color:white;">
            <table class="table">
                <thead >
                <th>Name</th>
                <th>Student Id</th>
                <th>Email</th>
                <th>Session</th>
                <th>Department</th>
                <th>Registered for Year</th>
                <th>Registered for Term</th>
                </thead>
                <tbody>
                @foreach($registereds as $registered)
                    <tr >
                        <td>{{$registered->user->name}}</td>
                        <td>{{$registered->user->studentid}}</td>
                        <td>{{$registered->user->email}}</td>
                        <td>{{$registered->user->academicssn}}</td>
                        <td>{{$registered->user->department->name}}</td>
                        <td>{{$registered->year}}</td>
                        <td>{{$registered->term}}</td>

                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>

    </div>

@endsection
