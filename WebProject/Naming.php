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
<link rel = "stylesheet" href = "boot.css">
	<link rel = "stylesheet" href = "css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
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
.sidenav {
  width: 260px;
  position: fixed;
  z-index: 1;
  top: 50px;
  left: 5px;
  background: #eee;
  overflow-x: hidden;
  padding: 8px 0;
}
.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #2196F3;
  display: block;
}
  .sidenav a:hover {
  color: #064579;
}
.main {
  margin-left: 270px; 
  font-size: 28px; 
  padding: 0px 10px;
}
#img1{
	position: fixed;
}
h1{
	background:#0000BF;
	font-style:italic;
	font-color:#fff;
}
</style>
</head>
<body>
<header style="">
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
<div class="sidenav">
        <a href="https://www.rover.com/blog/top-male-dog-names/">Male Dog Names</a>
        <a href="https://www.rover.com/blog/top-female-dog-names/">Female Dog Name</a>
        <a href="https://www.rover.com/blog/creative-dog-names/">Creative Dog Names</a>
		<a href="https://www.rover.com/blog/top-50-cute-dog-names-new-puppies-senior-dogs-alike/">Cute Dog Names</a>
	</div>
	<div class="main">
	<center>
<h1>Dog Names</h1>
</center>
<div class="container">
<div class="row ert">
	<div class="col-md-12">
<section>
		My secret? When I need to come up with dog name ideas I check out name lists for inspiration. I write down a list of all the names I like, 
and then move onto the hard part — finding one the whole family agrees on.
</section>

</div>
<hr>
<div class="row ert">
	<div class="col-md-16">
<h2>10 Top Dog Names for Males<h2>
	<ul>
<li> Charlie</li>

<li> Max</li>

<li> Buddy</li>

<li> Oscar</li>
<li> Milo</li>

<li>Archie</li>

<li> Ollie</li>

<li> Toby</li>

<li> Jack</li>
<li>Teddy</li>
</div>
	<div class="col-md-16">

<h2>10 Top Dog Names for Females</h2>
<li> Bella</li>

<li>Molly</li>

<li> Coco</li>

<li> Ruby</li>

<li> Lucy</li>

<li> Bailey</li>

<li> Daisy</li>

<li> Rosie</li>

<li> Lola</li>

<li> Frankie</li>
</div>
</div>
 </ul>
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