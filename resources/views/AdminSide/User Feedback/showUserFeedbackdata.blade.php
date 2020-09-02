@extends('AdminSide/adminMasterPage/masterPage')
@section('number12')

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>User Feedback</title>
</head>
<body>
    


<div class="row">
<div class="col-md-12">
<br>
<h3 align="center">User Feedback Data</h3><br>
<center><table class="table table-hover table-dark" style="width:95%"  height="auto"></center>
  <thead>
  @if(\Session::has('success'))
<div class="alert alert-danger">
<p>{{\Session::get('success')}} </p>
</div>
@endif
    <tr>
    <th scope="col">#</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Phone No</th> 
    <th scope="col">Message</th> 
    <th scope="col">Apply Date</th>
      <th>Action</th>

    </tr>
  </thead>
  <tbody>
    
@foreach($students as $row)
<tr>
<td>{{$row['id']}}</td>
<td>{{$row['name']}}</td>
<td>{{$row['email']}}</td>
<td>{{$row['cell_no']}}</td>
<td>{{$row['message']}}</td>
<td>{{$row['apply_date']}}</td>
<td>
<form method="post" action="{{action('feedbackController@destroy', $row['id'])}}">
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