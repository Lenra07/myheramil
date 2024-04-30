
<?php

session_start();
date_default_timezone_set("Asia/Manila");

# Database Configuration
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'heramilhospital04232024myheramil';
$port = '80';

// $conn = mysqli_connect( $hostname, $username, $password, $database);

// if (!$conn) {
//   // die("Connection failed: ask me" . $conn->connect_error);
//   header("location: ../../Errors/500.php");
// }

  
# Global Variables
  $today = date("m/d/Y");
  $thisTime = date("h:i:s a");
  $moment = date("m/d/Y h:i:s a");
  $now = time();

require '../Common/head.html';
require '../Common/script.html';
?>
