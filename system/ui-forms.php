<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/ui-forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:12:17 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Forms</title>

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


    <!-- Flatpickr -->
    <link type="text/css" href="assets/css/flatpickr.css" rel="stylesheet">
    <link type="text/css" href="assets/css/flatpickr.rtl.css" rel="stylesheet">
    <link type="text/css" href="assets/css/flatpickr-airbnb.css" rel="stylesheet">
    <link type="text/css" href="assets/css/flatpickr-airbnb.rtl.css" rel="stylesheet">

    <!-- Quill Theme -->
    <link type="text/css" href="assets/css/quill.css" rel="stylesheet">
    <link type="text/css" href="assets/css/quill.rtl.css" rel="stylesheet">

    <!-- Touchspin -->
    <link type="text/css" href="assets/css/bootstrap-touchspin.rtl.css" rel="stylesheet">






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
                            <li class="breadcrumb-item active">Forms</li>
                        </ol>

                        <h1 class="h2">Forms</h1>

                        <div class="card card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h4 class="card-title">Default Forms</h4>
                                    <p>LearnPlus supports all of Bootstrap's default form styling in addition to a handful of new input types and features. Please <a href="https://getbootstrap.com/docs/4.1/components/forms/" target="_blank">read the official documentation</a> for a full list of options from Bootstrap's core library.</p>
                                </div>
                                <div class="col-lg-8 d-flex align-items-center">
                                    <form class="flex">
                                        <div class="form-group">
                                            <label class="form-label" for="exampleInputEmail1">Your email:</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email address ..">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="exampleInputPassword1">Your password:</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password ..">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="card card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h4 class="card-title">Form Validation</h4>
                                    <p>Provide valuable, actionable feedback to your users with HTML5 form validation. Indicate invalid and valid form fields with <code>.is-invalid</code> and <code>.is-valid</code> classes.</p>
                                </div>
                                <div class="col-lg-8">
                                    <form>
                                        <div class="was-validated">
                                            <div class="form-row">
                                                <div class="col-12 col-md-6 mb-3">
                                                    <label class="form-label" for="validationSample01">First name</label>
                                                    <input type="text" class="form-control" id="validationSample01" placeholder="First name" value="Mark" required="">
                                                    <div class="invalid-feedback">Please provide a first name.</div>
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-12 col-md-6 mb-3">
                                                    <label class="form-label" for="validationSample02">Last name</label>
                                                    <input type="text" class="form-control" id="validationSample02" placeholder="Last name" value="Otto" required="">
                                                    <div class="invalid-feedback">Please provide a last name.</div>
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-12 col-md-6 mb-3">
                                                    <label class="form-label" for="validationSample03">City</label>
                                                    <input type="text" class="form-control" id="validationSample03" placeholder="City" required="">
                                                    <div class="invalid-feedback">Please provide a valid city.</div>
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                <div class="col-12 col-md-6 mb-3">
                                                    <label class="form-label" for="validationSample04">State</label>
                                                    <input type="text" class="form-control" id="validationSample04" placeholder="State" required="">
                                                    <div class="invalid-feedback">Please provide a valid state.</div>
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" value="" id="invalidCheck01" required="" checked="">
                                                <label class="custom-control-label" for="invalidCheck01">
                                                    Agree to terms and conditions
                                                </label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="card card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h4 class="card-title">Search</h4>
                                    <p>A dedicated form group alternative for search forms that always keeps the submit button as part of the form control.</p>
                                </div>
                                <div class="col-lg-8">
                                    <form action="#">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg">
                                                    <label class="form-label" for="searchSample03">Regular</label>
                                                    <div class="search-form search-form--light">
                                                        <input type="text" class="form-control" placeholder="Search icons" id="searchSample03">
                                                        <button class="btn" type="button" role="button"><i class="material-icons">search</i></button>
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <label class="form-label" for="searchSample04">Flush</label>
                                                    <div class="search-form form-control-flush search-form--light">
                                                        <input type="text" class="form-control px-0" placeholder="Search icons" id="searchSample04">
                                                        <button class="btn" type="button" role="button"><i class="material-icons">search</i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="searchSample01">Large</label>
                                            <div class="search-form search-form--light input-group-lg">
                                                <input type="text" class="form-control" placeholder="Search icons" id="searchSample01">
                                                <button class="btn" type="button" role="button"><i class="material-icons">search</i></button>
                                            </div>
                                        </div>
                                        <div class="form-group m-0">
                                            <label class="form-label" for="searchSample02">Rounded</label>
                                            <div class="search-form form-control-rounded search-form--light input-group-lg">
                                                <input type="text" class="form-control" placeholder="Search icons" id="searchSample02">
                                                <button class="btn" type="button" role="button"><i class="material-icons">search</i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="card card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h4 class="card-title">Merge Group</h4>
                                    <p>A slightly modified version of the default input groups that always keeps icons as a part of the form control. Also works with validation.</p>
                                </div>
                                <div class="col-lg-8">
                                    <form action="#">
                                        <div class="form-group">
                                            <div class="input-group input-group-merge">
                                                <input type="text" class="form-control form-control-prepended" required="" placeholder="Input group prepended">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <span class="material-icons">remove_red_eye</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group input-group-merge">
                                                <input type="text" class="form-control form-control-appended" required="" placeholder="Input group appended">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="material-icons">lock_outline</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group input-group-merge">
                                                <input type="text" class="form-control form-control-prepended is-valid" required="" placeholder="Input group prepended">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <span class="material-icons">remove_red_eye</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-group input-group-merge">
                                            <input type="text" class="form-control form-control-appended is-invalid" required="" placeholder="Input group appended">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <span class="material-icons">lock_outline</span>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="card card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h4 class="card-title">Rounded</h4>
                                    <p>Form control with rounded corners with the <code>.form-control-rounded</code> modifier.</p>
                                </div>
                                <div class="col-lg-8 d-flex align-items-center">
                                    <div class="flex">
                                        <label class="form-label" for="roundedSample01">Rounded</label>
                                        <input type="text" class="form-control form-control-rounded" placeholder="Rounded form control ..." id="roundedSample01">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h4 class="card-title">Flush</h4>
                                    <p>Remove paddings and borders from a form control with the <code>.form-control-flush</code> modifier.</p>
                                </div>
                                <div class="col-lg-8 d-flex align-items-center">
                                    <div class="flex">
                                        <label class="form-label" for="flushSample01">Flush</label>
                                        <input type="text" class="form-control form-control-flush" placeholder="Flush form control ..." id="flushSample01">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h4 class="card-title">Toggle</h4>
                                    <p>Replaces a standard checkbox input with a toggle button.</p>
                                </div>
                                <div class="col-lg-8 d-flex align-items-center">
                                    <div class="flex">
                                        <label class="form-label" for="subscribe">Subscribe to newsletter</label><br>
                                        <div class="custom-control custom-checkbox-toggle custom-control-inline mr-1">
                                            <input checked="" type="checkbox" id="subscribe" class="custom-control-input">
                                            <label class="custom-control-label" for="subscribe">Yes</label>
                                        </div>
                                        <label class="form-label mb-0" for="subscribe">Yes</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h4 class="card-title">Custom controls</h4>
                                </div>
                                <div class="col-lg-8">
                                    <form action="#">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input id="customCheck01" type="checkbox" class="custom-control-input">
                                                <label for="customCheck01" class="custom-control-label">Check this custom checkbox</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-controls-stacked">
                                                <div class="custom-control custom-radio">
                                                    <input id="radioStacked1" name="radio-stacked" type="radio" class="custom-control-input">
                                                    <label for="radioStacked1" class="custom-control-label">Toggle this custom radio</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input id="radioStacked2" name="radio-stacked" type="radio" class="custom-control-input">
                                                    <label for="radioStacked2" class="custom-control-label">Or toggle this other custom radio</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="custom-select">Custom select</label>
                                            <select id="custom-select" class="form-control custom-select">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="form-group m-0">
                                            <div class="custom-file">
                                                <input type="file" id="file" class="custom-file-input">
                                                <label for="file" class="custom-file-label">Choose file</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="card card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h4 class="card-title">Date Picker</h4>
                                    <p>A simple yet powerful datepicker powered by Flatpickr. Please read the <a target="_blank" href="https://flatpickr.js.org/">official plugin documentation</a> for a full list of options.</p>
                                </div>
                                <div class="col-lg-8 d-flex align-items-center">
                                    <div class="flex">
                                        <div class="form-group">
                                            <label class="form-label" for="flatpickrSample01">Date</label>
                                            <input id="flatpickrSample01" type="text" class="form-control" placeholder="Flatpickr example" data-toggle="flatpickr" value="today">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="flatpickrSample02">Range</label>
                                            <input id="flatpickrSample02" type="text" class="form-control" placeholder="Flatpickr range example" data-toggle="flatpickr" data-flatpickr-mode="range" value="2018-10-07 to 2018-10-15">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h4 class="card-title">Input Masking</h4>
                                    <p>Mask your form controls depending on the context with the jQuery Mask plugin. Please read the <a href="https://igorescobar.github.io/jQuery-Mask-Plugin/" target="_blank">official plugin documentation</a> for a full list of options.</p>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label class="form-label" for="maskSample01">Number</label>
                                        <input id="maskSample01" type="text" class="form-control" placeholder="Number: 2.342,42" data-mask="#.##0,00" data-mask-reverse="true">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="maskSample02">Phone</label>
                                        <input id="maskSample02" type="text" class="form-control" placeholder="US phone: (000) 000-0000)" data-mask="(000) 000-0000">
                                    </div>
                                    <div class="form-group m-0">
                                        <label class="form-label" for="maskSample03">Date</label>
                                        <input id="maskSample03" type="text" class="form-control" placeholder="US date: 00/00/0000" data-mask="00/00/0000">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h4 class="card-title">Input Spinner</h4>
                                    <p>A mobile and touch friendly input spinner component. It supports the mouse wheel
                                        and the up &amp; down keys.</p>
                                </div>
                                <div class="col-lg-8 d-flex align-items-center">
                                    <form action="#" class="flex">
                                        <div class="form-group">
                                            <label for="touch-spin-2" class="form-label">Score</label>
                                            <input id="touch-spin-2" data-toggle="touch-spin" data-min="-1000000" data-max="1000000" data-step="50" type="text" value="200" name="demo2" class="form-control" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="card card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <h4 class="card-title">Rich Text Editor</h4>
                                    <p>Powerful WYSIWYG text editor powered by Quill. Please read the <a href="https://quilljs.com/" target="_blank">official plugin documentation</a> for a full list of options.</p>
                                </div>
                                <div class="col-lg-8">
                                    <label class="form-label">Default</label>
                                    <div style="height: 150px;" data-toggle="quill" data-quill-placeholder="Quill WYSIWYG editor">
                                        <h1>Hello World!</h1>
                                        <p>Some initial <strong>bold</strong> text</p>
                                        <p><br></p>
                                    </div>

                                    <label class="form-label">Custom toolbar</label>
                                    <div style="height: 150px;" data-toggle="quill" data-quill-placeholder="Quill WYSIWYG editor" data-quill-modules-toolbar='[["bold", "italic"], ["link", "blockquote", "code", "image"], [{"list": "ordered"}, {"list": "bullet"}]]'>
                                        <p>Hello World!</p>
                                        <p>Some initial <strong>bold</strong> text</p>
                                        <p><br></p>
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
                                            <li class="sidebar-menu-item active">
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
                                        <a class="sidebar-menu-button" href="ui-forms.php">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dashboard</i> Fluid Layout
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="fixed-ui-forms.php">
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
      'fixed': 'fixed-ui-forms.html',
      'default': 'ui-forms.html'
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






    <!-- Touchspin -->
    <script src="assets/vendor/jquery.bootstrap-touchspin.js"></script>
    <script src="assets/js/touchspin.js"></script>

    <!-- Flatpickr -->
    <script src="assets/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="assets/js/flatpickr.js"></script>

    <!-- jQuery Mask Plugin -->
    <script src="assets/vendor/jquery.mask.min.js"></script>

    <!-- Quill -->
    <script src="assets/vendor/quill.min.js"></script>
    <script src="assets/js/quill.js"></script>

</body>


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/ui-forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:12:31 GMT -->
</html>