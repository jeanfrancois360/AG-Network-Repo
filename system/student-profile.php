<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/student-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:10:17 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student Profile</title>

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

<body class=" layout-fluid">









    <div class="preloader">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div>

    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">

        <!-- Header -->

        <div id="header" data-fixed class="mdk-header js-mdk-header mb-0">
            <div class="mdk-header__content">

                <!-- Navbar -->
                <nav id="default-navbar" class="navbar navbar-expand navbar-dark bg-primary m-0">
                    <div class="container-fluid">
                        <!-- Toggle sidebar -->
                        <button class="navbar-toggler d-block" data-toggle="sidebar" type="button">
                            <span class="material-icons">menu</span>
                        </button>

                        <!-- Brand -->
                        <a href="student-dashboard.php" class="navbar-brand">
                            <img src="assets/images/logo/white.svg" class="mr-2" alt="LearnPlus" />
                            <span class="d-none d-xs-md-block">LearnPlus</span>
                        </a>

                        <!-- Search -->
                        <form class="search-form d-none d-md-flex">
                            <input type="text" class="form-control" placeholder="Search">
                            <button class="btn" type="button"><i class="material-icons font-size-24pt">search</i></button>
                        </form>
                        <!-- // END Search -->

                        <div class="flex"></div>

                        <!-- Menu -->
                        <ul class="nav navbar-nav flex-nowrap d-none d-lg-flex">
                            <li class="nav-item">
                                <a class="nav-link" href="student-forum.php">Forum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="student-help-center.php">Get Help</a>
                            </li>
                        </ul>

                        <!-- Menu -->
                        <ul class="nav navbar-nav flex-nowrap">

                            <li class="nav-item d-none d-md-flex">
                                <a href="student-cart.php" class="nav-link">
                                    <i class="material-icons">shopping_cart</i>
                                </a>
                            </li>





                            <!-- Notifications dropdown -->
                            <li class="nav-item dropdown dropdown-notifications dropdown-menu-sm-full">
                                <button class="nav-link btn-flush dropdown-toggle" type="button" data-toggle="dropdown" data-dropdown-disable-document-scroll data-caret="false">
                                    <i class="material-icons">notifications</i>
                                    <span class="badge badge-notifications badge-danger">2</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div data-perfect-scrollbar class="position-relative">
                                        <div class="dropdown-header"><strong>Messages</strong></div>
                                        <div class="list-group list-group-flush mb-0">

                                            <a href="student-messages.php" class="list-group-item list-group-item-action unread">
                                                <span class="d-flex align-items-center mb-1">
                                                    <small class="text-muted">5 minutes ago</small>

                                                    <span class="ml-auto unread-indicator bg-primary"></span>

                                                </span>
                                                <span class="d-flex">
                                                    <span class="avatar avatar-xs mr-2">
                                                        <img src="assets/images/people/110/person.png" alt="people" class="avatar-img rounded-circle">
                                                    </span>
                                                    <span class="flex d-flex flex-column">
                                                        <strong>Manzi Christian</strong>
                                                        <span class="text-black-70">Clients loved the new design.</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <a href="student-messages.php" class="list-group-item list-group-item-action unread">
                                                <span class="d-flex align-items-center mb-1">
                                                    <small class="text-muted">5 minutes ago</small>

                                                    <span class="ml-auto unread-indicator bg-primary"></span>

                                                </span>
                                                <span class="d-flex">
                                                    <span class="avatar avatar-xs mr-2">
                                                        <img src="assets/images/people/110/person.png" alt="people" class="avatar-img rounded-circle">
                                                    </span>
                                                    <span class="flex d-flex flex-column">
                                                        <strong>Manzi Christian</strong>
                                                        <span class="text-black-70">🔥 Superb job..</span>
                                                    </span>
                                                </span>
                                            </a>

                                        </div>

                                        <div class="dropdown-header"><strong>System notifications</strong></div>
                                        <div class="list-group list-group-flush mb-0">

                                            <a href="student-messages.php" class="list-group-item list-group-item-action border-left-3 border-left-danger">
                                                <span class="d-flex align-items-center mb-1">
                                                    <small class="text-muted">3 minutes ago</small>

                                                </span>
                                                <span class="d-flex">
                                                    <span class="avatar avatar-xs mr-2">
                                                        <span class="avatar-title rounded-circle bg-light">
                                                            <i class="material-icons font-size-16pt text-danger">account_circle</i>
                                                        </span>
                                                    </span>
                                                    <span class="flex d-flex flex-column">

                                                        <span class="text-black-70">Your profile information has not been synced correctly.</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <a href="student-messages.php" class="list-group-item list-group-item-action">
                                                <span class="d-flex align-items-center mb-1">
                                                    <small class="text-muted">5 hours ago</small>

                                                </span>
                                                <span class="d-flex">
                                                    <span class="avatar avatar-xs mr-2">
                                                        <span class="avatar-title rounded-circle bg-light">
                                                            <i class="material-icons font-size-16pt text-success">group_add</i>
                                                        </span>
                                                    </span>
                                                    <span class="flex d-flex flex-column">
                                                        <strong>Adrian. D</strong>
                                                        <span class="text-black-70">Wants to join your private group.</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <a href="student-messages.php" class="list-group-item list-group-item-action">
                                                <span class="d-flex align-items-center mb-1">
                                                    <small class="text-muted">1 day ago</small>

                                                </span>
                                                <span class="d-flex">
                                                    <span class="avatar avatar-xs mr-2">
                                                        <span class="avatar-title rounded-circle bg-light">
                                                            <i class="material-icons font-size-16pt text-warning">storage</i>
                                                        </span>
                                                    </span>
                                                    <span class="flex d-flex flex-column">

                                                        <span class="text-black-70">Your deploy was successful.</span>
                                                    </span>
                                                </span>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- // END Notifications dropdown -->
                            <!-- User dropdown -->
                            <li class="nav-item dropdown ml-1 ml-md-3">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"><img src="assets/images/people/50/guy-6.jpg" alt="Avatar" class="rounded-circle" width="40"></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="student-account-edit.php">
                                        <i class="material-icons">edit</i> Edit Account
                                    </a>
                                    <a class="dropdown-item" href="student-profile.php">
                                        <i class="material-icons">person</i> Public Profile
                                    </a>
                                    <a class="dropdown-item" href="guest-login.php">
                                        <i class="material-icons">lock</i> Logout
                                    </a>
                                </div>
                            </li>
                            <!-- // END User dropdown -->

                        </ul>
                        <!-- // END Menu -->
                    </div>
                </nav>
                <!-- // END Navbar -->

            </div>
        </div>

        <!-- // END Header -->

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content">

            <div data-push data-responsive-width="992px" class="mdk-drawer-layout js-mdk-drawer-layout">
                <div class="mdk-drawer-layout__content page pt-0">

                    <div class="bg-primary mdk-box js-mdk-box mb-0" style="height: 192px;" data-effects="parallax-background blend-background">
                        <div class="mdk-box__bg">
                            <div class="mdk-box__bg-front" style="background-image: url(assets/images/1280_rsz_aman-dhakal-205796-unsplash.jpg); background-position: center;"></div>
                        </div>
                    </div>
                    <div class="container-fluid page__container d-flex align-items-end position-relative mb-4">
                        <div class="avatar avatar-xxl position-absolute bottom-0 left-0 right-0">
                            <img src="assets/images/256_rsz_clem-onojeghuo-150467-unsplash.jpg" alt="avatar" class="avatar-img rounded-circle border-3">
                        </div>
                        <ul class="nav nav-tabs-links flex" style="margin-left: 265px;">
                            <li class="nav-item">
                                <a href="student-profile.php" class="nav-link active">Courses</a>
                            </li>
                            <li class="nav-item">
                                <a href="student-profile-posts.php" class="nav-link">Posts</a>
                            </li>
                        </ul>
                    </div>

                    <div class="container-fluid page__container mb-3">
                        <div class="row flex-sm-nowrap">
                            <div class="col-sm-auto mb-3 mb-sm-0" style="width: 265px;">
                                <h1 class="h2 mb-1">Kananura Kenny</h1>
                                <p class="d-flex align-items-center mb-4">
                                    <a href="#" class="btn btn-sm btn-success mr-2">Follow @LazaBogdan</a>
                                </p>
                                <div class="text-muted d-flex align-items-center mb-2">
                                    <i class="material-icons mr-1">account_box</i>
                                    <div class="flex">Student since 2012</div>
                                </div>
                                <div class="text-muted d-flex align-items-center mb-4">
                                    <i class="material-icons mr-1">location_on</i>
                                    <div class="flex">Romania, Europe</div>
                                </div>

                                <h4>About me</h4>
                                <p class="text-black-70 measure-paragraph">Fueled by my passion for understanding the nuances of cross-cultural advertising, I consider myself a forever student, eager to both build on my academic foundations in psychology and sociology and stay in tune with the latest digital marketing strategies through continued coursework.</p>

                                <h4>Connect</h4>
                                <p class="text-black-70 measure-paragraph">I’m currently working as a freelance marketing director and always interested in a challenge. Here’s how to reach out and connect.</p>
                            </div>
                            <div class="col-sm">
                                <!-- <div class="flex search-form search-form--light mb-4">
  <button class="btn pr-3" type="button" role="button"><i class="material-icons">search</i></button>
  <input type="text" class="form-control" placeholder="Search" id="searchSample02">
