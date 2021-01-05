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
	<title>Add Course</title>

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
					<li class="nav-item"><a class="nav-link" href="index.php"><em class="fa fa-dashboard"></em> Dashboard </a></li>
					<li class="nav-item"><a class="nav-link active" href="add_course.php"><em class="fa fa-list-ul"></em> Courses <span class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="nav-link" href="add_teacher.php"><em class="fa fa-user-plus"></em> Teachers</a></li>
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
						<h1 class="float-left text-center text-md-left">Courses</h1>
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
                            
                            <div class="col-12">
								<div class="card mb-4">
									<div class="card-block">
                                        <form action="#" method="POST">
										<h3 class="card-title">Select Department</h3>
										
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Department</label>
                                                 <form class="form">
												<div class="col-md-9">
                    <?php
    
                    $mysqli=new mysqli('localhost','root','','table') or die(mysqli_error($mysqli));
                    $result=$mysqli->query("SELECT * FROM courses")or die($mysqli->error);
                    if (mysqli_num_rows($result) > 0) 
                       {
                         // output data of each row  ?>                                 
				           <select class="custom-select form-control" name="depart">
                                                 
                    <?php 
        		          while($row = mysqli_fetch_assoc($result)) 
                          {
        		     ?>
				             <option value="<?php $depart=$row['code']; ?>"><?php  echo $row['name']; ?></option>
                                                        
                    <?php 
        		          }
        		     ?> 
                                                        
                    <?php     
                        
                       }
        		      else {
        		             echo "0 results";
        		           }
        		     ?>                                    
													</select>
												</div>
                                                     </form>
											</div>
                                            <button name="go" type="button" class="btn btn-md btn-primary">Go</button>
										
                                        <form class="form">
											<div class="form-group row">
												<label class="col-md-3 col-form-label">Year</label>
												<div class="col-md-9">
													<select class="custom-select form-control" name="year">
                                                         
                                                        <?php 
                                                             $row=1;                                        
                                                              while($row<=3) 
                                                              {
                                                         ?>
                                                                 <option value="<?php $year=$row ?>">

                                                                     <?php  echo "$row"; ?></option>

                                                        <?php 
                                                                  $row++;
                                                              }



                                                               
                                                        ?>  
                                                        
													</select>
												</div>
											</div> 
										</form>
                                        <div class="form-group">
													<div class="col-12 widget-right no-padding">
														<button type="submit" class="btn btn-primary btn-md float-right" name="cgo">Go</button>
													</div>
								        </div><br>
                                     </form>       
									</div>
                                    
								</div>
							</div>
                                
							<div class="col-lg-6">
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Courses</h3>
										<h6 class="card-subtitle mb-2 text-muted">Add/Delete Courses</h6>
										<ul class="todo-list mt-2 mb-2">
                                            <?php
    
                    $mysqli=new mysqli('localhost','root','','table') or die(mysqli_error($mysqli));
                    $result=$mysqli->query("SELECT * FROM courses")or die($mysqli->error);
                    if (mysqli_num_rows($result) > 0) 
                       {
                         // output data of each row
                    ?>
                                             <?php 
        		                            while($row = mysqli_fetch_assoc($result)) 
                                                 { ?>
											<li class="todo-list-item">
												<div class="mt-1 mb-2">
													<div class="custom-control ">
														
														<label class="custom-control-label custom-control-description" for="customCheck1"><?php  echo $row['name']; ?></label>
													<div class="float-right action-buttons">
                                                    <a href="session.php?cdelete=<?php echo $row['id'] ?>" class="trash"><em class="fa fa-trash"></em></a></div>
												</div>
                                                </div>
											</li>
                                            <?php 
        		                                 }
        		                             ?> 
                                             <?php     
                                                     }
        		                      else {
        		                            echo "0 results";
        		                           }
        		                         ?>
										</ul>
                                        <form action="session.php" method="POST">
										<div class="card-footer todo-list-footer">
											<div class="input-group">
                                              
												<input id="btn-input" name="course" type="text" class="form-control input-md" placeholder="Add new Courses" />
                                                <span class="input-group-btn">
													<button class="btn btn-primary btn-md" id="btn-todo" name="adds">Add</button>
											    </span>
                                               
                                            </div>
										</div>
                                            </form>
									</div>
								</div>
								
								<div class="card mb-4">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card mb-4">
									<div class="card-block">
										<h3 class="card-title">Subjects</h3>
										<h6 class="card-subtitle mb-2 text-muted">Add/Delete Subjects</h6>
										<ul class="todo-list mt-2 mb-2">
                                            <?php
    
                    $mysqli=new mysqli('localhost','root','','bca') or die(mysqli_error($mysqli));
                    $result=$mysqli->query("SELECT * FROM bca1")or die($mysqli->error);
                    if (mysqli_num_rows($result) > 0) 
                       {
                         // output data of each row
                    ?>
                                             <?php 
        		                            while($row = mysqli_fetch_assoc($result)) 
                                                 { ?>
											<li class="todo-list-item">
												<div class="mt-1 mb-2">
													<div class="custom-control ">
														
														<label class="custom-control-label custom-control-description" for="customCheck1"><?php  echo $row['sub_name']; ?></label>
													<div class="float-right action-buttons">
                                                    <a href="session.php?sdelete=<?php echo $row['sub_no'] ?>" class="trash"><em class="fa fa-trash"></em></a></div>
												</div>
                                                </div>
											</li>
                                            <?php 
        		                                 }
        		                             ?> 
                                             <?php     
                                                     }
        		                      else {
        		                            echo "0 results";
        		                           }
        		                         ?>
										</ul>
                                        <form action="session.php" method="POST">
										<div class="card-footer todo-list-footer">
											<div class="input-group">
                                              
												<input id="btn-input" name="subjects" type="text" class="form-control input-md" placeholder="Add new Courses" />
                                                <span class="input-group-btn">
													<button class="btn btn-primary btn-md" id="btn-todo" name="adds">Add</button>
											    </span>
                                               
                                            </div>
										</div>
                                            </form>
									</div>
								</div>
								<div class="card mb-4">
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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    
	</body>
</html>
