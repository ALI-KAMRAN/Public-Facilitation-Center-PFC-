@extends('AdminSide/adminMasterPage/masterPage')
@section('number13')

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Vehicle Verification</title>
</head>
<body>
    


<div class="row">
<div class="col-md-12">
<br>
<h3 align="center">Vehicle Verification Data</h3><br>
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
    <th scope="col">DOB</th>
    <th scope="col">Address</th>
    <th scope="col">District</th>
    <th scope="col">Cell No</th>
    <th scope="col">Vehicle No</th>
    <th scope="col">Vehicle Detail</th>
    <th scope="col">Apply_Date</th>
    <th>Action</th>

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
<td>{{$row['address']}}</td>
<td>{{$row['district']}}</td>
<td>{{$row['cell_no']}}</td>
<td>{{$row['vehicle_no']}}</td>
<td>{{$row['vehicle_detail']}}</td>
<td>{{$row['apply_date']}}</td>



<td>
<form method="post" action="{{action('vehiclecontroller@destroy', $row['id'])}}">
@csrf
<input type="hidden" name="_method" value="DELETE">
<button type="submit" class="btn btn-danger" >Reject</button>
</form> 
</td>
<td>

<a href="{{ action ('vehiclecontroller@edit', $row ['id'])}}"><button type="submit" class="btn btn-success" >Report</button></a>
</td>

<td>
<a href="{{action ('vehicleStatusC@show', $row ['id'])}}"><button type="submit" class="btn btn-success"> Verify </span></button></a>
</td>

<td>
<a href="{{action ('vehicleStatusC@edit', $row ['id'])}}"><button type="submit" class="btn btn-info">Status</button></a>


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