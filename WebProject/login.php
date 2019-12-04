<?php include('process.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Dog World</title>
<style type="text/css">
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 50%;
}
input {
  width: 70%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
.btn {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
.header{
	font-family: calbri;
	float: right;
	background: rgba(0, 0, 0, 0.5);
	 color: #f1f1f1;
	 position: fixed;
}
	</style>
</head>
<body>
<!-- The video -->
<video autoplay muted loop id="myVideo">
  <source src="dogs/sunsetdogs.mp4" type="video/mp4">
</video>
  <div class="header">
  	<h2>Login</h2>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
  </div>
 
</body>
</html>