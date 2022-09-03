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
                               Edit List
                            </div>
                            <div class="card-body">
                                <?php
                                if(isset($_GET['id']))
                                {
                                    $list_id=$_GET['id'];
                                    $query="select * from tbl_list where id='$list_id'";
                                    $run=mysqli_query($con,$query);
                                   
                                    if(mysqli_num_rows($run)>0)
                                    {
                                        foreach($run as $list)
                                        {

                                            ?>

                            <form action="list_code.php" method="post">
                            <div class="row">
                                <input type="hidden" name="list_id" value="<?= $list['id'];?>">
                        <div class="col-md-12 mb-3">
                       <label for="name"> List Name</label>
                          <input type="text" name="name" value="<?= $list['listname'];?>" class="form-control" required>
                        </div>
                        <div class="col-md-12 mb-3">
                       <label for="name">Description</label>
                          <input type="text" name="desc" value="<?= $list['list_desc'];?>" class="form-control" required>
                        </div>
                        
                      <div class="col-md-12 mb-3">
                          <button type="submit" name="updateList" class="btn btn-primary">Update list</button>
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