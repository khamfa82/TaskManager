<?php
session_start();
if(!isset($_SESSION['auth']))
{

	$_SESSION['message']='Login to access Dashboard';
	header('location:index.php');
	exit(0);
}

include('includes/header.php');

?>
<div class="py-5">
	<div class="container">
		<div class="row ">
			<div class="col-md-12">
				<?php include('message.php');?>
				<div class="card">
					<div class="card-header">
						<h4>Create User Account</h4>
					</div>
					<div class="card-body">
						<form action="user_code.php" method="post">
                            <div class="row">
                        <div class="col-md-6 mb-3">
                       <label for="name">Name</label>
                          <input type="text" name="name"class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                       <label for="name">Email</label>
                          <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                       <label for="name">Username</label>
                          <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                       <label for="name">Password</label>
                          <input type="password" name="password" class="form-control" required>
                        </div>
                         <div class="col-md-6 mb-3">
                       <label for="name">Confirm Password</label>
                          <input type="password" name="cpassword" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                       <label for="name">Role</label>
                          <select name="role" required class="form-control">
                              <option value="">--Select Role--</option>
                               <option value="1">Admin</option>
                                <option value="0">User</option>
                          </select>
                        </div>
                        <div class="col-md-6 mb-3">
                       <label for="name">Status</label>
                          <input type="checkbox" name="status" name="status" width="70px" height="70px">
                        </div>
                      <div class="col-md-12 mb-3">
                          <button type="submit" name="addUser" class="btn btn-primary">Register User</button>
                        </div>
                        </div>
                  </form>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include('includes/footer.php');
include('includes/script.php');
?>