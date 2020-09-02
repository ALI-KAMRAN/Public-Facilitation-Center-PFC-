<!DOCTYPE html>
<html lang="en">
<head>
  <title>login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>OnceLawyer</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

   <!-- Site Icons -->
   <link rel="shortcut icon" href="{{URL::to('/')}}/images/favicon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{URL::to('/')}}/public/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/css/bootstrap.min.css">
    <!-- Site CSS -->
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="{{URL::to('/')}}/js/modernizer.js"></script>


<style type="text/css">
  

  .bg{
background-image: url('{{URL::to('/')}}/images/azeem.png');
background-size: cover;
background-repeat: no-repeat;
height: 100vh;



}


</style>




</head>

<body style="background-image:{{URL::to('/')}}/images/azeem.png";>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

 
<div class="container ">
<h2 class="text-center">user UpDate</h2>
<form action="{{URL::to('/')}}/userupdatesubmit/{{$data[0]->id}}" method="post" enctype="multipart/form-data">
         @csrf
  <div class="row p-2">
      <div  class="col-sm-6  text-light">

        <div class="form-group">
       <label>Enter Name:</label><br>
       <input type="text" class="form-control" name="firstname" value={{$data[0]->name}} >
     </div>

      </div>

      <div class="col-sm-6 text-light">
          <div class="form-group">
       <label>Enter LastName:</label><br>
       <input type="text" class="form-control" name="lastname" value={{$data[0]->lname}}  >
     </div>
      </div>
  </div>
   <div class="row p-2">
     <div class="col-sm-8 text-light">
       
       <div class="form-group">
       <label>Email:</label><br>
       <input type="text" class="form-control" name="e_mail" value={{$data[0]->email}} >
     </div>

     </div>

   </div>

 <div class="row p-2">
     <div class="col-sm-6 text-light">
       
       <div class="form-group">
       <label>Password:</label><br>
       <input type="text" class="form-control" name="password" value={{$data[0]->password}} >
     </div>

     </div>

      <div class="col-sm-6 text-light">
       
       <div class="form-group">
       <label>Conform Password:</label><br>
       <input type="text" class="form-control" name="password_conformation" pvalue={{$data[0]->conpassword}} >
     </div>

     </div>

   </div>
<div class="row p-2">
     <div class="col-sm-6 text-light">
       
       <div class="form-group">
       <label>Conatct Number:</label><br>
       <input type="number" class="form-control" name="contact"  value={{$data[0]->contact}} >
     </div>

     </div>

      <div class="col-sm-6 text-light">
       
       <div class="form-group">
       <label>Education<!DOCTYPE html>
<html lang="en">
<head>
  <title>login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>OnceLawyer</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{URL::to('/')}}/images/t.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{URL::to('/')}}/public/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/css/bootstrap.min.css">
    <!-- Site CSS -->
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{URL::to('/')}}/css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="{{URL::to('/')}}/js/modernizer.js"></script>


<style type="text/css">
  

.bg{
background-image: url('{{URL::to('/public')}}/images/abcg.png');
background-size: cover;
background-repeat: no-repeat;
height: 1400px;



}

</style>




</head>

<body class=" bg">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

 
<div class="container ">
<h2 class="text-center">User UpdateSignUp</h2>
<form action="{{URL::to('/usersignup')}}" method="post" enctype="multipart/form-data">
         @csrf
  <div class="row p-2">
      <div  class="col-sm-6  text-light">

        <div class="form-group">
       <label>Enter Name:</label><br>
       <input type="text" class="form-control" style="height:40px;" name="firstname" value={{$data[0]->name}} >
     </div>

      </div>

      <div class="col-sm-6 text-light">
          <div class="form-group">
       <label>Enter LastName:</label><br>
       <input type="text" class="form-control" style="height:40px;" name="lastname" placeholder="Enter your Lastname..." >
     </div>
      </div>
  </div>
   <div class="row p-2">
     <div class="col-sm-8 text-light">
       
       <div class="form-group">
       <label>Email:</label><br>
       <input type="text" class="form-control" style="height:40px;" name="e_mail" placeholder="Enter your Email..." >
     </div>

     </div>

   </div>

 <div class="row p-2">
     <div class="col-sm-6 text-light">
       
       <div class="form-group">
       <label>Password:</label><br>
       <input type="text" class="form-control" style="height:40px;" name="password" placeholder="Enter your Password..." >
     </div>

     </div>

      <div class="col-sm-6 text-light">
       
       <div class="form-group">
       <label>Conform Password:</label><br>
       <input type="text" class="form-control" style="height:40px;" name="password_conformation" placeholder="Enter your Conform Password..." >
     </div>

     </div>

   </div>
