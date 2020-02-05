<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/instructor-account-edit.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:15:01 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student - Edit account</title>

    <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
    <meta name="robots" content="noindex">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="assets/vendor/perfect-scrollbar.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="assets/css/material-icons.css" rel="stylesheet">
    <link type="text/css" href="assets/css/material-icons.rtl.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link type="text/css" href="assets/css/fontawesome.css" rel="stylesheet">
    <link type="text/css" href="assets/css/fontawesome.rtl.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">


    <!-- App CSS -->
    <link type="text/css" href="assets/css/app.css" rel="stylesheet">
    <link type="text/css" href="assets/css/app.rtl.css" rel="stylesheet">

</head>

<!--==============INCLUDE THE HEADER===========-->
<?php include "includes/student/header.php"; ?>
<!--==============%%%INCLUDE THE HEADER%%%===========-->

<!-- Header Layout Content -->
<div class="mdk-header-layout__content">

    <div data-push data-responsive-width="992px" class="mdk-drawer-layout js-mdk-drawer-layout">
        <div class="mdk-drawer-layout__content page ">

            <div class="container-fluid page__container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="instructor-dashboard.php">Home</a></li>
                    <li class="breadcrumb-item active">Edit Account</li>
                </ol>
                <h1 class="h2">Edit Account</h1>

                <div class="card">
                    <ul class="nav nav-tabs nav-tabs-card">
                        <li class="nav-item">
                            <a class="nav-link active" href="#first" data-toggle="tab">Account</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#second" data-toggle="tab">Change Password</a>
                        </li>
                    </ul>
                    <div class="tab-content card-body">
                        <div class="tab-pane active" id="first">
                            <form action="#" class="form-horizontal"><br>
                                <!-- <div class="form-group row">
                                            <label for="avatar" class="col-sm-3 col-form-label form-label">Avatar</label>
                                            <div class="col-sm-9">
                                                <div class="media align-items-center">
                                                    <div class="media-left">
                                                        <div class="icon-block rounded">
                                                            <i class="material-icons text-muted-light md-36">photo</i>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="custom-file" style="width: auto;">
                                                            <input type="file" id="avatar" class="custom-file-input">
                                                            <label for="avatar" class="custom-file-label">Choose file</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                         <div id="update_response"></div>             
                               <div class="form-group row">
                                    <label for="website" class="col-sm-3 col-form-label form-label">Names</label>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="material-icons md-18 text-muted">mail</i>
                                                </div>
                                            </div>
                                            <input type="text" id="names" name="names" class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="website" class="col-sm-3 col-form-label form-label">Email</label>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="material-icons md-18 text-muted">mail</i>
                                                </div>
                                            </div>
                                            <input type="email" id="email" name="email" class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="website" class="col-sm-3 col-form-label form-label">Phone</label>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="material-icons md-18 text-muted">phone</i>
                                                </div>
                                            </div>
                                            <input type="text" id="phone" name="phone" class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-3 col-form-label form-label">Address</label>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="material-icons md-18 text-muted">map</i>
                                                </div>
                                            </div>
                                            <input type="text" id="address" name="address" class="form-control"
                                                value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-3 col-form-label form-label">Reason</label>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="material-icons md-18 text-muted">book</i>
                                                </div>
                                            </div>
                                            <select name="reason" id="reason"></select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-8 offset-sm-3">
                                        <div class="media align-items-center">
                                            <div class="media-left">
                                                <a type="button"
                                                    onclick="update_user_info('<?php echo $_SESSION['userId'];?>', '<?php echo $_SESSION['userRole'];?>');"
                                                    href="#" class="btn btn-success">Save Changes</a>
                                            </div>
                                            <div class="media-body pl-1">
                                                <div class="custom-control custom-checkbox">
                                                    <input id="subscribe" type="checkbox" class="custom-control-input"
                                                        checked>
                                                    <label for="subscribe" class="custom-control-label">Subscribe to
                                                        Newsletter</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane" id="second">
                            <form action="#" class="form-horizontal"><br>
                            <div id="pwd_update_response"></div> 
                                <div class="form-group row">
                                    <label for="password" class="col-sm-3 col-form-label form-label">Current
                                        Password</label>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="material-icons md-18 text-muted">lock</i>
                                                </div>
                                            </div>
                                            <input type="password" id="current_pwd" name="current_pwd"
                                                class="form-control" value="" autocomplete>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-sm-3 col-form-label form-label">New
                                        Password</label>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="material-icons md-18 text-muted">lock</i>
                                                </div>
                                            </div>
                                            <input type="password" id="new_pwd" name="new_pwd"
                                                class="form-control" value="" autocomplete>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 col-md-4 offset-sm-3">
                                    <a type="button"
                                        onclick="update_user_pwd('<?php echo $_SESSION['userId'];?>', '<?php echo $_SESSION['userRole'];?>');"
                                        href="#" class="btn btn-success">Save Changes</a>
                                    </div>
                                </div>
                            </form>
                            <!-- <div class="card mt-2">
                                        <div class="card-header">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <h4 class="card-title">Payment Info</h4>
                                                </div>
                                                <div class="media-right">
                                                    <a href="#" class="btn btn-sm btn-outline-primary"><i class="material-icons">add</i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="card-footer p-0 list-group list-group-fit">
                                            <li class="list-group-item active">
                                                <div class="media align-items-center">
                                                    <div class="media-left">
                                                        <span class="btn btn-primary btn-circle"><i class="material-icons">credit_card</i></span>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="mb-0">**** **** **** 2422</p>
                                                        <small>Updated on 12/02/2016</small>
                                                    </div>
                                                    <div class="media-right">
                                                        <a href="#" class="btn btn-primary btn-sm">
                                                            <i class="material-icons btn__icon--left">edit</i> EDIT
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="media align-items-center">
                                                    <div class="media-left">
                                                        <span class="btn btn-white btn-circle"><i class="material-icons">credit_card</i></span>
                                                    </div>
                                                    <div class="media-body">
                                                        <p class="mb-0">**** **** **** 6321</p>
                                                        <small class="text-muted">Updated on 11/01/2016</small>
                                                    </div>
                                                    <div class="media-right">
                                                        <a href="#" class="btn btn-white btn-sm">
                                                            <i class="material-icons btn__icon--left">edit</i> EDIT
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>




        <!--==============INCLUDE THE MENU===========-->
        <?php include "includes/student/menu.php"; ?>
        <!--==============%%%INCLUDE THE MENU%%%===========-->

    </div>

    <!-- App Settings FAB -->
    <div id="app-settings">
        <app-settings layout-active="default" :layout-location="{
      'fixed': 'fixed-instructor-account-edit.html',
      'default': 'instructor-account-edit.html'
    }" sidebar-variant="bg-transparent border-0"></app-settings>
    </div>

