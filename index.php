<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<style type="text/css">
	#ab1:hover{cursor: pointer;}
</style>
<body style="background:url(images/1.jpg) no-repeat; background-size: cover;">

	<div class="container" style="width: 400px; margin-top: 100px;">
		<div class="card">
			<img src="images/6.jpg" class="card-img-top">
			<div class="card-body">
		<form class="form-group" action="func.php" method="post">
			<label>Username:</label><br>
			<input type="text" name="username" class="form-control" placeholder="enter username"><br>

			<label>Password:</label><br>
			<input type="password" name="password" class="form-control" placeholder="enter username"><br>
			<input type="submit" name="login_submit" id="ab1" class="btn btn-primary">
		</form>
	</div>
    </div>
     </div>



     <script src="js/bootstrap.js"></script>
</body>
</html>