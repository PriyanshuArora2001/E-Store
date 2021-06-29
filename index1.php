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
        <title>E-Store</title>
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
        
        <div class="container-fluid"><br><br><br><br>
			<div class="row">
                        <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Mobile 1</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/8.jpg">
                                        <div class="caption">
											<p>Apple iPhone 12&12 Mini 64GB. Rs.70,000</p>
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                </div>
                        
							</div>	
                        </div>

                        <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Mobile 2</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/11.jpg">
                                        <div class="caption">
											<p>Apple iPhone 12 Pro&Pro Max 128 GB. Rs.1,58,000</p>
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                </div>
                        
							</div>	
                        </div>

                         <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Mobile 3</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/12.jpg">
                                        <div class="caption">
											<p>Apple iPhone SE 2020 64 GB. Rs.36,000</p>
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                </div>
                        
							</div>	
                        </div>
                    </div>
				</div>
				
				<div class="container-fluid">
					<div class="row">
                        <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Mobile 4</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/1.jpg">
                                        <div class="caption">
											<p>Apple iPhone X 64GB. Rs.70,000</p>
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                </div>
                        
							</div>	
                        </div>

                        <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Mobile 5</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/2.jpg">
                                        <div class="caption">
											<p>Apple iPhone XS 64 GB. Rs.88,000</p>
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                </div>
                        
							</div>	
                        </div>

                         <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Mobile 6</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/3.jpg">
                                        <div class="caption">
											<p>Apple iPhone XR 64 GB. Rs.53,000</p>
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                </div>
                        
							</div>	
                        </div>
                    </div>
				</div>
					
				<div class="container-fluid">
					<div class="row">
                        <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Mobile 7</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/4.jpg">
                                        <div class="caption">
											<p>Apple iPhone 11 64 GB. Rs.70,000</p>
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                </div>
                        
							</div>	
                        </div>

                        <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Mobile 8</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/5.jpg">
                                        <div class="caption">
											<p>Apple iPhone 11 Pro 64 GB. Rs.1,10,000</p>
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                </div>
                        
							</div>	
                        </div>

                        <div class="col-sm-4">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4>Mobile 9</h4>
								</div>
							
								<div class="thumbnail">
                                    <img src="img/6.jpg">
                                        <div class="caption">
											<p>Apple iPhone 11 Pro Max 64 GB. Rs.1,30,000</p>
											<button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                </div>
                        
							</div>	
                        </div>
						
                    </div>
				</div>
                
        
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
