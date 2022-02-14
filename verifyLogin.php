<?php
   include("connect.php");
   session_start();
   
   if(isset($_POST['login'])){
      
      $myemail = $_POST['email'];
      $mypassword = $_POST['password'];
      
      $sql = "SELECT * FROM me WHERE email = '$myemail' and  password = '$mypassword'";
      
      
      $query = mysqli_query($conn,$sql);      
      
		
      if(mysqli_num_rows($query) == 1) {       
         
         header("Location: add_voter.php");
      }else {

         header("Location: login.php");
      }
   }
?>