<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/student-account-edit-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:11:17 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Basic Information</title>

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

                    <div class="container-fluid page__container p-0">
                        <div class="row m-0">
                            <div class="col-lg container-fluid page__container">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="student-dashboard.php">Home</a></li>
                                    <li class="breadcrumb-item active">Edit Account</li>
                                </ol>
                                <h1 class="h2">Basic Information</h1>
                                <div class="card">
                                    <div class="list-group list-group-fit">
                                        <div class="list-group-item">
                                            <div class="form-group m-0" role="group" aria-labelledby="label-firstname">
                                                <div class="form-row">
                                                    <label id="label-firstname" for="firstname" class="col-md-3 col-form-label form-label">First name</label>
                                                    <div class="col-md-9">
                                                        <input id="firstname" type="text" placeholder="Your first name" value="Alexander" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="form-group m-0" role="group" aria-labelledby="label-lastname">
                                                <div class="form-row">
                                                    <label id="label-lastname" for="lastname" class="col-md-3 col-form-label form-label">Last name</label>
                                                    <div class="col-md-9">
                                                        <input id="lastname" type="text" placeholder="Your last name" value="Watson" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="form-group m-0" role="group" aria-labelledby="label-email">
                                                <div class="form-row">
                                                    <label id="label-email" for="email" class="col-md-3 col-form-label form-label">Your email address</label>
                                                    <div class="col-md-9">
                                                        <div role="group" class="input-group input-group-merge">
                                                            <input id="email" type="email" placeholder="Your email address" value="alexander.watson@gmail.com" class="form-control form-control-prepended">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="material-icons">email</i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <small class="form-text text-muted">Note that if you change your email, you will have to confirm it again.</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h4>Change Password</h4>

                                <div class="alert alert-light border-1 border-left-3 border-left-primary d-flex">
                                    <i class="material-icons text-success mr-3">check_circle</i>
                                    <div class="text-body">An email with password reset instructions has been sent to your email address, if it exists on our system.</div>
                                </div>

                                <div class="card">
                                    <div class="list-group list-group-fit">
                                        <div class="list-group-item">
                                            <div class="form-group m-0" role="group" aria-labelledby="label-password">
                                                <div class="form-row">
                                                    <label id="label-password" for="password" class="col-sm-3 col-form-label form-label">New password:</label>
                                                    <div class="col-sm-9">
                                                        <div role="group" class="input-group input-group-merge form-control-prepended">
                                                            <input id="password" type="password" required="required" placeholder="New password" aria-required="true" class="form-control form-control-prepended">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <span class="far fa-key"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="form-group m-0" role="group" aria-labelledby="label-password2">
                                                <div class="form-row">
                                                    <label id="label-password2" for="password2" class="col-sm-3 col-form-label form-label">Confirm password:</label>
                                                    <div class="col-sm-9">
                                                        <div role="group" class="input-group input-group-merge form-control-prepended">
                                                            <input id="password2" type="password" required="required" placeholder="Confirm password" aria-required="true" class="form-control form-control-prepended">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <span class="far fa-key"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="page-nav" class="col-lg-auto page-nav">
                                <div data-perfect-scrollbar>
                                    <div class="page-section pt-lg-32pt">
                                        <ul class="nav page-nav__menu">
                                            <li class="nav-item">
                                                <a href="student-account-edit-basic.php" class="nav-link active">Basic Information</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="student-account-edit-profile.php" class="nav-link">Profile &amp; Privacy</a>
                                            </li>
                                        </ul>
                                        <div class="page-nav__content">
                                            <button class="btn btn-success">Save Changes</button>
                                        </div>
                                    </div>
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
      'fixed': 'fixed-student-account-edit-basic.html',
      'default': 'student-account-edit-basic.html'
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








</body>


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/student-account-edit-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:11:18 GMT -->
</html>