<div class="row p-2">
     <div class="col-sm-6 text-light">
       
       <div class="form-group">
       <label>Conatct Number:</label><br>
       <input type="number" class="form-control" style="height:40px;" name="contact" placeholder="Enter your Contact Number..." >
     </div>

     </div>

      <div class="col-sm-6 text-light">
       
       <div class="form-group">
       <label>Gender</label><br>
       <select  class="form-control" name="gender">
       <option>Male</option>
         <option>Female</option>

       </select>
     </div>

     </div>

   </div>



<div class="row p-2">
    <div class="col-sm-6 text-light">
       
       <div class="form-group">
       <label>City:</label><br>
       <select  class="form-control"  name="city">
         <option>Gujranwala</option>

       </select>
     </div>

     </div>

      <div class="col-sm-6 text-light">
       
       <div class="form-group">
       <label>Country:</label><br>
       <select  class="form-control" name="country">
         <option>Pakistan</option>

       </select>
     </div>

     </div>

   </div>




<div class="row p-2">
    <div class="col-sm-8 text-light">
       
       <div class="form-group">
       <label>Date of Birth:</label><br>
    
       <input type="date"name="birth" class="form-control">
     </div>

     </div>


   </div><div class="row p-2">
    

      

   </div>


   <div class="row p-2">
    <div class="col-sm-6 text-light">
       
       <div class="form-group">

      <label >Select Profile Photo:</label>
      <input type="file" id="img" name="image" accept="image/*">

     </div>

     </div>

   </div>


    <div class="row p-2">
    

   </div>

    <div class="row p-2">
    <div class="col-sm-12 text-light text-right">
       
       <div class="form-group">
       
      <input type="submit" class="btn btn-dark " name="submit" value="Submit">
      
     </div>

     </div>

   </div>




  </form>
</div> 

<div id="preview_data" class="ab"  style="display: none; background-color: white;color: black"> </div>
  


<script type= "text/javascript">
   $(document).ready(function () {
               $('.button').click(function () {
                 $('.firstd').hide();
               });
             });
  $(document).ready( function() {
    $('.button').on('click', function(e) {
      e.preventDefault();
      return false;
      preview();
    });
  });

  function preview(){            
    var text = $('input[name="firstname"]').val();
    var text_label = $('label[for="text"]').text();
    var text_data = '<p style="color:red;"><strong>' + text_label + '</strong> : ' + text + '</p>';

    var text1 = $('input[name="text1"]').val();
    var text_labe = $('label[for="text1"]').text();
    var text_dat = '<hr><p style="color:red;"><strong><br>' + text_labe + '</strong> : ' + text1 + '</p>';

    var text2 = $('input[name="E_mail"]').val();
    var text_email = $('label[for="text2"]').text();
    var text_emai = '<p><strong><hr><br>' + text_email + '</strong> : ' + text2 + '</p>';

    var pass = $('input[name="password"]').val();
    var text_label3 = $('label[for="text3"]').text();
    var text_data3 = '<p><strong><hr><br>' + text_label3 + '</strong> : ' + pass + '</p>';

    var contact = $('input[name="contact"]').val();
    var text_label4 = $('label[for="number"]').text();
    var text_data4 = '<p><strong><hr><br>' + text_label4 + '</strong> : ' + contact + '</p>';
    
    var city = $('input[name="city"]').val();
    var text_label5 = $('label[for="city"]').text();
    var text_data5 = '<p><strong><hr><br>' + text_label5 + '</strong> : ' + city + '</p>';

    var country = $('input[name="country"]').val();
    var text_label6 = $('label[for="country"]').text();
    var text_data6 = '<p><strong><hr><br>' + text_label6 + '</strong> : ' + country + '</p>';
    
    
    var dob = $('input[name="birth"]').val();
    var text_label7 = $('label[for="birth"]').text();
    var text_data7 = '<p><strong><hr><br>' + text_label7 + '</strong> : ' + dob + '</p>';

     var optionval = $('#optionval option:selected').val();
    var optionval_label = $('label[for="optionval"]').text();
    var optval = '';
    if(optionval == 1) {
      optval = 'Juris Doctor';
    } else if(optionval == 2) {
      optval = 'Master of Laws';
    } else if(optionval == 3) {
      optval = 'Doctor of Judicial Science';
    } else if(optionval == 4) {
      optval = 'Master of Legal Studies';
    }
    var optionval_data = '<p><strong><hr><br>' + optionval_label + '</strong> : ' + optval + '</p>';

    var radio = $('input[type="radio"]:checked').val();
    var radio_label = $('label[for="radio"]').text();
    var rdo = 'Undefined';
    if(radio == 0) {
      rdo = 'No';
    } else if(radio == 1) {
      rdo = 'Yes';
    }
    var radio_data = '<p><strong><hr><br>' + radio_label + '</strong> : ' + rdo + '</p>';
   
    var textarea = $('.text').val();
    var textarea_label = $('label[for="textarea"]').text();
    var textarea_data = '<p><strong><hr><br>' + textarea_label + '</strong> : ' + textarea + '</p>';
    
    var data = text_data +  text_dat + text_emai + text_data3 + text_data4 + text_data5 + text_data6 + text_data7 + optionval_data + radio_data  + textarea_data;
    $('#preview_data').html('');
    $('#preview_data').append(data);
    $('#preview_data').dialog({
      resizable: false,
      
      height:550,
      width:550,
      title:'Preview Form',
       classes: {
            "ui-dialog": "custom-grey"
        },
      modal: true,
                  buttons: {
        'OK': function() {
          $('.firstd').show();
          $(this).dialog("close");

                             }
                             },
                    

             open: function() {
            $('.ui-dialog-buttonpane').find('button:contains("OK")').addClass('cancelButtonClass');      
        }

    });
  }
             
            


