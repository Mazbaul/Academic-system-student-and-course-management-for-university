@extends('adminlte::layouts.app_user')

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
                <div class="row" >
                    <div class="col-md-6">
                      <a href="{{route('course.formdownload')}}" class="btn btn-success" ><strong>download course form</strong></a>

                    </div>
                    <div class="col-md-6">
                      <a href="{{route('course.formdownload')}}" class="btn btn-success" ><strong>download course form</strong></a>

                    </div>
                </div>
             @elseif(Session::has('error'))
                <div class="alert alert-danger " role="alert">

                    {{Session::get('error')}}
                </div>

        </div>
             @endif

    </div>
    <div class="row">
        <div class="col-md-8">
           <h3>Find Your Course for desired semister</h3>
        </div>
    <div class="col-md-12">
        {!! Form::open(['route' => 'course.show']) !!}
        <div class="col-md-3">
            {{ Form::label('department_id', 'Department:') }}
            <select class="form-control" name="department_id">
                @foreach($department as $department)
                    <option value='{{ $department->id }}'>{{ $department->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3">
            {{ Form::label('year', 'Year:') }}
            {{ Form::text('year', null, ['class' => 'form-control','placeholder'=>'type year']) }}
        </div>
        <div class="col-md-3">
            {{ Form::label('term', 'Term:') }}
            {{ Form::text('term', null, ['class' => 'form-control','placeholder'=>'type term']) }}
        </div>
        <div class="col-md-3">
            {{ Form::submit('search courses', array('class' => 'btn btn-default btn-sm btn-block', 'style' => 'margin-top: 30px;')) }}
        </div>
        {!! Form::close() !!}
    </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-md-8">

        </div>

        <div class="col-md-12">
            <table class="table">
                <thead>

                <th>Course Code</th>
                <th>Course Title</th>
                <th>Department Name</th>
                <th>Year</th>
                <th>Term</th>
                <th>credit hour</th>
                </thead>
                <tbody>
                @foreach($course as $course)
                    <tr>
                        <td>{{$course->course_code}}</td>
                        <td>{{$course->course_title}}</td>
                        <td>{{$course->department->name}}</td>
                        <td>{{$course->year}}</td>
                        <td>{{$course->term}}</td>
                        <td>{{$course->credit_hour}}</td>


                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>
        <div class="col-md-6">
            <h5>Courses Of <strong>{{$course->department->name}}</strong> Department For <strong>Year-{{$course->year}},Term-{{$course->term}}</strong>  </h5>

        </div>
        <div class="col-md-3 col-md-offset-9">

            <h5><strong>Total Credit hour :  {{$course->Where([['department_id','=',$course->department_id],['year','=',$course->year],['term','=',$course->term]])->sum('credit_hour')}}</strong> </h5>
        </div>
    </div>

     <div class="row">

         <div class="col-md-12">
             @if((($course->term)%2) > 0)
             <table class="table">
                 <thead>

                 <th>Admission Fee</th>
                 <th>Credit hour fee</th>
                 <th>Total Credit Hour Fee</th>
                 <th>Student Trust Fund</th>
                 <th>Central Library Fee</th>
                 <th>Seminar Library Fee</th>
                 <th>Transport Fee</th>
                 </thead>
                 <tbody>

                 @foreach($payment as $payment)
                     <tr>
                         <td>{{$payment->admission_fee}}</td>
                         <td>{{$payment->credithour_fee}}</td>
                         <td> {{ $payment->sum('credithour_fee')* $course->Where([['department_id','=',$course->department_id],['year','=',$course->year],['term','=',$course->term]])->sum('credit_hour')  }} </td>
                         <td>{{$payment->student_trustfund}}</td>
                         <td>{{$payment->central_libraryfee}}</td>
                         <td>{{$payment->seminar_libraryfee}}</td>
                         <td>{{$payment->transport_fee}}</td>


                     </tr>
                 @endforeach
                 @else
                     <table class="table">
                         <thead>

                         <th>Credit hour fee</th>
                         <th>Total Credit Hour Fee</th>
                         <th>Student Trust Fund</th>
                         <th>Central Library Fee</th>
                         <th>Seminar Library Fee</th>
                         <th>Transport Fee</th>
                         </thead>
                         <tbody>
                     @foreach($payment as $payment)
                         <tr>

                             <td>{{$payment->credithour_fee}}</td>
                             <td> {{ $payment->sum('credithour_fee')* $course->Where([['department_id','=',$course->department_id],['year','=',$course->year],['term','=',$course->term]])->sum('credit_hour')  }} </td>
                             <td>{{$payment->student_trustfund}}</td>
                             <td>{{$payment->central_libraryfee}}</td>
                             <td>{{$payment->seminar_libraryfee}}</td>
                             <td>{{$payment->transport_fee}}</td>


                         </tr>
                     @endforeach
                 @endif
                 </tbody>

             </table>
         </div>

         <div class="col-md-3 col-md-offset-9">

             <h5><strong>Total payment :
                     @if((($course->term)%2) > 0)
                     {!! $payment->sum('admission_fee')+$payment->sum('seminar_libraryfee')+$payment->sum('transport_fee') + $payment->sum('student_trustfund') + $payment->sum('credithour_fee')* $course->Where([['department_id','=',$course->department_id],['year','=',$course->year],['term','=',$course->term]])->sum('credit_hour') + $payment->sum('central_libraryfee') !!}


             @else

             {!!$payment->sum('seminar_libraryfee')+$payment->sum('transport_fee') + $payment->sum('student_trustfund') + $payment->sum('credithour_fee')* $course->Where([['department_id','=',$course->department_id],['year','=',$course->year],['term','=',$course->term]])->sum('credit_hour') + $payment->sum('central_libraryfee') !!}

           @endif
                 </strong> </h5>
         </div>

     </div>


        <div class="row">
        <div class="col-md-3 col-md-offset-9">
            {!! Form::open(['route' => 'course.register']) !!}

            <input type="hidden" name="department_id" value="{{$course->department_id }}">
            <input type="hidden" name="year" value="{{ $course->year }}">
            <input type="hidden" name="term" value="{{ $course->term }}">


            {{ Form::submit('register', array('class' => 'btn btn-success btn-sm btn-block ', 'style' => 'margin-top: 30px;')) }}
            {!! Form::close() !!}
        </div>

    </div>
@endsection
