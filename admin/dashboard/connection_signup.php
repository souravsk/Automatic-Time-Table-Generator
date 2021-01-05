<?php

session_start();

$mysqli=new mysqli('localhost','root','','table') or die(mysqli_error($mysqli));

if(isset($_POST['submit']))
  {
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    
    $mysqli->query("INSERT INTO users (userID,username,email,pass,type) VALUES('NULL','$username','$email','$pass','$type')") or 
    die($mysqli->error);
     
    header('Location: ' . $_SERVER['HTTP_REFERER']);
  } 
?>