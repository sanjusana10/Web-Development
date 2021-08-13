<?php 
require 'common.php';
?>
 <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Mobile Store | Contact</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet">
            </head>
    <body style="padding-top: 50px;">
        <?php
        include 'header.php';
        ?>
		<div class="container" id="content">
		<h1>Contact</h1><hr>
		<p>This page is for our customer's to post their feedback and queries about our product and company.The queries regarding the product and feedback about our services from our customers are
		tken into our concern once we recieve your message through this following form.Customer's are kindly requested to send only valuabale messages.</p><hr><br>
			   
			   <div class="container-fluid decor_bg" id="content"><div id="left">
			               <div class="row"> 
			                     <div class="col-lg-12 col-lg-offset-2 col-md-12 col-md-offset-2">
				        <div class="panel panel-primary">
	                            <div class="panel-heading">FORM</div>
	                            <div class="panel-body">
								<form role="form" method="POST" action="contact_script.php">
                            <div class="form-group">
                           Name:<input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group" align="left">
                            Email:<input type="email" class="form-control"  placeholder="Email" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^"  name="email" required ="true"> 
                            </div>
							<div class="form-group" align="left">
							Message:<br><textarea name="comment" form="usrform" placeholder="Enter your text..."></textarea>
							</div>
							 <center> <div> <a href="contact_script.php" class="btn btn-primary" type="save" value="submit">Send</a></div><center>
                            </form>
			              </div></div></div>
                 		</div></div>
                           
						   
				<div id="right">
					<h2>Company's Information:</h2>
					<h3>Address:</h3>
					<p>100,Gandhi Road,<br>Nethaji nagar,New Delhi-01.</p>
					<h3>Phone:</h3>
					<p>91-000-24-789</p>
					<h3>Fax:</h3>
					<p>000-000-0000</p>
					<h3>Follow us:</h3>
					<p>Twitter,Facebook,LinkedIn as @mobilestore </p>
					</div>	
					</div>
	</div>
          <?php include 'footer.php' ?>
 </body>
</html> 