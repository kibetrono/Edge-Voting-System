<?php
if(isset($_POST['vote'])){
    $name=$_POST['name'];
    $id_number=$_POST['id_number'];
    $county=$_POST['county'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
 require_once "connect.php";

$sql="INSERT INTO voters (id,name, id_number, county, gender, phone) VALUES (null,'$name','$id_number','$county','$gender','$phone')";
$query=mysqli_query($conn,$sql);
if($query){
    echo "Successfully inserted data"; 
}else{
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
}

}else{
    echo "Not set";
}
?>