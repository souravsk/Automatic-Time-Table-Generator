<?php ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
#img1
{
	margin-left: 260px;
}
#img2
{
	margin-right: 180px;
	margin-left: 180px;
}
#button1
{
	margin-left: 325px;
	font-size: 20px;
}
#button2
{
	margin-left: 315px;
	font-size: 20px;
}
#button3
{
	margin-left: 305px;
	font-size: 20px;
}
</style>
<body>
<br><br><br><br>
<img id="img1" src="pic/man.png" alt="Avatar" style="width:220px">
<img id="img2" src="pic/man 1.png" alt="Avatar" style="width:220px">
<img id="img3" src="pic/boy.png" alt="Avatar" style="width:220px">
<br><br>
<a href="../admin/alogin_portal/index.php"><button id="button1" type="button" class="btn btn-primary">Admin</button></a>
    <a href="../Teacher/tlogin_portal/index.php"><button id="button2" type="button" class="btn btn-primary">Teacher</button></a>
    <a href="../student/slogin_portal/index.php"><button id="button3" type="button" class="btn btn-primary">Student</button></a>
<img src="pic/bg.png" alt="Avatar" style="width: 1500px;margin-left: 20px;">
</body>
</html>