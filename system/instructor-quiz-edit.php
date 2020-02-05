<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/instructor-quiz-edit.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:15:41 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Facilitator - Edit quiz</title>

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


    <!-- Touchspin -->
    <link rel="stylesheet" href="assets/css/bootstrap-touchspin.css">
    <link rel="stylesheet" href="assets/css/bootstrap-touchspin.rtl.css">

    <!-- Vendor CSS -->
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
                            <li class="breadcrumb-item"><a href="instructor-quizzes.php">Quiz Manager</a></li>
                            <li class="breadcrumb-item active">Edit Quiz</li>
                        </ol>
                        <h1 class="h2">The Economics of Agribusiness Quiz</h1>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Basic</h4>
                            </div>
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-group row">
                                        <label for="quiz_title" class="col-sm-3 col-form-label form-label">Quiz Title:</label>
                                        <div class="col-sm-9">
                                            <input id="quiz_title" type="text" class="form-control" placeholder="Title" value="The Economics of Agribusiness">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="course_title" class="col-sm-3 col-form-label form-label">Course:</label>
                                        <div class="col-sm-9 col-md-4">
                                            <select id="course_title" class="custom-select form-control">
                                                <option value="#">HTML</option>
                                                <option value="#">Angular JS</option>
                                                <option value="#" selected>The Economics of Agribusiness</option>
                                                <option value="#">CSS / LESS</option>
                                                <option value="#">Design / Concept</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="quiz_image" class="col-sm-3 col-form-label form-label">Quiz Image:</label>
                                        <div class="col-sm-9 col-md-4">
                                            <p><img src="assets/images/lesson4.png" alt="" width="150" class="rounded"></p>
                                            <div class="custom-file">
                                                <input type="file" id="quiz_image" class="custom-file-input">
                                                <label for="quiz_image" class="custom-file-label">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="cmn-toggle" class="col-sm-3 col-form-label form-label">Timeframe</label>
                                        <div class="col-sm-9">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox-toggle">
                                                    <input id="cmn-toggle" type="checkbox" aria-checked="false" class="custom-control-input" role="switch">
                                                    <label class="custom-control-label" for="cmn-toggle"><span class="sr-only">Timeframe</span></label>
                                                </div>
                                            </div>
                                            <div class="form-inline">
                                                <div class="form-group mr-2">
                                                    <input type="number" class="form-control text-center" value="4" style="width:50px;">
                                                </div>
                                                <div class="form-group">
                                                    <select class="custom-select">
                                                        <option value="hour" selected>Hours</option>
                                                        <option value="minutes">Minutes</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-sm-9 offset-sm-3">
                                            <button type="submit" class="btn btn-success">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Questions</h4>
                            </div>
                            <div class="card-header">
                                <a href="#" data-toggle="modal" data-target="#editQuiz" class="btn btn-outline-secondary">Add Question <i class="material-icons">add</i></a>
                            </div>
                            <div class="nestable" id="nestable">
                                <ul class="list-group list-group-fit nestable-list-plain mb-0">
                                    <li class="list-group-item nestable-item">
                                        <div class="media align-items-center">
                                            <div class="media-left">
                                                <a href="#" class="btn btn-default nestable-handle"><i class="material-icons">menu</i></a>
                                            </div>
                                            <div class="media-body">
                                                Installation
                                            </div>
                                            <div class="media-right text-right">
                                                <div style="width:100px">
                                                    <a href="#" data-toggle="modal" data-target="#editQuiz" class="btn btn-primary btn-sm"><i class="material-icons">edit</i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item nestable-item">
                                        <div class="media align-items-center">
                                            <div class="media-left">
                                                <a href="#" class="btn btn-default nestable-handle"><i class="material-icons">menu</i></a>
                                            </div>
                                            <div class="media-body">
                                                The MVC architectural pattern
                                            </div>
                                            <div class="media-right text-right">
                                                <div style="width:100px">
                                                    <a href="#" data-toggle="modal" data-target="#editQuiz" class="btn btn-primary btn-sm"><i class="material-icons">edit</i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item nestable-item">
                                        <div class="media align-items-center">
                                            <div class="media-left">
                                                <a href="#" class="btn btn-default nestable-handle"><i class="material-icons">menu</i></a>
                                            </div>
                                            <div class="media-body">
                                                Database Models
                                            </div>
                                            <div class="media-right text-right">
                                                <div style="width:100px">
                                                    <a href="#" data-toggle="modal" data-target="#editQuiz" class="btn btn-primary btn-sm"><i class="material-icons">edit</i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item nestable-item" data-id="4">
                                        <div class="media align-items-center">
                                            <div class="media-left">
                                                <a href="#" class="btn btn-default nestable-handle"><i class="material-icons">menu</i></a>
                                            </div>
                                            <div class="media-body">
                                                Database Access
                                            </div>
                                            <div class="media-right text-right">
                                                <div style="width:100px">
                                                    <a href="#" data-toggle="modal" data-target="#editQuiz" class="btn btn-primary btn-sm"><i class="material-icons">edit</i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item nestable-item" data-id="5">
                                        <div class="media align-items-center">
                                            <div class="media-left">
                                                <a href="#" class="btn btn-default nestable-handle"><i class="material-icons">menu</i></a>
                                            </div>
                                            <div class="media-body">
                                                Eloquent Basics
                                            </div>
                                            <div class="media-right text-right">
                                                <div style="width:100px">
                                                    <a href="#" data-toggle="modal" data-target="#editQuiz" class="btn btn-primary btn-sm"><i class="material-icons">edit</i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item nestable-item" data-id="6">
                                        <div class="media align-items-center">
                                            <div class="media-left">
                                                <a href="#" class="btn btn-default nestable-handle"><i class="material-icons">menu</i></a>
                                            </div>
                                            <div class="media-body">
                                                Take Quiz
                                            </div>
                                            <div class="media-right text-right">
                                                <div style="width:100px">
                                                    <a href="#" data-toggle="modal" data-target="#editQuiz" class="btn btn-primary btn-sm"><i class="material-icons">edit</i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
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
      'fixed': 'fixed-instructor-quiz-edit.html',
      'default': 'instructor-quiz-edit.html'
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






    <div class="modal fade" id="editQuiz">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title text-white">Edit Question</h4>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="form-group row">
                            <label for="qtitle" class="col-form-label form-label col-md-3">Title:</label>
                            <div class="col-md-9">
                                <input id="qtitle" type="text" class="form-control" value="Database Access">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="type" class="col-form-label form-label col-md-3">Type:</label>
                            <div class="col-md-4">
                                <select id="type" class="custom-control custom-select form-control">
                                    <option value="1">Input</option>
                                    <option value="2">Textarea</option>
                                    <option value="3">Checkbox</option>
                                    <option value="3">Radio</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label form-label col-md-3">Answers:</label>
                            <div class="col-md-9">
                                <a href="#" class="btn btn-default"><i class="material-icons">add</i> Add Answer</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="touch-spin-2" class="col-form-label form-label col-md-3">Question Score:</label>
                            <div class="col-md-4">
                                <input id="touch-spin-2" data-toggle="touch-spin" data-min="0" data-max="100" data-step="5" type="text" value="50" name="demo2" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-3">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor JS -->
    <script src="assets/vendor/jquery.nestable.js"></script>
    <script src="assets/vendor/jquery.bootstrap-touchspin.js"></script>

    <!-- Initialize -->
    <script src="assets/js/nestable.js"></script>
    <script src="assets/js/touchspin.js"></script>

</body>


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/instructor-quiz-edit.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:15:43 GMT -->
</html>