</script>




  </body>
</html>:</label><br>
       <select  class="form-control" name="education" value={{$data[0]->education}}>
         <option>LLB</option>
         <option>LLM</option>
         <option>Bar Of Law</option>

       </select>
     </div>

     </div>

   </div>



<div class="row p-2">
    <div class="col-sm-6 text-light">
       
       <div class="form-group">
       <label>City:</label><br>
       <select  class="form-control"  name="city" value={{$data[0]->city}}>
         <option>Gujranwala</option>

       </select>
     </div>

     </div>

      <div class="col-sm-6 text-light">
       
       <div class="form-group">
       <label>Country:</label><br>
       <select  class="form-control" name="country"  value={{$data[0]->country}}>
         <option>Pakistan</option>

       </select>
     </div>

     </div>

   </div>




<div class="row p-2">
    <div class="col-sm-8 text-light">
       
       <div class="form-group">
       <label>Gender:</label><br>
       <select  class="form-control" name="gender" value={{$data[0]->gender}}>
         <option>Male</option>
         <option>Female</option>

       </select>
     </div>

     </div>


   </div><div class="row p-2">
    <div class="col-sm-6 text-light">
       
       <div class="form-group">
       <label>Date Of Birth:</label><br>
      <input type="date"name="birth" class="form-control" value={{$data[0]->birth}}>
     </div>

     </div>

      <div class="col-sm-6 text-light">
       
       <div class="form-group">
       <label>Lawyer_Type:</label><br>
       <select  class="form-control" name="age" value={{$data[0]->lawyerType}}>
         <option>Family_Lawyer</option>
           <option>Criminal_Lawyer</option>
            <option>Immigration_Lawyer</option>
       </select>
     </div>

     </div>

   </div>


   <div class="row p-2">
    <div class="col-sm-6 text-light">
       
       <div class="form-group">

      <label for="myfile">Select Profile Photo:</label>
  <input type="file"   name="image"  >

     </div>

     </div>

   </div>


    <div class="row p-2">
    <div class="col-sm-12 text-light">
       
       <div class="form-group">

       <label>Experience:</label><br>
      <textarea class="form-control p-4" name="comment" value={{$data[0]->experience}}></textarea>
      
     </div>

     </div>

   </div>

    <div class="row p-2">
    <div class="col-sm-12 text-light text-right">
       
       <div class="form-group">
       <button  class="btn btn-dark">Preview</button>
      <input type="submit" class="btn btn-dark " name="submit" value="Submit">
      
     </div>

     </div>

   </div>




  </form>
