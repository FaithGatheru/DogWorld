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
	<link rel = "stylesheet" href = "css/bootstrap.min.css"><style>
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
  width: 230px;
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
  margin-left: 240px; 
  font-size: 28px; 
  padding: 0px 10px;
}
#img1{
	position: fixed;
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
        <a href="https://www.rover.com/blog/tag/german-shepherd/">German Shepherd</a>
        <a href="https://www.rover.com/blog/tag/poodle/">Poodle</a>
        <a href="https://www.rover.com/blog/tag/chihuahua/">Chihuahua</a>
		<a href="https://dogtime.com/dog-breeds/profiles">Others</a>
	<div id="img1"><img width="230px" height="" src="dogs/bred.png" class="rounded float-left"></div>
	</div>
	<div class="main">
	<div class="row">
		<div class="col-md-12">
	<h1>Dog Breed Center</h1>
<i><span>Choosing a purebred is a great way to know what a dog's looks and personality might be like, but it's never a guarantee!</span><i>
<i>Even within breeds, there's enormous variety in the way a dog acts and reacts to the world around them. Those differences can be due to how much socialization and handling they received as a youngster, how well the owner trained them after taking them home, and--of course--the genetic luck of the draw. In the end, your dog's preferences and personality are as individual as you are--and if you can accept that, 
you're bound to enjoy each other's companionship for life.<i>

<h2>What's a dog breed?</h2>

<p>People have been breeding dogs since prehistoric times. The earliest dog breeders used wolves to create domestic dogs. From the beginning, humans purposefully bred dogs to perform various tasks. Hunting, guarding, and herding are thought to be among the earliest jobs eagerly performed by the animal destined to be called “man’s best friend.”

For thousands of years, humans bred dogs toward the physical and mental traits best suited for the work expected of them. The sleek Greyhound types bred to chase fleet-footed prey, and the huge mastiff types used as guard dogs and warriors, are two ancient examples of dogs bred for specific jobs.

As humans became more sophisticated, so did their dogs. Eventually, there emerged specific breeds of dogs, custom-bred to suit the breeders’ local needs and circumstances. The Greyhound, for instance, was the foundation type for the immense Irish Wolfhound and the dainty Italian Greyhound. All three have a distinct family resemblance, but you’d never mistake one for another.

So, then, when is a breed a breed and not just a kind or type of dog? The simplest way to define a breed is to say it always “breeds true.” That is, breeding a purebred Irish Setter to another purebred Irish Setter will always produce dogs instantly recognizable as Irish Setters.

Each breed’s ideal physical traits, movement, and temperament are set down in a written document called a “breed standard.” For example, the breed standard sets forth the traits that make a Cocker Spaniel a Cocker Spaniel and not a Springer Spaniel.<i>
</div>
		<div class="col-md-6">
		<img class="myImage" id="riif" src="dogs/alpha.jpg" alt="anImage">
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


</p>
</div>
</body>
</html>