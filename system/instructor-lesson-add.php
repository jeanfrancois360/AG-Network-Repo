<!DOCTYPE html>
<html lang="en" dir="ltr">


<!-- Mirrored from learnplus-bootstrap.frontendmatter.com/instructor-lesson-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Oct 2019 11:15:33 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Facilitator - Add lesson</title>

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
                                    <label for="title" class="col-md-3 col-form-label form-label">Course Overview</label>
                                    <div class="col-md-12">
                                    <textarea class="form-control" id="course_overview" name="course_overview" ></textarea>
                                    </div>
                                    </div>
                            </div>
                            <div class="card-footer">
                                <a class="btn card_black_btn" id="continue_btn" onclick="add_intro()"><i style="color:#009510;" class="fa fa-repeat mr-2"></i> Continue</a>
                            </div>
                        </div>
                         
                        <!--=====================INTRO SECTION====================-->
                        <div class="intro_section"></div>
                        <!--=====================INTRO SECTION END====================-->

                        <!--=====================LESSON SECTION====================-->
                        <div class="lesson_section"></div>
                        <!--=====================LESSON SECTION END====================-->
                        
                        <div style="display:none;" class="card">
                            <div class="card-header">
                                <h4 class="card-title">Files</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form id="my-awesome-dropzone" action="http://learnplus-bootstrap.frontendmatter.com/target" class="dropzone"></form>
                                    </div>
                                    <div class="col-md-6">
                                        <div data-toggle="tree">
                                            <ul style="display: none;">
                                                <li class="folder expanded">
                                                    lesson files
                                                    <ul>
                                                        <li>lesson-1-install.zip</li>
                                                        <li>lesson-1-steps.zip</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
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
    
    let i = 0;
    let ii = 0;
    let iii = 0;
    let iiii =0;
    window.onload = summer_note2();

    function add_intro() {
    i++;
    let init = i-i;
    let intro_content = '<div id="into_section_id_' + i + '" class="card animated fadeInDown">' +
        '<div class="card-header">' +
        '<h4 class="card-title">Course Introduction</h4>' +
        '</div>' +
        '<div class="card-body">' +
        '<form action="#">' +
        '<div class="form-group row">' +
        '<label class="col-md-3 col-form-label form-label">Upload Intro Video (option)</label>' +
        '<div class="col-md-9">' +
        '<div class="row">' +
        '<div class="col-md-7">' +
        '<div class="form-group">' +
        '<input type="text" id="intro_video_url"  class="form-control" placeholder="Enter a Youtube Video ID" onkeyup="peek_url()" />' +
        '<small class="form-text text-muted d-flex align-items-center">' +
        '<i class="material-icons font-size-16pt mr-1">ondemand_video</i>' +
        '<span class="icon-text">Paste Video</span>' +
        '</small>' +
        '</div>' +
        '</div>' +
        '<div class="col-md-7">' +
        '<div class="form-group">' +
        '<div style="display:none;" class="embed-responsive embed-responsive-16by9" id="video_div">' +
        '<iframe class="embed-responsive-item" id="intro_video_preview" src="https://www.youtube.com/embed/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '<div class="form-group row">' +
        '<label for="title" class="col-md-3 col-form-label form-label">Intro Content</label>' +
        '<div class="col-md-12">' +
        '<textarea class="form-control" id="lesson_content_'+ init +'" name="content_'+ init +'" ></textarea>' +
        '</div>' +
        '</div>' +
        '</form>' +
        '</div>' +
        '<div class="card-footer">' +
        '<a class="btn card_black_btn" id="add_lesson_btn_'+ init +'" onclick="add_lesson('+ i +')"><i style="color:#009510;" class="fa fa-plus mr-2"></i> Add Lesson</a>' +
        '</div>' +
        '</div>';
    $(".intro_section").html(intro_content);
    $("#continue_btn").removeAttr("onclick");
    summer_note(init);
} 


