<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- AG-Network Learning Platform-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Facilitator - Add course</title>

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
    <link type="text/css" href="assets/css/animate.css" rel="stylesheet">
    <link type="text/css" href="assets/css/app.rtl.css" rel="stylesheet">


    <!-- Vendor Dropzone CSS -->
    <link rel="stylesheet" href="assets/vendor/dropzone.min.css">
    <link rel="stylesheet" href="assets/css/dropzone.css">
    <link rel="stylesheet" href="assets/css/dropzone.rtl.css">

    <!-- Vendor FancyTree CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/fontawesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/fancytree.css">
    <link rel="stylesheet" href="assets/css/fancytree.rtl.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.css" rel="stylesheet">
    


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
                            <li class="breadcrumb-item active">Create Course</li>
                        </ol>
                        <h1 class="h2">Create Course</h1>
                        
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Course Setup</h4>
                            </div>
                            <div class="card-body">
                                <form action="#">
                                    <div class="form-group row">
                                        <label for="avatar" class="col-sm-3 col-form-label form-label">Cover Image</label>
                                        <div class="col-sm-9">
                                            <div class="media align-items-center">
                                                <div class="media-left">
                                                    <img src="assets/images/lesson4.png" alt="Cover Image" width="100" id="cover_img_preview" class="rounded">
                                                </div>
                                                <div class="media-body">
                                                    <div class="custom-file" style="width: auto;">
                                                        <input type="file" id="cover_img" onchange="readURL(this);" class="custom-file-input">
                                                        <label for="cover_image" class="custom-file-label">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="title" class="col-md-3 col-form-label form-label">Course Title</label>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" id="course_title" placeholder="Enter your course title...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="title" class="col-md-3 col-form-label form-label">Course Description</label>
                                        <div class="col-md-6">
                                        <input type="text" class="form-control" id="course_desc" placeholder="Enter your course description...">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label class="col-md-3 col-form-label form-label">Upload Intro Video (optional)</label>
                                    <div class="col-md-9">
                                    <div class="row">
                                    <div class="col-md-7">
                                    <div class="form-group">
                                    <input type="text" id="intro_video_url"  class="form-control" placeholder="Enter a Youtube Video ID" onkeyup="peek_url()" />
                                    <small class="form-text text-muted d-flex align-items-center">
                                    <i class="material-icons font-size-16pt mr-1">ondemand_video</i>
                                    <span class="icon-text">Paste Video</span>
                                    </small>
                                    </div>
                                    </div>
                                    <div class="col-md-7">
                                    <div class="form-group">
                                    <div style="display:none;" class="embed-responsive embed-responsive-16by9" id="video_div">' +
                                    <iframe class="embed-responsive-item" id="intro_video_preview" src="https://www.youtube.com/embed/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="title" class="col-md-3 col-form-label form-label">Course Overview</label>
                                    <div class="col-md-12">
                                    <textarea class="form-control" id="course_overview" name="course_overview" ></textarea>
                                    </div>
                                    </div>
                                    
                                </div>
                            <div class="card-footer">
                                <a class="btn card_black_btn" id="continue_btn" onclick="add_intro()">Save & Continue <i style="color:#009510;" class="fa fa-forward ml-2"></i></a>
                            </div>
                        </div>
                    
                        </form>
                    </div>

                </div>


         <!--==============INCLUDE THE MENU===========-->
         <?php include "includes/facilitator/menu.php"; ?>
         <!--==============%%%INCLUDE THE MENU%%%===========-->

            </div>

            <!-- App Settings FAB -->
            <div id="app-settings">
                <app-settings layout-active="default" :layout-location="{
      'fixed': 'fixed-instructor-lesson-add.html',
      'default': 'instructor-lesson-add.html'
    }" sidebar-variant="bg-transparent border-0"></app-settings>
            </div>

        </div>
    </div>



    <!-- jQuery -->
    <!-- <script src="assets/vendor/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

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






    <!-- Required by Calendar (fullcalendar) -->
    <script src="assets/vendor/dropzone.min.js"></script>

    <!-- TREE JS -->
    <script src="https://cdn.jsdelivr.net/jquery.ui/1.11.4/jquery-ui.min.js"></script>
    <script src="assets/vendor/jquery.fancytree-all.min.js"></script>

    <!-- Init -->
    <script src="assets/js/fancytree.js"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.15/dist/summernote.min.js"></script>
    
  <script>
    window.onload = summer_note();
    function save_to_browser(id){
    textarea_content = $("#lesson_content_"+id).val();
    lessons_array.push(textarea_content);
    localStorage.setItem('lessons_array', JSON.stringify(lessons_array));
    const retrieved_lessons_content = JSON.parse(localStorage.getItem('lessons_array'));
    }

    function save_course(id){
        textarea_content = $("#lesson_content_"+id).val();
        let in_storage = JSON.parse(localStorage.getItem('lessons_array'));
        in_storage.push(textarea_content);
        localStorage.setItem('lessons_array', JSON.stringify(in_storage));
        let all_lessons = JSON.parse(localStorage.getItem('lessons_array'));
        let cover_img = $("#cover_img").val();
        let course_title = $("#course_title").val();
        let course_desc = $("#course_desc").val();
        let intro_video_url = $("#intro_video_url").val();
        let intro_text = $("#lesson_content_0").val();
        console.log(cover_img, course_title, course_desc, intro_video_url, intro_text, all_lessons);
    }


        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                $("#cover_img_preview").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        function peek_url(){
        let intro_video_id = $("#intro_video_url").val();
        $("#intro_video_preview").remove();
        $("#video_div").append('<iframe class="embed-responsive-item" id="intro_video_preview" src="https://www.youtube.com/embed/'+ intro_video_id +'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
        $("#video_div").css("display", "block");
        }
    
        function summer_note(){
            $("#course_overview").summernote();
        }
    
</script>
</body>
</html>