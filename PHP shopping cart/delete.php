<?php
/*
Author: Keenan Irusan 16012269
*/

require('db.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM products WHERE id=$id"; //Delete the record selected
$result = mysqli_query($con,$query);
header("Location: view.php"); 
?>