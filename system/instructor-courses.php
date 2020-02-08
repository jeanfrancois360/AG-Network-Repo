<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/instructor-courses.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:15:10 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Facilitator - Manage courses</title>

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
                            <li class="breadcrumb-item active">Courses</li>
                        </ol>

                        <div class="d-flex flex-column flex-sm-row flex-wrap mb-headings align-items-start align-items-sm-center">
                            <div class="flex mb-2 mb-sm-0">
                                <h1 class="h2">Manage Courses</h1> 
                            </div>
                            <a href="instructor-add-course.php" class="btn btn-success"><i class="fa fa-plus mr-2"></i> Add course</a>
                        </div>

                        <div class="card card-body border-left-3 border-left-primary navbar-shadow mb-4">
                            <form action="#">
                                <div class="d-flex flex-wrap2 align-items-center mb-headings">
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown" class="btn btn-white"><i class="material-icons mr-sm-2">tune</i> <span class="d-none d-sm-block">Filters</span></a>
                                        <div class="dropdown-menu">
                                            <div class="dropdown-item d-flex flex-column">
                                                <div class="form-group">
                                                    <label for="custom-select" class="form-label">Category</label><br>
                                                    <select id="custom-select" class="form-control custom-select" style="width: 200px;">
                                                        <option selected>All categories</option>
                                                        <option value="1">Vue.js</option>
                                                        <option value="2">Node.js</option>
                                                        <option value="3">GitHub</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="published01" class="form-label">Published</label><br>
                                                    <select id="published01" class="form-control custom-select" style="width: 200px;">
                                                        <option selected>Published courses</option>
                                                        <option value="1">Draft courses</option>
                                                        <option value="3">All courses</option>
                                                    </select>
                                                </div>
                                                <a href="#">Clear filters</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex search-form ml-3 search-form--light">
                                        <input type="text" class="form-control" placeholder="Search courses" id="searchSample02">
                                        <button class="btn" type="button" role="button"><i class="material-icons">search</i></button>
                                    </div>
                                </div>

                                <div class="d-flex flex-column flex-sm-row align-items-sm-center" style="white-space: nowrap;">
                                    <small class="flex text-muted text-uppercase mr-3 mb-2 mb-sm-0">Displaying 4 out of 10 courses</small>
                                    <div class="w-auto ml-sm-auto table d-flex align-items-center mb-0">
                                        <small class="text-muted text-uppercase mr-3 d-none d-sm-block">Sort by</small>
                                        <a href="#" class="sort desc small text-uppercase">Course</a>
                                        <a href="#" class="sort small text-uppercase ml-2">Earnings</a>
                                        <a href="#" class="sort small text-uppercase ml-2">Sales</a>
                                    </div>
                                </div>
                            </form>
                        </div>



                        <!-- <div class="alert alert-light alert-dismissible border-1 border-left-3 border-left-warning" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="text-black-70">Ohh no! No courses to display. Add some courses.</div>
                        </div> -->

                        <div class="row">

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="d-flex flex-column flex-sm-row">
                                            <a href="instructor-course-edit.php" class="avatar avatar-lg avatar-4by3 mb-3 w-xs-plus-down-100 mr-sm-3">
                                                <img src="assets/images/lesson2.png" alt="Card image cap" class="avatar-img rounded">
                                            </a>
                                            <div class="flex" style="min-width: 200px;">
                                                <!-- <h5 class="card-title text-base m-0"><a href="instructor-course-edit.php"><strong>Learn Vue.js</strong></a></h5> -->
                                                <h4 class="card-title mb-1"><a href="instructor-course-edit.php">Accounting for Agribusiness</a></h4>
                                                <p class="text-black-70">Let’s start with a quick tour of Accounting for Agribusiness.</p>
                                                <div class="d-flex align-items-end">
                                                    <div class="d-flex flex flex-column mr-3">
                                                        <div class="d-flex align-items-center py-1 border-bottom">
                                                            <small class="text-black-70 mr-2">&dollar;1,230/mo</small>
                                                            <small class="text-black-50">34 SALES</small>
                                                        </div>
                                                        <div class="d-flex align-items-center py-1">
                                                            <small class="text-muted mr-2">GULP</small>
                                                            <small class="text-muted">INTERMEDIATE</small>
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <a href="instructor-course-edit.php" class="btn btn-sm btn-white">Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card__options dropdown right-0 pr-2">
                                        <a href="#" class="dropdown-toggle text-muted" data-caret="false" data-toggle="dropdown">
                                            <i class="material-icons">more_vert</i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="instructor-course-edit.php">Edit course</a>
                                            <a class="dropdown-item" href="#">Course Insights</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="#">Delete course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="d-flex flex-column flex-sm-row">
                                            <a href="instructor-course-edit.php" class="avatar avatar-lg avatar-4by3 mb-3 w-xs-plus-down-100 mr-sm-3">
                                                <img src="assets/images/lesson3.png" alt="Card image cap" class="avatar-img rounded">
                                            </a>
                                            <div class="flex" style="min-width: 200px;">
                                                <!-- <h5 class="card-title text-base m-0"><a href="instructor-course-edit.php"><strong>Npm &amp; Gulp Advanced Workflow</strong></a></h5> -->
                                                <h4 class="card-title mb-1"><a href="instructor-course-edit.php">Law and Agribusiness</a></h4>
                                                <p class="text-black-70">Learn everything related to Law and Agribusiness.</p>
                                                <div class="d-flex align-items-end">
                                                    <div class="d-flex flex flex-column mr-3">
                                                        <div class="d-flex align-items-center py-1 border-bottom">
                                                            <small class="text-black-70 mr-2">&dollar;421/mo</small>
                                                            <small class="text-black-50">12 SALES</small>
                                                        </div>
                                                        <div class="d-flex align-items-center py-1">
                                                            <small class="text-muted mr-2">GULP</small>
                                                            <small class="text-muted">INTERMEDIATE</small>
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <a href="instructor-course-edit.php" class="btn btn-sm btn-white">Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card__options dropdown right-0 pr-2">
                                        <a href="#" class="dropdown-toggle text-muted" data-caret="false" data-toggle="dropdown">
                                            <i class="material-icons">more_vert</i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="instructor-course-edit.php">Edit course</a>
                                            <a class="dropdown-item" href="#">Course Insights</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="#">Delete course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="d-flex flex-column flex-sm-row">
                                            <a href="instructor-course-edit.php" class="avatar avatar-lg avatar-4by3 mb-3 w-xs-plus-down-100 mr-sm-3">
                                                <img src="assets/images/lesson4.png" alt="Card image cap" class="avatar-img rounded">
                                            </a>
                                            <div class="flex" style="min-width: 200px;">
                                                <!-- <h5 class="card-title text-base m-0"><a href="instructor-course-edit.php"><strong>Github Webhooks for Beginners</strong></a></h5> -->
                                                <h4 class="card-title mb-1"><a href="instructor-course-edit.php">Business Management for Agriculture</a></h4>
                                                <p class="text-black-70">Business Management for Agriculture and advanced gulp setup.</p>
                                                <div class="d-flex align-items-end">
                                                    <div class="d-flex flex flex-column mr-3">
                                                        <div class="d-flex align-items-center py-1 border-bottom">
                                                            <small class="text-black-70 mr-2">&dollar;2,191/mo</small>
                                                            <small class="text-black-50">50 SALES</small>
                                                        </div>
                                                        <div class="d-flex align-items-center py-1">
                                                            <small class="text-muted mr-2">GULP</small>
                                                            <small class="text-muted">INTERMEDIATE</small>
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <a href="instructor-course-edit.php" class="btn btn-sm btn-white">Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card__options dropdown right-0 pr-2">
                                        <a href="#" class="dropdown-toggle text-muted" data-caret="false" data-toggle="dropdown">
                                            <i class="material-icons">more_vert</i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="instructor-course-edit.php">Edit course</a>
                                            <a class="dropdown-item" href="#">Course Insights</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="#">Delete course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="d-flex flex-column flex-sm-row">
                                            <a href="instructor-course-edit.php" class="avatar avatar-lg avatar-4by3 mb-3 w-xs-plus-down-100 mr-sm-3">
                                                <img src="assets/images/lesson1.png" alt="Card image cap" class="avatar-img rounded">
                                            </a>
                                            <div class="flex" style="min-width: 200px;">
                                                <!-- <h5 class="card-title text-base m-0"><a href="instructor-course-edit.php"><strong>Gulp &amp; Slush Workflows</strong></a></h5> -->
                                                <h4 class="card-title mb-1"><a href="instructor-course-edit.php">The Economics of Agribusiness</a></h4>
                                                <p class="text-black-70">Let’s start with a quick tour of Vue’s data binding features.</p>
                                                <div class="d-flex align-items-end">
                                                    <div class="d-flex flex flex-column mr-3">
                                                        <div class="d-flex align-items-center py-1 border-bottom">
                                                            <small class="text-black-70 mr-2">&dollar;300/mo</small>
                                                            <small class="text-black-50">5 SALES</small>
                                                        </div>
                                                        <div class="d-flex align-items-center py-1">
                                                            <small class="text-muted mr-2">GULP</small>
                                                            <small class="text-muted">INTERMEDIATE</small>
                                                        </div>
                                                    </div>
                                                    <div class="text-center">
                                                        <a href="instructor-course-edit.php" class="btn btn-sm btn-white">Edit</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card__options dropdown right-0 pr-2">
                                        <a href="#" class="dropdown-toggle text-muted" data-caret="false" data-toggle="dropdown">
                                            <i class="material-icons">more_vert</i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="instructor-course-edit.php">Edit course</a>
                                            <a class="dropdown-item" href="#">Course Insights</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item text-danger" href="#">Delete course</a>
                                        </div>
                                    </div>
                                </div>
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
      'fixed': 'fixed-instructor-dashboard.html',
      'default': 'instructor-dashboard.html'
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

    <!-- Moment.js -->
    <script src="assets/vendor/moment.min.js"></script>
    <script src="assets/vendor/moment-range.min.js"></script>

    <!-- Chart.js -->
    <script src="assets/vendor/Chart.min.js"></script>

    <!-- UI Charts Page JS -->
    <script src="assets/js/chartjs-rounded-bar.js"></script>
    <script src="assets/js/chartjs.js"></script>

    <!-- Chart.js Samples -->
    <script src="assets/js/page.instructor-dashboard.js"></script>

    <!-- List.js -->
    <script src="assets/vendor/list.min.js"></script>
    <script src="assets/js/list.js"></script>

</body>


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/instructor-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:11:17 GMT -->
</html>