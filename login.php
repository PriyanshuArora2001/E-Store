<?php
require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <title>E-Store|Login</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/css.css" type="text/css">
    </head>
    <body>
        
        <?php
		include 'includes/header.php';
		?>
		
		<div class="container">
            <div class="row row_style">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p>
							<?php
                                if(isset($_GET["error"])){
                                  echo $_GET['error'];
                                }
                            ?>
                            <form action="login_submit.php" method="POST" >
                                <div class="form-group">
                                    <input type="email"  class="form-control" placeholder="Email" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="password"  class="form-control" placeholder="Password" name="password">
                                </div>
								<button class="btn btn-primary">Login</button>
							</form>
                        </div>
                        <div class="panel-footer">Don't have an account?<a href="signup.php">Register</a></div>
                    </div>
                </div>
            </div>
        </div>
        
        

        
    </body>
</html>