</div>
</div>



<!-- jQuery -->
<script src="assets/vendor/jquery.min.js"></script>

<!-- Bootstrap -->
<script src="assets/vendor/popper.min.js"></script>
<script src="assets/vendor/bootstrap.min.js"></script>

<!-- Perfect Scrollbar -->
<script src="assets/vendor/perfect-scrollbar.min.js"></script>

<!-- MDK -->
<script src="assets/vendor/dom-factory.js"></script>
<script src="assets/vendor/material-design-kit.js"></script>

<!-- App JS -->
<script src="assets/js/app.js"></script>

<!-- Highlight.js -->
<script src="assets/js/hljs.js"></script>

<!-- App Settings (safe to remove) -->
<script src="assets/js/app-settings.js"></script>
<script>
// functions to be called on page load
load_user_info('<?php echo $_SESSION['userId']?>', '<?php echo $_SESSION['userRole']?>');
// functions to be called on page load--END


function update_user_info(user_id, user_role) {
    let names = $("#names").val();
    let email = $("#email").val();
    let phone = $("#phone").val();
    let address = $("#address").val();
    let reason = $("#reason").val();
    
    $.ajax({
        url: "modules/insert_all.php",
        type: "POST",
        cash: false,
        data: {
            user_id,
            user_role,
            names,
            email,
            phone,
            address,
            reason,
            request_id : "update_user_info"
        },
        success: (response) => {
           
            if(response == "updated successfully"){
                console.log(response);
                $("#update_response").append('<div class="alert alert-light alert-dismissible border-1 border-left-3 border-left-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><div class="text-black-70"><i style="color:#009510 !important;" class="fa fa-check-circle mr-2" aria-hidden="true"></i>Updated Successfully!</div></div>');
               
                load_user_info('<?php echo $_SESSION['userId']?>', '<?php echo $_SESSION['userRole']?>');
            }
            if(response == "no updates made"){
                $("#update_response").append('<div class="alert alert-light alert-dismissible border-1 border-left-3 border-left-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><div class="text-black-70"><i style="color:#F44336 !important;" class="fa fa-exclamation-circle mr-2" aria-hidden="true"></i>There was nothing to update!</div></div>');

                load_user_info('<?php echo $_SESSION['userId']?>', '<?php echo $_SESSION['userRole']?>');
            }
            
        }
    })
}

