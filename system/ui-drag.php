<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/ui-drag.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:13:05 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Drag and Drop</title>

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


    <!-- Dragula -->
    <link type="text/css" href="assets/vendor/dragula/dragula.min.css" rel="stylesheet">






</head>

<body class=" layout-fluid ui">









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
                <div class="mdk-drawer-layout__content page ">



                    <div class="container-fluid page__container">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item">Plugins</li>
                                <li class="breadcrumb-item active" aria-current="page">Drag &amp; Drop</li>
                            </ol>
                        </nav>
                        <h1 class="h2">Drag &amp; Drop</h1>



                        <div class="row" data-toggle="dragula">

                            <div class="col-sm-6 col-md-4">
                                <div class="card card-sm">
                                    <div class="position-relative">
                                        <div class="card-img-top">
                                            <img src="assets/images/stories/256_rsz_phil-hearing-769014-unsplash.jpg" class="card-img-top" alt="">
                                        </div>
                                        <div class="card-body avatar-group position-absolute-top">
                                            <div class="avatar avatar-xs">
                                                <a href="#"><img src="assets/images/256_rsz_nicolas-horn-689011-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex">
                                        <div class="flex">
                                            <small class="text-muted">November 10, 2018</small>
                                            <h5 class="card-title m-0"><a href="#">Learn How To Operate a JVC Camera</a></h5>
                                        </div>
                                        <a href="#" class="text-muted"><i class="material-icons">more_vert</i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <div class="card card-sm">
                                    <div class="position-relative">
                                        <div class="card-img-top">
                                            <img src="assets/images/stories/256_rsz_thomas-russell-751613-unsplash.jpg" class="card-img-top" alt="">
                                        </div>
                                        <div class="card-body avatar-group position-absolute-top">
                                            <div class="avatar avatar-xs">
                                                <a href="#"><img src="assets/images/256_rsz_sharina-mae-agellon-377466-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex">
                                        <div class="flex">
                                            <small class="text-muted">November 11, 2018</small>
                                            <h5 class="card-title m-0"><a href="#">Selective Focus Photography With iPhone</a></h5>
                                        </div>
                                        <a href="#" class="text-muted"><i class="material-icons">more_vert</i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <div class="card card-sm">
                                    <div class="position-relative">
                                        <div class="card-img-top">
                                            <img src="assets/images/stories/256_rsz_ross-sneddon-798476-unsplash.jpg" class="card-img-top" alt="">
                                        </div>
                                        <div class="card-body avatar-group position-absolute-top">
                                            <div class="avatar avatar-xs">
                                                <a href="#"><img src="assets/images/256_rsz_florian-perennes-594195-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex">
                                        <div class="flex">
                                            <small class="text-muted">November 13, 2018</small>
                                            <h5 class="card-title m-0"><a href="#">Learn Amazing Macro Photography</a></h5>
                                        </div>
                                        <a href="#" class="text-muted"><i class="material-icons">more_vert</i></a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card card-footer bg-dark">


                            <code class="highlight html bg-dark">&lt;div&nbsp;class=&quot;row&quot;&nbsp;data-toggle=&quot;dragula&quot;&gt;...&lt;/div&gt;</code>

                        </div>





                        <h4>Containers</h4>
                        <p>Add the data attribute <code>data-dragula-containers='["#cards-left", "#cards-right"]'</code> to allow the user to drag an element in any of the containers and drop it in any other container in the list.</p>



                        <div class="row" data-toggle="dragula" data-dragula-containers='["#cards-left", "#cards-right"]'>
                            <div class="col-md">
                                <div class="card shadow-none border border-style-dashed">
                                    <div class="card-body">
                                        <div class="h6 mb-3">Container #1</div>
                                        <div id="cards-left" class="card-list">


                                            <div class="card">
                                                <div class="card-body media">
                                                    <div class="media-left mr-1">
                                                        <div class="avatar">
                                                            <img src="assets/images/256_rsz_nicolas-horn-689011-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <p>
                                                            <strong>Jenell D. Matney</strong><br>
                                                            <span class="text-muted">Founder and CEO</span>
                                                        </p>
                                                        <p class="text-muted mb-0"><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</em></p>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="card">
                                                <div class="card-body media">
                                                    <div class="media-left mr-1">
                                                        <div class="avatar">
                                                            <img src="assets/images/256_rsz_sharina-mae-agellon-377466-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <p>
                                                            <strong>Sherri J. Cardenas</strong><br>
                                                            <span class="text-muted">Software Engineer</span>
                                                        </p>
                                                        <p class="text-muted mb-0"><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</em></p>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="card">
                                                <div class="card-body media">
                                                    <div class="media-left mr-1">
                                                        <div class="avatar">
                                                            <img src="assets/images/256_rsz_karl-s-973833-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <p>
                                                            <strong>Joseph S. Ferland</strong><br>
                                                            <span class="text-muted">Web Designer</span>
                                                        </p>
                                                        <p class="text-muted mb-0"><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</em></p>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="card shadow-none border border-style-dashed">
                                    <div class="card-body">
                                        <div class="h6 mb-3">Container #2</div>
                                        <div id="cards-right" class="card-list">


                                            <div class="card">
                                                <div class="card-body media">
                                                    <div class="media-left mr-1">
                                                        <div class="avatar">
                                                            <img src="assets/images/256_rsz_90-jiang-640827-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <p>
                                                            <strong>Bryan K. Davis</strong><br>
                                                            <span class="text-muted">Web Developer</span>
                                                        </p>
                                                        <p class="text-muted mb-0"><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</em></p>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="card">
                                                <div class="card-body media">
                                                    <div class="media-left mr-1">
                                                        <div class="avatar">
                                                            <img src="assets/images/256_rsz_florian-perennes-594195-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <p>
                                                            <strong>Elizabeth J. Ohara</strong><br>
                                                            <span class="text-muted">Business Analyst</span>
                                                        </p>
                                                        <p class="text-muted mb-0"><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</em></p>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="card">
                                                <div class="card-body media">
                                                    <div class="media-left mr-1">
                                                        <div class="avatar">
                                                            <img src="assets/images/256_rsz_james-gillespie-714755-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <p>
                                                            <strong>Kaci M. Langston</strong><br>
                                                            <span class="text-muted">Human Resources</span>
                                                        </p>
                                                        <p class="text-muted mb-0"><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</em></p>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-footer bg-dark">


                            <code class="highlight html bg-dark">&lt;div&nbsp;class=&quot;row&quot;&nbsp;data-toggle=&quot;dragula&quot;&nbsp;data-dragula-containers=&#39;[&quot;#cards-left&quot;,&nbsp;&quot;#cards-right&quot;]&#39;&gt;<br />
                                &lt;div&nbsp;class=&quot;col-md&quot;&nbsp;id=&quot;cards-left&quot;&gt;...&lt;/div&gt;<br />
                                &lt;div&nbsp;class=&quot;col-md&quot;&nbsp;id=&quot;cards-right&quot;&gt;...&lt;/div&gt;<br />
                                &lt;/div&gt;</code>

                        </div>

                        <h4>Handles</h4>
                        <p>Add the data attribute <code>data-dragula-moves="js-dragula-handle"</code> to allow the user to drag an element in any of the containers and drop it in any other container in the list <strong>using a handle</strong>.</p>



                        <div class="row" data-toggle="dragula" data-dragula-containers='["#cards-moves-left", "#cards-moves-right"]' data-dragula-moves="js-dragula-handle">
                            <div class="col-md">
                                <div class="card shadow-none border border-style-dashed">
                                    <div class="card-body">
                                        <div class="h6 mb-3">Container #1</div>
                                        <div id="cards-moves-left" class="card-list">


                                            <div class="card">
                                                <div class="card-body media align-items-center">
                                                    <div class="media-left mr-1">
                                                        <div class="avatar">
                                                            <img src="assets/images/256_rsz_nicolas-horn-689011-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <strong>Jenell D. Matney</strong><br>
                                                        <span class="text-muted">Founder and CEO</span>
                                                    </div>
                                                    <div class="media-right ml-3">
                                                        <span class="js-dragula-handle material-icons" style="cursor: move;">drag_handle</span>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="card">
                                                <div class="card-body media align-items-center">
                                                    <div class="media-left mr-1">
                                                        <div class="avatar">
                                                            <img src="assets/images/256_rsz_sharina-mae-agellon-377466-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <strong>Sherri J. Cardenas</strong><br>
                                                        <span class="text-muted">Software Engineer</span>
                                                    </div>
                                                    <div class="media-right ml-3">
                                                        <span class="js-dragula-handle material-icons" style="cursor: move;">drag_handle</span>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="card">
                                                <div class="card-body media align-items-center">
                                                    <div class="media-left mr-1">
                                                        <div class="avatar">
                                                            <img src="assets/images/256_rsz_karl-s-973833-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <strong>Joseph S. Ferland</strong><br>
                                                        <span class="text-muted">Web Designer</span>
                                                    </div>
                                                    <div class="media-right ml-3">
                                                        <span class="js-dragula-handle material-icons" style="cursor: move;">drag_handle</span>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="card shadow-none border border-style-dashed">
                                    <div class="card-body">
                                        <div class="h6 mb-3">Container #2</div>
                                        <div id="cards-moves-right" class="card-list">


                                            <div class="card">
                                                <div class="card-body media align-items-center">
                                                    <div class="media-left mr-1">
                                                        <div class="avatar">
                                                            <img src="assets/images/256_rsz_90-jiang-640827-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <strong>Bryan K. Davis</strong><br>
                                                        <span class="text-muted">Web Developer</span>
                                                    </div>
                                                    <div class="media-right ml-3">
                                                        <span class="js-dragula-handle material-icons" style="cursor: move;">drag_handle</span>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="card">
                                                <div class="card-body media align-items-center">
                                                    <div class="media-left mr-1">
                                                        <div class="avatar">
                                                            <img src="assets/images/256_rsz_florian-perennes-594195-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <strong>Elizabeth J. Ohara</strong><br>
                                                        <span class="text-muted">Business Analyst</span>
                                                    </div>
                                                    <div class="media-right ml-3">
                                                        <span class="js-dragula-handle material-icons" style="cursor: move;">drag_handle</span>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="card">
                                                <div class="card-body media align-items-center">
                                                    <div class="media-left mr-1">
                                                        <div class="avatar">
                                                            <img src="assets/images/256_rsz_james-gillespie-714755-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <strong>Kaci M. Langston</strong><br>
                                                        <span class="text-muted">Human Resources</span>
                                                    </div>
                                                    <div class="media-right ml-3">
                                                        <span class="js-dragula-handle material-icons" style="cursor: move;">drag_handle</span>
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




                <div class="mdk-drawer js-mdk-drawer" id="default-drawer">
                    <div class="mdk-drawer__content ">
                        <div class="sidebar sidebar-left sidebar-dark bg-dark o-hidden" data-perfect-scrollbar>
                            <div class="sidebar-p-y">
                                <div class="sidebar-heading">Applications</div>
                                <ul class="sidebar-menu">
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
                                    <li class="sidebar-menu-item open">
                                        <a class="sidebar-menu-button sidebar-js-collapse" data-toggle="collapse" href="#plugins_menu">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">folder</i>
                                            Plugins
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu sm-indent collapse show" id="plugins_menu">
                                            <li class="sidebar-menu-item">
                                                <a class="sidebar-menu-button" href="ui-charts.php">
                                                    <span class="sidebar-menu-text">Charts</span>
                                                </a>
                                            </li>
                                            <li class="sidebar-menu-item active">
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
                                        <a class="sidebar-menu-button" href="ui-drag.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dashboard</i> Fluid Layout
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="fixed-ui-drag.php">
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
      'fixed': 'fixed-ui-drag.html',
      'default': 'ui-drag.html'
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






    <!-- Dragula -->
    <script src="assets/vendor/dragula/dragula.min.js"></script>

    <!-- Drag & Drop Page -->
    <script src="assets/js/dragula.js"></script>

</body>


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/ui-drag.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:13:22 GMT -->
</html>