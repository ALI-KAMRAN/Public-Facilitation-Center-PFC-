@extends('AdminSide/adminMasterPage/masterPage')
@section('number6')
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Divorce Certificate</title>
</head>
<body>
    


<div class="row">
<div class="col-md-12">
<br>
<h3 align="center">Divorce Certificate Data</h3><br>
<center><table class="table table-hover table-dark" style="width:95%"  height="auto"></center>
  <thead>
  @if(\Session::has('success'))
<div class="alert alert-danger">
<p>{{\Session::get('success')}} </p>
</div>
@endif
    <tr>
    <th scope="col">#</th>
    <th scope="col">G_CNIC</th>
    <th scope="col">G_Name</th>
    <th scope="col">G_F_Name</th> 
    <th scope="col">G_Religion</th> 
    <th scope="col">G_Nationality</th>
      <th scope="col">G_DOB</th>
      <th scope="col">G_Status</th>
      <th scope="col">G_Tehsil</th>
      <th scope="col">G_Address</th>
      <th scope="col">G_District</th>
      <th scope="col">B_CNIC</th>
    <th scope="col">B_Name</th>
    <th scope="col">B_F_Name</th> 
    <th scope="col">B_Religion</th> 
    <th scope="col">B_Nationality</th>
      <th scope="col">B_DOB</th>
      <th scope="col">B_Status</th>
      <th scope="col">B_Tehsil</th>
      <th scope="col">B_Address</th>
      <th scope="col">B_District</th>
      
      <th scope="col">Apply_Date</th>
      <th>Action</th>

    </tr>
  </thead>
  <tbody>
    
@foreach($students as $row)
<tr>
<td>{{$row['id']}}</td>
<td>{{$row['g_cnic']}}</td>
<td>{{$row['g_name']}}</td>
<td>{{$row['g_f_name']}}</td>
<td>{{$row['g_religion']}}</td>
<td>{{$row['g_nationality']}}</td>
<td>{{$row['g_dob']}}</td>
<td>{{$row['g_status']}}</td>
<td>{{$row['g_tehsil']}}</td>
<td>{{$row['g_address']}}</td>
<td>{{$row['g_district']}}</td>
<td>{{$row['b_cnic']}}</td>
<td>{{$row['b_name']}}</td>
<td>{{$row['b_f_name']}}</td>
<td>{{$row['b_religion']}}</td>
<td>{{$row['b_nationality']}}</td>
<td>{{$row['b_dob']}}</td>
<td>{{$row['b_status']}}</td>
<td>{{$row['b_tehsil']}}</td>
<td>{{$row['b_address']}}</td>
<td>{{$row['b_district']}}</td>



<td>{{$row['apply_date']}}</td>



<td>
<form method="post" action="{{action('divorcecontroller@destroy', $row['id'])}}">
@csrf
<input type="hidden" name="_method" value="DELETE">
<button type="submit" class="btn btn-danger" >Reject</button>
</form> 
</td>
<td>

<a href="{{ action ('divorcecontroller@edit', $row ['id'])}}"><button type="submit" class="btn btn-success" >Report</button></a>
</td>



</tr> 
@endforeach


</tbody>
</table>

</div>



</div>

</body>
</html>
@endsection