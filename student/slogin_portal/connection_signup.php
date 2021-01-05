<?php

session_start();

$mysqli=new mysqli('localhost','root','','table') or die(mysqli_error($mysqli));

if(isset($_POST['submit']))
  {
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $branch =$_POST['branch'];

    
    $mysqli->query("INSERT INTO users (userID,username,email,pass,type,branch) VALUES('NULL','$username','$email','$pass','s','$branch')") or 
    die($mysqli->error);
    
    if(!$mysqli)
    {
 
  	   $_SESSION['msg_type']="isa_error";
  	   $_SESSION['icon']="fa fa-times-circle";
  	   $_SESSION['message']="Registration failed ! Contact Admin";
 
    }

    $_SESSION['message']="Registration Successful !  click on 'Already Member ?' to login";
    $_SESSION['msg_type']="isa_success";
    $_SESSION['icon']="fa fa-check";

    header("location: signup.php");
  } 
?>