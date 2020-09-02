@extends('AdminSide/adminMasterPage/masterPage')
@section('number1')


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Affidavit Report</title>
</head>
<body>
    


<div class="row">
<div class="col-md-12">
<br>
<h3 align="center">Affidavit Data</h3><br>
<center><table class="table table-hover table-dark" style="width:auto"  height="auto"></center>
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
    <th scope="col">Address</th>
<th scope="col">Whitness 1N </th>
      <th scope="col">Whitness 1F </th>
        <th scope="col">Whitness 2N</th>
        <th scope="col">Whitness 2F </th>
      <th scope="col">Affidavit Purpose </th>
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
<td>{{$row['f_name']}}</td>
<td>{{$row['address']}}</td>

<td>{{$row['whitness_1n']}}</td>
<td>{{$row['whitness_1f']}}</td>
<td>{{$row['whitness_2n']}}</td>
<td>{{$row['whitness_2f']}}</td>
<td>{{$row['affidavit_purpose']}}</td>
<td>{{$row['apply_date']}}</td>

<td>
<form method="post" action="{{action('affidavitController@destroy', $row['id'])}}">
@csrf
<input type="hidden" name="_method" value="DELETE">
<button type="submit" class="btn btn-danger" >Reject</button>
</form> 
</td>
<td>

<a href="{{action('affidavitController@edit', $row ['id'])}}"><button type="submit" class="btn btn-success" >Report</button></a>
</td>

<td>

<a href="{{action('adminlogin@exportData')}}"><button type="submit" class="btn btn-success" >Excel</button></a>
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