function update_user_pwd(user_id, user_role){
   let current_pwd = $("#current_pwd").val();
   let new_pwd = $("#new_pwd").val();
   $.ajax({
        url: "modules/insert_all.php",
        type: "POST",
        cash: false,
        data: {
           user_id,
           user_role,
           current_pwd,
           new_pwd,
           request_id : "update_user_pwd"
       },
       success: (response) => {
        if(response == "updated successfully"){
                console.log(response);
                $("#pwd_update_response").append('<div class="alert alert-light alert-dismissible border-1 border-left-3 border-left-success" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><div class="text-black-70"><i style="color:#009510 !important;" class="fa fa-check-circle mr-2" aria-hidden="true"></i>Your password was changed successfully!</div></div>');
               
                load_user_info('<?php echo $_SESSION['userId']?>', '<?php echo $_SESSION['userRole']?>');
            }
            if(response == "incorrect password"){
                $("#pwd_update_response").append('<div class="alert alert-light alert-dismissible border-1 border-left-3 border-left-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><div class="text-black-70"><i style="color:#F44336 !important;" class="fa fa-exclamation-circle mr-2" aria-hidden="true"></i>Your current password is incorrect!</div></div>');

                load_user_info('<?php echo $_SESSION['userId']?>', '<?php echo $_SESSION['userRole']?>');
            }
            if(response == "no updates made"){
                $("#pwd_update_response").append('<div class="alert alert-light alert-dismissible border-1 border-left-3 border-left-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><div class="text-black-70"><i style="color:#F44336 !important;" class="fa fa-exclamation-circle mr-2" aria-hidden="true"></i>There was nothing to update!</div></div>');

                load_user_info('<?php echo $_SESSION['userId']?>', '<?php echo $_SESSION['userRole']?>');
            }
       }
   });
}

function load_user_info(user_id, user_role) {
    $.ajax({
        url: "modules/view_all.php",
        type: "POST",
        cash: false,
        data: {
            user_id,
            user_role,
            request_id: "load_user_info"
        },
        success: (response) => {
            $.each(JSON.parse(response), function(key, value){
                $("#names").val(this.names);
                $("#email").val(this.email);
                $("#phone").val(this.phone);
                $("#address").val(this.address);
                if(this.reason == "I want to start an Agri-Business"){
                $("#reason").append('<option value="I want to start an Agri-Business" selected>I want to start an Agri-Business</option><option value="I want a job">I want a job</option><option value="I want a certificate">I want a certificate</option><option value="I am a farmer">I am a farmer</option>');
                }
                else if(this.reason == "I want a job"){
                $("#reason").append('<option value="I want to start an Agri-Business">I want to start an Agri-Business</option><option value="I want a job" selected>I want a job</option><option value="I want a certificate">I want a certificate</option><option value="I am a farmer">I am a farmer</option>');
                }
                else if(this.reason == "I want a certificate"){
                $("#reason").append('<option value="I want to start an Agri-Business">I want to start an Agri-Business</option><option value="I want a job">I want a job</option><option value="I want a certificate" selected>I want a certificate</option><option value="I am a farmer">I am a farmer</option>');
                }
                else if(this.reason == "I am a farmer"){
                $("#reason").append('<option value="I want to start an Agri-Business">I want to start an Agri-Business</option><option value="I want a job">I want a job</option><option value="I want a certificate">I want a certificate</option><option value="I am a farmer" selected>I am a farmer</option>');
                }
                else{
                $("#reason").append('<option value="no option">No option</option>');
                }

            })
        }
    });
}
</script>

</body>

</html>