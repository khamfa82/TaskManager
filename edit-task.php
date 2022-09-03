<?php
session_start();
if(!isset($_SESSION['auth']))
{

	$_SESSION['message']='Login to access Dashboard';
	header('location:index.php');
	exit(0);
}
 include('config/dbconfig.php');
include('includes/header.php');

?>
<div class="py-5">
	<div class="container">
		<div class="row ">
			<div class="col-md-12">
				<?php include('message.php');?>
				<div class="card">
					<div class="card-header">
						<h4>Edit Task</h4>
					</div>
					<div class="card-body">
						<form action="task_code.php" method="post">
                            <div class="row">
                        <div class="col-md-12 mb-3">
                       <label for="name">Task Name</label>
                          <input type="text" name="name"class="form-control" required>
                        </div>
                         <div class="col-md-12 mb-3">
                       <label for="desc">Description</label>
                          <input type="text" name="desc" class="form-control" required>
                        </div>
                          <div class="col-md-6 mb-3">
                       <label for="name">List Name</label>
                       <?php

                       $query="select * from tbl_list ";
								$run=mysqli_query($con,$query);

							  if(mysqli_num_rows($run)>0){

								?>
								<select name="list" required class="form-control">
                              <option value="">-- Select List --</option>
                            		<?php
                           foreach($run as $listitem){
                           	 ?>
                               <option value="<?= $listitem['id'];?>"><?= $listitem['listname'];?></option>
                          		<?php
                          		 }
                          		 ?>
                          </select>

								 <?php

							}
							else
							{
								?>
								<h5>No List Available</h5>
								<?php
							}

								?>
                          
                        </div>
                       
                            <div class="col-md-6 mb-3">
                       <label for="name">Priority</label>
                          <select name="priority" required class="form-control">
                              <option value="">--Select Priority--</option>
                               <option value="High">High</option>
                               <option value="Medium">Medium</option>
                               <option value="Low">Low</option>
                          </select>
                        </div>
                        <div class="col-md-6 mb-3">
                       <label for="name">Dead Line</label>
                          <input type="date" name="deadline"class="form-control" required>
                        </div>
                      <div class="col-md-12 mb-3">
                          <button type="submit" name="addTask" class="btn btn-primary">Update Record</button>
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