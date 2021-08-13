<?php 
require 'common.php';
?>
 <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Mobile Store | About us</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet">
            </head>
    <body style="padding-top: 50px;">
        <?php
        include 'header.php';
        ?>
        <div class="container" id="content"><br>
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <h1>Welcome to our Mobile Store!</h1>
                <h2>Know about us!!</h2>
				</div>
				<hr>
				<h2>About Us</h2>
				<h3>Who we are?</h3>
				<p>We are a electronic ecommerce company with headquaters at New Delhi and Chennai.We are the largest start-up company with many entreprenuers investment.Our invester's are from all over India.
				Our company was established by Mr.CEO on 2010 at New Delhi.Later we extended our boundries all over India with lots of interested entreprenuers over India.
				We sell the best quality products in our website.Our engineer's built this user friendly website to give the best product to our each and every customer.</p>
				<br><br>
				          <h2>Our headquaters:</h2><hr>
						   <div class="row text-center">
			                  <div class="col-md-6 col-sm-6 ">
                          <div class="thumbnail">
                        <img src="images/New Delhi.png" alt="">
                        <div class="caption">
                            <h3><center>New Delhi</center></h3>
				       </div></div></div>
					   
					   <div Class="row text-center">
				 <div class="col-md-6 col-sm-6 ">
                          <div class="thumbnail">
                        <img src="images/Chennai.png" alt="">
                        <div class="caption">
                            <h3><center>Chennai</center></h3>
				       </div></div></div>
				       </div><br>
					   
					 <h2 align="left">Our Other Branches:</h2><hr>
						   <div class="row text-center">
			                <div class="col-md-6 col-sm-6">
                          <div class="thumbnail">
                        <img src="images/Mumbai.png" alt="">
                        <div class="caption">
                            <h3><center>Mumbai</center></h3>
				       </div></div> </div>
					   
                      <div class="row text-center">
					 <div class="col-md-6 col-sm-6">
                          <div class="thumbnail">
                        <img src="images/Calcutta.png" alt="">
                        <div class="caption">
                            <h3><center>Calcutta</center></h3>
				       </div></div></div>
                       </div>				   
					
	    
			 <?php include 'footer.php'; ?>
  </body>
</html>