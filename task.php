<?php
include('authentication.php');
include('includes/header.php');

?>
 <div class="container-fluid px-4">
<h1 class="mt-4"></h1>
 <ol class="breadcrumb mb-4">
 <li class="breadcrumb-item active">Dashboard</li>
 <li class="breadcrumb-item active">Tasks</li>
 </ol>
        <div class="row">
       <div class="col-md-12">
            <?php include('message.php'); ?>
             <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               Tasks
                                <a href="add-task.php" class="btn btn-primary btn-sm float-end">Create Task </a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                <table id="myDataTable" class="table table-bordered-striped">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Task Name</th>
                                            <th>Priority</th>
                                            <th>Deadline</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $query="select * from tbl_task";
                                    $run=mysqli_query($con,$query);
                                    if(mysqli_num_rows($run)>0){

                                        foreach($run as $row){
                                            ?>
                                            <tbody>
                                        <tr>
                                            <td><?= $row['id'];?></td>
                                            <td><?= $row['task_name'];?></td>
                                            <td><?= $row['priority'];?></td>
                                            <td><?= $row['deadline'];?></td>
                                            <td width="15%">
                                   
                                    <form action="task_code.php" method="post">
                                         <a href="edit-task.php?id=<?= $row['id'];?>" class="btn btn-success btn-sm ">Edit</a>
                            <button type="submit" name="delete_task" value="<?=$row['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                            </td>
                                        </tr>
                                         </tbody>


                                            <?php

                                        }

                                    }
                                    else{

                                        ?>
                                      <tr>
                                        <td colspan='6'>No Record Found</td>
                                      </tr>
                                      <?php
                                    }

                                    ?>
                                    
                                </table>
                                </div>
                            </div>
                        </div>
        </div>
 </div>
 <?php
include('includes/footer.php');
include('includes/script.php');
?>