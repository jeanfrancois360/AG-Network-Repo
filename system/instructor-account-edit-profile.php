<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/student-account-edit-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:11:18 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Facilitator Profile &amp; Privacy</title>

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
     <?php include "includes/facilitator/header.php"; ?>
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
                                <h1 class="h2">Profile &amp; Privacy</h1>
                                <div class="card">
                                    <div class="list-group list-group-fit">
                                        <div class="list-group-item">
                                            <div role="group" aria-labelledby="label-avatar" class="m-0 form-group">
                                                <div class="form-row">
                                                    <label id="label-avatar" for="avatar" class="col-md-3 col-form-label form-label">Your photo</label>
                                                    <div class="col-md-9">
                                                        <div class="media align-items-center">
                                                            <div class="d-flex mr-3 align-self-center">
                                                                <span class="avatar avatar-lg">
                                                                    <span class="avatar-title rounded">
                                                                        <i class="material-icons">photo</i>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="custom-file b-form-file">
                                                                    <input type="file" id="avatar" aria-describedby="label-avatar-control" class="custom-file-input">
                                                                    <label id="label-avatar-control" class="custom-file-label">Your avatar photo</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div role="group" aria-labelledby="label-profilename" class="m-0 form-group">
                                                <div class="form-row">
                                                    <label id="label-profilename" for="profilename" class="col-md-3 col-form-label form-label">Profile name</label>
                                                    <div class="col-md-9">
                                                        <div role="group" class="input-group input-group-merge">
                                                            <input id="profilename" type="text" placeholder="Your profile name" value="alexander" class="form-control form-control-prepended" aria-describedby="description-profilename">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">learnplus.io/</div>
                                                            </div>
                                                        </div>
                                                        <small id="description-profilename" class="form-text text-muted">Your profile name will be used as part of your public profile URL address.</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div role="group" aria-labelledby="label-about" class="m-0 form-group">
                                                <div class="form-row">
                                                    <label id="label-about" for="about" class="col-md-3 col-form-label form-label">About you</label>
                                                    <div class="col-md-9">
                                                        <textarea id="about" placeholder="About you ..." rows="3" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <fieldset role="group" aria-labelledby="legend-display_realname" aria-describedby="description-display_realname" class="m-0 form-group">
                                                <div class="form-row">
                                                    <label id="legend-display_realname" for="display_realname" class="col-md-3 col-form-label form-label">Privacy</label>
                                                    <div role="group" aria-labelledby="legend-display_realname" class="col-md-9">
                                                        <div class="custom-control custom-checkbox custom-control-inline">
                                                            <input id="display_realname" type="checkbox" class="custom-control-input" checked="">
                                                            <label for="display_realname" class="custom-control-label">Display your real name on your profile</label>
                                                        </div>
                                                        <small id="description-display_realname" class="form-text text-muted">If unchecked, your profile name will be displayed instead of your full name.</small>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="list-group-item">
                                            <fieldset role="group" aria-describedby="description-public_profile" class="m-0 form-group">
                                                <div class="form-row">
                                                    <div class="col-md-3"></div>
                                                    <div role="group" class="col-md-9">
                                                        <div class="custom-control custom-checkbox custom-control-inline">
                                                            <input id="public_profile" type="checkbox" class="custom-control-input" checked="">
                                                            <label for="public_profile" class="custom-control-label">Allow everyone to see your profile</label>
                                                        </div>
                                                        <small id="description-public_profile" class="form-text text-muted">If unchecked, your profile will be private and one one except you will be able to view it.</small>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="page-nav" class="col-lg-auto page-nav">
                                <div data-perfect-scrollbar>
                                    <div class="page-section pt-lg-32pt">
                                        <ul class="nav page-nav__menu">
                                            <li class="nav-item">
                                                <a href="student-account-edit-basic.php" class="nav-link">Basic Information</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="student-account-edit-profile.php" class="nav-link active">Profile &amp; Privacy</a>
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
         <?php include "includes/facilitator/menu.php"; ?>
         <!--==============%%%INCLUDE THE MENU%%%===========-->

            </div>

            <!-- App Settings FAB -->
            <div id="app-settings">
                <app-settings layout-active="default" :layout-location="{
      'fixed': 'fixed-student-account-edit-profile.html',
      'default': 'student-account-edit-profile.html'
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


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/student-account-edit-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:11:19 GMT -->
</html>