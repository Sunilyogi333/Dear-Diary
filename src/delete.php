<?php 
include 'connect.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql=" DELETE FROM Entries WHERE id='$id'
    ";
    $dresult =mysqli_query($conn, $sql);
    header('location:entries.php');
  } 
  ?>