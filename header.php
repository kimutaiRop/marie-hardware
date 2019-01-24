<?php
    // make table called users with fields idusers, username, first_name, last_name.
   include("header.php");
   $error = "";
   if($_SERVER["REQUEST_METHOD"] == "POST") {

      //get username and password sent from form 
      
      $first_name = mysqli_real_escape_string($db,$_POST['first_name']);
      $last_name = mysqli_real_escape_string($db,$_POST['last_name']);
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword_1 = mysqli_real_escape_string($db,$_POST['password1']); 
      $mypassword_2= mysqli_real_escape_string($db,$_POST['password2']);
      if($mypassword_1 == $mypassword_1){
        $mypassword = $mypassword_1;
         $sql = "INSERT INTO `users` (`username`, `password`, `first_name`, `last_name`) VALUES ('$myusername', '$mypassword', '$first_name', '$last_name')";
         mysqli_query($db,$sql);
         header("location: index.php");
      }
   }
?>