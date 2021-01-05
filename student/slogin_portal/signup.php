<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" type="image/png" href="./images/icon.png">
  <title>User Signup</title>
      <link rel="stylesheet" href="css/style.css"> 
      <link rel="stylesheet" href="css/style2.css">
      <style type="text/css">
        .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                padding: 12px 16px;
                z-index: 1;
}
      </style>
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
      <select name="branch">
          <option value="">BRANCH</option>
          <option value="CHEMICAL ENGINEERING">CHEMICAL ENGINEERING</option>
          <option value="CIVIL ENGINEERING">CIVIL ENGINEERING</option>
          <option value="COMPUTER SCIENCE & ENGINEERING">COMPUTER SCIENCE & ENGINEERING</option>
          <option value="ELECTRICAL & ELECTRONICS ENGINEERING">ELECTRICAL & ELECTRONICS ENGINEERING</option>
          <option value="ELECTRONICS & COMMUNICATION ENGINEERING">ELECTRONICS & COMMUNICATION ENGINEERING</option>
          <option value="MECHANICAL ENGINEERING">MECHANICAL ENGINEERING</option>
          <option value="METALLURGICAL & MATERIALS ENGINEERING">METALLURGICAL & MATERIALS ENGINEERING</option>
          <option value="MINING ENGINEERING">MINING ENGINEERING</option>

      </select>
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
