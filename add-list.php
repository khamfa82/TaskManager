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
		<div class="row">
			<div class="col-md-12">
				<?php include('message.php');?>
				<div class="card">
					<div class="card-header">
						<h4>Create Tasklist</h4>
					</div>
					<div class="card-body">
						<form action="list_code.php" method="post">
                            <div class="row">
                        <div class="col-md-12 mb-3">
                       <label for="name">List Name</label>
                          <input type="text" name="name"class="form-control" required placeholder="Enter List Name">
                        </div>
                        <div class="col-md-12 mb-3">
                       <label for="desc">Description</label>
                          <input type="text" name="desc" placeholder="Enter Description" class="form-control" required>
                        </div>
                       
                      <div class="col-md-12 mb-3">
                          <button type="submit" name="addList" class="btn btn-primary">Save Record</button>
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