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

    <title>Crime Report</title>
</head>
<body>

<form action="{{action('crimecontroller@update',$student->id)}}" method="POST">

@csrf
<input type="hidden" name="_method" value="PATCH">
<img src="images/policemono.jpg" alt="pic" >
<center><h3>Capital City Police Officers</h3>
<h3>Gujranwala Pakistna</h3>        
<h3><u>Police Crime Report</u></h3></center><br><img src="{{ asset('PFC/Crime_Report/Applicant_pic/' . $student['applicant_pic']) }}" alt="pic" width="120px" height="150px" align="right">  
Serial No:__<u>{{$student->id}}</u>__________          Date:_<u>{{$student->apply_date}}</u>_________     <br><br>    
The Applicant Name Mr/Ms ___________<u>{{$student->name}}</u>________________ <br><br>
Applicant Father Name (S/O) ______________________<u>{{$student->f_name}}</u>_________________________ <br><br>
CNIC _____<u>{{$student->cnic}}</u>_____  Date of Birth ______<u>{{$student->dob}}</u>___ 

<center><h2>Crime Report Description</h2></center>
<table width="95%">
<tr>
    <td>Applicant Address</td>
    <td>{{$student->address}}</td>
   <td>Email </td>
    <td>{{$student->email}}</td>
   </tr>
  
  <tr>
    <td>Cell No</td>
    <td>{{$student->cell_no}}</td>
    <td>Crime Type</td>
    <td>{{$student->crime_type}}</td>
    
  </tr>
  
  <tr>
    <td>Crime District</td>
    <td>{{$student->district}}</td>
    <td>Crime Detail</td>
    <td>{{$student->crime_detail}}</td>
    
  </tr>
</table>
As per avaliable record of police station (s) the applicant:{{$student->applicant_name}}
<ul>
<li>Have registered crime report</li>
<li>This report may be used for the purpose of</li>
<li>Save Illegal Activities</li>
<li>This report valid for 180 days for the date of issuence</li>
<li>This is system generated report does not need to stamp & manual signature</li>
<li>The report is the based of information provided by the applicant</li>
</ul>
Apply Dated : {{$student->apply_date}} <br>
Issued Dated : {{$student->issue_date}} 
<h3 style="margin-left: 55%;">(Faisael Shahzed Dar) PSP</h3> 
<h3 style="margin-left: 40%;">Superintendent of Police, Security, Gujranwala  </h3>
<h3 style="margin-left: 55%;">for/Capital City Police Officer </h3>
<h3 style="margin-left: 65%;">Gujranwala</h3>







<button class="btn btn-success" style="margin-left:80%; ">PDF Generate</button>

</form>

</body>
</html>