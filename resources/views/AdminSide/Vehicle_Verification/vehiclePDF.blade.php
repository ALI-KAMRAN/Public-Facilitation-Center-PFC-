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

    <title>Vehicle verification</title>
</head>
<body>

<form action="{{action('vehiclecontroller@update',$student->id)}}" method="POST">

@csrf
<input type="hidden" name="_method" value="PATCH">
<img src="images/policemono.jpg" alt="pic" >
<center><h3>Capital City Police Officers</h3>
<h3>Gujranwala Pakistna</h3>        
<h3><u>Police Vehicle verification</u></h3></center><br>  
Serial No:__<u>{{$student->id}}</u>__________    <br><br>    
This is to satisfy that Mr ___________<u>{{$student->name}}</u>________________ <br><br>
S/O ______________________<u>{{$student->f_name}}</u>_________________________ <br><br>
CNIC _____<u>{{$student->cnic}}</u>_____    Cell No ______<u>{{$student->cell_no}}</u>___ <br><br>
Gender _____<u>{{$student->gender}}</u>_____    Date of Birth ______<u>{{$student->dob}}</u>___ 
<h4>Having place and Period of stay as follow:-</h4>
<center><h2>VEHICLE VERIFICATION DETAIL</h2></center>
<table width="95%">
<tr>
    <th rowspan="2">Address</th>
    <th rowspan="2">District</th>
    <th colspan="2">Vehicle Description</th>
   </tr>
  <tr>
    <th>Vehicle Number</th>
    <th>Vehicle Detail</th>
  </tr>
  <tr>
    <td>{{$student->address}}</td>
    <td>{{$student->district}}</td>
    <td>{{$student->vehicle_no}}</td>
    <td>{{$student->vehicle_detail}}</td>
  </tr>
</table>
As per avaliable record of police station (s) the vehicle has:
<ul>
<li><b>{{$student->status}}</b> record found till date</li>
<li>This certificate may be used for the purpose of</li>
<li>Education and abroad purpose</li>
<li>This certificate valid for 180 days for the date of issuence</li>
<li>This is system generated certificate does not need to stamp & manual signature</li>
<li>The verification is the based of information provided by the applicant</li>
</ul>
Apply Dated : {{$student->apply_date}} <br>
Issued Dated : {{$student->issue_date}} 
<h3 style="margin-left: 60%;">(Faisael Shahzed Dar) PSP</h3> 
<h3 style="margin-left: 45%;">Superintendent of Police, Security, Gujranwala  </h3>
<h3 style="margin-left: 50%;">for/Capital City Police Officer Gujranwala</h3>








<button class="btn btn-success" style="margin-left:80%; ">PDF Generate</button>

</form>

</body>
</html>