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
<title> Divorce Certificate </title>
</head>
<body>
<form action="{{action('divorcecontroller@update',$student->id)}}" method="POST">

@csrf
<input type="hidden" name="_method" value="PATCH">
<img src="images/NADRA_logo.png" alt="pic" > <img src="images/govtpunlogo.png" alt="pic" >
<center><h2>Government Of Punjab Pakistan</h2><br>
<h2>Divorce Registration Certification</h2></center>
<h3>Mode of Divorce:Talaq</h3
<center><h3>Divorcer's Details</h3></center> <br> 
Form No: {{$student->id}} <br><br>


<div>
Name:    {{$student->g_name}}<br><br>
Nationality:   {{$student->g_nationality}} <br><br>
CNIC No:   {{$student->g_cnic}}<br><br>
Religion: {{$student->g_religion}}<br><br>
Age: {{$student->g_dob}}<br><br>
Maritual Status: {{$student->g_status}}<br><br>
Father Name: {{$student->g_f_name}}<br><br>
CNIC No: {{$student->g_cnic}}<br><br>
Address: {{$student->g_address}}<br><br>
Tehsil: {{$student->g_tehsil}}<br><br>
District: {{$student->g_district}}<br><br>
</div>
<br><center><h3>Divorcer's Details</h3> <br> </center>
<div>
Name:{{$student->b_name}}<br><br>
Nationality:{{$student->b_nationality}}<br><br>
CNIC No:{{$student->b_cnic}}<br><br>
Religion: {{$student->b_religion}}<br><br>
Age:{{$student->b_dob}}<br><br>
Maritual Status:{{$student->b_status}}<br><br>
Father Name:{{$student->b_f_name}}<br><br>
CNIC No:{{$student->b_cnic}}<br><br>
Address:{{$student->b_address}}<br><br>
Tehsil: {{$student->b_tehsil}}<br><br>
District:{{$student->b_district}}<br><br>

</div>
<br><br>
Autherity Granting: Union Consil<br><br>

Entry Date: {{$student->apply_date}}<br><br>
<button class="btn btn-success" style="margin-left:80%; ">PDF Generate</button>

</form>
</body>
</html>