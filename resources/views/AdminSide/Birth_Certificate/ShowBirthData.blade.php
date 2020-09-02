@extends('AdminSide/adminMasterPage/masterPage')
@section('number2')


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Birth Certificate</title>
</head>
<body>
    


<div class="row">
<div class="col-md-12">
<br>
<h3 align="center">Birth Certificate Data</h3><br>
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
    <th scope="col">Relation with Child</th>
    <th scope="col">Child Name</th>
    <th scope="col">F_Name</th> 
    <th scope="col">Mother Name</th> 
    <th scope="col">Address</th>
      <th scope="col">Gender</th>
      <th scope="col">Religion</th>
      <th scope="col">Applay Date</th>
      <th scope="col">District</th>
      <th scope="col">G_F_Name</th>
      <th scope="col">G_F_CNIC</th>
      <th scope="col">Picture</th>
      <th>Action</th>

    </tr>
  </thead>
  <tbody>
    
@foreach($students as $row)
<tr>
<td>{{$row['id']}}</td>
<td>{{$row['applicant_cnic']}}</td>
<td>{{$row['applicant_name']}}</td>
<td>{{$row['relation_child']}}</td>
<td>{{$row['child_name']}}</td>
<td>{{$row['f_name']}}</td>
<td>{{$row['m_name']}}</td>
<td>{{$row['address']}}</td>
<td>{{$row['gender']}}</td>
<td>{{$row['religion']}}</td>
<td>{{$row['apply_date']}}</td>
<td>{{$row['district']}}</td>
<td>{{$row['g_father']}}</td>
<td>{{$row['g_cnic']}}</td>


<th> <img src="{{ asset('PFC/Birth_Certificate/Child_pic/' . $row['child_pic']) }}" alt="pic" width="90px" height="60px">   </th>
<td>
<form method="post" action="{{action('birthcontroller@destroy', $row['id'])}}">
@csrf
<input type="hidden" name="_method" value="DELETE">
<button type="submit" class="btn btn-danger" >Reject</button>
</form> 
</td>
<td>

<a href="{{ action ('birthcontroller@edit', $row ['id'])}}"><button type="submit" class="btn btn-success" >Report</button></a>
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