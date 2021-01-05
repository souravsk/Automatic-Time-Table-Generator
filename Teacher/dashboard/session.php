<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   
   $ses_sql = mysqli_query($db,"select username from users where username = '$user_check' ");
   $ses_sqli = mysqli_query($db,"select type from users where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   $row1 = mysqli_fetch_array($ses_sqli,MYSQLI_ASSOC);

   
   $login_session = $row['username'];
   $login_type = $row1['type'];
  
   
   if(!isset($_SESSION['login_user']))
     {
      header("location:../login_portal/index.php");
      die();
     }

     if(isset($_GET['delete']))
       {
          $id=$_GET['delete'];
          $mysqli = new Mysqli("localhost","root","","table");
          $mysqli->query("DELETE FROM users WHERE userID=$id") or die($mysqli->error());
          header('Location: ' . $_SERVER['HTTP_REFERER']);
       }

        if(isset($_GET['cdelete']))
       {
          $id=$_GET['cdelete'];
          $mysqli = new Mysqli("localhost","root","","table");
          $mysqli->query("DELETE FROM courses WHERE id=$id") or die($mysqli->error());
          header('Location: ' . $_SERVER['HTTP_REFERER']);
       }

       if(isset($_GET['sdelete']))
       {
          $id=$_GET['sdelete'];
          $mysqli = new Mysqli("localhost","root","","bca");
          $mysqli->query("DELETE FROM bca1 WHERE sub_no=$id") or die($mysqli->error());
          header('Location: ' . $_SERVER['HTTP_REFERER']);
       }

       if(isset($_POST['addc']))
         {
            $coursename = $_POST['course'];
            $mysqli = new Mysqli("localhost","root","","table");
            $mysqli->query("INSERT INTO courses (id,name) VALUES('NULL','$coursename')") or 
            die($mysqli->error);
             
            header('Location: ' . $_SERVER['HTTP_REFERER']);
         }
         if(isset($_POST['adds']))
         {
            $subjects = $_POST['subjects'];
            $mysqli = new Mysqli("localhost","root","","bca");
            $mysqli->query("INSERT INTO bca1 (sub_no,sub_name) VALUES('NULL','$subjects')") or 
            die($mysqli->error);
             
            header('Location: ' . $_SERVER['HTTP_REFERER']);
         } 
         

     if(isset($_GET['edit']))
       {
        $id=$_GET['edit'];
        $mysqli = new Mysqli("localhost","root","","table");
        $update=true;
        $result= array( );
        $result=$mysqli->query("SELECT * FROM users WHERE userID=$id")or die($mysqli->error());
        if ($result)
        {
          $row=$result->fetch_array();
          $username=$row['username'];
          $email=$row['email'];
          $pass=$row['pass'];
          $cpass=$row['cpass'];
        }
         header('Location: ' . $_SERVER['HTTP_REFERER']);
      } 

?>