<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>LMS | Login</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="./bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="./bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	#main_content{
		padding: 50px;
		
	}
	
		
	
	#body{
		background-image: url("book/4735.jpg");
		background-size: cover;
	}
</style>
<body   style="background-image: url(book1/book2.jpg);
 background-size: cover; ">
 <a href="index.php"> 
<img src="book1/mits-logo.png" class="img-fluid" alt=""  style="width: 90px;" >
<center><div class="mai1" style="font-size: 10px; color: whitesmoke; " ><h1  >Madhav Institute of Technology &amp; Science, Gwalior (M.P.), INDIA <br> 
माधव प्रौद्योगिकी एवं विज्ञान संस्थान, ग्वालियर (म.प्र.), भारत </h1></div></center></a>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid" style="background-color: rgb(22 130 121);">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Library Management System (LMS)</a>
			</div>
	
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item">
		        <a class="nav-link" href="index.php">Admin Login</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../signup.php"></span>Register</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="../index.php">Login</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<span  style="color: white;" ><marquee>Library opens at 10:00 AM and close at 6:00 PM</marquee></span><br><br>
	<div class="row">
		
		<div class="col-md-8" id="main_content"  style="
  color: #fff;opacity: ;">
			<center><h3><u>Admin Login Form</u></h3></center>
			<form action="" method="post">
				<div class="form-group">
					<label for="email">Email ID:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<button type="submit" name="login" class="btn btn-primary">Login</button>	
			</form>
			<?php 
				if(isset($_POST['login'])){
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"lms");
					$query = "select * from admins where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) {
						if($row['email'] == $_POST['email']){
							if($row['password'] == $_POST['password']){
								$_SESSION['name'] =  $row['name'];
								$_SESSION['email'] =  $row['email'];
								header("Location: admin_dashboard.php");
							}
							else{
								?>
								<br><br><center><span class="alert-danger">Wrong Password !!</span></center>
								<?php
							}
						}
					}
				}
			?>
		</div>
	</div>
</body>
</html>
