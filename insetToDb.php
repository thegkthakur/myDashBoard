<?php
include 'db_connection.php';
$userName = $_POST['uname'];
$password = $_POST['pwd'];
$emailAddress =$_POST['email'];
$query = "INSERT INTO `loginTable` VALUES ('','$userName','$emailAddress','$password')";
$resource = $conn->query($query) 
        or die (mysql_error());
?>
