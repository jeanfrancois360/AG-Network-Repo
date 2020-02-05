<?php
session_start();
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
   <link rel="stylesheet" href="components/styles/animate.css">
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
              <a class="btn btn-dark top-button" href="register.php">
              <i style="padding-right:5px;" class="fas fa-user-plus"> </i> Register
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

	
  	<div class="container">
      <div class="row">
       
              <!-- with icon -->
        <div class="col-md-4.5 login-container animated fadeInLeft"> 
        <form action="" method = "POST">
        <h4 class="text text-center" style="font-family: 'Poppins', sans-serif;">Login</h4><br>     
        <div class="col-md-12">


        <div class="form-group">
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
        </div>
        <input type="text" class="form-control" id="email" name="email" placeholder="Email" aria-label="email" aria-describedby="basic-addon1">
        </div>
        </div>

        <div class="form-group"> 
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
        </div>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" aria-label="password" aria-describedby="basic-addon1">
        <input type="hidden" id="user_type" value="" placeholder="user type">
        </div>
        </div>
      
                <!-- Default inline 0-->
        <div class="custom-control custom-radio custom-control-inline">
        <p style="font-size: 16px; font-weight: 500; margin-left: -25px; color: #111111 !important; margin-top:-10px !important;">I'm a :</p>
        </div>

        <!-- Default inline 1-->
        <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" checked class="custom-control-input student" id="defaultInline1" value="student" name="inlineDefaultRadiosExample" onclick="who();">
        <label class="custom-control-label" for="defaultInline1" style="font-weight:500;font-size: 15px;color: rgb(100, 100, 100);">Student</label>
        </div>

        <!-- Default inline 2-->
        <div style="margin-left:-15px;" class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input instructor" id="defaultInline2" value="facilitator" name="inlineDefaultRadiosExample" onclick="who();">
        <label class="custom-control-label" for="defaultInline2" style="font-weight:500;font-size: 15px;color: rgb(100, 100, 100);">Facilitator</label>
        </div>

        <!-- Default inline 3-->
        <div style="margin-left:-15px;" class="custom-control custom-radio custom-control-inline">
        <input type="radio" class="custom-control-input admin" id="defaultInline3" value="admin" name="inlineDefaultRadiosExample" onclick="who();">
        <label class="custom-control-label" for="defaultInline3" style="font-weight:500;font-size: 15px;color: rgb(100, 100, 100);">Admin</label>
        </div><br>

        
        <div class="form-group">
        <input type="button" style="background: #009510;" class="btn btn-success col-md-12" name ="submit" id ="submit" onclick="login();" value="Login">
        <center><p id="spinner_loader" style="color:#009510; display:none;"><span class="spinner-border spinner-grow-sm" role="status" aria-hidden="true"></span> Loading...</p></center>
        </div>
        <div class="text-center" style="margin-top:-3px;" id="display_responses"></div>
  
        <div class="row">
        <div  class="col-md-12">
        <small style=" margin-bottom:-20px;"><a class="forget_pwd" style="text-decoration:none; color:gray; border-bottom:none; font-size:14px !important;" href="#">Forgot your password?</a></small>
        </div>
        </div>

        
        </div>
       </form>
       </div>
        <div class="col-md-7">
        <h1 style="margin-top:19%; margin-left:12%; font-weight:bold; font-family: 'Archivo Black', sans-serif; padding-left:12px; padding-top:20px; padding-bottom:20px; border-left:8px solid #009510;" class="animated fadeInRight">Welcome to <span style="color: #009510;">AG Network</span> learning platform.</h1>
        </div>
      </div>
    </div>
    
</div>





    
<footer class="footer-1 bg-light text-dark">
<div class="container">
<div class="d-flex flex-column flex-md-row justify-content-between align-items-center">

		<strong class="small">&copy; 2019, AG-Network Learning Platform</strong>

	<div class="social mt-4 mt-md-0">
    <a class="twitter btn btn-outline-primary btn-icon" href="#" target="_blank">
      <i class="fab fa-twitter"></i>
      <span class="sr-only">View our Twitter Profile</span>
    </a>
    <a class="facebook btn btn-outline-primary btn-icon" href="#" target="_blank">
      <i class="fab fa-facebook"></i>
      <span class="sr-only">View our Facebook Profile
        <span>
    </a>
    <a class="github btn btn-outline-primary btn-icon" href="#" target="_blank">
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
<script src="components/javascript/popper.min.js"></script>
<script src="components/javascript/bootstrap.min.js" ></script>

<!--   lazy javascript -->
<script src="components/javascript/lazy.js"></script>
<script>
$(document).ready(() => {
  let data1 = document.getElementById("defaultInline1");
  if(data1.checked == true){
    let user_type = data1.value;
    $("#user_type").val(user_type);
  }
});

function who(){
  let data1 = document.getElementById("defaultInline1");
  let data2 = document.getElementById("defaultInline2");
  let data3 = document.getElementById("defaultInline3");
  
  if(data1.checked == true){
    let user_type = data1.value;
    $("#user_type").val(user_type);
  }
  if(data2.checked == true){
    let user_type = data2.value;
    $("#user_type").val(user_type);
  }
  if(data3.checked == true){
    let user_type = data3.value;
    $("#user_type").val(user_type);
  }

}
function login(){
  $("#display_responses").html("");
  let email = $("#email").val();
  let password = $("#password").val();
  let user_type = $("#user_type").val();
  let message = "";
  let error = "";
  
  if(user_type === ""){
    $("#display_responses").html('<span class="text text-danger"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Register as, should not have been skipped!</span>');
    return;
  }
  if(email.length === 0){
      message = "Email, Should be provided!";
      error = true;
    }
  if(password.length === 0){
     message = "Password, Should be provided!";
     error = true;
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
       email : email,
       password : password,
       user_type : user_type,
       request_id : "login"
     },
     success : function(response){
      console.log(response);
    
       if(response == "facilitator_failure"){
        $("#display_responses").html('<span class="text text-danger"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Sorry Your account has not been approved yet.</span>');
       }
       if(response == "facilitator_success"){
        Swal.fire(
        'Good job!',
        'You are successfully Logged in.',
        'success');
       window.location.replace("http://localhost/AG-Network-LP/system/instructor-dashboard.php");
       }
       if(response == "student_success"){
        Swal.fire(
        'Good job!',
        'You are successfully Logged in.',
        'success');
       window.location.replace("http://localhost/AG-Network-LP/system/student-dashboard.php");
       }
       if(response == "admin_success"){
        Swal.fire(
        'Good job!',
        'You are successfully Logged in.',
        'success');
       window.location.replace("http://localhost/AG-Network-LP/system/admin-dashboard.php");
       }
       if(response == "wrong inputs")
       {
        $("#display_responses").html('<span class="text text-danger"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Invalid Inputs</span>');
        return;
       }
     }
  });
 
    
  }
    
}
</script>
</body>

</html>