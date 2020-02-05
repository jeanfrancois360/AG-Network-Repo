<?php 
include "system/modules/db_connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="jeanfrancois360">
    <title>AG-Network Learning Platform</title>
    <link rel=icon href=components/images/logos/logo2.png type=image/x-icon>
    <!-- bootstrap -->
   <link rel="stylesheet" href="components/styles/bootstrap.min.css">
   <!-- font awesome icons -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
   <!-- lazy styling -->
   <link rel="stylesheet" href="components/styles/lazy.css">
   <link rel="stylesheet" href="components/styles/demo.css">
   <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel=stylesheet>
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC:300,400,500,700,900" rel=stylesheet>
<link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
</head>

<body class="index">
      <div class="bg-primary">
      <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <a class="navbar-brand" href=""><img src="components/images/logos/logo2.png" alt="Example Navbar 1" class="mr-2" height="100" width="130"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown-7" aria-controls="navbarNavDropdown-7"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown-7">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-2">
              <a class="btn btn-dark top-button" href="index.php">
              <i style="padding-right:5px;" class="fa fa-user"> </i> Login
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

	
  	<div class="container">
      <div class="row">
       
              <!-- with icon -->
        <div class="col-md-6 login-container  animated fadeInLeft"> 
        <form action="" method = "POST">
        <div s class="heading_border">    
        <h4 class="text text-center" style="font-family: 'Poppins', sans-serif;">Register</h4>
        </div><br>     
        <div class="col-md-12">

        <div class="row">
        <div class="form-group col-md-12">
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
        </div>
        <input type="text" class="form-control" name="names" id="names" placeholder="Names" aria-label="names" aria-describedby="basic-addon1">
        </div>
        </div>
        </div>


        <div class="row">
        <div class="form-group col-md-6">
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
        </div>
        <input type="text" class="form-control" name="email" id="email" placeholder="Email" aria-label="email" aria-describedby="basic-addon1">
        </div>
        </div>

        <div class="form-group col-md-6"> 
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-calendar"></i></span>
        </div>
        <input type="date" class="form-control" name="dob" id="dob" placeholder="Dob" aria-label="dob" aria-describedby="basic-addon1">
        </div>
        </div>
        </div>



        <div class="row">
        <div class="form-group col-md-6">
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-address-book"></i></span>
        </div>
        <input type="text" class="form-control" name="address" id="address" placeholder="Address" aria-label="address" aria-describedby="basic-addon1">
        </div>
        </div>

        <div class="form-group col-md-6"> 
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone"></i></span>
        </div>
        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number" aria-label="phone" aria-describedby="basic-addon1">
        </div>
        </div>
        </div>



        <div class="row">
        <div class="form-group col-md-6">
        <div class="input-group">
        <div class="input-group-prepend">
            <span style="padding-right:20px !important;" class="input-group-text" id="basic-addon1"><i class="fas fa-users"></i></span>
        </div>
        <select class="browser-default custom-select" name="gender" id="gender">
        <option selected value="0">Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        </select>
        </div>
        </div>

        <div class="form-group col-md-6"> 
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-graduation-cap"></i></span>
        </div>
        <select class="browser-default custom-select" id="education_level" name="education_level">
        <option selected value="0">Education</option>
        <option value="Secondary School(A2)">Secondary School(A2)</option>
        <option value="College(A1)">College(A1)</option>
        <option value="University(A0)">University(A0)</option>
        <option value="Masters degree">Masters degree</option>
        <option value="PHD">PHD</option>
        </select>
        </div>
        </div>
        </div>
      
                <!-- Default inline 0-->
        <div class="custom-control custom-radio custom-control-inline">
        <p style="font-size: 16px; font-weight: 500; margin-left: -25px; color: #111111 !important; margin-top:-10px !important;">I'm registering as :</p>
        </div>

         <!-- Default inline 1-->
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" class="custom-control-input student" id="defaultInline1" value="student" name="inlineDefaultRadiosExample" onclick="who();">
          <label class="custom-control-label" for="defaultInline1" style="font-weight:500;font-size: 15px;color: rgb(100, 100, 100);">Student</label>
        </div>

        <!-- Default inline 2-->
        <div class="custom-control custom-radio custom-control-inline">
          <input type="radio" class="custom-control-input facilitator" id="defaultInline2" value="facilitator" name="inlineDefaultRadiosExample" onclick="who();">
          <label class="custom-control-label" for="defaultInline2" style="font-weight:500;font-size: 15px;color: rgb(100, 100, 100);">Facilitator</label>
        </div>


       <div id="student_part" style="display:none;">
       <div class="row">
        <div class="form-group col-md-12">
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-certificate"></i></span>
        </div>
        <select class="browser-default custom-select" id="student_reason">
        <option selected value="0">Select your reason & why</option>
        <option value="I want to start an Agri-Business">I want to start an Agri-Business</option>
        <option value="I want a job">I want a job</option>
        <option value="I want a certificate">I want a certificate</option>
        <option value="I am a farmer">I am a farmer</option>
        </select>
        </div>
        </div>
        </div>
       </div>


        <div id="facilitator_part" style="display:none;">
        <div class="row">
        <div class="form-group col-md-6">
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-globe"></i></span>
        </div>
        <input type="text" class="form-control" name="nationality" id="nationality" placeholder="Nationality" aria-label="nationality" aria-describedby="basic-addon1">
        </div>
        </div>

        <div class="form-group col-md-6"> 
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-book"></i></span>
        </div>
        <input type="text" class="form-control" name="course_name" id="course_name" placeholder="Course Name" aria-label="course_name" aria-describedby="basic-addon1">
        </div>
        </div>
        </div>



        <div class="row">
        <div class="form-group col-md-12">
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-money-bill-wave"></i></span>
        </div>
        <select class="browser-default custom-select" id="payment_method">
        <option selected value="0">Select preferred Payment method</option>
        <option value="bank transfer">Bank Transfer</option>
        <option value="direct deposit">Direct Deposit</option>
        <option value="mobile payment">Mobile Payments</option>
        <option value="cash">Cash</option>
        </select>
        </div>
        </div>
        </div>



        <div class="row" id="_resume">
        <div class="form-group col-md-6">
        <div class="file-upload-wrapper">
        <label for="resume">Upload your Resume</label><br>
        <input class="resume" id="resume" type="file" name="sample4[]" data-field-type="bootstrap-file-filed"
            data-label="Select PDF Files"
            data-file-types="application/pdf"
            multiple>
        </div>
        </div>
        </div>


        <div class="row">
        <div class="form-group col-md-12" id ="_essay">
          <label sytle="font-size:18px !important; color:#212529;" for="essay">Write an essay that describes how experienced you are in the course you provided above. (Max-1000 char)</label>
          <textarea class="form-control" id="essay" name="text" placeholder="Type in your Essay" rows="5" maxlength="1000"></textarea>
          <strong style="color:#009510; float:right;" class="pull-right" id="count_message"></strong>
        </div>
        </div> 
        </div>



        
        <div class="row">
        <div class="form-group col-md-6">
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
        </div>
        <input type="password" class="form-control" name ="password" id ="password" minlength="8" placeholder="Password" aria-label="password" aria-describedby="basic-addon1" required>
        </div>
        </div>

        <div class="form-group col-md-6"> 
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
        </div>
        <input type="password" class="form-control"  name ="confirm_password" id ="confirm_password" minlength="8" placeholder="Repeat Password" aria-label="password" aria-describedby="basic-addon1" required>
        <input type="hidden" id="user_type" value="" placeholder="user type">
        </div>
        </div>
        </div>


        
        <div class="form-group">
        <input type="button" style="background: #009510;" class="btn btn-success col-md-12" name ="submit" onclick="register_me()" id ="submit" value="Register">
        <!-- <center><p id="spinner_loader" style="color:#009510; display:none;"><span class="spinner-border spinner-grow-sm" role="status" aria-hidden="true"></span> Loading...</p></center>   -->
      </div>
        <div class="text-center" style="margin-top:-3px;" id="display_responses"></div><br>
        <div  class="col-md-7" style="float:right;">
        <span style="padding-right:0 !important;" class="col-md-4">Already have an account?</span> <span style="padding-left:0 !important;" class="col-md-2"><a style="text-decoration:none; color:#009510; border-bottom:none;" href="index.php"><strong>Login</strong></a></span>
        </div>

        </div>
       </form>
       </div>
        <div class="col-md-6">
        <h1 style="margin-top:19%; margin-left:12%; font-weight:bold; font-family: 'Archivo Black', sans-serif; padding-left:12px; padding-top:20px; padding-bottom:20px; border-left:8px solid #009510; color:#000000;" class="animated fadeInRight">Welcome to <span style="color: #009510;">AG Network</span> learning platform.</h1>
        </div>
      </div>
    </div>
    
