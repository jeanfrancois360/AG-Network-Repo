<?php
// Displaying errors
error_reporting(E_ALL);
ini_set('display_errors', 'On');
// Displaying errors END

//Starting the session
session_start();
//Starting the session END

// Db connection
include "db_connection.php";
// Db connection END

$request_id = $_REQUEST['request_id'];

if($request_id == "register_me"){
 $names = $_POST['names'];
 $email = $_POST['email'];
 $dob = $_POST['dob'];
 $address = $_POST['address'];
 $phone = $_POST['phone'];
 $gender = $_POST['gender'];
 $education = $_POST['education'];
 $reason = $_POST['reason'];
 $payment_method = $_POST['payment_method'];
 $nationality = $_POST['nationality'];
 $course_name = $_POST['course_name'];
 $resume = $_POST['resume'];
 $essay = $_POST['essay'];
 $password = $_POST['password'];
 $confirm_password = $_POST['confirm_password'];
 $user_type = $_POST['user_type'];
 $status = "Active";
 $approved = "No";
 $deleted = "No";
 
 if($user_type == "facilitator")
 {
   // Checking if the registering account already exits
   $stmt = $dbConn->prepare("SELECT email FROM facilitators WHERE email =? ");
   $stmt->bind_param("s", $email);
   $stmt->execute();
   $stmt->store_result();
   if($stmt->num_rows > 0)
   {
     echo "account exists";
     return;
   }
   else
   {
     // Inserting the new user
     // Encrypting the password
     $password = password_hash($password, PASSWORD_DEFAULT);
     $stmt = $dbConn->prepare("INSERT INTO facilitators (role, names, email, phone, address, gender, dob, password, education, resume, course, nationality, essay, payment_method, status, approved, deleted) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ");
     $stmt->bind_param("sssssssssssssssss", $user_type, $names, $email, $phone, $address, $gender, $dob, $password, $education, $resume, $course_name, $nationality, $essay, $payment_method, $status, $approved, $deleted);
     if($stmt->execute())
     {
       echo "success";
       return;
     }
     else{
       echo "not registered";
       return;
     }

  }

 }
 if($user_type == "student"){
   // Checking if the registering account already exits
   $stmt = $dbConn->prepare("SELECT email FROM students WHERE email =? ");
   $stmt->bind_param("s", $email);
   $stmt->execute();
   $stmt->store_result();
   if($stmt->num_rows > 0)
   { 
     echo "account exists";
     return;
   }
   else
   {
     // Inserting the new user
     // Encrypting the password
     $password = password_hash($password, PASSWORD_DEFAULT);
     $stmt = $dbConn->prepare("INSERT INTO students (role, names, email, phone, address, gender, dob, password, education, reason, status, deleted) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ");
     $stmt->bind_param("ssssssssssss", $user_type, $names, $email, $phone, $address, $gender, $dob, $password, $education, $reason, $status, $deleted);
     if($stmt->execute())
     {
       echo "success";
       return;
     }
     else{
       echo "not registered";
       return;
     }

  }
 }

}

