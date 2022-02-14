
<?php 
    if(isset($_POST['submit']))

    {    
        
    $name = $_POST['firstname'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];  

    require_once 'connect.php';

    $sql ="INSERT INTO me (firstname,email,password) VALUES('$name', '$email' , '$pwd')";


    $query=mysqli_query($conn,$sql);

	if($query){

header('Location: login.php'); 

} 

}
?>

