<?php
if(isset($_POST['updatebtn'])){
    $new_name=$_POST['new_name'];
    $new_county=$_POST['new_county'];
    $new_phone=$_POST['new_phone'];
    $new_id=$_POST['new_id'];
 require_once "connect.php";
$sql="UPDATE `voters` SET `name`='$new_name',`county`='$new_county',`phone`='$new_phone' WHERE id='$new_id'";
$query=mysqli_query($conn,$sql);
if($query){

header("location:voters.php");

}else{
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
}

}else{
    echo "Not set";
}
?>