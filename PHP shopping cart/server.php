<?php
/*
Author: Keenan Irusan 16012269
*/
session_start();

//Declaring variables
$fname = "";
$lname = "";
$email = "";
$errors = array(); 

$db = mysqli_connect("localhost","root","","shop");//Database connection 

//Logging in 
if (isset($_POST['login_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']); //Email from the database
  $password = mysqli_real_escape_string($db, $_POST['password']);//Password from database

  if (empty($email)) {
    array_push($errors, "email is required");
  } //If the fields are blank 
  if (empty($password)) {
    array_push($errors, "Password is required");
  }
  //Checks if there is any errors
  if (count($errors) == 0) {
    $password = md5($password);//Checks if password matches hashed password
    $query = "SELECT*FROM customers WHERE email='$email' AND password='$password'";//Select query to view table 
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['email'] = $email;
      $_SESSION['success'] = "You are now logged in";//Successful login 
      header('location: Index.php');//Goes to this page after logging in 
    }else {
      array_push($errors, "Wrong email/password combination");//When details entered is incorrect 
    }
  }
}

//Registering a new user 
if (isset($_POST['reg_user'])) {
  //Receives all inputs and saves it in the database 
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  //Checks if form has any empty fields and tells user to fill it out 
  if (empty($fname)) { array_push($errors, "fname is required"); }
  if (empty($lname)) { array_push($errors, "Lname is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");//If the two passwords are not the same 
  }

  //Checks if the user already exists 
  $user_check_query = "SELECT * FROM customers WHERE email='$email' OR password='$password' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $customers = mysqli_fetch_assoc($result);
  
  if ($customers) { //if user exists
    if ($customers['email'] === $email) {
      array_push($errors, "Email already exists");
    }

    if ($customers['password'] === $password) //if password already exists 
	{
      array_push($errors, "password already exists");
    }
  }

  //Registers user and saves his/her details within the database 
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password into a hashed password 

  	$query = "INSERT INTO customers (fname, lname, email, password) 
  			  VALUES('$fname','$lname','$email', '$password')"; //Insert query 
  	mysqli_query($db, $query);
  	$_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: Index.php');
  }
}

?>
