<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/student-account-billing-subscription.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:11:19 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Subscription</title>

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

                                <h1 class="h2">Subscription</h1>

                                <div class="card">
                                    <div class="list-group list-group-fit">
                                        <div class="list-group-item">
                                            <div class="form-group row mb-0">
                                                <label class="col-form-label form-label col-sm-3">Your current plan</label>
                                                <div class="col-sm-9 d-flex align-items-center">
                                                    <div class="flex">Basic, &dollar;9 per month</div>
                                                    <a href="student-account-billing-upgrade.php" class="text-secondary">Change plan</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="form-group row mb-0">
                                                <label class="col-form-label form-label col-sm-3">Billing cycle</label>
                                                <div class="col-sm-9">
                                                    <p class="mb-1">You will be charged $9 on Aug 20, 2018</p>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" checked id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1">
                                                            <strong>Enable automatic renewal</strong>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="form-group row mb-0">
                                                <label class="col-form-label form-label col-sm-3">Payment information</label>
                                                <div class="col-sm-9 d-flex align-items-center">
                                                    <img src="assets/images/visa.svg" alt="visa" width="40" class="mr-16pt">
                                                    <div class="flex">Visa ending with 2819</div>
                                                    <a href="student-account-billing-payment-information.php" class="text-secondary">Change method</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div class="form-group row mb-0">
                                                <label class="col-form-label form-label col-sm-3">Cancel</label>
                                                <div class="col-sm-9">
                                                    <a href="#" class="btn btn-outline-secondary">Cancel subscription</a>
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
                                                <a href="student-account-billing-subscription.php" class="nav-link active">Subscription</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="student-account-billing-upgrade.php" class="nav-link">Upgrade Account</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="student-account-billing-payment-information.php" class="nav-link">Payment Information</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="student-billing.php" class="nav-link">Payment History</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="student-invoice.php" class="nav-link">Invoice</a>
                                            </li>
                                        </ul>
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
      'fixed': 'fixed-student-account-billing-subscription.html',
      'default': 'student-account-billing-subscription.html'
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


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/student-account-billing-subscription.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:11:21 GMT -->
</html>