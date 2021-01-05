<?php
   include("config.php");
   session_start();
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" type="image/png" href="./images/icon.png">
  <title>User Login</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style2.css">
</head>

<body>
<?php 
  if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['pass']); 
      
      $sql = "SELECT userID FROM users WHERE username = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1)
        {
        // session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: ../dashboard/index.php");
        }
      else {
             $_SESSION['msg']="Invalid Username or Password !"; ?> 
             <div class="<?=$_SESSION['isa_error']?>">
             <i class="<?=$_SESSION['fa fa-times-circle']?>"></i>
                  
          <?php
              echo $_SESSION['msg'];
              unset($_SESSION['msg']);
           ?>
            </div>
            <?php
            }
   }
?>	

  <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign In </h2>
    <a href="signup.php"><h2 class="underlineHover inactive">Sign Up </h2></a>

    <!-- Icon -->
    <div class="fadeIn first">
      
    </div>

    <!-- Login Form -->
    <form action="" method="POST">
      <input type="text" class="fadeIn second" name="username" placeholder="Username" id="username">
      <input type="password" class="fadeIn third" name="pass" placeholder="Password" id="password">
      <input type="submit" class="fadeIn fourth" value="Login" id="submit">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="forgot.html">Forgot Password?</a>
    </div>

  </div>
</div>

</body>

</html>
