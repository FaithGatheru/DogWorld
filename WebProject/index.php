<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel = "stylesheet" href = "boot.css">
	<link rel = "stylesheet" href = "css/bootstrap.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background image: url("Cute.png");
  background-size: cover;
  background-repeat: no-repeat;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>
<header>
<div class="topnav" id="myTopnav">
  <a href="index.php" class="active">Home</a>
  <a href="Breeds.php">Dog Breeds</a>
  <a href="Naming.php">Dog Names</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
  	<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
	   <?php endif ?>
  	<!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<strong style="color: white;">Welcome <?php echo $_SESSION['username']; ?></strong>
		<a href="index.php?logout='1'" type="btn" style="color: red; ">  logout </a>
    <?php endif ?>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</header>
 	<div class="row One">
			<div class="col-md-12">

 <i>The precise origin of our canine companions is mired in controversy. But a new study suggests that dogs emerged from not one but two different populations of ancient wolves. What’s more, this dual domestication happened on opposite sides of the Eurasian continent.<i>

<i>Dogs first appeared about 15,000 years ago, long before the advent of agriculture, and represent the earliest known domestic animal. They emerged from ancient wolves, but scientists aren’t entirely sure if this seminal domestication event happened in Europe or Asia. A new study published in Science suggests there’s truth to both of these claims.

<i>Previous studies have concluded that dogs were likely domesticated just once, but the timing and origin of this event has been hotly debated. Complicating the matter is conflicting archaeological evidence showing that early dogs resided on either side of the Eurasian continent many thousands of years ago. The new study shows that dogs were likely domesticated on at least two different occasions and in two different parts of the world.
 </div>
</div>
 <!-- container class -->
	<div class="container">
		<!-- jumbotron component : can be fluid(full span) too-->
		<!-- <form method="post" action="process.php">
		  	<div class="form-group">
			    <label for="email">Email address</label>
			    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  	</div>
		  	<div class="form-group">
		    	<label for="password">Password</label>
		  		<input type="password" name="password" class="form-control" id="password" placeholder="Password">
		  	</div>
		  	<button type="submit" class="btn btn-primary">Submit</button>
		</form> -->
			<div class="row One">

				
				<div class="col-md-4 imageCol">
						
						<img class="myImage" id="riif" src="dogs/chichi.jpg" alt="anImage">
						<h2>Smooth Coa chihuahua</h2>
				</div>
				<div class="col-md-4 imageCol">
					
						<img class="myImage" id="riif" src="dogs/apple.jpg" alt="anImage">
						<h2>Apple head chihuahua</h2>					
				</div>
				<div class="col-md-4 imageCol">
					
						<img class="myImage" id="riif" src="dogs/dear.jpg"  alt="anImage">
						 <h2>Dear head chihuahua</h2> 
					
				</div>
			
			</div>
		
	</div>
	</div>
			<hr>
			<div class="row One">

				
				<div class="col-md-4 imageCol">
						
						<img class="myImage" id="riif" src="dogs/long.jpg" alt="anImage"><h2>Long Haired German Shepherd</h2>
				</div>
				<div class="col-md-4 imageCol">
					
						<img class="myImage" id="riif" src="dogs/short.jpg" alt="anImage">
<h2>German Shepherd Coat</h2>					
				</div>
				<div class="col-md-4 imageCol">
					
						<img class="myImage" id="riif" src="dogs/tail.jpg" alt="anImage">
						 <h2>Corgi</h2> 
					
				</div>
			
			</div>
		
	</div>

<center>
	
<div class="footer">
		<div class="jumbotron-fluid">
			<br>
			<h5>social</h5>
			<a href="https://www.facebook.com/pages/category/Community/Type-of-Dogs-260793854261019/" target="_blank"><img src="https://www.nighthawkcustom.com/media/wysiwyg/social-icons/facebook.png" alt="Facebook" /></a>
          <a href="https://www.instagram.com/dogsofinstagram/?hl=en" target="_blank"><img src="https://www.nighthawkcustom.com/media/wysiwyg/social-icons/instagram.png" alt="Instagram" /></a>
          <a href="https://twitter.com/hashtag/dogs?lang=en" target="_blank"><img src="https://www.nighthawkcustom.com/media/wysiwyg/social-icons/twitter.png" alt="Twitter" /></a>
          <a href="https://www.pinterest.com/search/pins/?rs=ac&len=2&q=dog%20types&eq=dog%20ty&etslf=11943&term_meta[]=dog%7Cautocomplete%7C0&term_meta[]=types%7Cautocomplete%7C0" target="_blank"><img src="https://www.nighthawkcustom.com/media/wysiwyg/social-icons/pinterest.png" alt="Pinterest" /></a>
		</div>
		</center>
	</div>
	
    </div>
</center>
<script type="text/javascript" src = "js/jquery.js"></script>
<script type="text/javascript" src = "js/bootstrap.min.js"></script>
</body>
</html>