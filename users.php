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
            <?php include('message.php'); ?>
             <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                View Users
                                <a href="add-user.php" class="btn btn-primary btn-sm float-end">Create User account</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                <table id="myDataTable" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $query="select * from users";
                                    $run=mysqli_query($con,$query);
                                    if(mysqli_num_rows($run)>0){

                                        $i=0;
                                        foreach($run as $row){
                                            $i++;
                                            ?>
                                            <tbody>
                                        <tr>
                                            <td><?= $i;?></td>
                                            <td><?= $row['name'];?></td>
                                            <td><?= $row['email'];?></td>
                                            <td><?= $row['username'];?></td>
                                            <td>
                                                <?php 
                                                if($row['role']=='1'){
                                                    echo 'Admin';
                                                }
                                                elseif($row['role']=='0'){
                                                    echo 'User';
                                                }

                                                ?>
                                                    
                                                </td>
                                            <td>
                                     <a  href="edit-user.php?id=<?= $row['id'];?>" class="btn btn-success btn-sm">Edit</a>
                                     
                                    <!--<form action="user_code.php" method="post">
                                       
                            <button  type="submit" name="delete_user" value="<?=$row['id'];?>" class="btn btn-danger btn-sm ">Delete</button>
                                    </form>-->
                                    <input type="hidden" name="" class="delete_id" value="<?=$row['id'];?>">
                                    <a  href="javascript:void(0)" class="btn btn-danger btn-sm delete_user">Delete</a>
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
</div>
 <?php
include('includes/footer.php');
include('includes/script.php');
?>