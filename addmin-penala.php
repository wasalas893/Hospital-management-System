<!DOCTYPE html>

<html>
<head>
	<title>mypage</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="jumbotron" style="background:url('images/7.jpg') no-repeat; background-size: cover; height: 300px;">

		
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<div class="list-group">
				    <a href="" class="list-group-item active">Patients</a>
					<a href="patient_detals.php" class="list-group-item">Patient Details</a>
					<a href="" class="list-group-item">Payment/Checkout</a>
				</div>
				<hr>
				<div class="list-group">
					<a href="" class="list-group-item active">Staff</a>
					<a href="Staff_detals.php" class="list-group-item">Staff Details</a>
					<a href="add_new_staff.php" class="list-group-item">Add New Staff</a>
					<a href="" class="list-group-item">Remove Staff Members</a>
				</div>
			</div>
			
			
			<div class="col-md-8">
				<div class="card">
					<div class="card-body" style="background-color:#3498DB; color:#ffffff;">
						Add New patient
					</div>
					<div class="card-body">
						<form class="form-group" action="func.php" method="post">
							<label>First Name :</label>
							<input type="text" name="fname" class="form-control"><br>

							<label>Last Name :</label>
							<input type="text" name="lname" class="form-control"><br>
							
							<label>Email id :</label>
							<input type="text" name="email" class="form-control"><br>
							
							<label>Contact :</label>
							<input type="text" name="contact" class="form-control"><br>

							<label>Docter Appointment :</label>
							<select class="form-control">
								<option value="Dr Sharma From 6pm to 8pm">Dr mangala From 6pm to 8pm</option>

								<option value="Dr Shetty From 4pm to 6pm">Dr karalliydda From 4pm to 6pm</option>
								<option value="Dr Shetty From 4pm to 6pm">Dr maduka From 4pm to 6pm</option>
								<option value="Dr Shetty From 4pm to 6pm">Dr supun From 4pm to 6pm</option>
								<option value="Dr Shetty From 4pm to 6pm">Dr dinidu From 4pm to 6pm</option>
							</select><br>

							<input type="submit" class="btn btn-primary" name="pat_submit" value="Enter Appointment">
							
							
						</form>

					</div>

				</div>
			</div>
			<div class="cl-md-1"></div>
		</div>
	</div>

	<script src="js/bootstrap.js"></script>

</body>
</html>