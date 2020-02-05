<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/ui-buttons.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:12:45 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Buttons</title>

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
                            <li class="breadcrumb-item active">Buttons</li>
                        </ol>

                        <h1 class="h2">Buttons</h1>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Default</h4>
                                        <p class="card-subtitle">Default Button</p>
                                    </div>
                                    <div class="card-body">
                                        <p>Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.</p>

                                        <div class="button-list">
                                            <button type="button" class="btn btn-white">White</button>
                                            <button type="button" class="btn btn-primary">Primary</button>
                                            <button type="button" class="btn btn-secondary">Secondary</button>
                                            <button type="button" class="btn btn-success">Success</button>
                                            <button type="button" class="btn btn-danger">Danger</button>
                                            <button type="button" class="btn btn-warning">Warning</button>
                                            <button type="button" class="btn btn-info">Info</button>
                                            <button type="button" class="btn btn-light">Light</button>
                                            <button type="button" class="btn btn-dark">Dark</button>
                                            <button type="button" class="btn btn-link">Link</button>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-dark">


                                        <code class="highlight html bg-dark">&lt;button&nbsp;type=&quot;button&quot;&nbsp;class=&quot;btn&nbsp;btn-primary&quot;&gt;Primary&lt;/button&gt;</code>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Outline</h4>
                                        <p class="card-subtitle">Outline Button</p>
                                    </div>
                                    <div class="card-body">
                                        <p>Use the <code>.btn-outline-*</code> classes to quickly create bordered buttons.</p>
                                        <div class="button-list">
                                            <button type="button" class="btn btn-outline-primary">Primary</button>
                                            <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                            <button type="button" class="btn btn-outline-success">Success</button>
                                            <button type="button" class="btn btn-outline-danger">Danger</button>
                                            <button type="button" class="btn btn-outline-warning">Warning</button>
                                            <button type="button" class="btn btn-outline-info">Info</button>
                                            <button type="button" class="btn btn-outline-light">Light</button>
                                            <button type="button" class="btn btn-outline-dark">Dark</button>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-dark">


                                        <code class="highlight html bg-dark">&lt;button&nbsp;type=&quot;button&quot;&nbsp;class=&quot;btn&nbsp;btn-outline-primary&quot;&gt;Primary&lt;/button&gt;</code>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Rounded</h4>
                                        <p class="card-subtitle">Rounded Button</p>
                                    </div>
                                    <div class="card-body">
                                        <p>Add <code>.btn-rounded</code> to buttons to get large rounded corners.</p>
                                        <div class="button-list">
                                            <button type="button" class="btn btn-white btn-rounded">White</button>
                                            <button type="button" class="btn btn-primary btn-rounded">Primary</button>
                                            <button type="button" class="btn btn-secondary btn-rounded">Secondary</button>
                                            <button type="button" class="btn btn-success btn-rounded">Success</button>
                                            <button type="button" class="btn btn-danger btn-rounded">Danger</button>
                                            <button type="button" class="btn btn-warning btn-rounded">Warning</button>
                                            <button type="button" class="btn btn-info btn-rounded">Info</button>
                                            <button type="button" class="btn btn-light btn-rounded">Light</button>
                                            <button type="button" class="btn btn-dark btn-rounded">Dark</button>
                                            <button type="button" class="btn btn-link btn-rounded">Link</button>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-dark">


                                        <code class="highlight html bg-dark">&lt;button&nbsp;type=&quot;button&quot;&nbsp;class=&quot;btn&nbsp;btn-white&nbsp;btn-rounded&quot;&gt;White&lt;/button&gt;</code>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Rounded Outline</h4>
                                        <p class="card-subtitle">Rounded Outline Button</p>
                                    </div>
                                    <div class="card-body">
                                        <p>Use the <code>.btn-outline-*</code> and <code>.btn-rounded</code> classes together to quickly create bordered buttons with large rounded corners.</p>
                                        <div class="button-list">
                                            <button type="button" class="btn btn-outline-primary btn-rounded">Primary</button>
                                            <button type="button" class="btn btn-outline-secondary btn-rounded">Secondary</button>
                                            <button type="button" class="btn btn-outline-success btn-rounded">Success</button>
                                            <button type="button" class="btn btn-outline-danger btn-rounded">Danger</button>
                                            <button type="button" class="btn btn-outline-warning btn-rounded">Warning</button>
                                            <button type="button" class="btn btn-outline-info btn-rounded">Info</button>
                                            <button type="button" class="btn btn-outline-light btn-rounded">Light</button>
                                            <button type="button" class="btn btn-outline-dark btn-rounded">Dark</button>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-dark">


                                        <code class="highlight html bg-dark">&lt;button&nbsp;type=&quot;button&quot;&nbsp;class=&quot;btn&nbsp;btn-outline-primary&nbsp;btn-rounded&quot;&gt;Primary&lt;/button&gt;</code>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Icon</h4>
                                        <div class="card-subtitle">Icon Button</div>
                                    </div>
                                    <div class="card-body">
                                        <p>Add icons to any button or even use Icon-only buttons.</p>
                                        <div class="button-list">
                                            <button type="button" class="btn btn-light">
                                                <i class="material-icons">favorite_border</i>
                                            </button>
                                            <button type="button" class="btn btn-danger">
                                                <i class="material-icons">close</i>
                                            </button>
                                            <button type="button" class="btn btn-dark">
                                                <i class="material-icons">music_note</i>
                                            </button>
                                            <button type="button" class="btn btn-primary">
                                                <i class="material-icons">star</i>
                                            </button>
                                            <button type="button" class="btn btn-success">
                                                <i class="material-icons">thumb_up</i>
                                            </button>
                                            <button type="button" class="btn btn-info">
                                                <i class="material-icons">keyboard</i>
                                            </button>
                                            <button type="button" class="btn btn-warning">
                                                <i class="material-icons">settings</i>
                                            </button>
                                            <button type="button" class="btn btn-light">
                                                <i class="material-icons mr-1">favorite</i> Favorite
                                            </button>
                                            <button type="button" class="btn btn-warning">
                                                <i class="material-icons mr-1">launch</i> Launch
                                            </button>
                                            <button type="button" class="btn btn-info">
                                                <i class="material-icons mr-1">cloud</i> Cloud Hosting
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-dark">


                                        <code class="highlight html bg-dark">&lt;button&nbsp;type=&quot;button&quot;&nbsp;class=&quot;btn&nbsp;btn-light&quot;&gt;<br />
                                            &nbsp;&nbsp;&lt;i&nbsp;class=&quot;material-icons&quot;&gt;favorite_border&lt;/i&gt;<br />
                                            &lt;/button&gt;<br />
                                            <br />
                                            &lt;button&nbsp;type=&quot;button&quot;&nbsp;class=&quot;btn&nbsp;btn-light&quot;&gt;<br />
                                            &nbsp;&nbsp;&lt;i&nbsp;class=&quot;material-icons&nbsp;mr-1&quot;&gt;favorite&lt;/i&gt;&nbsp;Favorite<br />
                                            &lt;/button&gt;</code>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Circle</h4>
                                        <div class="card-subtitle">Circle Button</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="button-list">
                                            <button type="button" class="btn btn-white btn-circle">
                                                <i class="material-icons">email</i>
                                            </button>
                                            <button type="button" class="btn btn-primary btn-circle">
                                                <i class="material-icons">person</i>
                                            </button>
                                            <button type="button" class="btn btn-secondary btn-circle">
                                                <i class="material-icons">mail_outline</i>
                                            </button>
                                            <button type="button" class="btn btn-success btn-circle">
                                                <i class="material-icons">list</i>
                                            </button>
                                            <button type="button" class="btn btn-info btn-circle">
                                                <i class="material-icons">notifications</i>
                                            </button>
                                            <button type="button" class="btn btn-warning btn-circle">
                                                <i class="material-icons">chevron_right</i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-circle">
                                                <i class="material-icons">home</i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-dark">


                                        <code class="highlight html bg-dark">&lt;button&nbsp;type=&quot;button&quot;&nbsp;class=&quot;btn&nbsp;btn-danger&nbsp;btn-circle&quot;&gt;<br />
                                            &nbsp;&nbsp;&lt;i&nbsp;class=&quot;material-icons&quot;&gt;home&lt;/i&gt;<br />
                                            &lt;/button&gt;</code>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Size</h4>
                                        <div class="card-subtitle">Button Size</div>
                                    </div>
                                    <div class="card-body">
                                        <p>Add <code>.btn-lg</code> or <code>.btn-sm</code> classes for additional button sizes.</p>
                                        <div class="button-list">
                                            <button type="button" class="btn btn-primary btn-lg">Large</button>
                                            <button type="button" class="btn btn-info">Normal</button>
                                            <button type="button" class="btn btn-success btn-sm">Small</button>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-dark">


                                        <code class="highlight html bg-dark">&lt;button&nbsp;type=&quot;button&quot;&nbsp;class=&quot;btn&nbsp;btn-primary&nbsp;btn-lg&quot;&gt;Large&lt;/button&gt;</code>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Disabled</h4>
                                        <div class="card-subtitle">Disabled Buttons</div>
                                    </div>
                                    <div class="card-body">
                                        <p>Add the <code>disabled</code> attribute to disable buttons.</p>
                                        <div class="button-list">
                                            <button type="button" class="btn btn-info" disabled="">Info</button>
                                            <button type="button" class="btn btn-success" disabled="">Success</button>
                                            <button type="button" class="btn btn-danger" disabled="">Danger</button>
                                            <button type="button" class="btn btn-dark" disabled="">Dark</button>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-dark">


                                        <code class="highlight html bg-dark">&lt;button&nbsp;type=&quot;button&quot;&nbsp;class=&quot;btn&nbsp;btn-info&quot;&nbsp;disabled=&quot;&quot;&gt;Info&lt;/button&gt;</code>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Block</h4>
                                        <div class="card-subtitle">Button Block</div>
                                    </div>
                                    <div class="card-body">
                                        <p>Create block level buttons, by adding add <code>.btn-block</code>.</p>
                                        <button type="button" class="btn btn-block btn-primary">Block Button</button>
                                        <button type="button" class="btn btn-block btn-success">Block Button</button>
                                        <button type="button" class="btn btn-block btn-sm btn-info">Block Button</button>
                                    </div>
                                    <div class="card-footer bg-dark">


                                        <code class="highlight html bg-dark">&lt;button&nbsp;type=&quot;button&quot;&nbsp;class=&quot;btn&nbsp;btn-block&nbsp;btn-primary&quot;&gt;Block&nbsp;Button&lt;/button&gt;</code>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Dropdown</h4>
                                        <div class="card-subtitle">Button dropdown</div>
                                    </div>
                                    <div class="card-body button-list">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">White</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Success</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Warning</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danger</button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-dark">


                                        <code class="highlight html bg-dark">&lt;div&nbsp;class=&quot;btn-group&quot;&gt;<br />
                                            &nbsp;&nbsp;&lt;button&nbsp;type=&quot;button&quot;&nbsp;class=&quot;btn&nbsp;btn-white&nbsp;dropdown-toggle&quot;&nbsp;data-toggle=&quot;dropdown&quot;&nbsp;aria-haspopup=&quot;true&quot;&nbsp;aria-expanded=&quot;false&quot;&gt;White&lt;/button&gt;<br />
                                            &nbsp;&nbsp;&lt;div&nbsp;class=&quot;dropdown-menu&quot;&gt;<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;class=&quot;dropdown-item&quot;&nbsp;href=&quot;#&quot;&gt;Action&lt;/a&gt;<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;class=&quot;dropdown-item&quot;&nbsp;href=&quot;#&quot;&gt;Another&nbsp;action&lt;/a&gt;<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;class=&quot;dropdown-item&quot;&nbsp;href=&quot;#&quot;&gt;Something&nbsp;else&nbsp;here&lt;/a&gt;<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;<br />
                                            &nbsp;&nbsp;&nbsp;&nbsp;&lt;a&nbsp;class=&quot;dropdown-item&quot;&nbsp;href=&quot;#&quot;&gt;Separated&nbsp;link&lt;/a&gt;<br />
                                            &nbsp;&nbsp;&lt;/div&gt;<br />
                                            &lt;/div&gt;</code>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Group</h4>
                                        <div class="card-subtitle">Button Group</div>
                                    </div>
                                    <div class="card-body">
                                        <p>Create a group of buttons by wrapping with <code>.btn-group</code>.</p>
                                        <div class="btn-group mb-2">
                                            <button type="button" class="btn btn-light">Left</button>
                                            <button type="button" class="btn btn-light">Middle</button>
                                            <button type="button" class="btn btn-light">Right</button>
                                        </div>
                                        <br>
                                        <div class="btn-group mb-2">
                                            <button type="button" class="btn btn-light">1</button>
                                            <button type="button" class="btn btn-light">2</button>
                                            <button type="button" class="btn btn-light">3</button>
                                            <button type="button" class="btn btn-light">4</button>
                                        </div>
                                        <div class="btn-group mb-2">
                                            <button type="button" class="btn btn-light">5</button>
                                            <button type="button" class="btn btn-light">6</button>
                                            <button type="button" class="btn btn-light">7</button>
                                        </div>
                                        <div class="btn-group mb-2">
                                            <button type="button" class="btn btn-light">8</button>
                                        </div>
                                        <br>
                                        <div class="btn-group mb-2">
                                            <button type="button" class="btn btn-light">1</button>
                                            <button type="button" class="btn btn-primary">2</button>
                                            <button type="button" class="btn btn-light">3</button>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Dropdown <span class="caret"></span> </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="d-lg-flex">
                                            <div class="btn-group-vertical mb-2 mr-lg-1">
                                                <button type="button" class="btn btn-light">Top</button>
                                                <button type="button" class="btn btn-light">Middle</button>
                                                <button type="button" class="btn btn-light">Bottom</button>
                                            </div>
                                            <div class="btn-group-vertical mb-2">
                                                <button type="button" class="btn btn-light">Button 1</button>
                                                <button type="button" class="btn btn-light">Button 2</button>
                                                <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Button 3 <span class="caret"></span> </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                                    <a class="dropdown-item" href="#">Dropdown link</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-dark">


                                        <code class="highlight html bg-dark">&lt;div&nbsp;class=&quot;btn-group&quot;&gt;<br />
                                            &nbsp;&nbsp;&lt;button&nbsp;type=&quot;button&quot;&nbsp;class=&quot;btn&nbsp;btn-light&quot;&gt;Left&lt;/button&gt;<br />
                                            &nbsp;&nbsp;&lt;button&nbsp;type=&quot;button&quot;&nbsp;class=&quot;btn&nbsp;btn-light&quot;&gt;Middle&lt;/button&gt;<br />
                                            &nbsp;&nbsp;&lt;button&nbsp;type=&quot;button&quot;&nbsp;class=&quot;btn&nbsp;btn-light&quot;&gt;Right&lt;/button&gt;<br />
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
                                            <li class="sidebar-menu-item active">
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
                                        <a class="sidebar-menu-button" href="ui-buttons.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dashboard</i> Fluid Layout
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="fixed-ui-buttons.php">
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
      'fixed': 'fixed-ui-buttons.html',
      'default': 'ui-buttons.html'
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


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/ui-buttons.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:12:49 GMT -->
</html>