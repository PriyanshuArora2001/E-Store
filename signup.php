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
        <title>E-Store|Signup</title>
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
            <div class="row row_style1">
			<div class="col-xs-12 col-md-6">
				<div class="row">
					<div class="col-xs-8 col-xs-offset-2">
						<img src="img/7.jpg" class="img1">
					</div>
				</div>
			</div>
				<div class="col-xs-12 col-md-6">
				<div class="row">
                <div class="col-xs-10 col-xs-offset-1">
                    <h1> SIGN UP </h1>
                    <form action="signup_script.php" method="POST">
                        <div class="form-group">
                            <input type="text"  class="form-control" placeholder="Name" name="name" pattern="[A-Za-z-0-9]+\s[A-Za-z-'0-9]+" required>
                        </div>
                        <div class="form-group">
                            <input type="email"  class="form-control" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
							<?php
                                if(isset($_GET["m1"])){
                                  echo $_GET['m1'];
                                }
                            ?>
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" placeholder="Password" name="password" pattern=".{6,}" required>
                        </div>
                        <div class="form-group">
                            <input type="tel"  class="form-control" placeholder="Contact" name="contact" maxlength="10" size="10" required>
							<?php
                                if(isset($_GET["m2"])){
                                  echo $_GET['m2'];
                                }
                            ?>
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" placeholder="City" name="city">
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" placeholder="Address" name="address">
                        </div>
                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div></div></div>
            </div>
        </div>
        
        
        
    </body>
</html>
