<?php
include 'connect.php';
include 'read.php';
$users_id =$_SESSION['id'];
session_start();
$uemail= $_SESSION['useremail'];
$sql = " SELECT * FROM Entries WHERE users_id='$users_id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
