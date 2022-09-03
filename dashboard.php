<?php
include('authentication.php');
include('includes/header.php');

?>
 <div class="container-fluid px-4">
<h1 class="mt-4">Dashboard</h1>
 <ol class="breadcrumb mb-4">
 <li class="breadcrumb-item active">Dashboard</li>
 </ol>
        <div class="row">
         <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
        <div class="card-body">Total Tasks
            <?php 
            $query_task="select * from tbl_task";
            $run_task=mysqli_query($con,$query_task);

            if($total_task=mysqli_num_rows($run_task))
            {
                    echo'<h4 class="mb-0">'.$total_task.'</h4>';  
            }
            else
            {
               echo'<h4 class="mb-0">0</h4>';  
            }

            ?>

           
        </div>
        </div>
        </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Total Users
                                        <?php 
                                            $query_user="select * from users";
                                            $run_user=mysqli_query($con,$query_user);

                                            if($total_user=mysqli_num_rows($run_user))
                                            {
                                                    echo'<h4 class="mb-0">'.$total_user.'</h4>';  
                                            }
                                            else
                                            {
                                               echo'<h4 class="mb-0">0</h4>';  
                                            }

                                            ?>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total lists
                                        <?php 
                                        $query_list="select * from tbl_list";
                                        $run_list=mysqli_query($con,$query_list);

                                        if($total_list=mysqli_num_rows($run_list))
                                        {
                                                echo'<h4 class="mb-0">'.$total_list.'</h4>';  
                                        }
                                        else
                                        {
                                           echo'<h4 class="mb-0">0</h4>';  
                                        }

                                        ?>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Task Completed
                                        <?php 
                                        $query_task="select * from tbl_task";
                                        $run_task=mysqli_query($con,$query_task);

                                        if($total_task=mysqli_num_rows($run_task))
                                        {
                                                echo'<h4 class="mb-0">'.$total_task.'</h4>';  
                                        }
                                        else
                                        {
                                           echo'<h4 class="mb-0">0</h4>';  
                                        }

                                        ?>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>


<?php
include('includes/footer.php');
include('includes/script.php');
?>