function add_lesson(id){
    ii++
    let init = ii-1;

    let lesson_content = '<div id="lesson_section_id_' + ii + '" class="card animated fadeInDown lesson_row_count">' +
        '<div class="card-header">' +
        '<h4 class="card-title">Lesson <span style="background: #737b81;padding: 3px 11px;border-radius: 100%;color: #ffffff;font-size: 15px;font-weight: 600;" class="counter">'+ lesson_row_count() +'</span></h4>' +
        '</div>' +
        '<div class="card-body">' +
        '<form action="#">' +
        '<input type="text" id="lesson_No_'+ lesson_row_count() +'" class="form-control" value="'+ lesson_row_count() +'" />' +
        '<div class="form-group row">' +
        '<label for="title" class="col-md-3 col-form-label form-label">Lesson Content</label>' +
        '<div class="col-md-12">' +
        '<textarea class="lesson_content" id="lesson_content_'+ ii +'" name="content_'+ ii +'"></textarea>' +
        '</div>' +
        '</div>' +
        '</form>' +
        '<div style="margin:30px auto 30px auto;" class="col-md-6">'+
        '<a class="btn add_quiz col-md-12 " id="set_quiz_'+ quiz_row_count(lesson_row_count()) +'" onclick="set_quiz('+ quiz_row_count(lesson_row_count()) +')">Set a quiz</a>'+
        '</div>'+
        '<div id="quiz_section" class="quiz_section_'+ lesson_row_count() +'">'+
        '</div>'+
        '</div>' +
        '<div class="card-footer">' +
        '<a class="btn card_black_btn" id="save_course_btn_'+ ii +'" onclick="save_course('+ ii +')"><i style="color:#009510;" class="fa fa-save mr-2"></i> Save</a>' +
        '<a class="btn card_black_btn mr-3" id="add_lesson_btn_'+ ii +'" onclick="add_lesson('+ ii +'); save_to_browser('+ ii +')"><i style="color:#009510;" class="fa fa-plus mr-2"></i> Add Lesson</a>' +
        '<a class="btn card_black_btn mr-3" id="remove_lesson_btn_'+ ii +'" onclick="remove_lesson('+ ii +', '+ init +')"><i style="color:#009510;" class="fa fa-times mr-2"></i> Remove Lesson</a>' +
        '</div>' +
        '</div>';
    $(".lesson_section").append(lesson_content);
    $("#add_lesson_btn_"+init).removeAttr("onclick");
    $("#remove_lesson_btn_"+init).removeAttr("onclick");
    $("#save_course_btn_"+init).css("display", "none");
    summer_note(ii);
    lesson_row_count();
  
}
function set_quiz(id){
        iiii++;
        let init = iiii - 1;
        let quiz_section =  '<div class="quiz_row_count_'+ lesson_row_count() +'">'+
                            '<div class="form-group row">'+
                            '<label for="title" class="col-md-3 col-form-label form-label">Question <span style="background: #737b81;padding: 2px 6px;border-radius: 100%;color: #ffffff;font-size: 13px;font-weight: 600;" class="counter">'+ quiz_row_count(lesson_row_count()) +'</span></label>'+
                            '<div class="col-md-6">'+
                            '<input type="text" id="Q_No_'+ quiz_row_count(lesson_row_count()) +'" class="form-control" value="'+ quiz_row_count(lesson_row_count()) +'" />' +
                            '<input type="text" class="form-control" id="course_desc" placeholder="Enter your question...">'+
                            '</div>'+
                            '</div>'+
                            '<div class="form-group row">'+
                            '<label for="title" class="col-md-3 col-form-label form-label">Correct Answer</label>'+
                            '<div class="col-md-6">'+
                            '<input type="text" class="form-control" id="correct_answer" placeholder="Enter the correct answer...">'+
                            '</div>'+
                            '</div>'+
                            '<div class="incorrect_answers_div" id="incorrect_answers_div_'+ quiz_row_count(lesson_row_count()) +'">' +
                            '<div class="input-group row">' +
                            '<label for="title" class="col-md-3 col-form-label form-label">Incorrect Answer</label>'+
                            '<input type="text" class="form-control col-md-5 ml-3" placeholder="Enter the incorrect answer..." aria-label="incorrect answer" aria-describedby="basic-addon2">'+
                            '<div class="input-group-append">'+
                            '<button class="btn btn-secondary quiz_add_btn ml-2" type="button" onclick="add_incorrect_answer('+ init +', '+ quiz_row_count(lesson_row_count()) +')"><i style="color:#fff;" class="fa fa-plus"></i>'+ quiz_row_count(lesson_row_count()) +'</button>'+
                            '</div>'+
                            '</div>'+
                            '</div>'+
                            '<div class="row">'+
                            '<div style="margin:30px auto 30px auto;" class="col-md-6">'+
                            '<a class="btn add_quiz col-md-12" id="continue_btn" onclick="set_quiz('+ iiii +')">Add a question</a>'+
                            '</div>'+
                            '</div>'+
                            '</div>';
        $(".quiz_section_"+(lesson_row_count() - 1)).append(quiz_section);
        $("#set_quiz").css("display","none");
        quiz_row_count(lesson_row_count());
                     
    }
