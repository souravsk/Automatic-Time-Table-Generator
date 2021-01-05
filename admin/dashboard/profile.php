<?php
   include('session.php');
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../login_portal/images/icon.png">
	<title>Profile</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    
    <!--Theme Switcher-->
    <style id="hide-theme">
    	body {
    		visibility: hidden;
    	}
    </style>
    <script type="text/javascript">
    	function setTheme(name) {
    var theme = document.getElementById('theme-css');
    var style = 'css/theme-' + name + '.css';
    if (theme) {
    	theme.setAttribute('href', style);
    } else {
    	var head = document.getElementsByTagName('head')[0];
    	theme = document.createElement("link");
    	theme.setAttribute('rel', 'stylesheet');
    	theme.setAttribute('href', style);
    	theme.setAttribute('id', 'theme-css');
    	head.appendChild(theme);
    }
    
    window.localStorage.setItem('bs4d-theme', name);
    }
    
    var selectedTheme = window.localStorage.getItem('bs4d-theme');
    if (selectedTheme) {
    	setTheme(selectedTheme);
    }
    
    window.setTimeout(function() {
    var el = document.getElementById('hide-theme');
    el.parentNode.removeChild(el);
    }, 5);
    </script>
    <!-- End Theme Switcher -->
</head>
<body>
	<div class="container-fluid" id="wrapper">
		<div class="row">
			<nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2">
				<h1 class="site-title"><a href="index.php">Time Table</a></h1>
				
				<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
				<ul class="nav nav-pills flex-column sidebar-nav">
					<li class="nav-item"><a class="nav-link" href="index.php"><em class="fa fa-dashboard"></em> Dashboard </a></li>
					<li class="nav-item"><a class="nav-link" href="add_course.php"><em class="fa fa-list-ul"></em> Courses</a></li>
					<li class="nav-item"><a class="nav-link" href="add_teacher.php"><em class="fa fa-user-plus"></em> Add Teachers</a></li>
					<li class="nav-item"><a class="nav-link" href="add_classroom.php"><em class="fa fa-edit"></em>  Class Rooms</a></li>
					<li class="nav-item"><a class="nav-link" href="create_timetable.php"><em class="fa fa-table"></em> Create Time Table</a></li>
					<li class="nav-item"><a class="nav-link active" href="profile.php"><em class="fa fa-user-circle"></em> Profile <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="notifications.php"><em class="fa fa-bell"></em> Notifications</a></li>
				</ul>
				
				<a href="logout.php" class="logout-button"><em class="fa fa-power-off"></em> Signout</a></nav>
			<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
				<header class="page-header row justify-center">
					<div class="col-md-6 col-lg-8" >
						<h1 class="float-left text-center text-md-left">Profile</h1>
					</div>
					<div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right"><a class="btn btn-stripped dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<img src="images/profile-pic.png" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto">
						<div class="username mt-1">
							<h4 class="mb-1"><?php echo $login_session; ?></h4>
							<h6 class="text-muted">Super Admin</h6>
						</div>
						</a>
						<div class="dropdown-menu dropdown-menu-right" style="margin-right: 1.5rem;" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="profile.php"><em class="fa fa-user-circle mr-1"></em> View Profile</a>
							 <a class="dropdown-item" href="logout.php"><em class="fa fa-power-off mr-1"></em> Signout</a></div>
					</div>
					<div class="clear"></div>
				</header>
				<section class="row">
					<div class="col-sm-12">
						<section class="row">
							<div class="col-12 mb-2">
								<div class="card mb-4">
								  <div class="card-block">
										<h3 class="card-title">Profile</h3>
										<h6 class="card-subtitle mb-2 text-muted">EDIT INFO</h6><br>
										<form class="form-horizontal" action="connection_signup.php" method="POST">
											<fieldset>
												<!-- Name input-->
												<div class="form-group">
													<label class="col-12 control-label no-padding" for="name">Name</label>
													<div class="col-12 no-padding">
														<input id="name" name="username" type="text" placeholder="Enter name" class="form-control">
													</div>
												</div><br>
                                                <form class="form" action="#"> 
										</form>
												<!-- Email input-->
												<div class="form-group">
													<label class="col-12 control-label no-padding" for="email"> E-mail</label>
													<div class="col-12 no-padding">
														<input id="email" name="email" type="text" placeholder="Enter email" class="form-control">
													</div>
												</div><br>
												
												<!-- Password input-->
												<div class="form-group">
													<label class="col-12 control-label no-padding" for="email"> Password</label>
													<div class="col-12 no-padding">
														<input id="email" name="pass" type="password" placeholder="Enter Password" class="form-control">
													</div>
												</div><br>
                                                <!-- Password input-->
												<div class="form-group">
													<label class="col-12 control-label no-padding" for="email">Confirm Password</label>
													<div class="col-12 no-padding">
														<input id="email" name="cpass" type="password" placeholder="Re-enter Password" class="form-control">
													</div>
												</div><br>
												
												
												<!-- Form actions -->
												<div class="form-group">
													<div class="col-12 widget-right no-padding">
														<button type="submit" class="btn btn-primary btn-md float-right" name="submit">Update</button>
													</div>
												</div><br>
											</fieldset>
										</form>
									</div>	
								</div>
							</div>
						</section>
					</div>
				</section>
			</main>
		</div>
	</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    
    <script src="js/chart.min.js"></script>
    <script src="js/chart-data.js"></script>
    <script src="js/easypiechart.js"></script>
    <script src="js/easypiechart-data.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/custom.js"></script>
    <script>
	    window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
	};
	</script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    
	</body>
</html>
