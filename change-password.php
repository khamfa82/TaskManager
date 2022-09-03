<?php
session_start();
if(!isset($_SESSION['auth']))
{

	$_SESSION['message']='Login to access Dashboard';
	header('location:index.php');
	exit(0);
}

include('includes/header.php');
include('config/dbconfig.php');
?>
<div class="py-5">
	<div class="container">
		<div class="row ">
			<div class="col-md-12">
				<?php include('message.php');?>
				<div class="card">
					<div class="card-header">
						<h4>Change Password</h4>
					</div>
					<div class="card-body">
						
						<form action="password_code.php" method="post">
                            <div class="row">
                        <div class="col-md-12 mb-3">
                       <label for="name">Old Password</label>
                          <input type="text" name="old_password"class="form-control" required placeholder="Old Password">
                        </div>
                        <div class="col-md-12 mb-3">
                       <label for="name">New Password</label>
                          <input type="text" name="new_password" class="form-control" required placeholder="New Password">
                        </div>
                        <div class="col-md-12 mb-3">
                       <label for="name">Confirm Password</label>
                          <input type="text" name="confirm_password" class="form-control" required placeholder="Confirm Password">
                        </div>
                        
                    <div class="col-md-12 mb-3">
                    <input type="hidden" name="change_pass" value="<?=$_SESSION['auth_user']['user_id'];?>">
                   <button type="submit" name="changePassword" class="btn btn-primary">Change Password</button>
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