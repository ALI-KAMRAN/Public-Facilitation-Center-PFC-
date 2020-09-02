@extends('AdminSide/adminMasterPage/masterPage')
@section('number5')

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Death Certificate</title>
</head>
<body>
    


<div class="row">
<div class="col-md-12">
<br>
<h3 align="center">Death Certificate Data</h3><br>
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
    <th scope="col">Nationality</th> 
    <th scope="col">Birthday</th> 
    <th scope="col">Gender</th>
      <th scope="col">Religion</th>
      <th scope="col">Date of Death</th>
      <th scope="col">Place of Death</th>
      <th scope="col">Reason of Death</th>
      
      <th scope="col">Father Name</th>
      <th scope="col">Father CNIC</th>
      <th scope="col">Mother Name</th>
      <th scope="col">Mother CNIC</th>
      <th scope="col">Apply Date</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    
@foreach($students as $row)
<tr>
<td>{{$row['id']}}</td>
<td>{{$row['cnic']}}</td>
<td>{{$row['name']}}</td>
<td>{{$row['nationality']}}</td>
<td>{{$row['dob']}}</td>
<td>{{$row['gender']}}</td>
<td>{{$row['religion']}}</td>
<td>{{$row['death_date']}}</td>
<td>{{$row['death_place']}}</td>


<td>{{$row['reason']}}</td>
<td>{{$row['f_name']}}</td>
<td>{{$row['f_cnic']}}</td>
<td>{{$row['m_name']}}</td>
<td>{{$row['m_cnic']}}</td>
<td>{{$row['apply_date']}}</td>


<td>
<form method="post" action="{{action('deathcontroller@destroy', $row['id'])}}">
@csrf
<input type="hidden" name="_method" value="DELETE">
<button type="submit" class="btn btn-danger" >Reject</button>
</form> 
</td>
<td>

<a href="{{ action ('deathcontroller@edit', $row ['id'])}}"><button type="submit" class="btn btn-success" >Report</button></a>
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