//====================================================LOGIN SCRIPTS===================================================//
if($request_id == "login")
{
  $email = $_POST['email'];
  $password = $_POST['password'];
  $user_type = $_POST['user_type'];

  if($user_type == "facilitator")
  {
    // Checking if the user exist in the system
    $stmt = $dbConn->prepare("SELECT * FROM facilitators WHERE email =?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0)
    {
      while($row = $result->fetch_assoc())
      {
        if($row['approved'] != "No" && $row['deleted'] != "Yes"){
        if(password_verify($password, $row['password']))
        {
          $_SESSION['userId'] = $row['id']; 
          $_SESSION['userName'] = $row['names'];
          $_SESSION['userRole'] = $row['role'];
          echo "facilitator_success";
          return;
        }
        else
        {
          echo "wrong inputs";
          return;
        }
      }
      else{
        echo "facilitator_failure";
        return;
      }
      }
    }
    else{
          echo "wrong inputs";
          return;
        }
   
  }

  if($user_type == "student")
  {
    // Checking if the user exist in the system
    $stmt = $dbConn->prepare("SELECT * FROM students WHERE email =?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0)
    {
      while($row = $result->fetch_assoc())
      {
        if(password_verify($password, $row['password']))
        {
          $_SESSION['userId'] = $row['id']; 
          $_SESSION['userName'] = $row['names'];
          $_SESSION['userRole'] = $row['role'];
          echo "student_success";
          return;
        }
        else
        {
          echo "wrong inputs";
          return;
        }
      }
    }
    else
        {
          echo "wrong inputs";
          return;
        }
   
  }

  if($user_type == "admin")
  {
    // Checking if the user exist in the system
    $stmt = $dbConn->prepare("SELECT * FROM staffs WHERE email =?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0)
    {
      while($row = $result->fetch_assoc())
      {
        if(password_verify($password, $row['password']))
        {
          $_SESSION['userId'] = $row['id']; 
          $_SESSION['userName'] = $row['names'];
          $_SESSION['userRole'] = $row['role'];
          echo "admin_success";
          return;
        }
        else
        {
          echo "wrong inputs";
          return;
        }
      }
    }
    else
        {
          echo "wrong inputs";
          return;
        }
   
  }
  
}
//============================================LOGIN SCRIPTS END============================================//

//==========================================UPDATE USER INFO SCRIPTS==============================================//
if($request_id == "update_user_info"){
  $user_id = $_POST['user_id'];
  $user_role = $_POST['user_role'];
  if($user_role == "facilitator"){
    $names = $_POST['names'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $course = $_POST['course'];
    $payment_method = $_POST['payment_method'];

    $stmt = $dbConn->prepare("UPDATE facilitators SET names =?, email=?, phone=?, address=?, course=?, payment_method=? WHERE id =?");
    $stmt->bind_param("ssssssi", $names, $email, $phone, $address, $course, $payment_method, $user_id);
    $stmt->execute();
    if($stmt->affected_rows > 0){
      echo "updated successfully";
    }
    else{
      echo "no updates made";
    }
  }
  elseif($user_role == "student"){
    $names = $_POST['names'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $reason = $_POST['reason'];

    $stmt = $dbConn->prepare("UPDATE students SET names =?, email=?, phone=?, address=?, reason=? WHERE id =?");
    $stmt->bind_param("sssssi", $names, $email, $phone, $address, $reason, $user_id);
    $stmt->execute();
    if($stmt->affected_rows > 0){
      echo "updated successfully";
    }
    else{
      echo "no updates made";
    }
  }
  elseif($user_role == "admin"){
    $names = $_POST['names'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $course = $_POST['course'];

    $stmt = $dbConn->prepare("UPDATE ");
  }
  else{
    echo "No user role specified";
  }
}
//==========================================UPDATE USER INFO SCRIPTS END==============================================//

//==========================================UPDATE USER PASSWORD SCRIPTS==============================================//
if($request_id == "update_user_pwd"){
   $user_id = $_POST['user_id'];
   $user_role = $_POST['user_role'];

   if($user_role == "facilitator"){
    $current_pwd = $_POST['current_pwd'];
    $new_pwd = $_POST['new_pwd'];
    $stmt = $dbConn->prepare("SELECT password FROM facilitators WHERE id =?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        if(password_verify($current_pwd, $row['password'])){
           //encrypting the new password
           $new_pwd = password_hash($new_pwd, PASSWORD_DEFAULT);
           //updating the password
           $stmt = $dbConn->prepare("UPDATE facilitators SET password =? WHERE id =?");
           $stmt->bind_param("si", $new_pwd, $user_id);
           $stmt->execute();
           if($stmt->affected_rows > 0){
             echo "updated successfully";
           }
        }
        else{
          echo "incorrect password";
        }
      }
      
    }
    else{
      echo "no updates made";
    }
  } 
  elseif($user_role == "student"){
    $current_pwd = $_POST['current_pwd'];
    $new_pwd = $_POST['new_pwd'];
    $stmt = $dbConn->prepare("SELECT password FROM students WHERE id =?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0){
      while($row = $result->fetch_assoc()){
        if(password_verify($current_pwd, $row['password'])){
           //encrypting the new password
           $new_pwd = password_hash($new_pwd, PASSWORD_DEFAULT);
           //updating the password
           $stmt = $dbConn->prepare("UPDATE students SET password =? WHERE id =?");
           $stmt->bind_param("si", $new_pwd, $user_id);
           $stmt->execute();
           if($stmt->affected_rows > 0){
             echo "updated successfully";
           }
        }
        else{
          echo "incorrect password";
        }
      }
      
    }
    else{
      echo "no updates made";
    }
  }
  elseif($user_role == "admin"){
    $names = $_POST['names'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $course = $_POST['course'];

    $stmt = $dbConn->prepare("UPDATE ");
  }
  else{
    echo "No user role specified";
  }

}
//==========================================UPDATE USER PASSWORD SCRIPTS END==============================================//

?>