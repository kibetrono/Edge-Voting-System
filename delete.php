<?php
// check if button has been clicked
if(isset($_GET["v"])){
$user_id=$_GET["v"]; 

// connect db
require_once "connect.php";
$sqldelete="DELETE FROM `voters` WHERE id='$user_id'";
$query=mysqli_query($conn,$sqldelete);
if($query){


    header('location:voters.php');
}else{
    echo 'Failed to delete';
}
}