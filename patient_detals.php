<!DOCTYPE html>
<?php include("func.php"); ?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="jumbotron" style="background:url('images/1.jpg') no-repeat; background-size: cover; height: 300px;">
		
	</div>
	<div class="container">

		<div class="card">
					<div class="card-body" style="background-color:#3498DB; color:#ffffff;">
						<div class="row">
							<div class="col-md-1">
				       <a href="addmin-penala.php" class="btn btn-light">Go Back</a>
				       </div>

						<div class="col-md-3"><h3>Patient Details</h3></div>
						<div class="col-md-8">
							<form class="form-group" action="patient_search.php" method="post"> 
								<div class="row">
								<div class="col-md-10"><input type="text" name="search" class="form-control" placeholder="enter contact"></div>
								<div class="col-md-2"><input type="submit" name="patient_search_submit" class="btn btn-light" value="Search"></div>
							</div>
								
							</form>
						</div>
					</div></div>
					<div class="card-body" style="background-color:#3498DB; color:#ffffff;">

					<table class="table table-hover">
  <thead>
    <tr>
     
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email id</th>
      <th>Contact</th>
      <th>Doctor Appointment</th>
    </tr>
  </thead>
  <tbody>
   <?php get_patient_details(); ?>
  </tbody>
</table>
</div>

	</div>				



 <script src="js/bootstrap.js"></script>
</body>
</html>