</div>





    
<footer class="footer-1 bg-light text-dark">
<div class="container">
<div class="d-flex flex-column flex-md-row justify-content-between align-items-center">

		<strong class="small">&copy; 2019, AG-Network Learning Platform</strong>

	<div class="social mt-4 mt-md-0">
    <a class="twitter btn btn-outline-primary btn-icon" href="https://twitter.com/bootstrapbay" target="_blank">
      <i class="fab fa-twitter"></i>
      <span class="sr-only">View our Twitter Profile</span>
    </a>
    <a class="facebook btn btn-outline-primary btn-icon" href="https://www.facebook.com/bootstrapbayofficial/" target="_blank">
      <i class="fab fa-facebook"></i>
      <span class="sr-only">View our Facebook Profile
        <span>
    </a>
    <a class="github btn btn-outline-primary btn-icon" href="https://github.com/bootstrapbay" target="_blank">
      <i class="fab fa-instagram"></i>
      <span class="sr-only">View our GitHub Profile</span>
    </a>
  </div>
</div>
<!-- <div class="copyright text-center">
	<hr />
	<p class="small">&copy; 2019, made with <span class="text-danger"><i class="fas fa-heart"></i></span> by BootstrapBay</p>
</div> -->
</div>
</footer>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- <script src="components/javascript/jquery.min.js"></script> -->
<script src="components/javascript/popper.min.js"></script>
<script src="components/javascript/bootstrap.min.js" ></script>

