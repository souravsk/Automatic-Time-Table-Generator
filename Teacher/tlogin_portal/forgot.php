<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" type="image/png" href="./images/icon.png">
  <title>Forgot Password</title>
      <link rel="stylesheet" href="css/style.css"> 
</head>

<body>
  <?php require_once 'process.php';
  
 ?>

  <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active" style="color: dimgrey"> Forgot Password </h2>

    <!-- Login Form -->
    <form>
      
      <input type="text" id="login" class="fadeIn second" name="login" placeholder="Email">
      <input type="submit" class="fadeIn fourth" value="Send">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="index.html">Back to Login</a>
    </div>

  </div>
</div>
  
  

</body>

</html>
