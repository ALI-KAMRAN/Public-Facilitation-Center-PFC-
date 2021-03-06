@extends('AdminSide/adminMasterPage/masterPage')
@section('number4')


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Crime Report</title>
</head>
<body>
    


<div class="row">
<div class="col-md-12">
<br>
<h3 align="center">Crime Report Data</h3><br>
<center><table class="table table-hover table-dark" style="width:95%"  height="auto"></center>
  <thead>
  @if(\Session::has('success'))
<div class="alert alert-danger">
<p>{{\Session::get('success')}} </p>
</div>
@endif
    <tr>
    <th scope="col">#</th>
    <th scope="col">CNIC</th>
    <th scope="col">Name</th>
    <th scope="col">Father Name</th>
    <th scope="col">Birthday</th> 
    <th scope="col">Gender</th>
    <th scope="col">Cell No</th>
    <th scope="col">Address</th>
    <th scope="col">Crime Type </th>
      <th scope="col">Crime Detail </th>
        <th scope="col">District</th>
      <th scope="col">Apply Date</th>
      <th scope="col">Applicant Pic</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    
@foreach($students as $row)
<tr>
<td>{{$row['id']}}</td>
<td>{{$row['cnic']}}</td>
<td>{{$row['name']}}</td>
<td>{{$row['f_name']}}</td>
<td>{{$row['dob']}}</td>
<td>{{$row['gender']}}</td>
<td>{{$row['cell_no']}}</td>
<td>{{$row['address']}}</td>
<td>{{$row['crime_type']}}</td>
<td>{{$row['crime_detail']}}</td>

<td>{{$row['district']}}</td>

<td>{{$row['apply_date']}}</td>
<th> <img src="{{ asset('PFC/Crime_Report/Applicant_pic/' . $row['applicant_pic']) }}" alt="pic" width="90px" height="60px">   </th>

<td>
<form method="post" action="{{action('crimecontroller@destroy', $row['id'])}}">
@csrf
<input type="hidden" name="_method" value="DELETE">
<button type="submit" class="btn btn-danger" >Reject</button>
</form> 
</td>
<td>

<a href="{{ action ('crimecontroller@edit', $row ['id'])}}"><button type="submit" class="btn btn-success" >Report</button></a>
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