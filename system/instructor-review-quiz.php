<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/instructor-review-quiz.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:15:43 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Facilitator - Review quiz</title>

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
                            <li class="breadcrumb-item active">Quiz Review</li>
                        </ol>

                        <div class="media flex-wrap align-items-center mb-headings">
                            <div class="media-left avatar avatar-lg avatar-4by3">
                                <img src="assets/images/lesson4.png" alt="" class="avatar-img rounded">
                            </div>
                            <div class="media-body mb-3 mb-sm-0">
                                <h1 class="h2 mb-0">Vue.js Deploy Quiz</h1>
                                <span class="text-muted">submited by</span> <a href="instructor-profile.php">Adrian Demian</a>
                            </div>
                            <div class="text-left text-sm-right w-100 w-sm-auto">
                                <a href="#" class="btn btn-white btn-sm"><i class="material-icons">keyboard_arrow_left</i></a>
                                <a href="#" class="btn btn-primary btn-sm"><i class="material-icons">keyboard_arrow_right</i></a>
                            </div>
                        </div>

                        <div class="card">
                            <ul class="nav nav-tabs nav-tabs-card">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#first" data-toggle="tab">Review</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#second" data-toggle="tab">All Questions</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="first">
                                    <ul class="list-group mb-0 list-group-fit">
                                        <li class="list-group-item">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <p><strong>#9. What are the first three steps?</strong></p>
                                                    <small class="text-muted">ANSWER:</small>
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati temporibus blanditiis iste itaque deleniti minima.
                                                    </p>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group d-flex flex-column">
                                                        <label class="form-label" for="customRange2">Score</label>
                                                        <input type="range" class="custom-range" min="0" max="5" id="customRange2">
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="2" placeholder="Write comment"></textarea>
                                                    </div>
                                                    <a href="#" class="btn btn-success float-right">Save review <i class="material-icons btn__icon--right">check</i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#"><strong>#12.</strong> How do you deploy?</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane" id="second">
                                    <ul class="list-group mb-0 list-group-fit">
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <div class="text-muted-light">1.</div>
                                                </div>
                                                <div class="media-body">Installation</div>
                                                <div class="media-right"><strong class="text-primary">8</strong></div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <div class="text-muted-light">2.</div>
                                                </div>
                                                <div class="media-body">The MVC architectural pattern</div>
                                                <div class="media-right"><strong class="text-primary">7</strong></div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <div class="text-muted-light">3.</div>
                                                </div>
                                                <div class="media-body">Database Models</div>
                                                <div class="media-right"><strong class="text-primary">9</strong></div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <div class="text-muted-light">4.</div>
                                                </div>
                                                <div class="media-body">Database Access</div>
                                                <div class="media-right"><strong class="text-primary">10</strong></div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <div class="text-muted-light">5.</div>
                                                </div>
                                                <div class="media-body"><a href="#">Eloquent Basics</a></div>
                                                <div class="media-right"><span class="badge badge-success ">Pending Review</span></div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <div class="text-muted-light">6.</div>
                                                </div>
                                                <div class="media-body">Take Quiz</div>
                                                <div class="media-right"><strong class="text-primary">12</strong></div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="card card-footer">
                                        Total Score: <span class="h5 text-primary"><strong>340</strong></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h4>Review History</h4>
                        <div class="table-responsive">
                            <table class="table table-sm table-middle">
                                <thead>
                                    <tr>
                                        <th style="width: 120px">Submitted</th>
                                        <th>Student</th>
                                        <th class="text-center">Score</th>
                                        <th>Reviewed</th>
                                        <th style="width: 80px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="badge badge-light ">Feb 17th, 2016</span></td>
                                        <td><a href="#">John Smith</a></td>
                                        <td class="text-center"><span class="text-muted">n/a</span></td>
                                        <td><span class="text-muted">PENDING</span></td>
                                        <td class="right"><a href="#" class="btn btn-sm btn-primary">Review</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-light ">Feb 17th, 2016</span></td>
                                        <td><a href="#">Andrew Brain</a>
                                        </td>
                                        <td class="text-center">512</td>
                                        <td class="text-muted">Feb 17th, 2016 by <a href="instructor-profile.php">Adrian D.</a></td>
                                        <td class="right"><a href="#" class="btn btn-sm btn-default">Results</a></td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge badge-light ">Feb 17th, 2016</span></td>
                                        <td><a href="#">Samantha Doe</a></td>
                                        <td class="text-center">123</td>
                                        <td class="text-muted">Feb 17th, 2016 by <a href="instructor-profile.php">Adrian D.</a></td>
                                        <td class="right"><a href="#" class="btn btn-sm btn-default">Results</a></td>
                                    </tr>
                                </tbody>
                            </table>
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
      'fixed': 'fixed-instructor-review-quiz.html',
      'default': 'instructor-review-quiz.html'
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


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/instructor-review-quiz.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:15:43 GMT -->
</html>