@extends('AdminSide/adminMasterPage/masterPage')
@section('lawyerdata')

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    


<div class="row">
<div class="col-md-12">
<br>
<h3 align="center">Lawyer Data</h3><br>
<center><table class="table table-hover table-dark" style="width:90%"  height="auto"></center>
  <thead>
  @if(\Session::has('success'))
<div class="alert alert-danger">
<p>{{\Session::get('success')}} </p>
</div>
@endif
    <tr>
    <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Country</th>
      <th scope="col">Email</th>
      <th scope="col">Cell Number</th>
      <th scope="col">Education</th>
      <th scope="col">City</th>
      <th scope="col">DOB</th>
      <th scope="col">Lawyer Type</th>
      <th scope="col">Experience</th>
      <th>Action</th>

    </tr>
  </thead>
  <tbody>
    
@foreach($students as $row)
<tr>
<td>{{$row['id']}}</td>
<td>{{$row['name']}}</td>
<td>{{$row['lname']}}</td>
<td>{{$row['country']}}</td>
<td>{{$row['email']}}</td>
<td>{{$row['contact']}}</td>
<td>{{$row['education']}}</td>
<td>{{$row['city']}}</td>
<td>{{$row['birth']}}</td>
<td>{{$row['lawyerType']}}</td>
<td>{{$row['experience']}}</td>
<td>
<form method="post" action="{{action('lawyerinformation@destroy', $row['id'])}}">
@csrf
<input type="hidden" name="_method" value="DELETE">
<button type="submit" class="btn btn-danger" >Reject</button>
</form>
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