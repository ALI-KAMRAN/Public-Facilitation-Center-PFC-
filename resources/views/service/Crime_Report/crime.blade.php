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
    
    <title>Crime Report</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<a href="{{url('service')}}"><button type="button" class="btn btn-primary btn-lg" style="margin-left:20px;margin-top:50px">Back</button></a>
<section class="container-fluid">

<section class="row justify-content-center">
<section class="col-12 col-sm-6 col-md-3"></section>

<form class="form-design" action="{{action('crimecontroller@store')}}" method="post" enctype="multipart/form-data">
<center><h2>Online Crime Report Registration</h2></center>
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
  <div class="row">
    <div class="col">
  <h5> <label for="exampleFormControlInput1">Name</label></h5> 
      <input type="text" class="form-control" placeholder="Ali,Usman,Umer,Azeem" name="name">
    </div>
    <div class="col">
    <h5> <label for="exampleFormControlInput1">CNIC</label></h5> 
      <input type="text" class="form-control" placeholder="Applicant CNIC" name="cnic">
    </div>
  </div>


  <br>
  <div class="row">
    <div class="col">
    <h5><label for="exampleFormControlInput1">Birthday</label></h5> 
      <input type="date" class="form-control"  name="dob">
    </div>
    <div class="col">
    <h5><label for="exampleFormControlInput1">Gender</label></h5> 
    <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Male" checked >
  <label class="form-check-label" for="exampleRadios1">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" name="exampleRadios" id="exampleRadios2" value="Female">
  <label class="form-check-label" for="exampleRadios2">
    Female
  </label>
</div>
    </div>
  </div>

  

<br>
  <div class="row">
    <div class="col">
    <h5> <label for="exampleFormControlInput1">Father Name</label></h5> 
      <input type="text" class="form-control" placeholder="Applicant Father Name" name="f_name">
    </div>
    
    <div class="col">
    <h5><label for="exampleFormControlInput1">Complete Address</label></h5> 
      <input type="text" class="form-control"  name="address" placeholder="Address">
    </div>
    </div>
  

  <br>
  <div class="row">
    <div class="col">
    <h5><label for="exampleFormControlInput1">Email Address</label></h5> 
      <input type="text" class="form-control" placeholder="Email Address" name="email">
    </div>
    <div class="col">
    <h5> <label for="exampleFormControlInput1">Cell Number</label></h5> 
      <input type="text" class="form-control" placeholder="Cell Number" name="cell_no">
    </div>
  </div>



  <br>
  <div class="row">
    <div class="col">

    <h5> <label for="exampleFormControlInput1">Select Crime Type</label>
    <select class="custom-select" name="crime_type">
  <option value="Murder">Murder</option>
  <option value="Child Abuse">Child Abuse</option>
  <option value="Stealing">Stealing</option>
  <option value="Violence">Violence</option>
  
<option value="Others">Others</option>
  
</select>
  

    </div>
  </div>

  <br>
  <div class="row">
    <div class="col">

    <h5> <label for="exampleFormControlInput1">Select District</label>
    <select class="custom-select" name="district">
  <option value="Gujranwala">Gujranwala</option>
  

  
</select>
  

    </div>
  </div>



  <br>
  <div class="row">
    <div class="col">
<h5> <label for="exampleFormControlInput1">Crime Details</label></h5> 
<textarea name="crime_detail"  cols="70" rows="10" style="resize:none" placeholder="Write something about Crime!"></textarea>

    </div>
  </div>









<br>
<div class="row">
<div class="col">
<h5><label for="exampleFormControlInput1">Upload Applicant Pic</label></h5> 
    <input type="file" class="form-control" name="applicant_pic">
    </div>
</div>

  

<br>
 <center><h3>Compulsary Items</h3></center> 
<br>
<div class="row">
<div class="col">
<h5><label for="exampleFormControlInput1">Upload Applicant CNIC & Copy of FIR (If avaliable) Pic</label></h5> 
    <input type="file" class="form-control" name="pic[]" multiple>
    </div>
</div>
    





  
   




<br><br>
<button type="submit" class="btn btn-primary btn-block">Submit Data</button>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target=".bd-example-modal-lg">
  Learn how to Register online Crime Report!
</button>
</form>











</section>




</section>





<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

















</body>
</html>



<!-- Large modal -->


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

    <div class="embed-responsive embed-responsive-21by9">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/qDmX3OjZofw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

    </div>
  </div>
</div>
        
       
        
        
      