<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/student-account-billing-payment-information.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:11:22 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Payment Information</title>

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

                                <h1 class="h2">Payment Information</h1>

                                <div class="card">
                                    <div class="list-group list-group-fit">
                                        <div class="list-group-item py-3">
                                            <span class="d-flex align-items-center">
                                                <img src="assets/images/visa.svg" alt="cc" width="40" class="mr-3">
                                                <span class="flex" style="white-space: nowrap;">
                                                    Your current payment method is
                                                    <strong>Visa ending with 2819</strong>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="list-group-item">
                                            <fieldset role="group" aria-labelledby="label-type" class="m-0 form-group">
                                                <div class="form-row">
                                                    <label for="payment_cc" id="label-type" class="col-md-3 col-form-label form-label">Payment type</label>
                                                    <div role="group" aria-labelledby="label-type" class="col-md-9">
                                                        <div role="group" class="btn-group btn-group-toggle" data-toggle="buttons">
                                                            <label class="btn btn-outline-secondary active">
                                                                <input type="radio" id="payment_cc" name="payment_type" value="cc" checked="" aria-checked="true" /> Debit or credit card
                                                            </label>
                                                            <label class="btn btn-outline-secondary">
                                                                <input type="radio" id="payment_pp" name="payment_type" value="pp" aria-checked="true" /> PayPal
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                        <div class="list-group-item">
                                            <div role="group" aria-labelledby="label-cc" class="m-0 form-group">
                                                <div class="form-row">
                                                    <label id="label-cc" for="cc" class="col-md-3 col-form-label form-label">Card number</label>
                                                    <div class="col-md-9">
                                                        <input id="cc" type="text" placeholder="Credit / debit card number" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div role="group" aria-labelledby="label-cvv" class="m-0 form-group">
                                                <div class="form-row">
                                                    <label id="label-cvv" for="cvv" class="col-md-3 col-form-label form-label">Security code (CVV)</label>
                                                    <div class="col-md-9">
                                                        <input id="cvv" type="text" placeholder="CVV" class="form-control" style="width: 100px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <div role="group" aria-labelledby="label-expire_month" class="m-0 form-group">
                                                <div class="form-row">
                                                    <label id="label-expire_month" for="expire_month" class="col-md-3 col-form-label form-label">Expiration date</label>
                                                    <div class="col-md-9">
                                                        <div class="form-row">
                                                            <div class="col-auto">
                                                                <select id="expire_month" class="form-control custom-select" style="width: 140px;">
                                                                    <option value="1">January</option>
                                                                    <option value="2">February</option>
                                                                    <option value="3">March</option>
                                                                    <option value="4">April</option>
                                                                    <option value="5">May</option>
                                                                    <option value="6">June</option>
                                                                    <option value="7">July</option>
                                                                    <option value="8">August</option>
                                                                    <option value="9">September</option>
                                                                    <option value="10">October</option>
                                                                    <option value="11">November</option>
                                                                    <option value="12">December</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-auto">
                                                                <select id="expire_year" class="form-control custom-select" style="width: 100px;">
                                                                    <option value="2018">2018</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2020">2020</option>
                                                                    <option value="2021">2021</option>
                                                                    <option value="2022">2022</option>
                                                                    <option value="2023">2023</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list-group-item">
                                            <button type="button" class="btn btn-success">Save Changes</button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div id="page-nav" class="col-lg-auto page-nav">
                                <div data-perfect-scrollbar>
                                    <div class="page-section pt-lg-32pt">
                                        <ul class="nav page-nav__menu">
                                            <li class="nav-item">
                                                <a href="student-account-billing-subscription.php" class="nav-link">Subscription</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="student-account-billing-upgrade.php" class="nav-link">Upgrade Account</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="student-account-billing-payment-information.php" class="nav-link active">Payment Information</a>
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
      'fixed': 'fixed-student-account-billing-payment-information.html',
      'default': 'student-account-billing-payment-information.html'
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


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/student-account-billing-payment-information.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:11:23 GMT -->
</html>