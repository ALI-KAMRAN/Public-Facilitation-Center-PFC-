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

    <title>Character Certificate</title>
</head>
<body>

<form action="{{action('charactercontroller@update',$student->id)}}" method="POST">

@csrf
<input type="hidden" name="_method" value="PATCH">
<img src="images/policemono.jpg" alt="pic" >
<center><h3>Capital City Police Officers</h3>
<h3>Gujranwala Pakistna</h3>        
<h3><u>Police Character Certificate</u></h3></center><br><img src="{{ asset('PFC/Character_Certificate/Applicant_pic/' . $student['pic']) }}" alt="pic" width="120px" height="150px" align="right">  
Serial No:__<u>{{$student->id}}</u>__________          Date:_<u>{{$student->apply_date}}</u>_________     <br><br>    
This is to satisfy that Mr ___________<u>{{$student->applicant_name}}</u>________________ <br><br>
S/O ______________________<u>{{$student->father_name}}</u>_________________________ <br><br>
CNIC _____<u>{{$student->cnic}}</u>_____    Passport No ______<u>{{$student->passport}}</u>___ 
<h4>Having place and Period of stay as follow:-</h4>
<center><h2>PLACE AND PERIOD OF STAY</h2></center>
<table width="95%">
<tr>
    <th rowspan="2">Address</th>
    <th rowspan="2">Police Station</th>
    <th colspan="2">Stay Period</th>
   </tr>
  <tr>
    <th>From</th>
    <th>To</th>
  </tr>
  <tr>
    <td>{{$student->address}}</td>
    <td>{{$student->police_station}}</td>
    <td>{{$student->from}}</td>
    <td>{{$student->to}}</td>
  </tr>
</table>
As per avaliable record of police station (s) the applicant has:
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
<h3 style="margin-left: 50%;">Superintendent of Police, Security, Lahore  </h3>
<h3 style="margin-left: 60%;">for/Capital City Police Officer </h3>
<h3 style="margin-left: 65%;">Gujranwala</h3>







<button class="btn btn-success" style="margin-left:80%; ">PDF Generate</button>

</form>

</body>
</html>