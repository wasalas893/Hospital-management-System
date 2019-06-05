<html>
<head>
	<title>mypage</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<?php
include("func.php");
if(isset($_POST['patient_search_submit']))
{
	$contact=$_POST['search'];
	$query="select * from doctorapp where contact='$contact'";
	$result=mysqli_query($con,$query);
	echo "<div class='container-fluid' style='margin-top:50px';>
	    <div class'card'>
	    <div class='card-body'><a href='patient_detals.php' class='btn btn-light'>Go Back</a></div>
	   <img src='images/8.jpg' class='card-img-top'>

	         <div class='card-body' style='background-color:#3498DB; color:#ffffff;'>

					<table class='table table-hover'>
  <thead>
    <tr>
     
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email id</th>
      <th>Contact</th>
      <th>Doctor Appointment</th>
    </tr>
  </thead>
  <tbody>";
	while ($row=mysqli_fetch_array($result)) {
		$fname=$row['fname'];
	    $lname=$row['lname'];
	    $email=$row['email'];
	    $contact=$row['contact'];
	    $docapp=$row['docapp'];
	    echo "
           <tr>
           <td>$fname</td>
           <td>$lname</td>
           <td>$contact</td>
           <td>$email</td>
           <td>$docapp</td>
           </tr>

	    ";

	}
	echo "</tbody></table></div></div></div>";
}

?>
<script src="js/bootstrap.js"></script>
</body>
</html>


