<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- Site Icons -->
<link rel="shortcut icon" href="{{URL::to('/')}}/images/favicon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{URL::to('/')}}/public/images/apple-touch-icon.png">
<style>



    .bg{
background-image: url('{{URL::to('/')}}/images/abcg.png');
background-size: cover;
background-repeat: no-repeat;
height: 100vh;



}

</style>
</head>
<body class="bg">
@if ($errors->any())
    <div class="alert alert-dark">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{URL::to('/emailauthentication2')}}"  method="post">
@csrf
    
 
<div class="container">

  <div class="form-group">
    <label for="exampleInputEmail1"><h3 style="margin-top:40px"> Email your email address </h3></label>
    <input type="email" class="form-control"  placeholder="Enter Your Email" name="email"><br>

    <input type="submit" class="btn btn-success">
  </div>
  </form>
  </div>
</body>
</html>