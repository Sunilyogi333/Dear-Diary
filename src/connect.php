<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "dear_diary";

$conn = mysqli_connect($servername,$username,$password,$database_name);

if(!$conn){
    die("Connection Error" .mysqli_connect_error());
}
// else{
// echo "khatra";
// }
?>