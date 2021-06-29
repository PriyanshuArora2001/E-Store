
 <!-- Modal -->
  <div class="modal fade" id="loginmodal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
		<p>Don't have an account? <a href="./signup.php">Register</a></p>
          <form role="form" action="login_submit.php" method="POST">
            <div class="form-group">
              <input type="email" class="form-control"  name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>
              <button type="submit" class="btn btn-primary">Login</button>
          </form>
		<br><p class="pull-left"><a href="#">Forgot Password?</a></p><br>
        </div>
      </div>
    </div>
  </div> 
