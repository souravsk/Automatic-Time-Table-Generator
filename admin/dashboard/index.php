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
                    <li class="nav-item"><a class="nav-link" href="notifications.php"><em class="fa fa-bell"></em> Workload</a></li>
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
							<h6 class="text-muted"><?php if($login_type=='a')
                                                            {
                                                              echo "Super admin";
                                                            }
                                                          else if($login_type=='t')
                                                                  {
                                                                   echo "Faculty";
                                                                  }
                                                                else
                                                                   {
                                                                     echo "Student";
                                                                   }
                                
                                                    ?>
                            </h6>
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
											    <a class="dropdown-item" href="add_teacher.php"><em class="fa fa-search mr-1"></em> More info</a></div>
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
                                            $cnt = 0;
        		                            while($row = mysqli_fetch_assoc($result)) {
        		                      ?>
													<tr>
														<td><?php  echo $row['id']; ?></td>
														<td><?php  echo $row['name']; ?></td>
														<td><?php  echo $row['department'];?></td>
													</tr>
										<?php 
                                                 if($cnt==3){
                                                     break;
                                                 }
                                                     
                                                $cnt++;
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
										<h3 class="card-title">Users</h3>
										<h6 class="card-subtitle mb-2 text-muted">View/Remove Users</h6>
                                        <?php
    
                    $mysqli=new mysqli('localhost','root','','table') or die(mysqli_error($mysqli));
                    $result=$mysqli->query("SELECT * FROM users")or die($mysqli->error);
                    if (mysqli_num_rows($result) > 0) {
                       // output data of each row
                    ?>
										<ul class="todo-list mt-2 mb-2">
                    <?php 
        		          while($row = mysqli_fetch_assoc($result)) {
        		     ?>
											<li class="todo-list-item">
												<div class="checkbox mt-1 mb-2">
													<div class="custom-control">
                                                        <div class="user-progress justify-center">
                                                            <div class="col-sm-3 col-md-3 col-xl-1" style="padding: 0;">
                                                                <img src="images/profile-pic.png" alt="profile photo" class="circle profile-photo" style="width: 90%; max-width: 100px;">
                                                            </div>
                                                            <div class="col-sm-9 col-md-10 col-xl-11">
                                                                <a href="session.php?delete=<?php echo $row['userID'];  ?>">
                                                                <button class="btn btn-secondary margin float-right" type="button"><span class="fa fa-trash"></span> &nbsp;Remove</button></a>
                                                                <h6 class="pt-1"><?php  echo $row['username']; ?></h6>
                                                                <div class="progress progress-custom">
													           <div class="progress-bar bg-primary" style="width: 
                                                                <?php if($row['type']=='a')
                                                                         {
                                                                           echo '100%';
                                                                         }
                                                                  elseif($row['type']=='t')
                                                                          {
                                                                            echo '50%';
                                                                          }
                                                                      else
                                                                         {  
                                                                          echo '25%';
                                                                         }
                                                                ?>
                              " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                                </div>
												            </div>
                                                            </div>
                                                            
                                                        </div> 
												    </div>
                                                </div>
											</li>
                    <?php 
        		              }
        		   ?>
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
							<div class="col-md-12 col-lg-4">
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Users</h3>
										<h6 class="card-subtitle mb-2 text-muted">User Access Level</h6>
										<div class="user-progress justify-center">
											<div class="col-sm-3 col-md-2 col-xl-1" style="padding: 0;">
												<img src="images/profile-pic.png" alt="profile photo" class="circle profile-photo" style="width: 120%; max-width: 100px;">
											</div><br>
											<div class="col-sm-9 col-md-10 col-xl-11">
												<h6 class="pt-1">Admin</h6>
												<div class="progress progress-custom">
													<div class="progress-bar bg-primary" style="width: 100%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</div><br>
                                        <div class="user-progress justify-center">
											<div class="col-sm-3 col-md-2 col-xl-1" style="padding: 0;">
												<img src="images/profile-pic.png" alt="profile photo" class="circle profile-photo" style="width: 120%; max-width: 100px;">
											</div>
											<div class="col-sm-9 col-md-10 col-xl-11">
												<h6 class="pt-1">Faculty</h6>
												<div class="progress progress-custom">
													<div class="progress-bar bg-primary" style="width: 50%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</div><br>
                                        <div class="user-progress justify-center">
											<div class="col-sm-3 col-md-2 col-xl-1" style="padding: 0;">
												<img src="images/profile-pic.png" alt="profile photo" class="circle profile-photo" style="width: 120%; max-width: 100px;">
											</div>
											<div class="col-sm-9 col-md-10 col-xl-11">
												<h6 class="pt-1">Student</h6>
												<div class="progress progress-custom">
													<div class="progress-bar bg-primary" style="width: 25%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</div><br>
									</div>
								</div>
                                <br>
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">User Form</h3>
										<h6 class="card-subtitle mb-2 text-muted">Add new user</h6><br>
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
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Type</label>
												<div class="col-md-9">
													<select class="custom-select form-control" name="type">
														<option value="s" selected>Student</option>
                                                        <option value="t">Faculty</option>
														<option value="a">Admin</option>
													</select>
												</div>
											</div> 
										</form><br>
											
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
														<button type="submit" class="btn btn-primary btn-md float-right" name="submit">Submit</button>
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
