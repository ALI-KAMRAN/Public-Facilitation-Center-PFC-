@extends('AdminSide/adminMasterPage/masterPage')
@section('number3')

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Character Certificate</title>
    <link rel="stylesheet" href="mobirise/style.css">
</head>
<body>

<div class="row">
<div class="col-md-12">
<br>
<h3 align="center">Character Certificate Data</h3><br>
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
    <th scope="col">F_Name</th> 
    <th scope="col">Passport</th> 
    <th scope="col">Address</th>
      <th scope="col">From</th>
      <th scope="col">TO</th>
      <th scope="col">Applay Date</th>
      <th scope="col">Police Station</th>
      <th scope="col">Picture</th>
      <th>Action</th>

    </tr>
  </thead>
  <tbody>
    
@foreach($students as $row)
<tr>
<td>{{$row['id']}}</td>
<td>{{$row['cnic']}}</td>
<td>{{$row['applicant_name']}}</td>
<td>{{$row['father_name']}}</td>
<td>{{$row['passport']}}</td>
<td>{{$row['address']}}</td>
<td>{{$row['from']}}</td>
<td>{{$row['to']}}</td>
<td>{{$row['apply_date']}}</td>
<td>{{$row['police_station']}}</td>

<th> <img src="{{ asset('PFC/Character_Certificate/Applicant_pic/' . $row['pic']) }}" alt="pic" width="90px" height="60px">   </th>
<td>
<form method="post" action="{{action('charactercontroller@destroy', $row['id'])}}">
@csrf
<input type="hidden" name="_method" value="DELETE">
<button type="submit" class="btn btn-danger" >Reject</button>
</form> 
</td>

<td>
<a href="{{ action ('charactercontroller@edit', $row ['id'])}}"><button type="submit" class="btn btn-success" >Report </button></a>
</td>

<td>
<a href="{{action ('characterStatusC@show', $row ['id'])}}"><button type="submit" class="btn btn-success"> Verify </span></button></a>
</td>

<td>
<a href="{{action ('characterStatusC@edit', $row ['id'])}}"><button type="submit" class="btn btn-info">Status</button></a>


</td>


</tr> 
@endforeach
</tbody>
</table>
</div>
</div>







<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>

@endsection