</div> -->

                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <a href="student-take-course.php" class="mr-3">
                                                <img src="assets/images/lesson4.png" width="100" alt="" class="rounded">
                                            </a>
                                            <div class="flex">
                                                <h4 class="card-title mb-0"><a href="student-take-course.php">VueJs</a></h4>
                                                <span class="badge badge-primary">Advanced</span>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-group list-group-fit">
                                        <li class="list-group-item">
                                            <a href="student-view-course.php" class="text-body text-decoration-0 d-flex align-items-center">
                                                <strong>Basics of Vue.js</strong>
                                                <i class="material-icons text-muted ml-auto" style="font-size: inherit;">check</i>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="student-view-course.php" class="text-body text-decoration-0 d-flex align-items-center">
                                                <strong>Intermediate Vue.js</strong>
                                                <i class="material-icons text-muted ml-auto" style="font-size: inherit;">check</i>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="student-view-course.php" class="text-body text-decoration-0 d-flex align-items-center">
                                                <strong>Realtime Apps with Vue.js</strong>
                                                <i class="material-icons text-muted ml-auto" style="font-size: inherit;">check</i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <a href="student-take-course.php" class="mr-3">
                                                <img src="assets/images/lesson3.png" alt="" class="rounded" width="100">
                                            </a>
                                            <div class="flex">
                                                <h4 class="card-title mb-0"><a href="student-take-course.php">NodeJs</a></h4>
                                                <span class="badge badge-success">Beginner</span>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-group list-group-fit">
                                        <li class="list-group-item">
                                            <a href="student-view-course.php" class="text-body text-decoration-0 d-flex align-items-center">
                                                <strong>Getting started with Node</strong>
                                                <i class="material-icons text-muted ml-auto" style="font-size: inherit;">check</i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <a href="student-take-course.php" class="mr-3">
                                                <img src="assets/images/lesson2.png" alt="" class="rounded" width="100">
                                            </a>
                                            <div class="media-body">
                                                <h4 class="card-title mb-0"><a href="student-take-course.php">GitHub</a></h4>
                                                <span class="badge badge-warning">Intermediate</span>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-group list-group-fit">
                                        <li class="list-group-item">
                                            <a href="student-view-course.php" class="text-body text-decoration-0 d-flex align-items-center">
                                                <strong>Github Step by Step</strong>
                                                <i class="material-icons text-muted ml-auto" style="font-size: inherit;">check</i>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="student-view-course.php" class="text-body text-decoration-0 d-flex align-items-center">
                                                <strong>Working as a Team with GitHub</strong>
                                                <i class="material-icons text-muted ml-auto" style="font-size: inherit;">check</i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>




                <div class="mdk-drawer js-mdk-drawer" id="default-drawer">
                    <div class="mdk-drawer__content ">
                        <div class="sidebar sidebar-left sidebar-dark bg-dark o-hidden" data-perfect-scrollbar>
                            <div class="sidebar-p-y">
                                <div class="sidebar-heading">APPLICATIONS</div>
                                <ul class="sidebar-menu sm-active-button-bg">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="student-dashboard.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">account_box</i> Student
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="instructor-dashboard.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i> Instructor
                                        </a>
                                    </li>
                                </ul>
                                <!-- Account menu -->
                                <div class="sidebar-heading">Account</div>
                                <ul class="sidebar-menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button sidebar-js-collapse" data-toggle="collapse" href="#account_menu">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person_outline</i>
                                            Account
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu sm-indent collapse" id="account_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="guest-login.php">
                                                    <span class="sidebar-menu-text">Login</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="guest-signup.php">
                                                    <span class="sidebar-menu-text">Sign Up</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="guest-forgot-password.php">
                                                    <span class="sidebar-menu-text">Forgot Password</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="student-account-edit.php">
                                                    <span class="sidebar-menu-text">Edit Account</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="student-account-edit-basic.php">
                                                    <span class="sidebar-menu-text">Basic Information</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="student-account-edit-profile.php">
                                                    <span class="sidebar-menu-text">Profile &amp; Privacy</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="student-account-billing-subscription.php">
                                                    <span class="sidebar-menu-text">Subscription</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="student-account-billing-upgrade.php">
                                                    <span class="sidebar-menu-text">Upgrade Account</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="student-account-billing-payment-information.php">
                                                    <span class="sidebar-menu-text">Payment Information</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="student-billing.php">
                                                    <span class="sidebar-menu-text">Payment History</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="student-invoice.php">
                                                    <span class="sidebar-menu-text">Student Invoice</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="instructor-invoice.php">
                                                    <span class="sidebar-menu-text">Instructor Invoice</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="instructor-edit-invoice.php">
                                                    <span class="sidebar-menu-text">Edit Invoice</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" data-toggle="collapse" href="#messages_menu">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">comment</i> Messages
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu sm-indent collapse" id="messages_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="student-messages.php">
                                                    <span class="sidebar-menu-text">Conversation</span>
                                                    <span class="sidebar-menu-badge badge badge-primary badge-notifications ml-auto">2</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="student-messages-2.php">
                                                    <span class="sidebar-menu-text">Conversation - 2</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="sidebar-heading">Student</div>
                                <ul class="sidebar-menu sm-active-button-bg">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="student-browse-courses.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">search</i> Browse Courses
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="student-view-course.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">import_contacts</i> View Course
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="student-take-course.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">class</i> Take Course
                                            <span class="sidebar-menu-badge badge badge-primary ml-auto">PRO</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="student-take-quiz.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dvr</i> Take a Quiz
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="student-quiz-results.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">poll</i> Quiz Results
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="student-my-courses.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">school</i> My Courses
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item open">
                                        <a class="sidebar-menu-button" data-toggle="collapse" href="#forum_menu">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">chat_bubble_outline</i>
                                            Community
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu sm-indent collapse show" id="forum_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="student-forum.php">
                                                    <span class="sidebar-menu-text">Forum</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="student-forum-thread.php">
                                                    <span class="sidebar-menu-text">Discussion</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="student-forum-ask.php">
                                                    <span class="sidebar-menu-text">Ask Question</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item active">
                                                <a class="sidebar-menu-button" href="student-profile.php">
                                                    <span class="sidebar-menu-text">Student Profile - Courses</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="student-profile-posts.php">
                                                    <span class="sidebar-menu-text">Student Profile - Posts</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="instructor-profile.php">
                                                    <span class="sidebar-menu-text">Instructor Profile</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="student-help-center.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">live_help</i> Get Help
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="guest-login.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">lock_open</i> Logout
                                        </a>
                                    </li>
                                </ul>
                                <!-- Components menu -->
                                <div class="sidebar-heading">Components</div>
                                <ul class="sidebar-menu">
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button sidebar-js-collapse" data-toggle="collapse" href="#components_menu">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tune</i>
                                            Components
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu sm-indent collapse" id="components_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="ui-avatars.php">
                                                    <span class="sidebar-menu-text">Avatars</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="ui-forms.php">
                                                    <span class="sidebar-menu-text">Forms</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="ui-loaders.php">
                                                    <span class="sidebar-menu-text">Loaders</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="ui-tables.php">
                                                    <span class="sidebar-menu-text">Tables</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="ui-cards.php">
                                                    <span class="sidebar-menu-text">Cards</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="ui-tabs.php">
                                                    <span class="sidebar-menu-text">Tabs</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="ui-icons.php">
                                                    <span class="sidebar-menu-text">Icons</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="ui-buttons.php">
                                                    <span class="sidebar-menu-text">Buttons</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="ui-alerts.php">
                                                    <span class="sidebar-menu-text">Alerts</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="ui-badges.php">
                                                    <span class="sidebar-menu-text">Badges</span>
                                                </a>
                                            </li>
                                            <!-- <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="ui-modals.php">
          <span class="sidebar-menu-text">- Modals</span>
        </a>
      </li> -->
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="ui-progress.php">
                                                    <span class="sidebar-menu-text">Progress Bars</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="ui-pagination.php">
                                                    <span class="sidebar-menu-text">Pagination</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button sidebar-js-collapse" data-toggle="collapse" href="#plugins_menu">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">folder</i>
                                            Plugins
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu sm-indent collapse" id="plugins_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="ui-charts.php">
                                                    <span class="sidebar-menu-text">Charts</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="ui-drag.php">
                                                    <span class="sidebar-menu-text">Drag &amp; Drop</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="ui-calendar.php">
                                                    <span class="sidebar-menu-text">Calendar</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="ui-nestable.php">
                                                    <span class="sidebar-menu-text">Nestable</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="ui-tree.php">
                                                    <span class="sidebar-menu-text">Tree</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="ui-maps-vector.php">
                                                    <span class="sidebar-menu-text">Vector Maps</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="ui-sweet-alert.php">
                                                    <span class="sidebar-menu-text">Sweet Alert</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- // END Components Menu -->

                                <div class="sidebar-heading">Layout</div>
                                <ul class="sidebar-menu">
                                    <li class="sidebar-menu-item active">
                                        <a class="sidebar-menu-button" href="student-profile.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dashboard</i> Fluid Layout
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="fixed-student-profile.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dashboard</i> Fixed Layout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- App Settings FAB -->
            <div id="app-settings">
                <app-settings layout-active="default" :layout-location="{
      'fixed': 'fixed-student-profile.html',
      'default': 'student-profile.html'
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


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/student-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:10:25 GMT -->
</html>