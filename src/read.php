<?php
include 'connect.php';
session_start();
$uemail= $_SESSION['useremail'];
$sql = " SELECT * FROM users WHERE uemail='$uemail'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


// Define a string with the full name
$name=$row['uname'];
// Split the full name into first and last name parts
$nparts=explode(" ",$name);

// Assign the first name
$fname=$nparts[0];

// Assign the last name
// $lname=$nparts[1];

$_SESSION['uname'] = $fname;
$_SESSION['id'] = $row['id'];
?>