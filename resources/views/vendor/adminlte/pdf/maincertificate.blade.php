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
</head>

<body>
  <div class="container">
<div class="row">
  <h2 style="text-align:center;">Noakhali Science And Technology University</h2>
  <h4 style="text-align:center;">Noakhali-3814,Bangladesh</h4><br>
    <h3 style="text-align:center;">Course Registration Form</h3><br><br>
    <div class="col-md-2" style=" padding-left:600px;padding-bottom:-120px;">
      <div style="height:100px; border:1px solid; text-align:center; padding-top:50px;">Add Photo Here</div>
    </div>
</div>


    <div class="row">
      <div class="col-md-8 " style="padding-left:50px;">
<div class="col-md-2"><strong>Student Name </strong>:{{Auth::User()->name}}</div><br>
<div class="col-md-2"><strong>Roll </strong>:{{Auth::User()->studentid}}</div><br>
<div class="col-md-2"><strong>Email </strong>:{{Auth::User()->email}}</div><br>
<div class="col-md-2"><strong>Session </strong>:{{Auth::User()->academicssn}}</div><br>
<div class="col-md-2"><strong>Father's Name:</strong>............................</div><br>
<div class="col-md-2"><strong>Mother's Name:</strong>............................</div><br>
<div class="col-md-2"><strong>Department Name </strong>:{{Auth::User()->department->name}}</div><br>
<div class="col-md-2"><strong>Hall :</strong>Abdus Salam Hall</div><br>
<div class="col-md-2"><strong>Date Of Commencement Of Examination:</strong>............................</div><br><br>
</div>
</div>
<div style="padding-left:50px;">
<div style="padding-left:90px;">
  <table>
      <tr>
          <th>Sl No.</th>
          <th>Course Code    </th>
          <th>   Course Title</th>
          <th>   Credit Hour</th>
          <th>   Year</th>
          <th>   term</th>
      </tr>


</table>
</div>
<br>
<div>
<strong>Percentage of Attendance:</strong>.....................................


</div>
<br><br><br><br>

 </div>
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

</div>
<br>
<div class="page-break"></div>

</body>

</html>
