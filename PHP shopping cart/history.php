<!DOCTYPE html>
<?php
/*
Author: Keenan Irusan 16012269
*/
$mydb = mysqli_connect("127.0.0.1","root","","shop"); //connects to the database



$sql = "SELECT c.id, c.customer_id, c.total_price, d.product_id, d.quantity
		FROM orders c, order_items d
		WHERE d.order_id = c.id"; //SQL query to select table 
$sql2 = "SELECT * FROM order_items";
$records = mysqli_query($mydb, $sql);

?>
<html>
<head>
<meta charset="utf-8">
<title>History</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>

<h1>History of User</h1>

<table width="800" border="1" cellspacing="2">
<tr>
<th><font color = 'Red'>Order ID</font></th>
<th><font color = 'Red'>Customer ID</font></th>
<th><font color = 'Red'>Product ID</font></th>
<th><font color = 'Red'>Price</font></th>
<th><font color = 'Red'>Quantity</font></th>
</tr> <!-- Headings of the tables -->

<?php
while($items=mysqli_fetch_assoc($records))
{
	echo "<tr>";
	echo "<td>".$items['id']."</td>";
	echo "<td>".$items['customer_id']."</td>";
	echo "<td>".$items['product_id']."</td>";
	echo "<td>".$items['total_price']."</td>";
	echo "<td>".$items['quantity']."</td>";
	echo "<tr>"; //Displays the table within the database
}
?>

<p><a href="index.php">Back to Shop</a></p>
</table>
</body>
</html>