<!--   lazy javascript -->
<script src="components/javascript/lazy.js"></script>
<script>
// Characters counting
var text_max = 1000;
$('#count_message').html(text_max + ' remaining');

$('#essay').keyup(function() {
  var text_length = $('#essay').val().length;
  var text_remaining = text_max - text_length;
  
  $('#count_message').html(text_remaining + ' remaining');
});
</script>
<script>
function who(){
  let data1 = document.getElementById("defaultInline1");
  let data2 = document.getElementById("defaultInline2");
  
  if(data1.checked == true){
    let user_type = data1.value;
    $("#user_type").val(user_type);
    document.getElementById("student_part").style.display = "block";
  }else{
    document.getElementById("student_part").style.display = "none";
  }
  if(data2.checked == true){
    let user_type = data2.value;
    $("#user_type").val(user_type);
    document.getElementById("facilitator_part").style.display = "block";
  }
  else{
    document.getElementById("facilitator_part").style.display = "none";
  }
}

function register_me(){
  $("#display_responses").html("");
  let user_type = $("#user_type").val();
  let names = $("#names").val();
  let email = $("#email").val();
  let dob = $("#dob").val();
  let address = $("#address").val();
  let phone = $("#phone").val();
  let gender = $("#gender").val();
  let education = $("#education_level").val();
  let reason = $("#student_reason").val();
  let nationality = $("#nationality").val();
  let course_name = $("#course_name").val();
  let resume = $("#resume").val();
  let payment_method = $("#payment_method").val();
  let essay = $("#essay").val();
  let password = $("#password").val();
  let confirm_password = $("#confirm_password").val();
  let message = "";
  let error = "";
  if(user_type === ""){
    $("#display_responses").html('<span class="text text-danger"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Register as, should not have been skipped!</span>');
    return;
  }
  if(user_type === "student"){
    if(names.length === 0){
      message = "Name, Should be provided!";
      error = true;

    }
    if(email.length === 0){
      message = "Email, Should be provided!";
      error = true;
    }
    if(dob.length === 0){
      message = "Dob, Should be provided!";
      error = true;
    }
    if(address.length === 0){
      message = "Address, Should be provided!";
      error = true;
    }
    if(phone.length === 0){
      message = "Phone, Should be provided!";
      error = true;
    }
    if(gender === "0"){
      message = "Gender, Should be provided!";
      error = true;
    }
    if(education === "0"){
      message = "Education, Should be provided!";
      error = true;
    }
    if(reason === "0"){
      message = "Reason, Should be provided!";
      error = true;
    }
    if(password.length === 0){
      message = "Password, Should be provided!";
      error = true;
    }
    if(confirm_password.length === 0){
      message = "Confirm your password";
      error = true;
    }
    if(confirm_password !== password){
      message = "Your password don't match!";
      error = true;
    }
  }




  if(user_type === "facilitator"){
    if(names.length === 0){
      message = "Your Name, Should be provided!";
      error = true;

    }
    if(email.length === 0){
      message = "Your Email, Should be provided!";
      error = true;
    }
    if(dob.length === 0){
      message = "Your Dob, Should be provided!";
      error = true;
    }
    if(address.length === 0){
      message = "Your Address, Should be provided!";
      error = true;
    }
    if(phone.length === 0){
      message = "Your Phone number, Should be provided!";
      error = true;
    }
    if(gender === "0"){
      message = "Your Gender, Should be provided!";
      error = true;
    }
    if(education === "0"){
      message = "Your Education, Should be provided!";
      error = true;
    }
    if(nationality.length === 0){
      message = "Your Nationality Should be provided!";
      error = true;
    }
    if(course_name.length === 0){
      message = " The Course name Should be provided!";
      error = true;
    }
    if(resume.length === 0){
      message = "Your Resume Should be provided!";
      error = true;
    }
    if(payment_method.length === 0){
      message = "Choose your preferred payment method!";
      error = true;
    }
    if(essay.length === 0){
      message = "The Essay Should be provided!";
      error = true;
    }
    if(password.length === 0){
      message = "Password, Should be provided!";
      error = true;
    }
    if(confirm_password.length === 0){
      message = "Confirm your password";
      error = true;
    }
    if(confirm_password !== password){
      message = "Your password don't match!";
      error = true;
    }
  }
  if(error){
    $("#display_responses").html('<span class="text text-danger"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> '+message+'</span>');
    return;
  }
  else{
    $("#display_responses").html("");
    $.ajax({
     url: "system/modules/insert_all.php",
     type: "POST",
     cash: false,
     data : {
       names : names,
       email : email,
       dob : dob,
       address : address,
       phone : phone,
       gender : gender,
       education : education,
       reason : reason,
       nationality : nationality,
       course_name : course_name,
       payment_method: payment_method,
       resume : resume,
       essay : essay,
       password : password,
       confirm_password : confirm_password,
       user_type : user_type,
       request_id : "register_me"
     },
     success : function(response){
      console.log(response);
       if(response == "success"){
        Swal.fire(
        'Good job!',
        'You are successfully registered.',
        'success');
       }
       if(response == "account exists"){
        $("#display_responses").html('<span class="text text-danger"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> This account already exists!</span>');
       }
       if(response == "not registered"){
         console.log(response);
         $("#display_responses").html('<span class="text text-warning"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Oops, Something went wrong!</span>');
       }
     }
  });
  }
}

</script>
</body>

</html>