</div> 

<div id="preview_data" class="ab"  style="display: none; background-color: white;color: black"> </div>
  


<script type= "text/javascript">
   $(document).ready(function () {
               $('.button').click(function () {
                 $('.firstd').hide();
               });
             });
  $(document).ready( function() {
    $('.button').on('click', function(e) {
      e.preventDefault();
      return false;
      preview();
    });
  });

  function preview(){            
    var text = $('input[name="firstname"]').val();
    var text_label = $('label[for="text"]').text();
    var text_data = '<p style="color:red;"><strong>' + text_label + '</strong> : ' + text + '</p>';

    var text1 = $('input[name="text1"]').val();
    var text_labe = $('label[for="text1"]').text();
    var text_dat = '<hr><p style="color:red;"><strong><br>' + text_labe + '</strong> : ' + text1 + '</p>';

    var text2 = $('input[name="E_mail"]').val();
    var text_email = $('label[for="text2"]').text();
    var text_emai = '<p><strong><hr><br>' + text_email + '</strong> : ' + text2 + '</p>';

    var pass = $('input[name="password"]').val();
    var text_label3 = $('label[for="text3"]').text();
    var text_data3 = '<p><strong><hr><br>' + text_label3 + '</strong> : ' + pass + '</p>';

    var contact = $('input[name="contact"]').val();
    var text_label4 = $('label[for="number"]').text();
    var text_data4 = '<p><strong><hr><br>' + text_label4 + '</strong> : ' + contact + '</p>';
    
    var city = $('input[name="city"]').val();
    var text_label5 = $('label[for="city"]').text();
    var text_data5 = '<p><strong><hr><br>' + text_label5 + '</strong> : ' + city + '</p>';

    var country = $('input[name="country"]').val();
    var text_label6 = $('label[for="country"]').text();
    var text_data6 = '<p><strong><hr><br>' + text_label6 + '</strong> : ' + country + '</p>';
    
    
    var dob = $('input[name="birth"]').val();
    var text_label7 = $('label[for="birth"]').text();
    var text_data7 = '<p><strong><hr><br>' + text_label7 + '</strong> : ' + dob + '</p>';

     var optionval = $('#optionval option:selected').val();
    var optionval_label = $('label[for="optionval"]').text();
    var optval = '';
    if(optionval == 1) {
      optval = 'Juris Doctor';
    } else if(optionval == 2) {
      optval = 'Master of Laws';
    } else if(optionval == 3) {
      optval = 'Doctor of Judicial Science';
    } else if(optionval == 4) {
      optval = 'Master of Legal Studies';
    }
    var optionval_data = '<p><strong><hr><br>' + optionval_label + '</strong> : ' + optval + '</p>';

    var radio = $('input[type="radio"]:checked').val();
    var radio_label = $('label[for="radio"]').text();
    var rdo = 'Undefined';
    if(radio == 0) {
      rdo = 'No';
    } else if(radio == 1) {
      rdo = 'Yes';
    }
    var radio_data = '<p><strong><hr><br>' + radio_label + '</strong> : ' + rdo + '</p>';
   
    var textarea = $('.text').val();
    var textarea_label = $('label[for="textarea"]').text();
    var textarea_data = '<p><strong><hr><br>' + textarea_label + '</strong> : ' + textarea + '</p>';
    
    var data = text_data +  text_dat + text_emai + text_data3 + text_data4 + text_data5 + text_data6 + text_data7 + optionval_data + radio_data  + textarea_data;
    $('#preview_data').html('');
    $('#preview_data').append(data);
    $('#preview_data').dialog({
      resizable: false,
      
      height:550,
      width:550,
      title:'Preview Form',
       classes: {
            "ui-dialog": "custom-grey"
        },
      modal: true,
                  buttons: {
        'OK': function() {
          $('.firstd').show();
          $(this).dialog("close");

                             }
                             },
                    

             open: function() {
            $('.ui-dialog-buttonpane').find('button:contains("OK")').addClass('cancelButtonClass');      
        }

    });
  }
             
            


</script>




  </body>
</html>