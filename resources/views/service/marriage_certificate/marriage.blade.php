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
    
    <title>Marriage Certificate</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<a href="{{url('service')}}"><button type="button" class="btn btn-primary btn-lg" style="margin-left:20px;margin-top:50px">Back</button></a>
<section class="container-fluid">

<section class="row justify-content-center">
<section class="col-12 col-sm-6 col-md-3"></section>

<form class="form-design" action="{{action('marriagecontroller@store')}}" method="post" enctype="multipart/form-data">
<center><h2>Online Marriage Certificate</h2></center>
<br><br>
<h2>Particulars of Groom</h2>
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
      <input type="text" class="form-control" placeholder="Ali,Usman,Umer,Azeem" name="g_name">
    </div>
    <div class="col">
    <h5> <label for="exampleFormControlInput1">CNIC</label></h5> 
      <input type="text" class="form-control" placeholder="Groom CNIC" name="g_cnic">
    </div>
  </div>

  


<br>
  <div class="row">
    <div class="col">
    <h5> <label for="exampleFormControlInput1">Father Name</label></h5> 
      <input type="text" class="form-control" placeholder="Groom Father Name" name="g_f_name">
    </div>
    <div class="col">
    <h5> <label for="exampleFormControlInput1">Select Religion</label>
    <select class="custom-select" name="g_religion">
  <option value="Muslim">Muslim</option>
  <option value="Hindu">Hindu</option>
  <option value="Christen">Christen</option>
  <option value="Sikh">Sikh</option>
  </select>
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
    <h5><label for="exampleFormControlInput1">Birthday</label></h5> 
      <input type="date" class="form-control" placeholder="Groom Date Of Birth" name="g_dob">
    </div>
    
    <div class="col">


    <h5> <label for="exampleFormControlInput1">Select Marital Status</label>
    <select class="custom-select" name="g_status">
  <option value="Married">Married</option>
  <option value="bachelor">bachelor</option>
  <option value="Taalaq Yafta">Taalaq Yafta</option>
  
</select>

    



    </div>

    
  </div>


  <br>
  <div class="row">
    <div class="col">
    <h5><label for="exampleFormControlInput1">Tehsil</label></h5> 
      <input type="text" class="form-control"  name="g_tehsil" placeholder="Groom Tehsil Area">
    </div>
    <div class="col">
    <h5><label for="exampleFormControlInput1">Address</label></h5> 
      <input type="text" class="form-control"  name="g_address" placeholder="Groom Address">
    </div>
    
</div>



<br>
  <div class="row">
  <div class="col">
<h5> <label for="exampleFormControlInput1">Select District</label>
    <select class="custom-select" name="g_district">
  <option value="Gujranwala">Gujranwala</option>
  </select>
  </div>

<div class="col">

<h5> <label for="exampleFormControlInput1">Select Groom Nationality</label>
    <select class="custom-select" name="g_nationality">
  <option value="Pakistani">Pakistani</option>
  <option value="Foreign">Foreign</option>

  </select>

  </div></div>



    




<br><br>
<h2>Particulars of Bride</h2>
    
<br>

<div class="row">
    <div class="col">
  <h5> <label for="exampleFormControlInput1">Name</label></h5> 
      <input type="text" class="form-control" placeholder="Iqra,Ayesha,Fatima" name="b_name">
    </div>
    <div class="col">
    <h5> <label for="exampleFormControlInput1">CNIC</label></h5> 
      <input type="text" class="form-control" placeholder="Bride CNIC" name="b_cnic">
    </div>
  </div>

  


<br>
  <div class="row">
    <div class="col">
    <h5> <label for="exampleFormControlInput1">Father Name</label></h5> 
      <input type="text" class="form-control" placeholder="Bride Father Name" name="b_f_name">
    </div>

    <div class="col">
    <h5> <label for="exampleFormControlInput1">Select Religion</label>
    <select class="custom-select" name="b_religion">
  <option value="Muslim">Muslim</option>
  <option value="Hindu">Hindu</option>
  <option value="Christen">Christen</option>
  <option value="Sikh">Sikh</option>
  </select>
</div>
  </div>

   

  

  <br>
  <div class="row">
    <div class="col">
    <h5><label for="exampleFormControlInput1">Birthday</label></h5> 
      <input type="date" class="form-control" placeholder="Bride Date Of Birth" name="b_dob">
    </div>
    
    <div class="col">
<h5> <label for="exampleFormControlInput1">Select Marital Status</label>
    <select class="custom-select" name="b_status">
  <option value="Married">Married</option>
  <option value="bachelor">bachelor</option>
  <option value="Taalaq Yafta">Taalaq Yafta</option>
  </select>
    </div>
</div>


  <br>
  <div class="row">
    <div class="col">
    <h5><label for="exampleFormControlInput1">Tehsil</label></h5> 
      <input type="text" class="form-control"  name="b_tehsil" placeholder="Bride Tehsil Area">
    </div>
    <div class="col">
    <h5><label for="exampleFormControlInput1">Address</label></h5> 
      <input type="text" class="form-control"  name="b_address" placeholder="Bride Address">
    </div>
    
</div>
    


<br>
  <div class="row">
  <div class="col">
<h5> <label for="exampleFormControlInput1">Select District</label>
    <select class="custom-select" name="b_district">
  <option value="Gujranwala">Gujranwala</option>
  </select>
  </div>

<div class="col">
<h5> <label for="exampleFormControlInput1">Select Groom Nationality</label>
    <select class="custom-select" name="b_nationality">
  <option value="Pakistani">Pakistani</option>
  <option value="Foreign">Foreign</option>
  </select>
</div></div>


<br><br>
<h2>Some Others Particulars</h2>


<br>
  <div class="row">
    <div class="col">
    <h5><label for="exampleFormControlInput1">Marriage Date</label></h5> 
      <input type="date" class="form-control"  name="marriage_date" >
    </div>

    <div class="col">
    <h5><label for="exampleFormControlInput1">Upload Nikkah Namma</label></h5> 
      <input type="file" class="form-control"  name="nikkah_namma">
    </div>
</div>



<br>
  <div class="row">
    <div class="col">
    <h5><label for="exampleFormControlInput1">Marriage Solemnized By</label></h5> 
      <input type="text" class="form-control"  name="solemnized_name" placeholder="Nikkah Khawan Name">
    </div>

    <div class="col">
    <h5><label for="exampleFormControlInput1">Marriage Solemnized CNIC</label></h5> 
      <input type="text" class="form-control"  name="solemnized_cnic" placeholder="Nikkah Khawan CNIC">
    </div>
</div>





  
  

<br><br>
<button type="submit" class="btn btn-primary btn-block">Submit Data</button>


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
    <iframe width="560" height="315" src="https://www.youtube.com/embed/VLFbCmiJ3OE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

    </div>
  </div>
</div>
        
       
        
        
      