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
?>
<!DOCTYPE html>
<html>
<head>
	<title>blog</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="blogs.css">
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
	    	<li> <a class="active" href="./blogs.php">BLOGS</a></li>
	    	<li> <a href="./contact-us.php">CONTACT US</a></li>
	    	<li> <a href="./account.php">ACCOUNT</a></li>
	    	<li id="signIn"> <a href="./sign-in.php">SIGN IN</a></li>
        </ul>
    </div>
  </div>
</nav>
<!-- nav bar ends -->	

<div id='container'>
	<div class='item1'>
		<div class="blog-links">
		    <a href="./about.php">Latest</a>
		    <a href="./features.php">Brand Positioning</a>
		    <a class="active" href="./blogs.php">Social Media Marketing</a>
		    <a href="./contact-us.php">Content Marketing</a>
		    <a href="./account.php">Search Engine...</a>
		    <hr>
		</div>
		<?php
			$sql = "SELECT * FROM `blogs` ORDER BY `date-created` DESC LIMIT 4";
			$result = $db->query($sql);

			while($blog = $result->fetch(PDO::FETCH_ASSOC)) {
		?>
			<div class="row block">
			    <div class="col-md-12">
			    	<a class="disable-link-styles" href="blog.php?id=<?= $blog['id'] ?>">
				        <div class="card">
				        	<div class="thumbnail card">
				        		<div class="head">
					  		    	<div class="logo">
					  					<img style="width: 100%;" src="./image/blogs/new logo2.png">

					  				</div>
					  				<div>
						  				<h5><?= $blog['author'] ?></h5>
						  				<p><?= $blog['date-created'] ?></p>
					  		        </div>
					                </div>
				          		<img class="card-img-top" src="<?= $blog['thumbnail'] ?>">
				          		<div class="card-body">
					            	<h4 class="card-title"><?= $blog['title'] ?></h4>
					            	<p class="card-text"><?= substr($blog['content'], 0, 300) ?></p>
				                </div>
				            </div>  
				        </div> 
				    </a>
			    </div>
			</div>    	
		<?php
			}
		?>	
	</div>     


    <div class='item2'>
	  	<h6>Trending Post</h6>
	    <div class="side-content">
			<?php
				$sql = "SELECT * FROM `blogs` ORDER BY `date-created` DESC LIMIT 4, 20";
				$result = $db->query($sql);

				while($blog = $result->fetch(PDO::FETCH_ASSOC)) {
			?>
			<a class="disable-link-styles" href="blog.php?id=<?= $blog['id'] ?>">
		    	<div row>
		    		<div class="col-md-3 ">
		    			<div class="oval" style="background: url('<?= $blog['thumbnail'] ?>');">
		    
		    	        </div>
		    		</div>
		    		<div class="col-md-9">
		    			<div class="text">
		    				<p>
								<?= $blog['title'] ?>		    			        
				    		</p>
		    	        </div>	
		    		</div>	
		    	</div>
		    </a>	
	            <br>
	            <br>
	            <hr>
            <?php
            	}
            ?>
	    </div>
    </div>
</div>


<!-- site map -->
<div class="site-map">
	<footer >
		<div  id="foot"class="container">
			 <div class="row">
			 	<div class="col-sm-5 pink">
			 		<div class="logo">
			 			<img style="width: 100%;" src="./image./index/purple.png">
			 		</div>
                	<h6 style="margin: 0 auto;">Address: Lorem ipsum dolor sit amet,eu quidam omnesque pro. Incum salutandi gubergren </h6>
			    </div>
			    <div class="col-sm-2 pink">
			    	<h6 class="blue">COMPANY</h6>
			    	<a href="./index.php">Home Page</a> <br>
			    	<a href="#">Discover</a> <br>
			    	<a href="./about.php">About us</a>
			    </div>
			    <div class="col-sm-2 pink">
			    	<h6 class="blue">INFORMATION</h6>
			    	<a href="./sign-in.php">Creat Accounts</a> <br>
			    	<a href="#">Careers</a>
			    </div>
			    <div class="col-sm-2 pink">
			    	<h6 class="blue">LEGAL</h6>
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