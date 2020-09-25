<?php
/*
Author: Keenan Irusan 16012269
*/
require('db.php');
$id=$_REQUEST['id'];
$query = "SELECT * from products where id='".$id."'"; 
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> | <a href="insert.php">Insert New Record</a> | <a href="logout.php">Logout</a></p>
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$name =$_REQUEST['name'];
$description = $_REQUEST['description'];
$price = $_REQUEST["price"];
$update="update products set name='".$name."', description='".$description."', price='".$price."' where id='".$id."'"; //SQL to update selected row
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br><a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="name" placeholder="Enter Name of Product" required value="<?php echo $row['name'];?>" /></p>
<p><input type="text" name="description" placeholder="Enter description" required value="<?php echo $row['description'];?>" /></p>
<p><input type="text" name="price" placeholder="Enter Price" required value="<?php echo $row['price'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>

<br /><br /><br /><br />
</div>
</div>
</body>
</html>
