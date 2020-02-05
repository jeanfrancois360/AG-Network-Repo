<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/instructor-earnings.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:15:03 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Facilitator Earnings</title>

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

                    <div class="container-fluid page__container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="instructor-dashboard.php">Home</a></li>
                            <li class="breadcrumb-item active">Earnings</li>
                        </ol>
                        <h1 class="h2">Earnings</h1>
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group float-md-right">
                                    <select class="custom-select">
                                        <option selected>2015</option>
                                        <option value="1">2014</option>
                                        <option value="2">2013</option>
                                        <option value="3">2012</option>
                                    </select>
                                </div>
                                <div class="clearfix"></div>
                                <div class="chart" style="height: 300px;">
                                    <canvas id="earningsChart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Total <span class="text-primary">$19,239</span></h5>
                            </div>
                            <div data-toggle="lists" data-lists-values='[
        "js-lists-values-course", 
        "js-lists-values-revenue",
        "js-lists-values-fees"
      ]' data-lists-sort-by="js-lists-values-revenue" data-lists-sort-desc="true" class="table-responsive">
                                <table class="table table-nowrap m-0">
                                    <thead class="thead-light">
                                        <tr class="text-uppercase small">
                                            <th>
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-course">Course</a>
                                            </th>
                                            <th class="text-center" style="width:130px">
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-fees">Fees</a>
                                            </th>
                                            <th class="text-center" style="width:130px">
                                                <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-revenue">Revenue</a>
                                            </th>
                                        </tr>
                                    </thead>



                                    <tbody class="list">

                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <a href="instructor-course-edit.php" class="avatar avatar-4by3 avatar-sm mr-3">
                                                        <img src="assets/images/lesson4.png" alt="course" class="avatar-img rounded">
                                                    </a>
                                                    <div class="media-body">
                                                        <a class="text-body js-lists-values-course" href="instructor-course-edit.php"><strong>Angular Routing In-Depth</strong></a>
                                                        <div class="text-muted small">34 Sales</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center text-black-70">

                                                &dollar;<span class="js-lists-values-fees">120</span> USD

                                            </td>
                                            <td class="text-center text-black-70">
                                                &dollar;<span class="js-lists-values-revenue">8,737</span> USD
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <a href="instructor-course-edit.php" class="avatar avatar-4by3 avatar-sm mr-3">
                                                        <img src="assets/images/lesson4.png" alt="course" class="avatar-img rounded">
                                                    </a>
                                                    <div class="media-body">
                                                        <a class="text-body js-lists-values-course" href="instructor-course-edit.php"><strong>Angular Unit Testing</strong></a>
                                                        <div class="text-muted small">38 Sales</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center text-black-70">

                                                <span class="js-lists-values-fees sr-only">0</span>
                                                <i class="material-icons text-muted-light">remove</i>

                                            </td>
                                            <td class="text-center text-black-70">
                                                &dollar;<span class="js-lists-values-revenue">2,521</span> USD
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <a href="instructor-course-edit.php" class="avatar avatar-4by3 avatar-sm mr-3">
                                                        <img src="assets/images/lesson2.png" alt="course" class="avatar-img rounded">
                                                    </a>
                                                    <div class="media-body">
                                                        <a class="text-body js-lists-values-course" href="instructor-course-edit.php"><strong>Introduction to TypeScript</strong></a>
                                                        <div class="text-muted small">8 Sales</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center text-black-70">

                                                <span class="js-lists-values-fees sr-only">0</span>
                                                <i class="material-icons text-muted-light">remove</i>

                                            </td>
                                            <td class="text-center text-black-70">
                                                &dollar;<span class="js-lists-values-revenue">1,413</span> USD
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <a href="instructor-course-edit.php" class="avatar avatar-4by3 avatar-sm mr-3">
                                                        <img src="assets/images/lesson1.png" alt="course" class="avatar-img rounded">
                                                    </a>
                                                    <div class="media-body">
                                                        <a class="text-body js-lists-values-course" href="instructor-course-edit.php"><strong>Learn Angular Fundamentals</strong></a>
                                                        <div class="text-muted small">31 Sales</div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center text-black-70">

                                                <span class="js-lists-values-fees sr-only">0</span>
                                                <i class="material-icons text-muted-light">remove</i>

                                            </td>
                                            <td class="text-center text-black-70">
                                                &dollar;<span class="js-lists-values-revenue">1,234</span> USD
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
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

                </div>


         <!--==============INCLUDE THE MENU===========-->
         <?php include "includes/facilitator/menu.php"; ?>
         <!--==============%%%INCLUDE THE MENU%%%===========-->

            </div>

            <!-- App Settings FAB -->
            <div id="app-settings">
                <app-settings layout-active="default" :layout-location="{
      'fixed': 'fixed-instructor-earnings.html',
      'default': 'instructor-earnings.html'
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






    <!-- Global Settings -->
    <script src="assets/js/settings.js"></script>

    <!-- Chart.js -->
    <script src="assets/vendor/Chart.min.js"></script>

    <!-- UI Charts Page JS -->
    <script src="assets/js/chartjs-rounded-bar.js"></script>
    <script src="assets/js/chartjs.js"></script>

    <!-- Chart.js Samples -->
    <script src="assets/js/page.instructor-earnings.js"></script>

    <!-- List.js -->
    <script src="assets/vendor/list.min.js"></script>
    <script src="assets/js/list.js"></script>

</body>


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/instructor-earnings.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:15:05 GMT -->
</html>