<?php
// Create connection
$conn = mysqli_connect('localhost', 'root', 'admin');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$db_selected=mysqli_select_db($conn,'Test');
   if(!$db_selected){
       die('Base inaccessible: '.mysqli_error());
   }
 ?>
