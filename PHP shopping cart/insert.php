<?php
/*
Author: Keenan Irusan 16012269
*/
 
require('db.php');

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$name =$_REQUEST['name'];
$description = $_REQUEST['description'];
$price = $_REQUEST["price"];
$ins_query="insert into products (`name`,`description`,`price`) values ('$name','$description','$price')";//SQL query to insert new record
mysqli_query($con,$ins_query);
$status = "New Record Inserted Successfully.</br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> | <a href="view.php">View Records</a> | <a href="logout.php">Logout</a></p>

<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="name" placeholder="Enter Name of Product" required /></p>
<p><input type="text" name="description" placeholder="Enter description" required /></p>
<p><input type="text" name="price" placeholder="Enter Price" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>

<br /><br /><br /><br />

</div>
</div>
</body>
</html>
