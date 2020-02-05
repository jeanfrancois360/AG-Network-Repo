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
if($request_id == "load_user_info"){
    $user_id = $_POST['user_id'];
    $user_role = $_POST['user_role'];
    $response = array();
    $response_list = array();
    if($user_role == "facilitator"){
        $stmt = $dbConn->prepare("SELECT * FROM facilitators WHERE id =?");
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $response['user_id'] = $row['id'];
                $response['names'] = $row['names'];
                $response['role'] = $row['role'];
                $response['email'] = $row['email'];
                $response['phone'] = $row['phone'];
                $response['address'] = $row['address'];
                $response['gender'] = $row['gender'];
                $response['dob'] = $row['dob'];
                $response['education'] = $row['education'];
                $response['resume'] = $row['resume'];
                $response['course'] = $row['course'];
                $response['nationality'] = $row['nationality'];
                $response['essay'] = $row['essay'];
                $response['payment_method'] = $row['payment_method'];
                $response['status'] = $row['status'];
                array_push($response_list, $response);
            }
            echo json_encode($response_list);
        }

    }
    if($user_role == "student"){
        $stmt = $dbConn->prepare("SELECT * FROM students WHERE id =?");
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $response['user_id'] = $row['id'];
                $response['names'] = $row['names'];
                $response['role'] = $row['role'];
                $response['email'] = $row['email'];
                $response['phone'] = $row['phone'];
                $response['address'] = $row['address'];
                $response['gender'] = $row['gender'];
                $response['dob'] = $row['dob'];
                $response['education'] = $row['education'];
                $response['reason'] = $row['reason'];
                $response['status'] = $row['status'];
                array_push($response_list, $response);
            }
            echo json_encode($response_list);
        }

    }
    if($user_role == "admin"){
        $stmt = $dbConn->prepare("SELECT * FROM staffs WHERE id =?");
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $response['user_id'] = $row['id'];
                $response['names'] = $row['names'];
                $response['role'] = $row['role'];
                $response['email'] = $row['email'];
                $response['phone'] = $row['phone'];
                $response['address'] = $row['address'];
                $response['gender'] = $row['gender'];
                $response['dob'] = $row['dob'];
                $response['position'] = $row['position'];
                $response['status'] = $row['status'];
                array_push($response_list, $response);
            }
            echo json_encode($response_list);
        }

    }
   
}