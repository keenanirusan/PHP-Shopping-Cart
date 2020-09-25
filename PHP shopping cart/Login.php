<?php include('server.php') 
/*
Author: Keenan Irusan 16012269
*/
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Email</label>
  		<input type="text" name="email" > <!-- Field to enter email address -->
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password"> <!-- Field to enter password -->
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button> <!-- Button to login -->
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a> <!-- Link to registration page -->
  	</p>
	<p>
		<br>Or if Admin <a href="Admin.php" class="button">Admin Login</a>
	</p>
  </form>
</body>
</html>