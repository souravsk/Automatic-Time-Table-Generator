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
	<title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    
</head>
<body>
        
	<div class="container-fluid" id="wrapper">
		<div class="row">
			<nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2">
				<h1 class="site-title"><a href="index.php"><em class=""></em> Time Table</a></h1>
													
				<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
				<ul class="nav nav-pills flex-column sidebar-nav">
					<li class="nav-item"><a class="nav-link active" href="index.php"><em class="fa fa-dashboard"></em> Dashboard <span class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link" href="add_course.php"><em class="fa fa-list-ul"></em> Courses</a></li>
					<li class="nav-item"><a class="nav-link" href="add_teacher.php"><em class="fa fa-user-plus"></em>  Teachers</a></li>
					<li class="nav-item"><a class="nav-link" href="add_classroom.php"><em class="fa fa-edit"></em> Class Rooms</a></li>
					<li class="nav-item"><a class="nav-link" href="create_timetable.php"><em class="fa fa-table"></em> Create Time Table</a></li>
					<li class="nav-item"><a class="nav-link" href="profile.php"><em class="fa fa-user-circle"></em> Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="notifications.php"><em class="fa fa-bell"></em> Notifications</a></li>
				</ul>
				<a href="logout.php" class="logout-button"><em class="fa fa-power-off"></em> Signout</a>
			</nav>
			<main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
				<header class="page-header row justify-center">
					<div class="col-md-6 col-lg-8" >
						<h1 class="float-left text-center text-md-left">Dashboard</h1>
					</div>
					<div class="dropdown user-dropdown col-md-6 col-lg-4 text-center text-md-right"><a class="btn btn-stripped dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
							<div class="col-md-12 col-lg-8">
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Faculty</h3>
                                        <div class="dropdown card-title-btn-container">
											<button class="btn btn-sm btn-subtle dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><em class="fa fa-cog"></em></button>
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
											    <a class="dropdown-item" href="#"><em class="fa fa-search mr-1"></em> More info</a></div>
										</div>
										<div class="table-responsive">
											<?php
    
                    $mysqli=new mysqli('localhost','root','','table') or die(mysqli_error($mysqli));
                    $result=$mysqli->query("SELECT * FROM teachers")or die($mysqli->error);
                    if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                    ?>

											<table class="table table-striped">
												<thead>
													<tr>
														<th>Id #</th>
														<th>Name</th>
														<th>Departments</th>
														
													</tr>
												</thead>
												<tbody>
										<?php 
        		                            while($row = mysqli_fetch_assoc($result)) {
        		                      ?>
													<tr>
														<td><?php  echo $row['id']; ?></td>
														<td><?php  echo $row['name']; ?></td>
														<td><?php  echo $row['department'];?></td>
													</tr>
										<?php 
        		                  }
        		                  ?>			
												</tbody>
											</table>
								<?php     
                              }
        		               else {
        		                  echo "0 results";
        		           }
        		?>			
										</div>
									</div>
								</div>
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Time table</h3>
										
										<h6 class="card-subtitle mb-2 text-muted">sample Table</h6>
										<div class="divider" style="margin-top: 1rem;"></div>
										<div class="articles-container">
										<div class="btn-group">
                                            <div class="btn btn-primary">Time-ing</div>
                                            <div class="btn btn-secondary">Mon-day</div>
                                            <div class="btn btn-secondary">Tuesday</div>
                                            <div class="btn btn-secondary">Wednesday</div>
                                            <div class="btn btn-secondary">Thrusday</div>
                                            <div class="btn btn-secondary">Friday</div>
                                            <div class="btn btn-secondary">Saturday</div>
											
										</div>
                                        <div class="btn-group">
                                            <div class="btn btn-secondary">6:00-7:00</div>
                                            <div class="btn btn-secondary">Subject1</div>
                                            <div class="btn btn-secondary">Tuesday</div>
                                            <div class="btn btn-secondary">Wednesday</div>
                                            <div class="btn btn-secondary">Thrusday</div>
                                            <div class="btn btn-secondary">Friday</div>
                                            <div class="btn btn-secondary">Saturday</div>
											
										</div>
                                            <div class="btn-group">
                                            <div class="btn btn-secondary">7:00-8:00</div>
                                            <div class="btn btn-secondary">Subject2</div>
                                            <div class="btn btn-secondary">Tuesday</div>
                                            <div class="btn btn-secondary">Wednesday</div>
                                            <div class="btn btn-secondary">Thrusday</div>
                                            <div class="btn btn-secondary">Friday</div>
                                            <div class="btn btn-secondary">Saturday</div>
											
										</div>
                                            <div class="btn-group">
                                            <div class="btn btn-secondary">8:00-9:00</div>
                                            <div class="btn btn-secondary">Subject3</div>
                                            <div class="btn btn-secondary">Tuesday</div>
                                            <div class="btn btn-secondary">Wednesday</div>
                                            <div class="btn btn-secondary">Thrusday</div>
                                            <div class="btn btn-secondary">Friday</div>
                                            <div class="btn btn-secondary">Saturday</div>
											
										</div>
                                            <div class="btn-group">
                                            <div class="btn btn-secondary">9:0 -10:00</div>
                                            <div class="btn btn-primary">------------------------------------------------- BREAK ---------------------------------------------</div>
                                            
											
										</div>
                                            <div class="btn-group">
                                            <div class="btn btn-secondary">10:0-11:00</div>
                                            <div class="btn btn-secondary">Subject4</div>
                                            <div class="btn btn-secondary">Tuesday</div>
                                            <div class="btn btn-secondary">Wednesday</div>
                                            <div class="btn btn-secondary">Thrusday</div>
                                            <div class="btn btn-secondary">Friday</div>
                                            <div class="btn btn-secondary">Saturday</div>
											
										</div>
                                            <div class="btn-group">
                                            <div class="btn btn-secondary">11:0-12:00</div>
                                            <div class="btn btn-secondary">Subject5</div>
                                            <div class="btn btn-secondary">Tuesday</div>
                                            <div class="btn btn-secondary">Wednesday</div>
                                            <div class="btn btn-secondary">Thrusday</div>
                                            <div class="btn btn-secondary">Friday</div>
                                            <div class="btn btn-secondary">Saturday</div>
											
										</div>
                                            <div class="btn-group">
                                            <div class="btn btn-secondary">12:0-11:00</div>
                                            <div class="btn btn-secondary">Subject6</div>
                                            <div class="btn btn-secondary">Tuesday</div>
                                            <div class="btn btn-secondary">Wednesday</div>
                                            <div class="btn btn-secondary">Thrusday</div>
                                            <div class="btn btn-secondary">Friday</div>
                                            <div class="btn btn-secondary">Saturday</div>
											
										</div>
											
											
											
											
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4">
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Calender</h3>
										<h6 class="card-subtitle mb-2 text-muted">Most active this week</h6>
										<div id="calendar"></div>
									</div>
								</div>
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Courses</h3>
										
										<h6 class="card-subtitle mb-2 text-muted">View Courses</h6>
										<ul class="todo-list mt-2 mb-2">
                    <?php
    
                    $mysqli=new mysqli('localhost','root','','table') or die(mysqli_error($mysqli));
                    $result=$mysqli->query("SELECT * FROM courses")or die($mysqli->error);
                    if (mysqli_num_rows($result) > 0) 
                       {
                         // output data of each row
                    ?>
											<li class="todo-list-item">
												<div class="mt-1 mb-2">
													<div class="custom-control">
                                    <?php 
        		                            while($row = mysqli_fetch_assoc($result)) 
                                                 { ?>
														<label class="custom-control-label custom-control-description" for="customRadio1"><?php  echo $row['name']; ?></label><br><br>
                                            <?php 
        		                                 }
        		                             ?>                    
                                                    </div>
                                                </div>
											</li>
                                        </ul>
                                        <?php     
                                                     }
        		                      else {
        		                            echo "0 results";
        		                           }
        		                         ?>
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
	    var startCharts = function () {
	                var chart1 = document.getElementById("line-chart").getContext("2d");
	                window.myLine = new Chart(chart1).Line(lineChartData, {
	                responsive: true,
	                scaleLineColor: "rgba(0,0,0,.2)",
	                scaleGridLineColor: "rgba(0,0,0,.05)",
	                scaleFontColor: "#c5c7cc "
	                });
	            }; 
	        window.setTimeout(startCharts(), 1000);
	</script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    
	</body>
</html>
