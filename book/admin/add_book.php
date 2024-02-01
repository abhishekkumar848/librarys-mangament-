<?php
	require("functions.php");
	session_start();
	#fetch data from database
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$name = "";
	$email = "";
	$mobile = "";
	$query = "select * from admins where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while ($row = mysqli_fetch_assoc($query_run)){
		$name = $row['name'];
		$email = $row['email'];
		$mobile = $row['mobile'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add New Book</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<script type="text/javascript">
  		function alertMsg(){
  			alert(Book added successfully...);
  			window.location.href = "admin_dashboard.php";
  		}
  	</script>
</head>
<body style="background-image: url(book1/book1.jpg);
 background-size: cover; ">
 
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
		<div class="container-fluid" style="background-color: rgba(219,219,212,255); " >
			<div class="navbar-header" >
				
			</div>
			
			
		    <ul class="nav navbar-nav navbar-right">
		      
		      <li class="nav-item">
		        <a class="nav-link" href="../logout.php" style=" color: black; text-shadow: white 2PX 3PX 4PX; " >Logout</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<img src="book1/mits-logo.png" class="img-fluid" alt=""  style="width: 90px; text-shadow: black 2PX 3PX 4PX;" >
<center style="font-size: 10px; color: whitesmoke; text-shadow: black 2PX 3PX 4PX; "  ><div class="mai1" style="font-size: 10px; color: whitesmoke; " ><h1  >Madhav Institute of Technology &amp; Science, Gwalior (M.P.), INDIA <br> 
माधव प्रौद्योगिकी एवं विज्ञान संस्थान, ग्वालियर (म.प्र.), भारत </h1></div></center>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd" style="background-color: #e3f2fd">
		<div class="container-fluid"style="background-image: url(book1/book6.jpg);
 background-size: cover; font-style: italic;  color: white; ">
		<div class="container-fluid">
			
		    <ul class="nav navbar-nav navbar-center">
		      <li class="nav-item">
		        <a class="nav-link" href="admin_dashboard.php">Dashboard</a>
		      </li>
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Books </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="add_book.php">Add New Book</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="manage_book.php">Manage Books</a>
	        	</div>
		      </li>
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Category </a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="add_cat.php">Add New Category</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="manage_cat.php">Manage Category</a>
	        	</div>
		      </li>
		      <li class="nav-item dropdown">
	        	<a class="nav-link dropdown-toggle" data-toggle="dropdown">Authors</a>
	        	<div class="dropdown-menu">
	        		<a class="dropdown-item" href="add_author.php">Add New Author</a>
	        		<div class="dropdown-divider"></div>
	        		<a class="dropdown-item" href="manage_author.php">Manage Author</a>
	        	</div>
		      </li>
	          <li class="nav-item">
		        <a class="nav-link" href="issue_book.php">Issue Book</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<span><marquee>Library opens at 10:00 AM and close at 6:00 PM</marquee></span><br><br>
		<center><h4>Add a new Book</h4><br></center>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<form action="" method="post">
					<div class="form-group">
						<label for="email">Book Name:</label>
						<input type="text" name="book_name" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Author ID:</label>
						<input type="text" name="book_author" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Category ID:</label>
						<input type="text" name="book_category" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Book Number:</label>
						<input type="text" name="book_no" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="mobile">Book Price:</label>
						<input type="text" name="book_price" class="form-control" required>
					</div>
					<button type="submit" name="add_book" class="btn btn-primary">Add Book</button>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
</body>
</html>

<?php
	if(isset($_POST['add_book']))
	{
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"lms");
		$query = "insert into books values(null,'$_POST[book_name]','$_POST[book_author]','$_POST[book_category]',$_POST[book_no],$_POST[book_price])";
		$query_run = mysqli_query($connection,$query);
		#header("location:add_book.php");
	}
?>
