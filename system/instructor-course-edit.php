<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/instructor-course-edit.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:15:05 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Facilitator - Edit course</title>

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

    <!-- Nestable -->
    <link rel="stylesheet" href="assets/css/nestable.css">
    <link rel="stylesheet" href="assets/css/nestable.rtl.css">






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
                            <li class="breadcrumb-item"><a href="instructor-courses.php">Courses</a></li>
                            <li class="breadcrumb-item active">Edit course</li>
                        </ol>
                        <div class="media align-items-center mb-headings">
                            <div class="media-body">
                                <h1 class="h2">Edit Course</h1>
                            </div>
                            <div class="media-right">
                                <a href="#" class="btn btn-success">SAVE</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Basic Information</h4>
                                    </div>
                                    <div class="card-body">

                                        <div class="form-group">
                                            <label class="form-label" for="title">Title</label>
                                            <input type="text" id="title" class="form-control" placeholder="Write a title" value="Accounting for Agribusiness">
                                        </div>

                                        <div class="form-group mb-0">
                                            <label class="form-label">Description</label>
                                            <div style="height: 150px;" data-toggle="quill" data-quill-placeholder="Quill WYSIWYG editor" data-quill-modules-toolbar='[["bold", "italic"], ["link", "blockquote", "code", "image"], [{"list": "ordered"}, {"list": "bullet"}]]'>
                                                <p>If your interest is economics, and your expertise is agriculture… If you want to prove sustainable resource use saves money and protects the land… If you understand that the wheat crop here can make a difference for a hungry child across the ocean… You already care about agribusiness economics. Putting it simply, it’s examining how we use resources, particularly in food, forestry and natural resource production</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Lessons</h4>
                                    </div>
                                    <div class="card-body">
                                        <p><a href="instructor-add-course.php" class="btn btn-primary">Add Lesson <i class="material-icons">add</i></a></p>
                                        <div class="nestable" id="nestable-handles-primary">
                                            <ul class="nestable-list">
                                                <li class="nestable-item nestable-item-handle" data-id="2">
                                                    <div class="nestable-handle"><i class="material-icons">menu</i></div>
                                                    <div class="nestable-content">
                                                        <div class="media align-items-center">
                                                            <div class="media-left">
                                                                <img src="assets/images/lesson4.png" alt="" width="100" class="rounded">
                                                            </div>
                                                            <div class="media-body">
                                                                <h5 class="card-title h6 mb-0">
                                                                    <a href="instructor-add-course.php">The Economics of Agribusiness</a>
                                                                </h5>
                                                                <small class="text-muted">updated 1 month ago</small>
                                                            </div>
                                                            <div class="media-right">
                                                                <a href="instructor-add-course.php" class="btn btn-white btn-sm"><i class="material-icons">edit</i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nestable-item nestable-item-handle" data-id="1">
                                                    <div class="nestable-handle"><i class="material-icons">menu</i></div>
                                                    <div class="nestable-content">
                                                        <div class="media align-items-center">
                                                            <div class="media-left">
                                                                <img src="assets/images/lesson3.png" alt="" width="100" class="rounded">
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="card-title h6 mb-0">
                                                                    <a href="instructor-add-course.php">Business Management for Agriculture</a>
                                                                </h4>
                                                                <small class="text-muted">updated 1 month ago</small>
                                                            </div>
                                                            <div class="media-right">
                                                                <a href="instructor-add-course.php" class="btn btn-white btn-sm"><i class="material-icons">edit</i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="nestable-item nestable-item-handle" data-id="2">
                                                    <div class="nestable-handle"><i class="material-icons">menu</i></div>
                                                    <div class="nestable-content">
                                                        <div class="media align-items-center">
                                                            <div class="media-left">
                                                                <img src="assets/images/lesson1.png" alt="" width="100" class="rounded">
                                                            </div>
                                                            <div class="media-body">
                                                                <h4 class="card-title h6 mb-0">
                                                                    <a href="instructor-add-course.php">Law and Agribusiness</a>
                                                                </h4>
                                                                <small class="text-muted">updated 1 month ago</small>
                                                            </div>
                                                            <div class="media-right">
                                                                <a href="instructor-add-course.php" class="btn btn-white btn-sm"><i class="material-icons">edit</i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/97243285?title=0&amp;byline=0&amp;portrait=0" allowfullscreen=""></iframe>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" class="form-control" value="https://player.vimeo.com/video/97243285?title=0&amp;byline=0&amp;portrait=0" />
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Meta</h4>
                                        <p class="card-subtitle">Extra Options </p>
                                    </div>

                                    <form class="card-body" action="#">
                                        <div class="form-group">
                                            <label class="form-label" for="category">Category</label>
                                            <select id="category" class="custom-select form-control">
                                                <option value="#">HTML</option>
                                                <option value="#">Angular JS</option>
                                                <option value="#" selected>Vue.js</option>
                                                <option value="#">CSS / LESS</option>
                                                <option value="#">Design / Concept</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="duration">Duration</label>
                                            <input type="text" id="duration" class="form-control" placeholder="No. of Days" value="10">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="start">Start Date</label>
                                            <input id="start" type="text" class="form-control" placeholder="Start Date" data-toggle="flatpickr" value="01/28/2020">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="end">End Date</label>
                                            <input id="end" type="text" class="form-control" placeholder="Start Date" data-toggle="flatpickr" value="02/28/2020">
                                        </div>

                                        <div class="form-group mb-0">
                                            <label class="form-label" for="option1">Completion Badge</label>
                                            <div>
                                                <div data-toggle="buttons">
                                                    <label class="btn btn-primary btn-circle active">
                                                        <input type="radio" class="d-none" name="options" id="option1" checked>
                                                        <i class="material-icons">person</i>
                                                    </label>
                                                    <label class="btn btn-danger btn-circle">
                                                        <input type="radio" class="d-none" name="options" id="option2">
                                                        <i class="material-icons">star</i>
                                                    </label>
                                                    <label class="btn btn-success btn-circle">
                                                        <input type="radio" class="d-none" name="options" id="option3">
                                                        <i class="material-icons">shop</i>
                                                    </label>
                                                    <label class="btn btn-warning btn-circle">
                                                        <input type="radio" class="d-none" name="options" id="option4">
                                                        <i class="material-icons">monetization_on</i>
                                                    </label>
                                                    <label class="btn btn-info btn-circle">
                                                        <input type="radio" class="d-none" name="options" id="option5">
                                                        <i class="material-icons">enhanced_encryption</i>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="editLesson">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                // Edit Lesson
                            </div>
                        </div>
                    </div>

                </div>

         <!--==============INCLUDE THE MENU===========-->
         <?php include "includes/facilitator/menu.php"; ?>
         <!--==============%%%INCLUDE THE MENU%%%===========-->
              

            </div>

            <!-- App Settings FAB -->
            <div id="app-settings">
                <app-settings layout-active="default" :layout-location="{
      'fixed': 'fixed-instructor-course-edit.html',
      'default': 'instructor-course-edit.html'
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






    <!-- Nestable -->
    <script src="assets/vendor/jquery.nestable.js"></script>
    <script src="assets/js/nestable.js"></script>

    <!-- Quill -->
    <script src="assets/vendor/quill.min.js"></script>
    <script src="assets/js/quill.js"></script>

    <!-- Flatpickr -->
    <script src="assets/vendor/flatpickr/flatpickr.min.js"></script>
    <script src="assets/js/flatpickr.js"></script>

</body>


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/instructor-course-edit.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:15:08 GMT -->
</html>