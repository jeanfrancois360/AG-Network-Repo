<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/ui-sweet-alert.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:14:40 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sweet Alert</title>

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


    <!-- Sweet Alert -->
    <link rel="stylesheet" href="assets/css/sweetalert.css">






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
                                <li class="breadcrumb-item active" aria-current="page">Sweet Alert</li>
                            </ol>
                        </nav>
                        <h1 class="h2">Sweet Alert</h1>
                        <p>Sweet Alert automatically centers itself on the page and looks great no matter if you're using a desktop computer, mobile or tablet. It's even highly customizable, as you can see below. Please read the <a href="http://sweetalert.js.org/docs/" target="_blank">official plugin documentation</a> for a full list of options.</p>

                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-outline-primary" data-toggle="swal" data-swal-title="Here's a message!">
                                    Try Basic
                                </button>
                            </div>
                            <div class="card-footer bg-dark">


                                <code class="highlight html bg-dark">&lt;button&nbsp;<br />
                                    &nbsp;&nbsp;class=&quot;btn&nbsp;btn-primary&quot;&nbsp;<br />
                                    &nbsp;&nbsp;data-toggle=&quot;swal&quot;&nbsp;<br />
                                    &nbsp;&nbsp;data-swal-title=&quot;Here&#39;s&nbsp;a&nbsp;message!&quot;&gt;<br />
                                    &nbsp;&nbsp;Basic<br />
                                    &lt;/button&gt;</code>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-primary" data-toggle="swal" data-swal-title="Here's a message!" data-swal-text="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam tenetur unde odio nam reiciendis cum maiores dicta vel officiis aliquid nesciunt enim incidunt ab qui, at quis beatae illum, error.">
                                    Title &amp; Subtitle
                                </button>
                            </div>
                            <div class="card-footer bg-dark">


                                <code class="highlight html bg-dark">&lt;button&nbsp;<br />
                                    &nbsp;&nbsp;class=&quot;btn&nbsp;btn-primary&quot;&nbsp;<br />
                                    &nbsp;&nbsp;data-toggle=&quot;swal&quot;&nbsp;<br />
                                    &nbsp;&nbsp;data-swal-title=&quot;Here&#39;s&nbsp;a&nbsp;message!&quot;<br />
                                    &nbsp;&nbsp;data-swal-text=&quot;Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet,&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.&nbsp;Quam&nbsp;tenetur&nbsp;unde&nbsp;odio&nbsp;nam&nbsp;reiciendis&nbsp;cum&nbsp;maiores&nbsp;dicta&nbsp;vel&nbsp;officiis&nbsp;aliquid&nbsp;nesciunt&nbsp;enim&nbsp;incidunt&nbsp;ab&nbsp;qui,&nbsp;at&nbsp;quis&nbsp;beatae&nbsp;illum,&nbsp;error.&quot;&gt;<br />
                                    &nbsp;&nbsp;Title&nbsp;&amp;amp;&nbsp;Subtitle<br />
                                    &lt;/button&gt;</code>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-success" data-toggle="swal" data-swal-title="Good job!" data-swal-text="You clicked the button!" data-swal-type="success">
                                    Success
                                </button>
                            </div>
                            <div class="card-footer bg-dark">


                                <code class="highlight html bg-dark">&lt;button&nbsp;<br />
                                    &nbsp;&nbsp;class=&quot;btn&nbsp;btn-success&quot;&nbsp;<br />
                                    &nbsp;&nbsp;data-toggle=&quot;swal&quot;&nbsp;<br />
                                    &nbsp;&nbsp;data-swal-title=&quot;Good&nbsp;job!&quot;<br />
                                    &nbsp;&nbsp;data-swal-text=&quot;You&nbsp;clicked&nbsp;the&nbsp;button!&quot;<br />
                                    &nbsp;&nbsp;data-swal-type=&quot;success&quot;&gt;<br />
                                    &nbsp;&nbsp;Success<br />
                                    &lt;/button&gt;</code>

                            </div>
                        </div>

                        <div id="swal-confirm-delete" class="d-none" data-swal-type="success" data-swal-title="Deleted!" data-swal-text="Your imaginary file has been deleted."></div>

                        <div id="swal-cancel-delete" class="d-none" data-swal-type="error" data-swal-title="Cancelled" data-swal-text="Your imaginary file is safe :)"></div>

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Confirm</h4>
                            </div>
                            <div class="card-body">
                                <p>A warning message, with a function attached to the confirm button.</p>
                                <button class="btn btn-warning" data-toggle="swal" data-swal-title="Are you sure?" data-swal-text="You will not be able to recover this imaginary file!" data-swal-type="warning" data-swal-show-cancel-button="true" data-swal-confirm-button-text="Yes, delete it!" data-swal-confirm-cb="#swal-confirm-delete" data-swal-close-on-confirm="false">
                                    Confirm
                                </button>
                            </div>
                            <div class="card-footer bg-dark">


                                <code class="highlight html bg-dark">&lt;button&nbsp;<br />
                                    &nbsp;&nbsp;class=&quot;btn&nbsp;btn-warning&quot;&nbsp;<br />
                                    &nbsp;&nbsp;data-toggle=&quot;swal&quot;&nbsp;<br />
                                    &nbsp;&nbsp;data-swal-title=&quot;Are&nbsp;you&nbsp;sure?&quot;<br />
                                    &nbsp;&nbsp;data-swal-text=&quot;You&nbsp;will&nbsp;not&nbsp;be&nbsp;able&nbsp;to&nbsp;recover&nbsp;this&nbsp;imaginary&nbsp;file!&quot;<br />
                                    &nbsp;&nbsp;data-swal-type=&quot;warning&quot;<br />
                                    &nbsp;&nbsp;data-swal-show-cancel-button=&quot;true&quot;<br />
                                    &nbsp;&nbsp;data-swal-confirm-button-text=&quot;Yes,&nbsp;delete&nbsp;it!&quot;<br />
                                    &nbsp;&nbsp;data-swal-confirm-cb=&quot;#swal-confirm-delete&quot;<br />
                                    &nbsp;&nbsp;data-swal-close-on-confirm=&quot;false&quot;&gt;<br />
                                    &nbsp;&nbsp;Confirm<br />
                                    &lt;/button&gt;<br />
                                    <br />
                                    &lt;div&nbsp;<br />
                                    &nbsp;&nbsp;id=&quot;swal-confirm-delete&quot;&nbsp;<br />
                                    &nbsp;&nbsp;class=&quot;d-none&quot;<br />
                                    &nbsp;&nbsp;data-swal-type=&quot;success&quot;<br />
                                    &nbsp;&nbsp;data-swal-title=&quot;Deleted!&quot;<br />
                                    &nbsp;&nbsp;data-swal-text=&quot;Your&nbsp;imaginary&nbsp;file&nbsp;has&nbsp;been&nbsp;deleted.&quot;&gt;<br />
                                    &lt;/div&gt;</code>

                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Confirm and Cancel</h4>
                            </div>
                            <div class="card-body">
                                <p>And by passing a parameter, you can execute something else for Cancel.</p>
                                <button class="btn btn-danger" data-toggle="swal" data-swal-title="Are you sure?" data-swal-text="You will not be able to recover this imaginary file!" data-swal-type="warning" data-swal-confirm-button-text="Yes, delete it!" data-swal-confirm-cb="#swal-confirm-delete" data-swal-show-cancel-button="true" data-swal-cancel-button-text="No, cancel please!" data-swal-cancel-cb="#swal-cancel-delete" data-swal-close-on-confirm="false" data-swal-close-on-cancel="false">
                                    Confirm and Cancel
                                </button>
                            </div>
                            <div class="card-footer bg-dark">


                                <code class="highlight html bg-dark">&lt;button&nbsp;<br />
                                    &nbsp;&nbsp;class=&quot;btn&nbsp;btn-danger&quot;&nbsp;<br />
                                    &nbsp;&nbsp;data-toggle=&quot;swal&quot;&nbsp;<br />
                                    &nbsp;&nbsp;data-swal-title=&quot;Are&nbsp;you&nbsp;sure?&quot;<br />
                                    &nbsp;&nbsp;data-swal-text=&quot;You&nbsp;will&nbsp;not&nbsp;be&nbsp;able&nbsp;to&nbsp;recover&nbsp;this&nbsp;imaginary&nbsp;file!&quot;<br />
                                    &nbsp;&nbsp;data-swal-type=&quot;warning&quot;<br />
                                    &nbsp;&nbsp;data-swal-confirm-button-text=&quot;Yes,&nbsp;delete&nbsp;it!&quot;<br />
                                    &nbsp;&nbsp;data-swal-confirm-cb=&quot;#swal-confirm-delete&quot;<br />
                                    &nbsp;&nbsp;data-swal-show-cancel-button=&quot;true&quot;<br />
                                    &nbsp;&nbsp;data-swal-cancel-button-text=&quot;No,&nbsp;cancel&nbsp;please!&quot;<br />
                                    &nbsp;&nbsp;data-swal-cancel-cb=&quot;#swal-cancel-delete&quot;<br />
                                    &nbsp;&nbsp;data-swal-close-on-confirm=&quot;false&quot;<br />
                                    &nbsp;&nbsp;data-swal-close-on-cancel=&quot;false&quot;&gt;<br />
                                    &nbsp;&nbsp;Confirm&nbsp;and&nbsp;Cancel<br />
                                    &lt;/button&gt;<br />
                                    <br />
                                    &lt;div&nbsp;<br />
                                    &nbsp;&nbsp;id=&quot;swal-cancel-delete&quot;&nbsp;<br />
                                    &nbsp;&nbsp;class=&quot;d-none&quot;<br />
                                    &nbsp;&nbsp;data-swal-type=&quot;error&quot;<br />
                                    &nbsp;&nbsp;data-swal-title=&quot;Cancelled&quot;<br />
                                    &nbsp;&nbsp;data-swal-text=&quot;Your&nbsp;imaginary&nbsp;file&nbsp;is&nbsp;safe&nbsp;:)&quot;&gt;<br />
                                    &lt;/div&gt;</code>

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
                                            <li class="sidebar-menu-item active">
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
                                        <a class="sidebar-menu-button" href="ui-sweet-alert.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dashboard</i> Fluid Layout
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="fixed-ui-sweet-alert.php">
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
      'fixed': 'fixed-ui-sweet-alert.html',
      'default': 'ui-sweet-alert.html'
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

    <!-- Sweet Alert -->
    <script src="assets/vendor/sweetalert.min.js"></script>
    <script src="assets/js/sweetalert.js"></script>

</body>


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/ui-sweet-alert.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:14:45 GMT -->
</html>