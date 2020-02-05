<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/student-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:11:25 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student - Invoice</title>

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

                                <div id="invoice">
                                    <div class="card">
                                        <div class="card-header media align-items-center">
                                            <div class="media-body">
                                                <h1 class="card-title h2">Invoice</h1>
                                                <div class="card-subtitle">Document 10003578 / 12 Jan 2019</div>
                                            </div>
                                            <div class="media-right d-flex align-items-center">
                                                <a href="javascript:window.print()" class="btn btn-flush text-muted d-print-none mr-3"><i class="material-icons font-size-24pt">print</i></a>

                                                <a href="student-account-billing-payment-information.php" class="btn btn-success d-print-none">Pay</a>

                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <p class="text-black-70 m-0"><strong>Prepared for</strong></p>
                                                    <h2>Alexander Watson</h2>
                                                    <div class="text-black-50">
                                                        640 Joy Bypass Suite 448 <br>
                                                        Germany
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-black-70 m-0"><strong>Prepared by</strong></p>
                                                    <h2>LearnPlus Inc.</h2>
                                                    <div class="text-black-50">
                                                        32 Noah Cliffs Suite 626, Romania <br>
                                                        Tax ID RO18880609
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card table-responsive">
                                    <table class="table mb-0 table--elevated">
                                        <thead class="thead-light">
                                            <tr>
                                                <th class="border-top-0">Description</th>
                                                <th class="border-top-0 text-right" style="width: 120px;">Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <a href="student-view-course.php" class="avatar avatar-4by3 avatar-sm mr-3">
                                                            <img src="assets/images/lesson1.png" alt="Learn Angular Fundamentals" class="avatar-img rounded">
                                                        </a>
                                                        <div class="flex">
                                                            <a href="student-view-course.php" class="text-body">
                                                                <strong>Learn Angular Fundamentals</strong>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-right"><strong>&dollar;89.00 USD</strong></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="mb-1"><strong>Basic Plan - Monthly Subscription</strong></p>
                                                    <p class="text-black-50 mb-0 small">For the period of June 20, 2018 to July 20, 2018</p>
                                                </td>
                                                <td class="text-right"><strong>&dollar;9.00 USD</strong></td>
                                            </tr>
                                            <tr>
                                                <td><strong>Credit discount</strong></td>
                                                <td class="text-right"><strong>-&dollar;5.00 USD</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <table class="table mb-0">
                                        <tfoot>
                                            <tr>
                                                <td class="text-right text-black-70"><strong>Subtotal</strong></td>
                                                <td style="width: 120px;" class="text-right"><strong>&dollar;89.00 USD</strong></td>
                                            </tr>
                                            <tr>
                                                <td class="text-right text-black-70"><strong>Total</strong></td>
                                                <td style="width: 120px;" class="text-right"><strong>&dollar;89.00 USD</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                                <div class="px-16pt mb-4">
                                    <p class="text-black-70 mb-8pt"><strong>Invoice paid</strong></p>
                                    <div class="d-flex">
                                        <div class="mr-3">
                                            <img src="assets/images/visa.svg" alt="visa" width="38" />
                                        </div>
                                        <div class="flex text-black-50">
                                            You don’t need to take further action. Your credit card Visa ending in 2819 has been charged on January 12, 2019.
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
                                                <a href="student-account-billing-payment-information.php" class="nav-link">Payment Information</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="student-billing.php" class="nav-link">Payment History</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="student-invoice.php" class="nav-link active">Invoice</a>
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
      'fixed': 'fixed-student-invoice.html',
      'default': 'student-invoice.html'
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


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/student-invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:11:27 GMT -->
</html>