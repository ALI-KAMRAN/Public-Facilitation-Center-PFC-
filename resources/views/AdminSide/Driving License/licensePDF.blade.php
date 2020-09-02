<!DOCTYPE html>
<html lang="en">
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: center;    
}
</style>

    <title>Driving License</title>
</head>
<body>

<form action="{{action('licensecontroller@update',$student->id)}}" method="POST">

@csrf
<input type="hidden" name="_method" value="PATCH">
<img src="images/policemono.jpg" alt="pic" >
<center><h3>Capital City Police Officers</h3>
<h3>Gujranwala Pakistna</h3>        
<h3><u>Online Driving Licence</u></h3></center><br><img src="{{ asset('PFC/Driving_License/Applicant_Pic/' . $student['pic']) }}" alt="pic" width="120px" height="150px" align="right">  
Serial No:__<u>{{$student->id}}</u>__________          Date:_<u>{{$student->apply_date}}</u>_________     <br><br>    
This is to satisfy that Mr ___________<u>{{$student->name}}</u>________________ <br><br>
S/O ______________________<u>{{$student->f_name}}</u>_________________________ <br><br>
CNIC _____<u>{{$student->cnic}}</u>_____    Cell Number ______<u>{{$student->cell_no}}</u>___ 
<br><br>
<center><h2>HAVE MORE INFORMATION ABOUT APPLICANT</h2></center>
<table width="95%">
<tr>
    <th rowspan="2">Address</th>
    <th rowspan="2">Email Address</th>
    <th colspan="2">Purpose and Others Items</th>
   </tr>
  <tr>
    <th>License Type</th>
    <th>Blood Group</th>
  </tr>
  <tr>
    <td>{{$student->address}}</td>
    <td>{{$student->email}}</td>
    <td>{{$student->license_type}}</td>
    <td>{{$student->blood_group}}</td>
  </tr>
</table>
As per avaliable record of driving license (s):
<ul>

<li>This certificate may be used for the purpose of</li>
<li>Moter cycle and Motor car</li>
<li>This certificate valid for 180 days for the date of issuence</li>
<li>This is system generated license does not need to stamp & manual signature</li>
<li>The verification is the based of information provided by the applicant</li>
</ul>
Apply Dated : {{$student->apply_date}} <br>

<h3 style="margin-left: 60%;">(Faisael Shahzed Dar) PSP</h3> 
<h3 style="margin-left: 40%;">Superintendent of Police, Security, Gujranwala </h3>
<h3 style="margin-left: 60%;">for/Capital City Police Officer </h3>
<h3 style="margin-left: 65%;">Gujranwala</h3>







<button class="btn btn-success" style="margin-left:80%; ">PDF Generate</button>

</form>

</body>
</html>