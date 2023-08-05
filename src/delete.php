<?php 
if(isset($_GET['id'])){
    $etitle=$_GET['etitle'];
    $sql=" SELECT * FROM Entries WHERE etitle='$etitle'
    ";
    $eresult =mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($eresult);
    $id = $row['id'];
  } 
  ?>