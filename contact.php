<?php
  require("includes/common.php");
?>

<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <title>E-Store|Contact Us</title>
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
        
        <div class="container"><br><br><br><br>
			<div class="row">
				<div class="col-sm-10">
				  <h1>LIVE SUPPORT</h1>
				  <h3>24 hours|7 days a week| 365 days a year Live Technical Support</h3>
				  <div>
					 <p class = "text-justify">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. There are many variations of passages of Lorel Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
				  </div>
				</div>
				<div class="col-sm-2">
				 <img align="right" src="img/contact.png" alt="contact us">
				</div>
			</div><br>
    

			<div class="row">
				<div class="col-sm-8">
					<h2>CONTACT US</h2>
					
					<form action="contact_script.php" method="POST">
					<?php
                        if(isset($_GET["m"])){
                            echo $_GET['m'];
                           }
                    ?>					
						<div class="form-group">
							<input type="text" name="name" class="form-control" required="required" placeholder="Name" >
						</div>
						
						<div class="form-group">
							<input type="email" name="email" class="form-control" required="required" placeholder="Email">
						</div>
						
						<div class="form-group">
							<textarea name="message" id="message" required="required" class="form-control" rows="5" placeholder="Your Message Here"></textarea>
						</div>
								
						<div class="form-group">
							<input type="submit" name="submit" class="btn btn-primary" value="Submit">
						</div>
					</form>
				</div>
							
				<div class="col-sm-4">
				   <h2>Contact Information:</h2>
					<p>500 Lorem Ipsum Dolar Sit,</p>
					<p>22-56-3-5 Sit Amet, Lorem,</p>
					<p>USA</p>
					<p>Phone:(00) 222 555 3333</p>
					<p>Fax:(000) 222 55 33 6</p>
					<p>Email: info@estore.com</p>
					<p>Follow on: Facebook, Twitter</p>		
				</div>
			</div>
		</div>
        <?php include 'includes/footer.php'; ?>
        
    </body>
</html>
