<!DOCTYPE html>
<html lang="en">
<head>
<style>
.form-design{
    position:absolute;
    top: 15vh;
    background: #fff;
    padding: 60px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px 0px black;
}


</style>
    
    <title>Character Status</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<a href="{{url('character')}}"><button type="button" class="btn btn-primary btn-lg" style="margin-left:20px;margin-top:50px">Back</button></a>
<section class="container-fluid">

<section class="row justify-content-center">
<section class="col-12 col-sm-6 col-md-3"></section>

<form class="form-design" action="{{action('characterStatusC@update',$id)}}" method="post">
<center><h2>Enter Character Certificate Status</h2></center>
<br><br>

<br>
@if(count($errors) > 0)
<ul>
@foreach($errors->all() as $error)
<div class="alert alert-danger" role="alert">{{$error}}</div>
@endforeach
</ul>
@endif
@if(\Session::has('success'))
<div class="alert alert-success" role="alert">
<p>{{\Session::get('success')}} </p>
</div>
@endif

@csrf
<input type="hidden" name="_method" value="PATCH">
<label for="exampleInputEmail1"><b> Select Applicant Character Status </b> </label>
<select class="custom-select" name="status">
  <option selected>Select Option</option>
  <option value="Criminal">Criminal</option>
  <option value="No Criminal">No Criminal</option>
 </select>

<br><br>
 <div class="form-group">
    <label for="exampleInputEmail1"><b> Character Certificate Issued Date </b> </label>
    <input type="date" class="form-control" name="issue_date">

  </div>



<br><br>
<button type="submit" class="btn btn-primary btn-block">Saved Status</button><br>

</form>

</section>
</section>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>












</body>
</html>





        
       
        
        
      