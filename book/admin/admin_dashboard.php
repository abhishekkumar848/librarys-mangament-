<?php
	require("functions.php");
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="../bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="../bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<body  style="background-image: url(book1/book3.jpg);
 background-size: cover; ">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		
		<div class="container-fluid"  style="background-color: rgb(22 130 121);">
			<div class="navbar-header">
				<a class="navbar-brand" href="admin_dashboard.php" >Library Management System (LMS)</a>
			</div>
			<font style="color: white"><span><strong>Welcome:</strong></span></font>
			
		    <ul class="nav navbar-nav navbar-right">
		      
		      <li class="nav-item">
		        <a class="nav-link" href="../logout.php">Logout</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	 
<img src="book1/mits-logo.png" class="img-fluid" alt=""  style="width: 90px;" >
<center style="font-size: 10px; color: whitesmoke; "  ><div class="mai1" style="font-size: 10px; color: whitesmoke; " ><h1  >Madhav Institute of Technology &amp; Science, Gwalior (M.P.), INDIA <br> 
माधव प्रौद्योगिकी एवं विज्ञान संस्थान, ग्वालियर (म.प्र.), भारत </h1></div></center>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd">
		<div class="container-fluid"style="background-image: url(book1/book6.jpg);
 background-size: cover; font-style: italic;  color: white; ">
			
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
	<div class="row">
		<div class="col-md-3" style="margin: 0px" >
			<div class="card bg-ligh" style="width: 300px">
				<div class="card-header"  style="background-image: url(book1/book2.jpg);
 background-size: cover; font-style: italic; ">Registered User</div>
				<div class="card-body">
					
					<a class="btn btn-danger" href="Regusers.php" target="_blank" style="
 background-size: cover; font-style: italic; color: white; ">View Registered Users</a>
				</div>
			</div>
		</div>
		<div class="col-md-3" style="margin: 0px">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header" style="background-image: url(book1/book2.jpg);
 background-size: cover; font-style: italic; ">Total Book</div>
				<div class="card-body">
					
					<a class="btn btn-success" href="Regbooks.php" target="_blank" style="
 background-size: cover; font-style: italic; ">View All Books</a>
				</div>
			</div>
		</div>
		<div class="col-md-3" style="margin: 0px">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header" style="background-image: url(book1/book2.jpg);
 background-size: cover; font-style: italic; ">Book Categories</div>
				<div class="card-body">
					
					<a class="btn btn-warning" href="Regcat.php" target="_blank" style="
 background-size: cover; font-style: italic;  color: white; ">View Categories</a>
				</div>
			</div>
		</div>
		<div class="col-md-3" style="margin: 0px">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header" style="background-image: url(book1/book2.jpg);
 background-size: cover; font-style: italic; ">No. of Authors</div>
				<div class="card-body">
					
					<a class="btn btn-primary" href="Regauthor.php" target="_blank"style="
 background-size: cover; font-style: italic; ">View Authors</a>
				</div>
			</div>
		</div>
	</div><br><br>
	<div class="row">
		<div class="col-md-3" style="margin: 0px">
			<div class="card bg-light" style="width: 300px">
				<div class="card-header" style="background-image: url(book1/book2.jpg);
 background-size: cover; font-style: italic; ">Book Issued</div>
				<div class="card-body">
					
					<a class="btn btn-success" href="view_issued_book.php" target="_blank" style="
 background-size: cover; font-style: italic; ">View Issued Books</a>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
		<div class="col-md-3"></div>
	</div>
</body>
</html>
