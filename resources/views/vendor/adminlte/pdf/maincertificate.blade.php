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
  <h4 style="text-align:center;">Noakhali-3814,Bangladesh</h4>
    <h4 style="text-align:center;">BSc/Pharmacy/MSc</h4>
    <h4 style="text-align:center;">Application For Main Certificate/Provisional Certificate</h4>
    <div class="col-md-2" style=" padding-left:620px;padding-top:-200px;">
      <div style="height:120px; border:1px solid; text-align:center; padding-top:20px;">Add A Passport Size Photo Attested By Chairman Of Your Department</div>
    </div>
</div>


    <div class="row">
      <div class="col-md-8 " style="padding-left:50px;">
<div class="col-md-2" ><strong>01.Student Name :</strong>{{strtoupper(Auth::User()->name)}}</div><br>
<div class="col-md-2" style="text-align:left;padding-top:-5px;padding-right:50px;"><strong>02.Father's Name:</strong>{{strtoupper(Auth::User()->father_name)}}</div><br>
<div class="col-md-2" style="text-align:right;padding-top:-35px;padding-right:30px;"><strong>03.Mother's Name:</strong>{{strtoupper(Auth::User()->mother_name)}}</div>
<div class="col-md-2" ><strong>04.Parmanent Address:</strong>{{Auth::User()->parmanent_address}}</div><br>
<div class="col-md-2" ><strong>05.Mailing Address:</strong>{{Auth::User()->mailing_address}}</div><br>


<div class="col-md-2" style="text-align:left;"><strong>06.Mobile Number:</strong>{{strtoupper(Auth::User()->mobile_number)}}</div>
<div class="col-md-2" style="text-align:center;padding-top:-20px;padding-right:50px;"><strong>07.Exam Year:</strong>...................</div>
<div class="col-md-2" style="text-align:right;padding-top:-20px;padding-right:30px;"><strong>08.Result Publish date:</strong>....................</div><br>
<div class="col-md-2" style="text-align:left;"><strong>09.Roll </strong>:{{strtoupper(Auth::User()->studentid)}}</div><br>
<div class="col-md-2" style="text-align:center;padding-top:-40px;padding-right:50px;"><strong>10.Email </strong>:{{Auth::User()->email}}</div><br>
<div class="col-md-2" style="text-align:right;padding-top:-60px;padding-right:30px;"><strong>11.Session </strong>:{{Auth::User()->academicssn}}</div>
<div class="col-md-2" style="text-align:left;padding-top:-20px;"><strong>12.CGPA </strong>:..........</div>
<div class="col-md-2" style="text-align:center;padding-top:-20px;padding-right:70px;"><strong>13.Total Credite </strong>:...................</div><br>
<div class="col-md-2" style="text-align:right;padding-top:-40px;padding-right:20px;"><strong>14.Completed Credite </strong>:................</div>
<div class="col-md-2" style="text-align:left;padding-top:-10px;"><strong>15.Date Of Birth </strong>:.............................</div>
<div class="col-md-2" style="text-align:center;padding-top:-20px;padding-right:30px;"><strong> Department Name </strong>: {{Auth::User()->department->name}}</div><br>
<div class="col-md-2" style="text-align:right;padding-top:-40px;padding-right:20px;"><strong>Hall :</strong>Abdus Salam Hall</div>
</div>

</div>
<div style="text-align:left;padding-left:50px;">
<p > I, <strong>{{strtoupper(Auth::User()->name)}}</strong> , here by declare that the above furnished information is authentic to the best of my knowledge. </p>
</div>
<div style="text-align:left;padding-top:10px;padding-left:50px;">
<strong>Date:</strong>...............................
</div>
<div style="text-align:right;padding-top:-50px;padding-right:30px;">
<p>.................................... </p>
<strong>Applicant Signature</strong>
</div>
 <div style="text-align:left;padding-top:5px;padding-left:50px;">
<p>---------------------</p>
       <strong>Provost</strong>
     </div>
<div style="text-align:right;padding-top:-50px;padding-right:30px;">
<p>---------------------</p>
 <strong>Department Chairman</strong>
</div>
<div style="text-align:center;"><p>For Office Use Only</p>
</div>
<div style="text-align:left;padding-left:50px;">
<p > <strong>Serial Number:</strong>.....................Certificate Issued On <strong>Date:</sttrong>................</p>
</div>
<div style="text-align:center;padding-top:5px;padding-left:50px;">
<p>---------------------</p>
      <strong>Made by</strong>
    </div>
<div style="text-align:left;padding-top:-70px;padding-left:50px;">
<p>---------------------</p>
      <strong>Auditor</strong>
    </div>
<div style="text-align:right;padding-top:-70px;padding-right:30px;">
<p>---------------------</p>
<strong>Exam Controller</strong>
</div>
<div style="text-align:left;padding-left:50px;">
<p ><strong>Note:</strong>Applicant Must Have to Attach Attested Photocopy Of SSC/HSC Certificate With This Application Form.If there Is Any Mistake Please Return The Certificate To Exam Controller Office. </p>
</div>
 </div>

<br>
<div class="page-break"></div>

<div class="row">
  <h2 style="text-align:center;">Noakhali Science And Technology University</h2>
  <h4 style="text-align:center;">Noakhali-3814,Bangladesh</h4>

</div>
<div class="col-md-2" style="text-align:left;padding-left:50px;"><strong>01.Student Name :</strong>{{strtoupper(Auth::User()->name)}}</div><br>
<div class="col-md-2" style="text-align:left;padding-left:50px;"><strong>02.Department Name :</strong>{{Auth::User()->department->name}}</div><br>
<div class="col-md-2" style="text-align:left;padding-left:50px;"><strong>03.Session :</strong>{{Auth::User()->academicssn}}</div><br>
<div class="col-md-2" style="text-align:left;padding-left:50px;" ><strong>04.Roll :</strong>{{strtoupper(Auth::User()->studentid)}}</div><br>
<div class="col-md-2" style="text-align:left;padding-left:50px;"><strong>05.Passing Year :</strong>.......................</div><br>

<div style="padding-left:50px;">


  <table class="table" style="border:1px solid;width:100%">

<tr>
      <th style="text-align:center;">Field</th>
      <th>Yes</th>
      <th>No</th>
      <th>Comment</th>

</tr>


          <tr>
              <td>Department Head</td>
              <td></td>
              <td></td>
              <td></td>

          </tr>
          <tr>

              <td>Provost</td>
              <td></td>
              <td></td>
              <td></td>

          </tr>
          <tr>

              <td>Librarian</td>
              <td></td>
              <td></td>
              <td></td>

          </tr>

  </table>

</div>

<div style="text-align:left;padding-top:200px;padding-left:50px;">

<p>(seal and signature)</p>
<p>---------------------</p>
      <strong>Department Head</strong>
    </div>
<div style="text-align:center;padding-top:-30px;padding-left:50px;">

<p>(seal and signature)</p>
<p>---------------------</p>
      <strong>Provost</strong>
    </div>
<div style="text-align:right;padding-top:30px;padding-right:10px;">

<p>(seal and signature)</p>
<p>---------------------</p>
<strong>Librarian</strong>
</div>

</body>

</html>
