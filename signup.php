<!DOCTYPE html>
<html>
<head>
	<title>LMS</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	#main_content{
		padding: 50px;
		
	}

.slider-thumb::before {
  position: absolute;
  content: "";
  left: 30%;
  top: 20%;
  width: 450px;
  height: 450px;
  background: #17141d;
  border-radius: 62% 47% 82% 35% / 45% 45% 80% 66%;
  will-change: border-radius, transform, opacity;
  animation: sliderShape 5s linear infinite;
  display: block;
  z-index: -1;
  -webkit-animation: sliderShape 5s linear infinite;
}
@keyframes sliderShape{
  0%,100%{
  border-radius: 42% 58% 70% 30% / 45% 45% 55% 55%;
    transform: translate3d(0,0,0) rotateZ(0.01deg);
  }
  34%{
      border-radius: 70% 30% 46% 54% / 30% 29% 71% 70%;
    transform:  translate3d(0,5px,0) rotateZ(0.01deg);
  }
  50%{
    transform: translate3d(0,0,0) rotateZ(0.01deg);
  }
  67%{
    border-radius: 100% 60% 60% 100% / 100% 100% 60% 60% ;
    transform: translate3d(0,-3px,0) rotateZ(0.01deg);
  }
	}
	
	.bn632-hover {
  width: 160px;
  font-size: 16px;
  font-weight: 600;
  color: #fff;
  cursor: pointer;
  margin: 20px;
  height: 55px;
  text-align:center;
  border: none;
  background-size: 300% 100%;
  border-radius: 50px;
  moz-transition: all .4s ease-in-out;
  -o-transition: all .4s ease-in-out;
  -webkit-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}

.bn632-hover:hover {
  background-position: 100% 0;
  moz-transition: all .4s ease-in-out;
  -o-transition: all .4s ease-in-out;
  -webkit-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}

.bn632-hover:focus {
  outline: none;
}

.bn632-hover.bn23 {
  background-image: linear-gradient(
    to right,
    #009245,
    #fcee21,
    #00a8c5,
    #d9e021
  );
  box-shadow: 0 4px 15px 0 rgba(83, 176, 57, 0.75);
}
</style>
<body  style="background-image: url(book/book2.jpg);
 background-size: cover; ">
 <a href="index.php"> 
<img src="book/mits-logo.png" class="img-fluid" alt=""  style="width: 90px;" >
<center><div class="mai1" style="font-size: 10px; color: whitesmoke; " ><h1  >Madhav Institute of Technology &amp; Science, Gwalior (M.P.), INDIA <br> 
माधव प्रौद्योगिकी एवं विज्ञान संस्थान, ग्वालियर (म.प्र.), भारत </h1></div></center></a>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid"  style="background-color: rgb(22 130 121);">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Library Management System (LMS)</a>
			</div>
	
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item">
		        <a class="nav-link" href="index.php">Admin Login</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#"></span>Register</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="index.php">Login</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<span  style="color: white;" ><marquee>Library opens at 10:00 AM and close at 6:00 PM</marquee></span><br><br>
	<div class="row">
		
		<div class="col-md-8" id="main_content" style="
  color: #fff;opacity: ;">
			<center style="color: white; font-size: 30px
					; "><h3><u>User Registration Form</u></h3></center>
			<form action="register.php" method="post">
				<div class="form-group">
					<label for="name" style="color: white; font-size: 30px
					; ">Full Name:</label>
					<input type="text" name="name" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="email" style="color: white; font-size: 30px
					; ">Email ID:</label>
					<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="password" style="color: white; font-size: 30px
					; ">Password:</label>
					<input type="password" name="password" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="mobile" style="color: white; font-size: 30px
					; ">Mobile:</label>
					<input type="text" name="mobile" class="form-control" required>
				</div>
				<div class="form-group" >
					<label for="address">Address:</label>
					<textarea name="address" class="form-control" required></textarea> 
				</div>
				<button class="bn632-hover bn23" >Button</button>	
			</form>
		</div>
	</div>
</body>
</html>