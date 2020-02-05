<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/student-quiz-results.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:10:39 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student - Quiz results</title>

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
        

        <!--==============INCLUDE THE HEADER==========-->
     <?php include "includes/student/header.php"; ?>
     <!--==============%%%INCLUDE THE HEADER%%%===========-->

        <!-- Header Layout Content -->
        <div class="mdk-header-layout__content">

            <div data-push data-responsive-width="992px" class="mdk-drawer-layout js-mdk-drawer-layout">
                <div class="mdk-drawer-layout__content page ">

                    <div class="container-fluid page__container">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="student-dashboard.php">Home</a></li>
                            <li class="breadcrumb-item active">Quiz Results</li>
                        </ol>
                        <div class="media mb-headings align-items-center">
                            <div class="media-left">
                                <img src="assets/images/lesson4.png" alt="" width="80" class="rounded">
                            </div>
                            <div class="media-body">
                                <h1 class="h2">Vue.js Deploy Quiz</h1>
                                <p class="text-muted">submited on 2nd Feb 2016</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Result</h4>
                            </div>
                            <div class="card-body media align-items-center">
                                <div class="media-body">
                                    <h4 class="mb-0">5.8</h4>
                                    <span class="text-muted-light">Good</span>
                                </div>
                                <div class="media-right">
                                    <a href="student-take-quiz.php" class="btn btn-primary">Restart <i class="material-icons btn__icon--right">refresh</i></a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Questions</h4>
                            </div>
                            <ul class="list-group list-group-fit mb-0">
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="text-muted-light">1.</div>
                                        </div>
                                        <div class="media-body">Installation</div>
                                        <div class="media-right"><span class="badge badge-success ">Correct</span></div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="text-muted-light">2.</div>
                                        </div>
                                        <div class="media-body">The MVC architectural pattern</div>
                                        <div class="media-right"><span class="badge badge-success ">Correct</span></div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="text-muted-light">3.</div>
                                        </div>
                                        <div class="media-body">Database Models</div>
                                        <div class="media-right"><span class="badge badge-success ">Correct</span></div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="text-muted-light">4.</div>
                                        </div>
                                        <div class="media-body">Database Access</div>
                                        <div class="media-right"><span class="badge badge-danger ">Wrong</span></div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="text-muted-light">5.</div>
                                        </div>
                                        <div class="media-body">Eloquent Basics</div>
                                        <div class="media-right"><span class="badge badge-primary ">Pending Review</span></div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <div class="text-muted-light">6.</div>
                                        </div>
                                        <div class="media-body">Take Quiz</div>
                                        <div class="media-right"><span class="badge badge-success ">Correct</span></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>



              <!--==============INCLUDE THE MENU==========-->
            <?php include "includes/student/menu.php"; ?>
            <!--==============%%%INCLUDE THE MENU%%%===========-->
                

            </div>

            <!-- App Settings FAB -->
            <div id="app-settings">
                <app-settings layout-active="default" :layout-location="{
      'fixed': 'fixed-student-quiz-results.html',
      'default': 'student-quiz-results.html'
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


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/student-quiz-results.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:10:41 GMT -->
</html>