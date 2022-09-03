<?php
session_start();

include('config/dbconfig.php');


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Task Manager</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <!--<link href="font-awesome/css/font-awesome.css" rel="stylesheet">-->
         <script src="js/all.js"></script>
    </head>
    <body class="sb-nav-fixed">
<div class="py-5">
	<div class="container">
		<div class="row justify-content-center ">
			<div class="col-md-5">
				<?php include('message.php');?>
				<div class="card">
					<div class="card-header">
						<img class="img-fluid center-block d-block mx-auto" alt="Responsive image" src="images/shipco.png" width="100px" height="100px">
						<h4 class="d-flex justify-content-center">Task Management System</h4>
					</div>
					<div class="card-body">
						<form action="logincode.php" method="post">

					<div class="mb-3">
					  <label for="email" class="form-label">Email address</label>
					  <input type="email" name="email" class="form-control" id="" placeholder="Email address">
					</div>
					<div class="mb-3">
					  <label for="password" class="form-label">Password</label>
					  <input type="password" name="password" class="form-control" id="" placeholder="Enter Password">
					</div>
					<div class="mb-3">
					  <button type="submit" class="btn btn-primary" name="login_btn" id="">Login</button>
					</div>

	                 </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
//include('includes/footer.php');
include('includes/script.php');
?>						