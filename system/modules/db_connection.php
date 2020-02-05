<?php

// Connecting to the Database!
$server = "localhost";
$userName = "root";
$userPwd = "User@123!";
$dbName = "AG-network-learning-platform-db";

$dbConn = new mysqli($server, $userName, $userPwd, $dbName);
if($dbConn->connect_error){
    die("Connect failed: ".$dbConn->connect_error);
}
// Connecting to the Database! --END
?>