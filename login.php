<?php
require("common.php");
if (isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login | Mobile Store</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="style.css" rel="stylesheet">
       </head>

    <body>
        <?php include 'header.php'; ?>
        <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>LOGIN</h4>
                            </div>
                            <div class="panel-body">
                                <p class="text-warning"><i>Login to make a purchase</i><p>
                                <form action="login_submit.php" method="POST">
                                    <div class="form-group">
                                  Email:<input type="email" class="form-control"  placeholder="Email" name="e-mail" required = "true">
                                    </div>
                                    <div class="form-group">
                                  Password:<input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                    </div>
                                <div><center><a href="login_submit.php" type="submit" name="submit" class="btn btn-primary">Login</a></center></div><?php echo isset($_POST['error']); ?>
                                </form>
                            </div>
                            <div class="panel-footer"><p>Don't have an account? <a href="signup.php">Register</a></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php include 'footer.php'; ?>
    </body>
</html>
