<?php
include('authentication.php');
include('includes/header.php');

?>
 <div class="container-fluid px-4">
<h1 class="mt-4"></h1>
 <ol class="breadcrumb mb-4">
 <li class="breadcrumb-item active">Dashboard</li>
 <li class="breadcrumb-item active">Users</li>
 </ol>
        <div class="row">
       <div class="col-md-12">

             <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               Edit User Account
                            </div>
                            <div class="card-body">
                                <?php
                                if(isset($_GET['id']))
                                {
                                    $user_id=$_GET['id'];
                                    $query="select * from users where id='$user_id'";
                                    $run=mysqli_query($con,$query);
                                   
                                    if(mysqli_num_rows($run)>0)
                                    {
                                        foreach($run as $user)
                                        {

                                            ?>

                            <form action="user_code.php" method="post">
                            <div class="row">
                                <input type="hidden" name="user_id" value="<?= $user['id'];?>">
                        <div class="col-md-6 mb-3">
                       <label for="name">Name</label>
                          <input type="text" name="name" value="<?= $user['name'];?>" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                       <label for="name">Email</label>
                          <input type="text" name="email" value="<?= $user['email'];?>" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                       <label for="name">Username</label>
                          <input type="text" name="username" value="<?= $user['username'];?>" class="form-control" required>
                        </div>
                     
                        <div class="col-md-6 mb-3">
                       <label for="name">Role</label>
                          <select name="role" required class="form-control">
                              <option value="">--Select Role--</option>
                               <option value="1" <?= $user['role']=='1'? 'selected':''?>>Admin</option>
                                <option value="0" <?= $user['role']=='0'? 'selected':''?>>User</option>
                          </select>
                        </div>
                        <div class="col-md-6 mb-3">
                       <label for="name">Status</label>
                          <input type="checkbox" name="status" value="<?= $user['role']=='0'? 'selected':''?>" name="status" width="70px" height="70px">
                        </div>
                      <div class="col-md-12 mb-3">
                          <button type="submit" name="updateUser" class="btn btn-primary">Update User</button>
                        </div>
                        </div>
                  </form>


                                            <?php
                                        }
                                    }
                                }

                                ?>
                        

                            </div>
                        </div>
        </div>
 </div>
 <?php
include('includes/footer.php');
include('includes/script.php');
?>