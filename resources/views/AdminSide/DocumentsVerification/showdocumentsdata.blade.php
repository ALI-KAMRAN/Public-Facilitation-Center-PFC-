@extends('AdminSide/adminMasterPage/masterPage')
@section('number7')

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
<h3 align="center">Documents Verification Data</h3><br>
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
      <th scope="col">Father Name</th>
      <th scope="col">CNIC</th>
      <th scope="col">Address</th>
      
      <th scope="col">Purpose</th>
      <th scope="col">Detail</th>
      <th scope="col">Quantity</th>
      <th scope="col">Receipt</th>
      <th>Action</th>

    </tr>
  </thead>
  <tbody>
    
@foreach($students as $row)
<tr>
<td>{{$row['id']}}</td>
<td>{{$row['applicant_name']}}</td>
<td>{{$row['father_name']}}</td>
<td>{{$row['cnic']}}</td>
<td>{{$row['address']}}</td>


<td>{{$row['purpose']}}</td>
<td>{{$row['documents_detail']}}</td>
<td>{{$row['quantity']}}</td>
<th> <img src="{{ asset('PFC/Documents_Verification/Compulsory_Items/' . $row['receipt']) }}" alt="pic" width="90px" height="60px">   </th>
<td>
<form method="post" action="{{action('documentscontroller@destroy', $row['id'])}}">
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