<?php include('server.php') 
/*
Author: Keenan Irusan 16012269
*/
?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Name</label> 
  	  <input type="text" name="fname" value="<?php echo $fname; ?>"> <!-- Field to enter first name -->
  	</div> 
    <div class="input-group">
      <label>Lastname</label>
      <input type="Lastname" name="lname" value="<?php echo $lname; ?>"> <!-- Field to enter last name -->
    </div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>"> <!-- Field to enter email -->
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1"> <!-- Field to enter password -->
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2"> <!-- Field to confirm password -->
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button> <!-- Button to submit entered details -->
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a> <!-- Link to login page if already in the database -->
  	</p>
  </form>
</body>
</html>