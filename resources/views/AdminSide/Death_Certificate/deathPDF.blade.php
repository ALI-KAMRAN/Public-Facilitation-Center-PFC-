<!DOCTYPE html>
<html>
<head>
<style>
div {
  
  width: 400px;
  border: 1px solid;
  padding: 20px;
 
}
</style>
<title> Death Certificate </title>
</head>
<body>
<form action="{{action('deathcontroller@update',$student->id)}}" method="POST">

@csrf
<input type="hidden" name="_method" value="PATCH">
<img src="images/NADRA_logo.png" alt="pic" > <img src="images/govtpunlogo.png" alt="pic" >
<center><h2>Capital Development Authority</h2><br>
<h2>Death Registration Certification</h2>
 </center>
Form No: {{$student->id}} <br><br>
<center><h3>Deceased Person's Detail</h3> <br></center>

<div>
 Name:    {{$student->name}}<br><br>
 Nationality:   {{$student->nationality}} <br><br>
CNIC No:   {{$student->cnic}}<br><br>
Date of Birth: {{$student->dob}}<br><br>
Gender: {{$student->gender}} <br><br>
Religion: {{$student->religion}} <br><br>        
Date of Death: {{$student->death_date}}<br><br>
Place of Death: {{$student->death_place}}<br><br>
Reason of Death: {{$student->reason}}<br><br>
Complete Address: {{$student->address}}<br><br>
</div><br><br>
<center><h3>Parental Information</h3> <br></center>
<div>


Father Name: {{$student->f_name}}<br><br>
Father CNIC No: {{$student->f_cnic}}<br><br>
Mother Name: {{$student->m_name}}<br><br>

Mother CNIC No: {{$student->m_cnic}}<br><br>
</div>

<br><br>
Issued Consil: Union Counsil<br><br>
Entry Date: {{$student->apply_date}}<br><br>
<button class="btn btn-success" style="margin-left:80%; ">PDF Generate</button>

</form>
</body>
</html>