<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/ui-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:12:33 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tables</title>

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
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>

                        <h1 class="h2">Tables</h1>

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h4 class="card-title">Toggle Checkboxes</h4>
                                        <p>A tiny plugin which adds the ability to toggle all checkboxes within a table.</p>
                                    </div>
                                    <div class="col-lg-8">


                                        <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-employee-name"]'>

                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>

                                                        <th style="width: 18px;">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input js-toggle-check-all" data-target="#staff" id="customCheckAll">
                                                                <label class="custom-control-label" for="customCheckAll"><span class="text-hide">Toggle all</span></label>
                                                            </div>
                                                        </th>

                                                        <th>Employee</th>


                                                        <th style="width: 100px;">Active</th>
                                                        <th style="width: 51px;">Earnings</th>
                                                        <th style="width: 24px;"></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list" id="staff">

                                                    <tr class="selected">

                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input js-check-selected-row" checked="" id="customCheck1_1">
                                                                <label class="custom-control-label" for="customCheck1_1"><span class="text-hide">Check</span></label>
                                                            </div>
                                                        </td>

                                                        <td>

                                                            <div class="media align-items-center">
                                                                <div class="avatar avatar-sm mr-3">
                                                                    <img src="assets/images/256_rsz_nicolas-horn-689011-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                                </div>
                                                                <div class="media-body">

                                                                    <span class="js-lists-values-employee-name">Kalum Atherton</span>

                                                                </div>
                                                            </div>

                                                        </td>


                                                        <td><small class="text-muted">3 days ago</small></td>
                                                        <td>&dollar;12,402</td>
                                                        <td><a href="#" class="text-muted"><i class="material-icons">more_vert</i></a></td>
                                                    </tr>

                                                    <tr>

                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_2">
                                                                <label class="custom-control-label" for="customCheck1_2"><span class="text-hide">Check</span></label>
                                                            </div>
                                                        </td>

                                                        <td>

                                                            <div class="media align-items-center">
                                                                <div class="avatar avatar-sm mr-3">
                                                                    <img src="assets/images/256_rsz_sharina-mae-agellon-377466-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                                </div>
                                                                <div class="media-body">

                                                                    <span class="js-lists-values-employee-name">Helen Mcdaniel</span>

                                                                </div>
                                                            </div>

                                                        </td>


                                                        <td><small class="text-muted">2 days ago</small></td>
                                                        <td>&dollar;48,108</td>
                                                        <td><a href="#" class="text-muted"><i class="material-icons">more_vert</i></a></td>
                                                    </tr>

                                                    <tr>

                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_3">
                                                                <label class="custom-control-label" for="customCheck1_3"><span class="text-hide">Check</span></label>
                                                            </div>
                                                        </td>

                                                        <td>

                                                            <div class="media align-items-center">
                                                                <div class="avatar avatar-sm mr-3">
                                                                    <img src="assets/images/256_rsz_karl-s-973833-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                                </div>
                                                                <div class="media-body">

                                                                    <span class="js-lists-values-employee-name">Karim Hicks</span>

                                                                </div>
                                                            </div>

                                                        </td>


                                                        <td><small class="text-muted">1 hour ago</small></td>
                                                        <td>&dollar;11,802</td>
                                                        <td><a href="#" class="text-muted"><i class="material-icons">more_vert</i></a></td>
                                                    </tr>

                                                    <tr>

                                                        <td>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input js-check-selected-row" id="customCheck1_4">
                                                                <label class="custom-control-label" for="customCheck1_4"><span class="text-hide">Check</span></label>
                                                            </div>
                                                        </td>

                                                        <td>

                                                            <div class="media align-items-center">
                                                                <div class="avatar avatar-sm mr-3">
                                                                    <img src="assets/images/256_rsz_90-jiang-640827-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                                </div>
                                                                <div class="media-body">

                                                                    <span class="js-lists-values-employee-name">Clifford Burgess</span>

                                                                </div>
                                                            </div>

                                                        </td>


                                                        <td><small class="text-muted">2 hours ago</small></td>
                                                        <td>&dollar;84,401</td>
                                                        <td><a href="#" class="text-muted"><i class="material-icons">more_vert</i></a></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-dark">



                                <code class="highlight html bg-dark">&lt;table&nbsp;class=&quot;table&quot;&gt;<br />
                                    &nbsp;&nbsp;&lt;thead&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;custom-control&nbsp;custom-checkbox&quot;&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input&nbsp;type=&quot;checkbox&quot;&nbsp;class=&quot;custom-control-input&nbsp;js-toggle-check-all&quot;&nbsp;data-target=&quot;#table01&quot;&nbsp;id=&quot;customCheckAll&quot;&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;label&nbsp;class=&quot;custom-control-label&quot;&nbsp;for=&quot;customCheckAll&quot;&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;class=&quot;text-hide&quot;&gt;Toggle&nbsp;all&lt;/span&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/label&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/th&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;<br />
                                    &nbsp;&nbsp;&lt;/thead&gt;<br />
                                    &nbsp;&nbsp;&lt;tbody&nbsp;id=&quot;table01&quot;&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&nbsp;class=&quot;selected&quot;&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;custom-control&nbsp;custom-checkbox&quot;&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input&nbsp;id=&quot;customCheck1&quot;&nbsp;type=&quot;checkbox&quot;&nbsp;class=&quot;custom-control-input&nbsp;js-check-selected-row&quot;&nbsp;checked=&quot;&quot;&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;label&nbsp;class=&quot;custom-control-label&quot;&nbsp;for=&quot;customCheck1&quot;&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;class=&quot;text-hide&quot;&gt;Check&lt;/span&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/label&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/td&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;<br />
                                    &nbsp;&nbsp;&lt;/tbody&gt;<br />
                                    &lt;/table&gt;</code>


                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h4 class="card-title">Search</h4>
                                        <p>Add search functionality to your tables with List.js. Please read the <a href="http://listjs.com/" target="_blank">official plugin documentation</a> for a full list of options.</p>
                                    </div>
                                    <div class="col-lg-8">

                                        <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-employee-name"]'>

                                            <div class="search-form search-form--light mb-3">
                                                <input type="text" class="form-control search" placeholder="Search">
                                                <button class="btn" type="button" role="button"><i class="material-icons">search</i></button>
                                            </div>

                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>

                                                        <th>Employee</th>


                                                        <th style="width: 100px;">Active</th>
                                                        <th style="width: 51px;">Earnings</th>
                                                        <th style="width: 24px;"></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list" id="search">

                                                    <tr>

                                                        <td>

                                                            <span class="js-lists-values-employee-name">Kalum Atherton</span>

                                                        </td>


                                                        <td><small class="text-muted">3 days ago</small></td>
                                                        <td>&dollar;12,402</td>
                                                        <td><a href="#" class="text-muted"><i class="material-icons">more_vert</i></a></td>
                                                    </tr>

                                                    <tr>

                                                        <td>

                                                            <span class="js-lists-values-employee-name">Helen Mcdaniel</span>

                                                        </td>


                                                        <td><small class="text-muted">2 days ago</small></td>
                                                        <td>&dollar;48,108</td>
                                                        <td><a href="#" class="text-muted"><i class="material-icons">more_vert</i></a></td>
                                                    </tr>

                                                    <tr>

                                                        <td>

                                                            <span class="js-lists-values-employee-name">Karim Hicks</span>

                                                        </td>


                                                        <td><small class="text-muted">1 hour ago</small></td>
                                                        <td>&dollar;11,802</td>
                                                        <td><a href="#" class="text-muted"><i class="material-icons">more_vert</i></a></td>
                                                    </tr>

                                                    <tr>

                                                        <td>

                                                            <span class="js-lists-values-employee-name">Clifford Burgess</span>

                                                        </td>


                                                        <td><small class="text-muted">2 hours ago</small></td>
                                                        <td>&dollar;84,401</td>
                                                        <td><a href="#" class="text-muted"><i class="material-icons">more_vert</i></a></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-dark">



                                <code class="highlight html bg-dark">&lt;!--&nbsp;Wrapper&nbsp;--&gt;<br />
                                    &lt;div&nbsp;class=&quot;table-responsive&quot;&nbsp;data-toggle=&quot;lists&quot;&nbsp;data-lists-values=&#39;[&quot;name&quot;]&#39;&gt;<br />
                                    <br />
                                    &nbsp;&nbsp;&lt;!--&nbsp;Search&nbsp;--&gt;<br />
                                    &nbsp;&nbsp;&lt;div&nbsp;class=&quot;search-form&nbsp;search-form--light&nbsp;mb-3&quot;&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;input&nbsp;type=&quot;text&quot;&nbsp;class=&quot;form-control&nbsp;search&quot;&nbsp;placeholder=&quot;Search&quot;&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;button&nbsp;class=&quot;btn&quot;&nbsp;type=&quot;button&quot;&nbsp;role=&quot;button&quot;&gt;&lt;i&nbsp;class=&quot;material-icons&quot;&gt;search&lt;/i&gt;&lt;/button&gt;<br />
                                    &nbsp;&nbsp;&lt;/div&gt;<br />
                                    <br />
                                    &nbsp;&nbsp;&lt;!--&nbsp;Table&nbsp;--&gt;<br />
                                    &nbsp;&nbsp;&lt;table&nbsp;class=&quot;table&quot;&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;thead&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;Name&lt;/th&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;Age&lt;/th&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;/thead&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;tbody&nbsp;class=&quot;list&quot;&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;class=&quot;name&quot;&gt;John&nbsp;Doe&lt;/td&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&gt;31&lt;/td&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;/tbody&gt;<br />
                                    &nbsp;&nbsp;&lt;/table&gt;<br />
                                    &lt;/div&gt;</code>


                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h4 class="card-title">Sort Columns</h4>
                                        <p>Add sorting functionality to your tables with by List.js. Please read the <a href="http://listjs.com/" target="_blank">official plugin documentation</a> for a full list of options.</p>
                                    </div>
                                    <div class="col-lg-8">


                                        <div data-toggle="lists" data-lists-values='["js-lists-values-employee-name", "js-lists-values-employee-title"]' class="table-responsive border-bottom">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th colspan="2">
                                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-employee-name">Employee name</a>
                                                            <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-employee-title">Employee title</a>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list">

                                                    <tr>
                                                        <td>
                                                            <div class="media align-items-center">
                                                                <div class="avatar avatar-sm mr-3">
                                                                    <img src="assets/images/256_rsz_nicolas-horn-689011-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                                </div>
                                                                <div class="media-body">
                                                                    <strong class="js-lists-values-employee-name">Jenell D. Matney</strong><br>
                                                                    <span class="text-muted js-lists-values-employee-title">Founder and CEO</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-right"><a href="#" class="text-muted"><i class="material-icons">more_vert</i></a></td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="media align-items-center">
                                                                <div class="avatar avatar-sm mr-3">
                                                                    <img src="assets/images/256_rsz_sharina-mae-agellon-377466-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                                </div>
                                                                <div class="media-body">
                                                                    <strong class="js-lists-values-employee-name">Sherri J. Cardenas</strong><br>
                                                                    <span class="text-muted js-lists-values-employee-title">Software Engineer</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-right"><a href="#" class="text-muted"><i class="material-icons">more_vert</i></a></td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="media align-items-center">
                                                                <div class="avatar avatar-sm mr-3">
                                                                    <img src="assets/images/256_rsz_90-jiang-640827-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                                </div>
                                                                <div class="media-body">
                                                                    <strong class="js-lists-values-employee-name">Joseph S. Ferland</strong><br>
                                                                    <span class="text-muted js-lists-values-employee-title">Web Designer</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-right"><a href="#" class="text-muted"><i class="material-icons">more_vert</i></a></td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="media align-items-center">
                                                                <div class="avatar avatar-sm mr-3">
                                                                    <img src="assets/images/256_rsz_karl-s-973833-unsplash.jpg" alt="Avatar" class="avatar-img rounded-circle">
                                                                </div>
                                                                <div class="media-body">
                                                                    <strong class="js-lists-values-employee-name">Bryan K. Davis</strong><br>
                                                                    <span class="text-muted js-lists-values-employee-title">Web Developer</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-right"><a href="#" class="text-muted"><i class="material-icons">more_vert</i></a></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-dark">



                                <code class="highlight html bg-dark">&lt;div&nbsp;class=&quot;table-responsive&quot;&nbsp;data-toggle=&quot;lists&quot;&nbsp;data-lists-values=&#39;[&quot;name&quot;,&nbsp;&quot;age&quot;]&#39;&gt;<br />
                                    &nbsp;&nbsp;&lt;table&nbsp;class=&quot;table&quot;&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;thead&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;javascript:void(0)&quot;&nbsp;class=&quot;sort&quot;&nbsp;data-sort=&quot;name&quot;&gt;Name&lt;/a&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/th&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;th&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;href=&quot;javascript:void(0)&quot;&nbsp;class=&quot;sort&quot;&nbsp;data-sort=&quot;name&quot;&gt;Age&lt;/a&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/th&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;/thead&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;tbody&nbsp;class=&quot;list&quot;&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;tr&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;class=&quot;name&quot;&gt;John&nbsp;Doe&lt;/td&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;td&nbsp;class=&quot;age&quot;&gt;31&lt;/td&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/tr&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;/tbody&gt;<br />
                                    &nbsp;&nbsp;&lt;/table&gt;<br />
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
                                            <li class="sidebar-menu-item active">
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
                                        <a class="sidebar-menu-button" href="ui-tables.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dashboard</i> Fluid Layout
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="fixed-ui-tables.php">
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
      'fixed': 'fixed-ui-tables.html',
      'default': 'ui-tables.html'
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

    <!-- Tables -->
    <script src="assets/js/toggle-check-all.js"></script>
    <script src="assets/js/check-selected-row.js"></script>

</body>


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/ui-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:12:35 GMT -->
</html>