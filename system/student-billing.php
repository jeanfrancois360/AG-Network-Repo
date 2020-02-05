<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/student-billing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:11:23 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Payment History</title>

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

                                <h1 class="h2">Payment History</h1>


                                <div class="card border-left-3 border-left-danger card-2by1">
                                    <div class="card-body">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                Please pay your amount due
                                                <strong class="text-danger">$25.00</strong> with invoice <a href="#">#8331</a>
                                            </div>
                                            <div class="media-right">
                                                <a href="student-pay.php" class="btn btn-success float-right">Pay Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <div class="card table-responsive" data-toggle="lists" data-lists-values='[
    "js-lists-values-document", 
    "js-lists-values-amount",
    "js-lists-values-status",
    "js-lists-values-date"
  ]' data-lists-sort-by="js-lists-values-document" data-lists-sort-desc="true">
                                    <table class="table mb-0">
                                        <thead class="thead-light">
                                            <tr>
                                                <th colspan="4">
                                                    <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-document">Document</a>
                                                    <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-amount">Amount</a>
                                                    <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-status">Status</a>
                                                    <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-date">Date</a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">

                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <small class="text-uppercase text-muted mr-2">Invoice</small>
                                                        <a href="student-invoice.php" class="text-body small">#<span class="js-lists-values-document">12199</span></a>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex align-items-center">
                                                        <small class="text-uppercase text-muted mr-2">Amount</small>
                                                        <small class="text-uppercase">$<span class="js-lists-values-amount">25</span> USD</small>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex align-items-center">
                                                        <small class="text-uppercase text-muted mr-2">Status</small>
                                                        <i class="material-icons text-success md-18 mr-2">lens</i>
                                                        <small class="text-uppercase js-lists-values-status">paid</small>
                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    <div class="d-flex align-items-center text-right">
                                                        <small class="text-uppercase text-muted mr-2">Date</small>
                                                        <small class="text-uppercase js-lists-values-date">12 Feb 2016</small>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <small class="text-uppercase text-muted mr-2">Invoice</small>
                                                        <a href="student-invoice.php" class="text-body small">#<span class="js-lists-values-document">8331</span></a>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex align-items-center">
                                                        <small class="text-uppercase text-muted mr-2">Amount</small>
                                                        <small class="text-uppercase">$<span class="js-lists-values-amount">25</span> USD</small>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex align-items-center">
                                                        <small class="text-uppercase text-muted mr-2">Status</small>
                                                        <i class="material-icons text-danger md-18 mr-2">lens</i>
                                                        <small class="text-uppercase js-lists-values-status">unpaid</small>
                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    <div class="d-flex align-items-center text-right">
                                                        <small class="text-uppercase text-muted mr-2">Date</small>
                                                        <small class="text-uppercase js-lists-values-date">12 Jan 2016</small>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <small class="text-uppercase text-muted mr-2">Invoice</small>
                                                        <a href="student-invoice.php" class="text-body small">#<span class="js-lists-values-document">2421</span></a>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex align-items-center">
                                                        <small class="text-uppercase text-muted mr-2">Amount</small>
                                                        <small class="text-uppercase">$<span class="js-lists-values-amount">25</span> USD</small>
                                                    </div>
                                                </td>
                                                <td class="text-center">
                                                    <div class="d-flex align-items-center">
                                                        <small class="text-uppercase text-muted mr-2">Status</small>
                                                        <i class="material-icons text-success md-18 mr-2">lens</i>
                                                        <small class="text-uppercase js-lists-values-status">paid</small>
                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    <div class="d-flex align-items-center text-right">
                                                        <small class="text-uppercase text-muted mr-2">Date</small>
                                                        <small class="text-uppercase js-lists-values-date">12 Dec 2016</small>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                                <!-- Pagination -->
                                <ul class="pagination justify-content-center pagination-sm">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true" class="material-icons">chevron_left</span>
                                            <span>Prev</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#" aria-label="1">
                                            <span>1</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="1">
                                            <span>2</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span>Next</span>
                                            <span aria-hidden="true" class="material-icons">chevron_right</span>
                                        </a>
                                    </li>
                                </ul>

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
                                                <a href="student-billing.php" class="nav-link active">Payment History</a>
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
      'fixed': 'fixed-student-billing.html',
      'default': 'student-billing.html'
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






    <!-- List.js -->
    <script src="assets/vendor/list.min.js"></script>
    <script src="assets/js/list.js"></script>

</body>


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/student-billing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:11:25 GMT -->
</html>