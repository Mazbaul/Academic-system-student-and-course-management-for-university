<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Course Form</title>
  <style>
    table{

     border-collapse:collapse;
     text-align:center;

    }
    td,th{
   border: 1px solid;

    }
    .page-break {
        page-break-after: always;
    }
  </style>
<?php

foreach($course as $course)





?>
</head>

<body>
  <div class="container">
<div class="row">
  <h2 style="text-align:center;">Noakhali Science And Technology University</h2>
  <h4 style="text-align:center;">Noakhali-3814,Bangladesh</h4><br>
    <h3 style="text-align:center;">Bank Form</h3><br><br>
</div>
<div class="row">
  <div class="col-md-8 " style="padding-left:50px;">
<div class="col-md-2"><strong>Session </strong>:{{Auth::User()->academicssn}}</div><br>
<div class="col-md-2"><strong>Year </strong>:{{$registered->year}}</div><br>
<div class="col-md-2"><strong>Term </strong>:{{$registered->term}}</div><br>
<div class="col-md-2"><strong>Date </strong>:......................</div><br>
<div class="col-md-2"><strong>Bank Account Number </strong>:38713</div><br><br>

</div>
</div>
    <div class="row">
      <div class="col-md-8 " style="padding-left:50px;">
<div class="col-md-2"><strong>Student Name </strong>:{{Auth::User()->name}}</div><br>
<div class="col-md-2"><strong>Roll </strong>:{{Auth::User()->studentid}}</div><br>
<div class="col-md-2"><strong>Session </strong>:{{Auth::User()->academicssn}}</div><br>
<div class="col-md-2"><strong>Father's Name:</strong>............................</div><br>
<div class="col-md-2"><strong>Mother's Name:</strong>............................</div><br>
<div class="col-md-2"><strong>Department Name </strong>:{{Auth::User()->department->name}}</div><br>
<div class="col-md-2"><strong>Hall :</strong>Abdus Salam Hall</div><br><br>

</div>
</div><br><br>
<div style="padding-left:50px;">
  <div class="col-md-2" style=" padding-left:500px;padding-bottom:-100px;">
    <div style="padding-top:50px;">
<p>---------------------</p>
      <strong>Provost</strong>
    </div>
  </div>
<div>
<p>---------------------</p>
<strong>Chairman</strong>
</div>

</div>
<br><br>
<div style="padding-left:50px;">
<div style="padding-left:50px;">

  @if((($registered->term)%2) > 0)
  <table class="table">

<tr>
      <th>Admission Fee</th>
      <th>Credit hour fee</th>
      <th>Total Credit Hour Fee</th>
      <th>Student Trust Fund</th>
      <th>Central Library Fee</th>
      <th>Seminar Library Fee</th>
      <th>Transport Fee</th>

    </tr>

      @foreach($payment as $payment)
          <tr>
              <td>{{$payment->admission_fee}}</td>
              <td>{{$payment->credithour_fee}}</td>
              <td>{{ $payment->sum('credithour_fee')* ($course->Where([['department_id','=',$registered->department_id],['year','=',$registered->year],['term','=',$registered->term]])->sum('credit_hour') )  }}</td>
              <td>{{$payment->student_trustfund}}</td>
              <td>{{$payment->central_libraryfee}}</td>
              <td>{{$payment->seminar_libraryfee}}</td>
              <td>{{$payment->transport_fee}}</td>


          </tr>
      @endforeach
      @else
          <table class="table">
              <tr>

              <th>Credit hour fee</th>
              <th>Total Credit Hour Fee</th>
              <th>Student Trust Fund</th>
              <th>Central Library Fee</th>
              <th>Seminar Library Fee</th>
              <th>Transport Fee</th>
            </tr>

          @foreach($payment as $payment)
              <tr>

                  <td>{{$payment->credithour_fee}}</td>

                  <td>{{ $payment->sum('credithour_fee')* ($course->Where([['department_id','=',$registered->department_id],['year','=',$registered->year],['term','=',$registered->term]])->sum('credit_hour') )  }}</td>

                  <td>{{$payment->student_trustfund}}</td>
                  <td>{{$payment->central_libraryfee}}</td>
                  <td>{{$payment->seminar_libraryfee}}</td>
                  <td>{{$payment->transport_fee}}</td>


              </tr>
          @endforeach

      @endif


               <div class="col-md-3 col-md-offset-9">

                   <h5><strong>Total payment :
                           @if((($registered->term)%2) > 0)
                           {!! $payment->sum('admission_fee')+$payment->sum('seminar_libraryfee')+$payment->sum('transport_fee') + $payment->sum('student_trustfund') + $payment->sum('credithour_fee')* $course->Where([['department_id','=',$registered->department_id],['year','=',$registered->year],['term','=',$registered->term]])->sum('credit_hour') + $payment->sum('central_libraryfee') !!}


                   @else

                   {!!$payment->sum('seminar_libraryfee')+$payment->sum('transport_fee') + $payment->sum('student_trustfund') + $payment->sum('credithour_fee')* $course->Where([['department_id','=',$course->department_id],['year','=',$course->year],['term','=',$course->term]])->sum('credit_hour') + $payment->sum('central_libraryfee') !!}

                 @endif
                       </strong> </h5>
               </div>

  </table>
</div>
<br>

 </div>


</div>
<br>
<div class="page-break"></div>

</body>

</html>
