<!DOCTYPE html>
<html>
<head>
<style>
div {
  
  width: 400px;
  border: 1px solid;
  padding: 20px;
 
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
<title> Loss Report </title>
</head>
<body>
<form action="{{action('losscontroller@update',$student->id)}}" method="POST">

@csrf
<input type="hidden" name="_method" value="PATCH">
<img src="images/policemono.jpg" alt="pic" > <img align="right" src="images/govtpunlogo.png" alt="pic" >


<center><h2>Police Khidmat Markaz</h2>
<h2>The City Police Officer,Gujranwala</h2>
</center>
Form No: {{$student->id}}
<table style="width:100%" >
  <tr>
    <td>Service Request</td>
    <td>Loss Report</td> 
    <td >Photo</td>
  </tr>
  <tr>
    <td>Name</td>
    <td>{{$student->name}}</td>
    <th rowspan="05"><img src="{{ asset('PFC/Loss_Report/Applicant_pic/' . $student['applicant_pic']) }}" alt="pic" width="120px" height="120px" ></th>
  </tr>
  <tr>
    <td>Son of</td>
    <td>{{$student->f_name}}</td>
    
  </tr>
  <tr>
    <td>CNIC</td>
    <td>{{$student->cnic}}</td>
    
  </tr>
 
  <tr>
    <td>Contact No</td>
    <td>{{$student->cell_no}}</td>
   
  </tr>
  <tr>
    <td>Gender</td>
    <td>{{$student->gender}}</td>
    
  </tr>
  <tr>
    <td >Email Address</td>
    <td colspan="2">{{$student->email}}</td>
    
  </tr>
  
  </table>
<br><br>
<table style="width:100%;text-align:left">
  <tr>
    <td>Apply Date</td>
    <td>{{$student->apply_date}}</td> 
    <td>Lost Area</td>
    <td>{{$student->lost_area}}</td>
  </tr>
  <tr>
    <td>Lost Detail</td>
    <td>{{$student->loss_detail}}</td>
    <td>Lost District</td>
    <td>{{$student->lost_district}}</td>
  </tr>
  
  </table>
  <br>
  <table style="width:100%;text-align:left">
  <tr>
    <td >Complete Address</td>
    <td >Police Station</td> 
    <td >Lost Items</td>
    
  </tr>
  <tr>
    <td >{{$student->address}}</td>
    <td >{{$student->police_station}}</td>
    <td >{{$student->lost_item}}</td>
    </tr>
 </table>

<p>Note: Solemnly declare that all information written in the form is correct and have been complete by himself</p>


<button class="btn btn-success" style="margin-left:80%; ">PDF Generate</button>

</form>
</body>
</html>