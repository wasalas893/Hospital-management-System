<!DOCTYPE html>

<html>
<head>
	<title>mypage</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="jumbotron" style="background:url('images/1.jpg') no-repeat; background-size: cover; height: 300px;">
		
	</div>
	<div class="container-fluid">
		<div class="row">
			
			
			<div class="col-md-8">

				<div class="card">
					<div class="card-body" style="background-color:#3498DB; color:#ffffff;">
                             <a href="addmin-penala.php" class="btn btn-light">Go Back</a>

						Add New Staff


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

							<label>Section :</label>
							<input type="text" name="section" class="form-control"><br>

							<input type="submit" class="btn btn-primary" name="staff_submit" value="Enter Staff">
							
							
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