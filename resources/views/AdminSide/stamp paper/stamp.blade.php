

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Stamp Paper</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>

<!--  start the toggle model    -->

    <!-- Button trigger modal -->
<button style="margin-top:50px; margin-left:40px" type="button" class="btn btn-success" data-toggle="modal" data-target="#addstamp">
  Add Stamp Papers
</button>

<a href="{{url('adminPage')}}"><button style="margin-top:50px; margin-left:40px" type="button" class="btn btn-success" >
  Back Admin Dashboard
</button></a> 



<!-- Modal -->
<div class="modal fade" id="addstamp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Stamp Papers Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" class="form-design" action="{{ action('stampcontroller@store')}}" enctype="multipart/form-data">
      @csrf
      <div class="modal-body">
    
      
  <div class="form-group">
    <label >Stamp Title</label>
    <select name="stamp_title" class="form-control">
    <option value="None">Select Options</option>
    <option value="RS 50">RS 50 Stamp</option>
    <option value="RS 100">RS 100 Stamp</option>
    <option value="Bank Stamp">Bank Stamp</option>
    <option value="Biyan Halfi">Biyan Halfi</option>
    <option value="Iqrar Namma">Iqrar Namma</option>
    <option value="Affidavid">Affidavid for University</option>
    </select>
    <small id="emailHelp" class="form-text text-muted">Please Select Carefully!</small>
  </div>


  <div class="form-group">
    <label >Stamp Price</label>
    <select name="price" class="form-control">
    <option value="None">Select Options</option>
    <option value="50">50</option>
   <option value="100">100</option>
  <option value="1200">1200</option>
   <option value="250">250</option>
   <option value="500">500</option>
    
    </select>
    <small id="emailHelp" class="form-text text-muted">Please Select Carefully!</small>
  </div>

  <div class="form-group">
    <label >Stamp Paper Discription</label>
    <textarea name="description"  cols="20" rows="10" class="form-control" style="resize:none"></textarea>
  </div>
  
 
  <div class="form-group">
    <label >Stamp Paper Picture</label>
   <input type="file" class="form-control" name="stamp_image">
  </div>

  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Data</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!--  end the toggle model    -->




<div class="row">
<div class="col-md-12">
<br>
<h3 align="center"> Stamp Paper Data</h3><br>
<center><table class="table table-hover table-dark" style="width:95%"  height="auto"></center>
  <thead>
  @if(\Session::has('success'))
<div class="alert alert-success">
<p>{{\Session::get('success')}} </p>
</div>
@endif
    <tr>
    <th scope="col">#</th>
    <th scope="col">CNIC</th>
    <th scope="col">Name</th>
    <th scope="col">Father Name</th>
      <th scope="col">Address</th>
      <th scope="col">Price OR Product Purchase</th>
      <th scope="col">Purpose</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Purchase Date</th>
      
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
<td>{{$row['price']}}</td>
<td>{{$row['purpose']}}</td>
<td>{{$row['payment_method']}}</td>
<td>{{$row['apply_date']}}</td>

<td>
<form method="post" action="{{action('addstampcontroller@destroy', $row['id'])}}">
@csrf
<input type="hidden" name="_method" value="DELETE">
<button type="submit" class="btn btn-danger" >Reject</button>
</form> 
</td>
<td>
<a href=""><button type="submit" class="btn btn-success" >Aprove</button></a>
</td>







</tr> 
@endforeach


</tbody>
</table>

</div>



</div>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
