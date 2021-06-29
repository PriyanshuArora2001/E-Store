<footer>
    <div class="container">
        <div class="row">
          
			<?php
				if(isset($_SESSION["email"])){ 
			?>
				<div class="col-sm-2 col-sm-offset-3">
				  <h3>Information</h3>
					<p><a href="about.php"><span style="color:white">About Us</span></a></p>
					<p><a href="contact.php"><span style="color:white">Contact Us</span></a></p>
				</div>
				<div class="col-sm-3 col-sm-offset-2">
				  <h3>Contact Us</h3>
					<p>CONTACT No.&nbsp;&nbsp;&nbsp;&nbsp;&#43;91&#45;123&#45;000000</p>
				</div>
			<?php
				}else{
			?>
				<div class="col-sm-2">
				  <h3>Information</h3>
					<p><a href="about.php"><span style="color:white">About Us</span></a></p>
					<p><a href="contact.php"><span style="color:white">Contact Us</span></a></p>
				</div>
				<div class="col-sm-2 col-sm-offset-3">
				  <h3>My Account</h3>
					<p><a href="#" data-toggle="modal" data-target="#loginmodal" ><span style="color:white">Log In</span></a></p>
					<p><a href="signup.php"><span style="color:white">Sign Up</span></a></p>
				</div>

				<div class="col-sm-3 col-sm-offset-2">
				  <h3>Contact Us</h3>
					<p>CONTACT No.&nbsp;&nbsp;&nbsp;&nbsp;&#43;91&#45;123&#45;000000</p>
				</div>
			<?php
				}
			?>
        </div>
        
    </div>
</footer>
