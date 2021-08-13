<?php
require("common.php");
?>

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Mobile Store</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet">
            </head>
    <body style="padding-top: 50px;">
        <?php
        include 'header.php';
		include 'check-if-added.php';
        ?>
        <div class="container" id="content">
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <h1>Welcome to our Mobile Store!</h1>
                <p>We have the best Mobiles with more affordable prices.</p>
             </div>
            <hr>

            <div class="row text-center" id="products">
			       <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/Nokia 7.2.png" alt="">
                        <div class="caption">
                         <center><h3>Nokia 7.2</h3>
                            <p>Price: Rs. 18500.00 </p></center>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                                <?php
                            } else {
                                  if (check_if_added_to_cart(1)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
               
			   
                   <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/Oneplus 7T.png" alt="">
                        <div class="caption">
                            <center><h3>Oneplus 7T</h3>
                            <p>Price: Rs. 35000.00 </p></center>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(2)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
			  
			       <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/Oppo Reno2.png" alt=" ">
                        <div class="caption">
                           <center><h3>Oppo Reno2</h3>
                            <p>Price: Rs. 23000.00 </p></center>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(3)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
		</div>
                  
				   <div class="row text-center" id="products">
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/Redmi.png" alt="">
                        <div class="caption">
                            <center><h3>Redmi</h3>
                            <p>Price: Rs. 12000.00 </p></center>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                                <?php
                            } else{
                                if (check_if_added_to_cart(4)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
				

                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/Samsung Galaxy A10.png" alt="">
                        <div class="caption">
                            <center><h3>Samsung Galaxy A10</h3>
                            <p>Price: Rs. 15000.00 </p></center>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(5)) {
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
				
				     <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                        <img src="images/Samsung M13.png" alt="">
                        <div class="caption">
                            <center><h3>Samsung M13</h3>
                            <p>Price: Rs. 35000.00 </p></center>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p>
                                <?php
                            } else {
                                if (check_if_added_to_cart(6)) { 
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
	       </div>
	  </div>
        <?php
        include 'footer.php';
        ?>
   
    </body> 
</html>