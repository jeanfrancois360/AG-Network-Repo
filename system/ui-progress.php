<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/ui-progress.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:12:53 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Progress Bars</title>

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
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item">Components</li>
                            <li class="breadcrumb-item active">Progress</li>
                        </ol>
                        <h1 class="h2">Progress</h1>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Backgrounds</h4>
                                    </div>
                                    <div class="card-body">
                                        <p>Use background utility classes to change the appearance of individual progress bars.</p>
                                        <div class="progress mb-2">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mb-2">
                                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mb-2">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mb-2">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-dark">


                                        <code class="highlight html bg-dark">&lt;div&nbsp;class=&quot;progress&quot;&gt;<br />
                                            &nbsp;&nbsp;&lt;div&nbsp;class=&quot;progress-bar&nbsp;bg-success&quot;&nbsp;role=&quot;progressbar&quot;&nbsp;style=&quot;width:&nbsp;50%&quot;&nbsp;aria-valuenow=&quot;50&quot;&nbsp;aria-valuemin=&quot;0&quot;&nbsp;aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;<br />
                                            &lt;/div&gt;</code>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Labels</h4>
                                    </div>
                                    <div class="card-body">
                                        <p>Add labels to your progress bars by placing text within the <code>.progress-bar</code>.</p>
                                        <div class="progress" style="height: 20px;">
                                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-dark">


                                        <code class="highlight html bg-dark">&lt;div&nbsp;class=&quot;progress&quot;&nbsp;style=&quot;height:&nbsp;20px;&quot;&gt;<br />
                                            &nbsp;&nbsp;&lt;div&nbsp;class=&quot;progress-bar&quot;&nbsp;role=&quot;progressbar&quot;&nbsp;style=&quot;width:&nbsp;25%;&quot;&nbsp;aria-valuenow=&quot;25&quot;&nbsp;aria-valuemin=&quot;0&quot;&nbsp;aria-valuemax=&quot;100&quot;&gt;25%&lt;/div&gt;<br />
                                            &lt;/div&gt;</code>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Height</h4>
                                    </div>
                                    <div class="card-body">
                                        <p>We only set a <code>height</code> value on the <code>.progress</code> wrapper.</p>
                                        <div class="progress mb-2">
                                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress" style="height: 20px;">
                                            <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-dark">


                                        <code class="highlight html bg-dark">&lt;div&nbsp;class=&quot;progress&quot;&nbsp;style=&quot;height:&nbsp;20px;&quot;&gt;...&lt;/div&gt;</code>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Multiple bars</h4>
                                    </div>
                                    <div class="card-body">
                                        <p>Include multiple progress bars in a progress component if you need.</p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-dark">


                                        <code class="highlight html bg-dark">&lt;div&nbsp;class=&quot;progress&quot;&gt;<br />
                                            &nbsp;&nbsp;&lt;div&nbsp;class=&quot;progress-bar&quot;&nbsp;role=&quot;progressbar&quot;&nbsp;style=&quot;width:&nbsp;15%&quot;&nbsp;aria-valuenow=&quot;15&quot;&nbsp;aria-valuemin=&quot;0&quot;&nbsp;aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;<br />
                                            &nbsp;&nbsp;&lt;div&nbsp;class=&quot;progress-bar&nbsp;bg-success&quot;&nbsp;role=&quot;progressbar&quot;&nbsp;style=&quot;width:&nbsp;30%&quot;&nbsp;aria-valuenow=&quot;30&quot;&nbsp;aria-valuemin=&quot;0&quot;&nbsp;aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;<br />
                                            &nbsp;&nbsp;&lt;div&nbsp;class=&quot;progress-bar&nbsp;bg-danger&quot;&nbsp;role=&quot;progressbar&quot;&nbsp;style=&quot;width:&nbsp;20%&quot;&nbsp;aria-valuenow=&quot;20&quot;&nbsp;aria-valuemin=&quot;0&quot;&nbsp;aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;<br />
                                            &lt;/div&gt;</code>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Striped</h4>
                                    </div>
                                    <div class="card-body">
                                        <p>Add <code>.progress-bar-striped</code> to any <code>.progress-bar</code> to apply a stripe via CSS gradient over the progress bar's background color.</p>
                                        <div class="progress mb-2">
                                            <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mb-2">
                                            <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mb-2">
                                            <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress mb-2">
                                            <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-dark">


                                        <code class="highlight html bg-dark">&lt;div&nbsp;class=&quot;progress&quot;&gt;<br />
                                            &nbsp;&nbsp;&lt;div&nbsp;class=&quot;progress-bar&nbsp;progress-bar-striped&nbsp;bg-success&quot;&nbsp;role=&quot;progressbar&quot;&nbsp;style=&quot;width:&nbsp;25%&quot;&nbsp;aria-valuenow=&quot;25&quot;&nbsp;aria-valuemin=&quot;0&quot;&nbsp;aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;<br />
                                            &lt;/div&gt;</code>

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
                                    <li class="sidebar-menu-item open">
                                        <a class="sidebar-menu-button sidebar-js-collapse" data-toggle="collapse" href="#components_menu">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tune</i>
                                            Components
                                            <span class="ml-auto sidebar-menu-toggle-icon"></span>
                                        </a>
                                        <ul class="sidebar-submenu sm-indent collapse show" id="components_menu">
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
                                            <li class="sidebar-menu-item active">
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
                                        <a class="sidebar-menu-button" href="ui-progress.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dashboard</i> Fluid Layout
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="fixed-ui-progress.php">
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
      'fixed': 'fixed-ui-progress.html',
      'default': 'ui-progress.html'
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


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/ui-progress.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:12:55 GMT -->
</html>