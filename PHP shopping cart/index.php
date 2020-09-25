<?php
/*
Author: Keenan Irusan 16012269
*/
// include database configuration file
include 'dbConfig.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shopping Cart</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .container{padding: 50px;}
    .cart-link{width: 100%;text-align: right;display: block;font-size: 18px;}
	.logout{width: 100%;text-align: left;display: block;font-size: 18px;}
    </style>
</head>
</head>
<body>
<div class="container">
    <h1>Products</h1>
	<a href="Login.php" class="logout" title="Log out"><i class="glyphicon glyphicon-log-out"></i>Logout</a>
    <a href="viewCart.php" class="cart-link" title="View Cart"><i class="glyphicon glyphicon-shopping-cart"></i>View Cart</a>
	<a href="history.php" class="cart-link" title="View History"><i class="glyphicon glyphicon-eye-open"></i>View History of Purchases</a>
	
    <div id="products" class="row list-group">
        <?php
        //get rows query
        $query = $db->query("SELECT * FROM products ORDER BY id DESC LIMIT 20");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
        <div class="item col-lg-4">
            <div class="thumbnail">
                <div class="caption">
				<img src="products/<?php echo $row["Image"]; ?>" class="img-responsive" /><br />
                    <h4 class="list-group-item-heading"><?php echo $row["name"]; ?></h4>
                    <p class="list-group-item-text"><?php echo $row["description"]; ?></p>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="lead"><?php echo 'R'.$row["price"]; ?></p>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-success" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } }else{ ?>
        <p>Product(s) not found.....</p>
        <?php } ?>
    </div>
</div>
</body>
</html>