function remove_lesson(id, init){
    console.log("current id = "+id);
    console.log("previous id = "+init);
    $("#lesson_section_id_"+id).remove();
    $("#add_lesson_btn_"+init).attr('onclick','add_lesson('+ init +')');
    $("#save_course_btn_"+init).css("display", "block");
    $("#remove_lesson_btn_"+init).attr('onclick','remove_lesson('+ init +')');
   
}
let lessons_array = []; 
let textarea_content = "";
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

function remove_incorrect_answer(id){
        $("#sub_incorrect_answer_"+id).remove();
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
    function summer_note(id) {
        $('#lesson_content_'+id).summernote();
    }
    function summer_note2(){
        $("#course_overview").summernote();
    }
    
    function lesson_row_count(){
        let count = $(".lesson_section .lesson_row_count").length;
        return count+1;
    }
    function quiz_row_count(id){
        let count = $("#quiz_section"+" "+".quiz_row_count_"+id).length;
        return count+1;
    }

    function add_incorrect_answer(id, div_id){
        iii++;
        let content = '<div id="sub_incorrect_answer_'+ iii +'" class="input-group row mt-3">'+
                      '<label for="title" class="col-md-3 col-form-label form-label">Incorrect Answer</label>'+
                      '<input type="text" class="form-control col-md-5 ml-3" placeholder="Enter the incorrect answer..." aria-label="incorrect answer" aria-describedby="basic-addon2">'+
                      '<div class="input-group-append">'+
                      '<button class="btn btn-secondary quiz_remove_btn ml-2" type="button" id="remove_incorrect_answer_'+ (quiz_row_count(lesson_row_count()) - 1) +'_'+ iii +'" onclick="remove_incorrect_answer('+ iii +', '+ (quiz_row_count(lesson_row_count()) - 1) +')"><i style="color:#fff;" class="fa fa-times"></i>'+ (quiz_row_count(lesson_row_count()) -1)+'</button>'+
                      '<button class="btn btn-secondary quiz_add_btn ml-2" type="button" id="add_incorrect_answer_'+ (quiz_row_count(lesson_row_count()) - 1) +'_'+ iii +'" onclick="add_incorrect_answer('+ iii +', '+ (quiz_row_count(lesson_row_count()) - 1) +')"><i style="color:#fff;" class="fa fa-plus"></i>'+ (quiz_row_count(lesson_row_count()) - 1) +'</button>'+
                      '</div>'+
                      '</div>';
        $("#incorrect_answers_div_"+div_id).append(content);

    }


</script>
</body>
</html>
