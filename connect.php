<?php
$servername="localhost";
$username="kibet";
$password="Kibetrono1996@";
$db="edge_voting";

$conn=mysqli_connect($servername,$username,$password,$db);
if(!isset($conn)){
   die("DB connection failed");
}
?>