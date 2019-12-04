<?php
	try{
		require_once('config/dbc.php');
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(Exception $e) {
		$error = $e->getMessage();
	}

	if(isset($error)) {
		echo $error;
	}

	if(isset($_POST['submit-contact'])) {
		$sql = "INSERT INTO `contact` (`name`, `email`, `phone`, `message`) VALUES (:name, :email, :phone, :message)";
		$result = $db->prepare($sql);
		$data = array(
			':name' => $_POST['firstName']." ".$_POST['lastName'],
			':email' => $_POST['email'],
			':phone' => $_POST['phone'],
			':message' => $_POST['message']
		);
		if($result->execute($data)) {
			echo '<p class="alert alert-success">Message sent succesfully.</p>';
		} else {
			echo '<p class="alert alert-danger">Failed to send message.</p>';
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>contact us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="contact-us.css">
</head>
<body>
<!-- nav bar  -->
<nav class="navbar navbar-invert navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-links" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
      	<a class="navbar-brand" href="./index.php">
	      	<img width="40" alt="Brand"src="./image./index/logo.png">
      	</a>
    </div>

    <div class="collapse navbar-collapse" id="navbar-links">
    	<ul id="links" class="nav navbar-nav navbar-right">
	    	<li> <a href="./about.php">ABOUT</a></li>
	    	<li> <a href="./features.php">FEATURES</a></li>
	    	<li> <a href="./blogs.php">BLOGS</a></li>
	    	<li> <a class="active" href="./contact-us.php">CONTACT US</a></li>
	    	<li> <a href="./account.php">ACCOUNT</a></li>
	    	<li id="signIn"> <a href="./sign-in.php">SIGN IN</a></li>
        </ul>
    </div>
  </div>
</nav>
<!-- nav bar ends -->
<div>
	<h1 class="head-content">Highlight your query in the space below and we will get back to you on your entered mail id. </h1>
</div>
<div class="container-azad contact">
 	<div class="form-content">
	    <h5>Contact us</h5>
   
    	<form class="form-inline" action="" method="post">
		  	<div class="form-group">
		    	<label class="sr-only" for="Email1"></label>
		    	<input type="email" class="form-control" id="Email1" name="email" placeholder="Your email" required>
			</div>
		    <div class="form-group">
			    <label class="sr-only" for="Phone">Password</label>
			    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
		    </div>
			<hr>
			<div class="form-group">
				<label for="FirstName"></label>
				<input type="text" class="form-control" id="FirstName" name="firstName" placeholder="First Name" required>
			</div>
			<div class="form-group">
				<label for="LastName"></label>
				<input type="text" class="form-control" id="LastName" name="lastName" placeholder="Last Name" required>
			</div>
			<hr>
			<div>
			    <label>Message</label>
			    <br>
			    <textarea class="form-control" name="message" rows="3" required></textarea>	
			    
			</div>
			<div class="switch">
				<input class="btn btn-default " type="submit" name="submit-contact" value="Submit">
			</div>
			
	    </form>
    </div>
	
</div>
<div class="container-azad map">
	<div class="content">
		<div class="address">
			<h3>Address :  </h3>
			<p>  M-520, Sector M, Ashiyana Colony, Lucknow, UttarPradesh, pincode: 226012  </p>	
		</div>
		<div class="email">
			<h3>Email : </h3>
		    <p>agoshbaranwal@gmail.com</p>
		</div>
		<div class="phone">
			<h3>Phone :   </h3>
		    <p>8340317789</p>
		</div>
	</div>
	 <!-- social links -->
	<div class="container-fluid padding">
		<div class="row text-center padding">
	    	<div class="col-12 social padding">
		        <a href="#"><i class="fab fa-facebook"></i></a>
		        <a href="#"><i class="fab fa-twitter"></i></a>
		        <a href="#"><i class="fab fa-google-plus-g"></i></a>
		        <a href="#"><i class="fab fa-instagram"></i></a>
		        <a href="#"><i class="fab fa-youtube"></i></a>
	        </div>
        </div>
    </div>	
</div>
<!-- site map -->
<div class="site-map">
	<footer >
		<div  id="foot"class="container">
			 <div class="row">
			 	<div class="col-sm-5">
			 		<div class="logo">
			 			<img style="width: 100%;" src="./image./index/purple.png">
			 		</div>
                	<h6 style="margin: 0 auto;">Address: Lorem ipsum dolor sit amet,eu quidam omnesque pro. Incum salutandi gubergren </h6>
			    </div>
			    <div class="col-sm-2 ">
			    	<h6 >COMPANY</h6>
			    	<a href="./index">Home Page</a> <br>
			    	<a href="#">Discover</a> <br>
			    	<a href="./about.php">About us</a>
			    </div>
			    <div class="col-sm-2 ">
			    	<h6 >INFORMATION</h6>
			    	<a href="./sign-in.php">Creat Accounts</a> <br>
			    	<a href="#">Careers</a>
			    </div>
			    <div class="col-sm-2 ">
			    	<h6 >LEGAL</h6>
			    	<a href="#">Privacy Policy</a> <br>
			    	<a href="#">Cookie Policy</a> <br>
			    	<a href="#">Terms of Usage</a>
			    </div>
			    <div class="col-sm-1">
			    </div>
			</div>	
		</div>
	</footer>
</div>
<!-- site map ends -->

</body>
</html>