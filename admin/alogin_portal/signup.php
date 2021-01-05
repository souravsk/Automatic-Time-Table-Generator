<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" type="image/png" href="./images/icon.png">
  <title>User Signup</title>
      <link rel="stylesheet" href="css/style.css"> 
      <link rel="stylesheet" href="css/style2.css">
</head>

<body>

  <?php require_once 'connection_signup.php'; ?>
  <?php
    if(isset($_SESSION['message'])): ?>
           <div class="<?=$_SESSION['msg_type']?>">
             <i class="<?=$_SESSION['icon']?>"></i>
                  
          <?php
              echo $_SESSION['message'];
              unset($_SESSION['message']);
           ?>
            </div>
       <?php endif ?>  

  <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign Up </h2>

    <!-- Login Form -->
    <form action="connection_signup.php" method="POST">
      
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="Username">
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email">
      <input type="password" id="password" class="fadeIn third" name="pass" placeholder="Password">
      <input type="password" id="password" class="fadeIn third" name="cpass" placeholder="Confirm Password">
      <input type="submit" class="fadeIn fourth" value="Sign Up" name="submit">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="index.php">Already Member? </a>
    </div>

  </div>
</div>
  
  

</body>

</html>
