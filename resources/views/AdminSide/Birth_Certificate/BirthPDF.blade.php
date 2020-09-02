<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding: 10px;
}


</style>
<title> Birth Certificate </title>
</head>
<body>

<form action="{{action('birthcontroller@update',$student->id)}}" method="POST">

@csrf
<input type="hidden" name="_method" value="PATCH">
<img src="images/consilloho.jpg" alt="pic" > <img src="images/govtpunlogo.png" alt="pic" >

<center><h2>The Government of Punjab Pakistn</h2><br>
<h2>BIRTH CERTIFICATE</h2></center><br>
Form # __<u>{{$student->id}}___</u>_   <p align="right">ID #__<u>{{$student->id}}____</u>_<p> 

<br>
APPLICANT NAME : ____<u>_{{$student->applicant_name}}______</u>____________________ <br>
<br>
APPLICANT CNIC No : ____<u>__{{$student->applicant_cnic}}_____</u>__________    RELATION:_<u>__{{$student->relation_child}}_____</u>
<br><br><br><br>
<table style="width:100%">
  <tr>
    <th>CHILD NAME</th>
    <th>FATHER NAME</th> 
    <th>MOTHER NAME</th>
    <th>GENDER</th>
    <th>RELIGION</th>
    <th>DISTRICT & DOB</th>
  </tr>
  <tr style="height:200px" >
    <td>{{$student->child_name}}</td>
    <td>{{$student->f_name}}</td>
    <td>{{$student->m_name}}</td>
    <td>{{$student->gender}}</td>
    <td>{{$student->religion}}</td>
    <td>{{$student->district}}  <br><br><br> {{$student->dob}}</td>
  </tr>
  </table>
<br><br>
GRAND FATHER NAME : ____<u>_{{$student->g_father}}______</u>____________________
<br><br>
GRAND FATHER CNIC No : ____<u>_{{$student->g_cnic}}______</u>__________   
<br><br> ADDRESS:_<u>_{{$student->address}}______</u> <br><br>
APPLY DATE: _<u>_{{$student->apply_date}}______</u>_______



<button class="btn btn-success" style="margin-left:80%; ">PDF Generate</button>

</form>
</body>
</html>
