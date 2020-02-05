<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/ui-charts.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:12:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Charts</title>

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


    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/css/morris.css">






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
                            <li class="breadcrumb-item active">Charts</li>
                        </ol>

                        <h1 class="h2">Charts</h1>

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h4 class="card-title">Line</h4>
                                        <p class="text-muted">A line chart is a way of plotting data points on a line. Often, it is used to show trend data, or the comparison of two data sets.</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="chart">
                                            <canvas id="performanceChart" class="chart-canvas"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs nav-tabs-card">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#line-init" data-toggle="tab">Init</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#line-options" data-toggle="tab">Options</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#line-data" data-toggle="tab">Data</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#line-scripts" data-toggle="tab">Scripts</a>
                                </li>
                            </ul>
                            <div class="card-footer bg-dark tab-content">
                                <div class="tab-pane active" id="line-init">



                                    <code class="highlight html bg-dark">&lt;div&nbsp;class=&quot;chart&quot;&gt;<br />
                                        &nbsp;&nbsp;&lt;canvas&nbsp;id=&quot;performanceChart&quot;&nbsp;class=&quot;chart-canvas&quot;&gt;&lt;/canvas&gt;<br />
                                        &lt;/div&gt;<br />
                                        <br />
                                        &lt;script&gt;<br />
                                        &nbsp;&nbsp;Charts.create(&#39;#performanceChart&#39;,&nbsp;&#39;line&#39;,&nbsp;options,&nbsp;data)<br />
                                        &lt;/script&gt;</code>


                                </div>
                                <div class="tab-pane" id="line-options">



                                    <code class="highlight html bg-dark">&lt;script&gt;<br />
                                        &nbsp;&nbsp;var&nbsp;options&nbsp;=&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;scales:&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;yAxes:&nbsp;[{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ticks:&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;callback:&nbsp;function(a)&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!(a&nbsp;%&nbsp;10))<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;&quot;$&quot;&nbsp;+&nbsp;a&nbsp;+&nbsp;&quot;k&quot;<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}]<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;},<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;tooltips:&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;callbacks:&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;label:&nbsp;function(a,&nbsp;e)&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;t&nbsp;=&nbsp;e.datasets[a.datasetIndex].label&nbsp;||&nbsp;&quot;&quot;,<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;o&nbsp;=&nbsp;a.yLabel,<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r&nbsp;=&nbsp;&quot;&quot;;<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;1&nbsp;&lt;&nbsp;e.datasets.length&nbsp;&amp;&amp;&nbsp;(r&nbsp;+=&nbsp;&#39;&lt;span&nbsp;class=&quot;popover-body-label&nbsp;mr-auto&quot;&gt;&#39;&nbsp;+&nbsp;t&nbsp;+&nbsp;&quot;&lt;/span&gt;&quot;),&nbsp;r&nbsp;+=&nbsp;&#39;&lt;span&nbsp;class=&quot;popover-body-value&quot;&gt;$&#39;&nbsp;+&nbsp;o&nbsp;+&nbsp;&quot;k&lt;/span&gt;&quot;<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;}<br />
                                        &nbsp;&nbsp;}<br />
                                        &lt;/script&gt;</code>


                                </div>
                                <div class="tab-pane" id="line-data">



                                    <code class="highlight html bg-dark">&lt;script&gt;<br />
                                        &nbsp;&nbsp;var&nbsp;data&nbsp;=&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;labels:&nbsp;[&quot;Jan&quot;,&nbsp;&quot;Feb&quot;,&nbsp;&quot;Mar&quot;,&nbsp;&quot;Apr&quot;,&nbsp;&quot;May&quot;,&nbsp;&quot;Jun&quot;,&nbsp;&quot;Jul&quot;,&nbsp;&quot;Aug&quot;,&nbsp;&quot;Sep&quot;,&nbsp;&quot;Oct&quot;,&nbsp;&quot;Nov&quot;,&nbsp;&quot;Dec&quot;],<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;datasets:&nbsp;[{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;label:&nbsp;&quot;Performance&quot;,<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data:&nbsp;[0,&nbsp;10,&nbsp;5,&nbsp;15,&nbsp;10,&nbsp;20,&nbsp;15,&nbsp;25,&nbsp;20,&nbsp;30,&nbsp;25,&nbsp;40]<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;}]<br />
                                        &nbsp;&nbsp;}<br />
                                        &lt;/script&gt;</code>


                                </div>
                                <div class="tab-pane" id="line-scripts">



                                    <code class="highlight html bg-dark">&lt;!--&nbsp;Global&nbsp;Settings&nbsp;--&gt;<br />
                                        &lt;script&nbsp;src=&quot;assets/js/settings.js&quot;&gt;&lt;/script&gt;<br />
                                        <br />
                                        &lt;!--&nbsp;Chart.js&nbsp;Library&nbsp;--&gt;<br />
                                        &lt;script&nbsp;src=&quot;assets/vendor/Chart.min.js&quot;&gt;&lt;/script&gt;<br />
                                        <br />
                                        &lt;!--&nbsp;Chart.js&nbsp;Wrapper&nbsp;--&gt;<br />
                                        &lt;script&nbsp;src=&quot;assets/js/chartjs.js&quot;&gt;&lt;/script&gt;<br />
                                        <br />
                                        &lt;script&gt;<br />
                                        &nbsp;&nbsp;Charts.init()<br />
                                        &lt;/script&gt;</code>


                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h4 class="card-title">Area</h4>
                                        <p class="text-muted">An area chart or area graph displays graphically quantitative data. It is based on the line chart.</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="chart">
                                            <canvas id="performanceAreaChart" class="chart-canvas"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs nav-tabs-card">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#area-init" data-toggle="tab">Init</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#area-options" data-toggle="tab">Options</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#area-data" data-toggle="tab">Data</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#area-scripts" data-toggle="tab">Scripts</a>
                                </li>
                            </ul>
                            <div class="card-footer bg-dark tab-content">
                                <div class="tab-pane active" id="area-init">



                                    <code class="highlight html bg-dark">&lt;div&nbsp;class=&quot;chart&quot;&gt;<br />
                                        &nbsp;&nbsp;&lt;canvas&nbsp;id=&quot;performanceChart&quot;&nbsp;class=&quot;chart-canvas&quot;&gt;&lt;/canvas&gt;<br />
                                        &lt;/div&gt;<br />
                                        <br />
                                        &lt;script&gt;<br />
                                        &nbsp;&nbsp;Charts.create(&#39;#performanceChart&#39;,&nbsp;&#39;line&#39;,&nbsp;options,&nbsp;data)<br />
                                        &lt;/script&gt;</code>


                                </div>
                                <div class="tab-pane" id="area-options">



                                    <code class="highlight html bg-dark">&lt;script&gt;<br />
                                        &nbsp;&nbsp;var&nbsp;options&nbsp;=&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;elements:&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;line:&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fill:&nbsp;&#39;start&#39;,<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;backgroundColor:&nbsp;settings.charts.colors.area<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;},<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;scales:&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;yAxes:&nbsp;[{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ticks:&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;callback:&nbsp;function(a)&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!(a&nbsp;%&nbsp;10))<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;&quot;$&quot;&nbsp;+&nbsp;a&nbsp;+&nbsp;&quot;k&quot;<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}]<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;},<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;tooltips:&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;callbacks:&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;label:&nbsp;function(a,&nbsp;e)&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;t&nbsp;=&nbsp;e.datasets[a.datasetIndex].label&nbsp;||&nbsp;&quot;&quot;,<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;o&nbsp;=&nbsp;a.yLabel,<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r&nbsp;=&nbsp;&quot;&quot;;<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;1&nbsp;&lt;&nbsp;e.datasets.length&nbsp;&amp;&amp;&nbsp;(r&nbsp;+=&nbsp;&#39;&lt;span&nbsp;class=&quot;popover-body-label&nbsp;mr-auto&quot;&gt;&#39;&nbsp;+&nbsp;t&nbsp;+&nbsp;&quot;&lt;/span&gt;&quot;),&nbsp;r&nbsp;+=&nbsp;&#39;&lt;span&nbsp;class=&quot;popover-body-value&quot;&gt;$&#39;&nbsp;+&nbsp;o&nbsp;+&nbsp;&quot;k&lt;/span&gt;&quot;<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;}<br />
                                        &nbsp;&nbsp;}<br />
                                        &lt;/script&gt;</code>


                                </div>
                                <div class="tab-pane" id="area-data">



                                    <code class="highlight html bg-dark">&lt;script&gt;<br />
                                        &nbsp;&nbsp;var&nbsp;data&nbsp;=&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;labels:&nbsp;[&quot;Jan&quot;,&nbsp;&quot;Feb&quot;,&nbsp;&quot;Mar&quot;,&nbsp;&quot;Apr&quot;,&nbsp;&quot;May&quot;,&nbsp;&quot;Jun&quot;,&nbsp;&quot;Jul&quot;,&nbsp;&quot;Aug&quot;,&nbsp;&quot;Sep&quot;,&nbsp;&quot;Oct&quot;,&nbsp;&quot;Nov&quot;,&nbsp;&quot;Dec&quot;],<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;datasets:&nbsp;[{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;label:&nbsp;&quot;Performance&quot;,<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data:&nbsp;[0,&nbsp;10,&nbsp;5,&nbsp;15,&nbsp;10,&nbsp;20,&nbsp;15,&nbsp;25,&nbsp;20,&nbsp;30,&nbsp;25,&nbsp;40]<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;}]<br />
                                        &nbsp;&nbsp;}<br />
                                        &lt;/script&gt;</code>


                                </div>
                                <div class="tab-pane" id="area-scripts">



                                    <code class="highlight html bg-dark">&lt;!--&nbsp;Global&nbsp;Settings&nbsp;--&gt;<br />
                                        &lt;script&nbsp;src=&quot;assets/js/settings.js&quot;&gt;&lt;/script&gt;<br />
                                        <br />
                                        &lt;!--&nbsp;Chart.js&nbsp;Library&nbsp;--&gt;<br />
                                        &lt;script&nbsp;src=&quot;assets/vendor/Chart.min.js&quot;&gt;&lt;/script&gt;<br />
                                        <br />
                                        &lt;!--&nbsp;Chart.js&nbsp;Wrapper&nbsp;--&gt;<br />
                                        &lt;script&nbsp;src=&quot;assets/js/chartjs.js&quot;&gt;&lt;/script&gt;<br />
                                        <br />
                                        &lt;script&gt;<br />
                                        &nbsp;&nbsp;Charts.init()<br />
                                        &lt;/script&gt;</code>


                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h4 class="card-title">Doughnut</h4>
                                        <p class="text-muted">Excellent at showing the relational proportions between data.</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="chart">
                                            <canvas id="devicesChart" class="chart-canvas"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs nav-tabs-card">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#doughnut-init" data-toggle="tab">Init</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#doughnut-options" data-toggle="tab">Options</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#doughnut-data" data-toggle="tab">Data</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#doughnut-scripts" data-toggle="tab">Scripts</a>
                                </li>
                            </ul>
                            <div class="card-footer bg-dark tab-content">
                                <div class="tab-pane active" id="doughnut-init">



                                    <code class="highlight html bg-dark">&lt;div&nbsp;class=&quot;chart&quot;&gt;<br />
                                        &nbsp;&nbsp;&lt;canvas&nbsp;id=&quot;devicesChart&quot;&nbsp;class=&quot;chart-canvas&quot;&gt;&lt;/canvas&gt;<br />
                                        &lt;/div&gt;<br />
                                        <br />
                                        &lt;script&gt;<br />
                                        &nbsp;&nbsp;Charts.create(&#39;#devicesChart&#39;,&nbsp;&#39;doughnut&#39;,&nbsp;options,&nbsp;data)<br />
                                        &lt;/script&gt;</code>


                                </div>
                                <div class="tab-pane" id="doughnut-options">



                                    <code class="highlight html bg-dark">&lt;script&gt;<br />
                                        &nbsp;&nbsp;var&nbsp;options&nbsp;=&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;tooltips:&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;callbacks:&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;title:&nbsp;function(a,&nbsp;e)&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;e.labels[a[0].index]<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;},<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;label:&nbsp;function(a,&nbsp;e)&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;t&nbsp;=&nbsp;&quot;&quot;;<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;t&nbsp;+=&nbsp;&#39;&lt;span&nbsp;class=&quot;popover-body-value&quot;&gt;&#39;&nbsp;+&nbsp;e.datasets[0].data[a.index]&nbsp;+&nbsp;&quot;%&lt;/span&gt;&quot;<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;}<br />
                                        &nbsp;&nbsp;}<br />
                                        &lt;/script&gt;</code>


                                </div>
                                <div class="tab-pane" id="doughnut-data">



                                    <code class="highlight html bg-dark">&lt;script&gt;<br />
                                        &nbsp;&nbsp;var&nbsp;data&nbsp;=&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;labels:&nbsp;[&quot;Desktop&quot;,&nbsp;&quot;Tablet&quot;,&nbsp;&quot;Mobile&quot;],<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;datasets:&nbsp;[{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data:&nbsp;[60,&nbsp;25,&nbsp;15],<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;backgroundColor:&nbsp;[<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;settings.colors.primary[500],<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;settings.colors.success[300],<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;settings.colors.success[100]<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hoverBorderColor:<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;dark&quot;&nbsp;==&nbsp;settings.charts.colorScheme<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;?&nbsp;settings.colors.gray[800]<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;settings.colors.white<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;}]<br />
                                        &nbsp;&nbsp;}<br />
                                        &lt;/script&gt;</code>


                                </div>
                                <div class="tab-pane" id="doughnut-scripts">



                                    <code class="highlight html bg-dark">&lt;!--&nbsp;Global&nbsp;Settings&nbsp;--&gt;<br />
                                        &lt;script&nbsp;src=&quot;assets/js/settings.js&quot;&gt;&lt;/script&gt;<br />
                                        <br />
                                        &lt;!--&nbsp;Chart.js&nbsp;Library&nbsp;--&gt;<br />
                                        &lt;script&nbsp;src=&quot;assets/vendor/Chart.min.js&quot;&gt;&lt;/script&gt;<br />
                                        <br />
                                        &lt;!--&nbsp;Chart.js&nbsp;Wrapper&nbsp;--&gt;<br />
                                        &lt;script&nbsp;src=&quot;assets/js/chartjs.js&quot;&gt;&lt;/script&gt;<br />
                                        <br />
                                        &lt;script&gt;<br />
                                        &nbsp;&nbsp;Charts.init()<br />
                                        &lt;/script&gt;</code>


                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h4 class="card-title">Bar</h4>
                                        <p class="text-muted">A bar chart provides a way of showing data values represented as vertical bars. It is sometimes used to show trend data, and the comparison of multiple data sets side by side.</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="chart">
                                            <canvas id="ordersChart" class="chart-canvas"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs nav-tabs-card">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#bar-init" data-toggle="tab">Init</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#bar-options" data-toggle="tab">Options</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#bar-data" data-toggle="tab">Data</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#bar-scripts" data-toggle="tab">Scripts</a>
                                </li>
                            </ul>
                            <div class="card-footer bg-dark tab-content">
                                <div class="tab-pane active" id="bar-init">



                                    <code class="highlight html bg-dark">&lt;div&nbsp;class=&quot;chart&quot;&gt;<br />
                                        &nbsp;&nbsp;&lt;canvas&nbsp;id=&quot;ordersChart&quot;&nbsp;class=&quot;chart-canvas&quot;&gt;&lt;/canvas&gt;<br />
                                        &lt;/div&gt;<br />
                                        <br />
                                        &lt;script&gt;<br />
                                        &nbsp;&nbsp;Charts.create(&#39;#ordersChart&#39;,&nbsp;&#39;roundedBar&#39;,&nbsp;options,&nbsp;data)<br />
                                        &lt;/script&gt;</code>


                                </div>
                                <div class="tab-pane" id="bar-options">



                                    <code class="highlight html bg-dark">&lt;script&gt;<br />
                                        &nbsp;&nbsp;var&nbsp;options&nbsp;=&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;Rounded&nbsp;Bar<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;barRoundness:&nbsp;1.2,<br />
                                        <br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;//&nbsp;Chart&nbsp;Specific&nbsp;Formatting&nbsp;(Orders)<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;scales:&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;yAxes:&nbsp;[{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ticks:&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;callback:&nbsp;function(a)&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if&nbsp;(!(a&nbsp;%&nbsp;10))<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;&quot;$&quot;&nbsp;+&nbsp;a&nbsp;+&nbsp;&quot;k&quot;<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}]<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;},<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;tooltips:&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;callbacks:&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;label:&nbsp;function(a,&nbsp;e)&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;t&nbsp;=&nbsp;e.datasets[a.datasetIndex].label&nbsp;||&nbsp;&quot;&quot;,<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;o&nbsp;=&nbsp;a.yLabel,<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r&nbsp;=&nbsp;&quot;&quot;;<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;1&nbsp;&lt;&nbsp;e.datasets.length&nbsp;&amp;&amp;&nbsp;(r&nbsp;+=&nbsp;&#39;&lt;span&nbsp;class=&quot;popover-body-label&nbsp;mr-auto&quot;&gt;&#39;&nbsp;+&nbsp;t&nbsp;+&nbsp;&quot;&lt;/span&gt;&quot;),&nbsp;r&nbsp;+=&nbsp;&#39;&lt;span&nbsp;class=&quot;popover-body-value&quot;&gt;$&#39;&nbsp;+&nbsp;o&nbsp;+&nbsp;&quot;k&lt;/span&gt;&quot;<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;}<br />
                                        &nbsp;&nbsp;}<br />
                                        &lt;/script&gt;</code>


                                </div>
                                <div class="tab-pane" id="bar-data">



                                    <code class="highlight html bg-dark">&lt;script&gt;<br />
                                        &nbsp;&nbsp;var&nbsp;data&nbsp;=&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;labels:&nbsp;[&quot;Jan&quot;,&nbsp;&quot;Feb&quot;,&nbsp;&quot;Mar&quot;,&nbsp;&quot;Apr&quot;,&nbsp;&quot;May&quot;,&nbsp;&quot;Jun&quot;,&nbsp;&quot;Jul&quot;,&nbsp;&quot;Aug&quot;,&nbsp;&quot;Sep&quot;,&nbsp;&quot;Oct&quot;,&nbsp;&quot;Nov&quot;,&nbsp;&quot;Dec&quot;],<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;datasets:&nbsp;[{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;label:&nbsp;&quot;Sales&quot;,<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data:&nbsp;[25,&nbsp;20,&nbsp;30,&nbsp;22,&nbsp;17,&nbsp;10,&nbsp;18,&nbsp;26,&nbsp;28,&nbsp;26,&nbsp;20,&nbsp;32]<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;}]<br />
                                        &nbsp;&nbsp;}<br />
                                        &lt;/script&gt;</code>


                                </div>
                                <div class="tab-pane" id="bar-scripts">



                                    <code class="highlight html bg-dark">&lt;!--&nbsp;Global&nbsp;Settings&nbsp;--&gt;<br />
                                        &lt;script&nbsp;src=&quot;assets/js/settings.js&quot;&gt;&lt;/script&gt;<br />
                                        <br />
                                        &lt;!--&nbsp;Chart.js&nbsp;Library&nbsp;--&gt;<br />
                                        &lt;script&nbsp;src=&quot;assets/vendor/Chart.min.js&quot;&gt;&lt;/script&gt;<br />
                                        <br />
                                        &lt;!--&nbsp;Chart.js&nbsp;Wrapper&nbsp;--&gt;<br />
                                        &lt;script&nbsp;src=&quot;assets/js/chartjs-rounded-bar.js&quot;&gt;&lt;/script&gt;<br />
                                        &lt;script&nbsp;src=&quot;assets/js/chartjs.js&quot;&gt;&lt;/script&gt;<br />
                                        <br />
                                        &lt;script&gt;<br />
                                        &nbsp;&nbsp;Charts.init()<br />
                                        &lt;/script&gt;</code>


                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h4 class="card-title">Switch Toggle</h4>
                                        <p class="text-muted">Easily toggle an additional set of data with a simple interface based on the <code>data</code> attributes.</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label class="form-label" for="chart-switch-toggle">Show affiliate:</label>
                                            <div class="custom-control custom-checkbox-toggle">
                                                <input id="chart-switch-toggle" type="checkbox" checked="" aria-checked="true" class="custom-control-input" role="switch" data-toggle="chart" data-target="#ordersChartSwitch" data-add='{"data":{"datasets":[{"data":[15,10,20,12,7,0,8,16,18,16,10,22],"backgroundColor":"#b2e599","label":"Affiliate"}]}}'>
                                                <label class="custom-control-label" for="chart-switch-toggle"><span class="sr-only">Show affiliate</span></label>
                                            </div>
                                        </div>
                                        <div class="chart">
                                            <canvas id="ordersChartSwitch" class="chart-canvas"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-dark">



                                <code class="highlight html bg-dark">&lt;div&nbsp;class=&quot;custom-control&nbsp;custom-checkbox-toggle&quot;&gt;<br />
                                    &nbsp;&nbsp;&lt;input&nbsp;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;id=&quot;chart-switch-toggle&quot;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;type=&quot;checkbox&quot;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;class=&quot;custom-control-input&quot;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;role=&quot;switch&quot;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;data-toggle=&quot;chart&quot;&nbsp;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;data-target=&quot;#ordersChart&quot;&nbsp;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;data-add=&#39;{<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;data&quot;:{<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;datasets&quot;:[{<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;data&quot;:[15,10,20,12,7,0,8,16,18,16,10,22],<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;backgroundColor&quot;:&quot;#b2e599&quot;,<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;label&quot;:&quot;Affiliate&quot;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}]<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;}&#39;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;checked=&quot;&quot;&gt;<br />
                                    &nbsp;&nbsp;&lt;label&nbsp;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;class=&quot;custom-control-label&quot;&nbsp;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;for=&quot;chart-switch-toggle&quot;&gt;<br />
                                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;span&nbsp;class=&quot;sr-only&quot;&gt;Show&nbsp;affiliate&lt;/span&gt;<br />
                                    &nbsp;&nbsp;&lt;/label&gt;<br />
                                    &lt;/div&gt;</code>


                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <h4 class="card-title">Radar</h4>
                                        <p class="text-muted">A radar chart provides a way of showing multiple data points and the variation between them. They are often useful for comparing the points of two or more different data sets.</p>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="chart">
                                            <canvas id="topicIqChart" class="chart-canvas"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav nav-tabs nav-tabs-card">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#radar-init" data-toggle="tab">Init</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#radar-options" data-toggle="tab">Options</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#radar-data" data-toggle="tab">Data</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#radar-scripts" data-toggle="tab">Scripts</a>
                                </li>
                            </ul>
                            <div class="card-footer bg-dark tab-content">
                                <div class="tab-pane active" id="radar-init">



                                    <code class="highlight html bg-dark">&lt;div&nbsp;class=&quot;chart&quot;&gt;<br />
                                        &nbsp;&nbsp;&lt;canvas&nbsp;id=&quot;topicIqChart&quot;&nbsp;class=&quot;chart-canvas&quot;&gt;&lt;/canvas&gt;<br />
                                        &lt;/div&gt;<br />
                                        <br />
                                        &lt;script&gt;<br />
                                        &nbsp;&nbsp;Charts.create(&#39;#topicIqChart&#39;,&nbsp;&#39;radar&#39;,&nbsp;options,&nbsp;data)<br />
                                        &lt;/script&gt;</code>


                                </div>
                                <div class="tab-pane" id="radar-options">



                                    <code class="highlight html bg-dark">&lt;script&gt;<br />
                                        &nbsp;&nbsp;var&nbsp;options&nbsp;=&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;elements:&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;point:&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pointStyle:&nbsp;&#39;circle&#39;,<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;radius:&nbsp;4,<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hoverRadius:&nbsp;5,<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;backgroundColor:&nbsp;settings.colors.white,<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;borderColor:&nbsp;settings.colors.primary[500],<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;borderWidth:&nbsp;2<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;},<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;scale:&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ticks:&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;display:&nbsp;false,<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;beginAtZero:&nbsp;true,<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;maxTicksLimit:&nbsp;4<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;},<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gridLines:&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;color:&nbsp;settings.colors.gray[300]<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;},<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;angleLines:&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;color:&nbsp;settings.colors.gray[300]<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;},<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pointLabels:&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fontSize:&nbsp;14<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;},<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;tooltips:&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;callbacks:&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;label:&nbsp;function(a,&nbsp;e)&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;var&nbsp;t&nbsp;=&nbsp;e.datasets[a.datasetIndex].label&nbsp;||&nbsp;&quot;&quot;,<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;o&nbsp;=&nbsp;a.yLabel,<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r&nbsp;=&nbsp;&quot;&quot;;<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return&nbsp;1&nbsp;&lt;&nbsp;e.datasets.length&nbsp;&amp;&amp;&nbsp;(r&nbsp;+=&nbsp;&#39;&lt;span&nbsp;class=&quot;popover-body-label&nbsp;mr-auto&quot;&gt;&#39;&nbsp;+&nbsp;t&nbsp;+&nbsp;&quot;&lt;/span&gt;&quot;),&nbsp;r&nbsp;+=&nbsp;&#39;&lt;span&nbsp;class=&quot;popover-body-value&quot;&gt;&#39;&nbsp;+&nbsp;o&nbsp;+&nbsp;&quot;&nbsp;points&lt;/span&gt;&quot;<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;}<br />
                                        &nbsp;&nbsp;}<br />
                                        &lt;/script&gt;</code>


                                </div>
                                <div class="tab-pane" id="radar-data">



                                    <code class="highlight html bg-dark">&lt;script&gt;<br />
                                        &nbsp;&nbsp;var&nbsp;data&nbsp;=&nbsp;{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;labels:&nbsp;[&quot;JavaScript&quot;,&nbsp;&quot;HTML&quot;,&nbsp;&quot;Flinto&quot;,&nbsp;&quot;Vue.js&quot;,&nbsp;&quot;Sketch&quot;,&nbsp;&quot;Priciple&quot;,&nbsp;&quot;CSS&quot;,&nbsp;&quot;Angular&quot;],<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;datasets:&nbsp;[{<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;label:&nbsp;&quot;Experience&nbsp;IQ&quot;,<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data:&nbsp;[30,&nbsp;35,&nbsp;33,&nbsp;32,&nbsp;31,&nbsp;30,&nbsp;28,&nbsp;36],<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pointHoverBorderColor:&nbsp;settings.colors.success[400],<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pointHoverBackgroundColor:&nbsp;settings.colors.white,<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;borderJoinStyle:&nbsp;&#39;bevel&#39;,<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lineTension:&nbsp;.1<br />
                                        &nbsp;&nbsp;&nbsp;&nbsp;}]<br />
                                        &nbsp;&nbsp;}<br />
                                        &lt;/script&gt;</code>


                                </div>
                                <div class="tab-pane" id="radar-scripts">



                                    <code class="highlight html bg-dark">&lt;!--&nbsp;Global&nbsp;Settings&nbsp;--&gt;<br />
                                        &lt;script&nbsp;src=&quot;assets/js/settings.js&quot;&gt;&lt;/script&gt;<br />
                                        <br />
                                        &lt;!--&nbsp;Chart.js&nbsp;Library&nbsp;--&gt;<br />
                                        &lt;script&nbsp;src=&quot;assets/vendor/Chart.min.js&quot;&gt;&lt;/script&gt;<br />
                                        <br />
                                        &lt;!--&nbsp;Chart.js&nbsp;Wrapper&nbsp;--&gt;<br />
                                        &lt;script&nbsp;src=&quot;assets/js/chartjs.js&quot;&gt;&lt;/script&gt;<br />
                                        <br />
                                        &lt;script&gt;<br />
                                        &nbsp;&nbsp;Charts.init()<br />
                                        &lt;/script&gt;</code>


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
                                            <li class="sidebar-menu-item active">
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
                                        <a class="sidebar-menu-button" href="ui-charts.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dashboard</i> Fluid Layout
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="fixed-ui-charts.php">
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
      'fixed': 'fixed-ui-charts.html',
      'default': 'ui-charts.html'
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
    <script src="assets/js/page.ui-charts.js"></script>

</body>


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/ui-charts.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:13:05 GMT -->
</html>