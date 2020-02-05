<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/instructor-account-edit.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:15:01 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>View Facilitator</title>

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
    <link type="text/css" href="assets/css/data-tables.css" rel="stylesheet">
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
                            <li class="breadcrumb-item active">Edit Account</li>
                        </ol>
                        <h1 class="h2">View Facilitators</h1>

                        <div class="card">
                        <div style="padding-top:60px; padding-bottom:60px;" class="container">
                          <table id="table" class="">
                         <!--Table head-->
                            <thead>
                            <tr>
                                <th>No</th>
                                <th class="th-sm">Names</th>
                                <th class="th-sm">Email</th>
                                <th class="th-sm">Phone Number</th>
                                <th class="th-sm">Address</th>
                                <th class="th-sm">Gender</th>
                                <th class="th-sm">Education</th>
                                <th class="th-sm">Course</th>
                                <th class="th-sm">Payment Method</th>
                                <th class="th-sm">Approval</th>
                                <th class="th-sm">Action</th>
                            </tr>
                            </thead>
                            <!--Table head-->

                            <!--Table body-->
                            <tbody>
                             <?php
                             $count = 0;
                             $stmt = $dbConn->prepare("SELECT * FROM facilitators");
                             $stmt->execute();
                             $result = $stmt->get_result();
                             if($result->num_rows > 0):
                             while($row = $result->fetch_assoc()): $count++;?>
                             <tr>
                                <th scope="row"><?php echo $count;?></th>
                                <td><?php echo $row['names'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['phone'];?></td>
                                <td><?php echo $row['address'];?></td>
                                <td><?php echo $row['gender'];?></td>
                                <td><?php echo $row['education'];?></td>
                                <td><?php echo $row['course'];?></td>
                                <td><?php echo $row['payment_method'];?></td>
                                <?php if($row['approved'] != "Yes"):?>
                                <td class="text-warning">Pending</td>
                                <?php else:?>
                                <td class="text-Success">Approved</td>  
                                <?php endif?>
                                <td class="text-Success"><a class="btn btn-success btn-sm" href="view-facilitator.php?id=<?php echo $row['id'];?>">Approve</a></td> 
                             </tr>
                             <?php endwhile ?> 
                             <?php endif ?>   

                            </tbody>
                            <!--Table body-->
                          </table>
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
      'fixed': 'fixed-instructor-account-edit.html',
      'default': 'instructor-account-edit.html'
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
    <script src="assets/js/data-tables.js"></script>

    <!-- Highlight.js -->
    <script src="assets/js/hljs.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="assets/js/app-settings.js"></script>

    <script>
    $(document).ready( function () {
    $('#table').DataTable();
     } );
    </script>








</body>


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/instructor-account-edit.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:15:03 GMT -->
</html>