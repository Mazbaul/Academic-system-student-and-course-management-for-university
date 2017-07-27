<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Course Form</title>

</head>

<body>
  <div class="container">
<div class="row">
    <h3 style="text-align:center;">Course Registration Form</h3><br><br>

</div>


    <div class="row">
      <div class="col-md-10 col-md-offset-2">
<div class="col-md-2"><strong>Student Name </strong>:{{Auth::User()->name}}</div><br>
<div class="col-md-2"><strong>Roll </strong>:{{Auth::User()->studentid}}</div><br>
<div class="col-md-2"><strong>Email </strong>:{{Auth::User()->email}}</div><br>
<div class="col-md-2"><strong>Session </strong>:{{Auth::User()->academicssn}}</div><br>
<div class="col-md-2"><strong>Department Name </strong>:{{Auth::User()->department->name}}</div><br><br>

</div>
</div>
<div>
<hr>
  <table>
      <tr>
          <th>Course Code    </th>
          <th>   Course Title</th>
          <th>   Credit Hour</th>
          <th>   Year</th>
          <th>   term</th>
      </tr>
        @foreach($course as $course)

        @if((Auth::User()->department_id)==($course->department_id)&& ($registered->year)==($course->year)&& ($registered->term)==($course->term))

          <tr>

              <td>{{$course->course_code}}</td>
              <td>{{$course->course_title}}</td>
              <td>{{$course->credit_hour}}</td>
                <td>{{$course->year}}</td>
                <td>{{$course->term}}</td>





          </tr>

          @endif
      @endforeach
  <hr>

</table>

 </div>
</div>
</body>

</html>
