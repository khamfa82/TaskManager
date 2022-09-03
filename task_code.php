<?php
session_start();

include('config/dbconfig.php');

if(isset($_POST['addTask'])){

    $task_name=mysqli_real_escape_string($con,$_POST['name']);
    $desc=mysqli_real_escape_string($con,$_POST['desc']);
   $list_id=mysqli_real_escape_string($con,$_POST['list']);
   $priority=mysqli_real_escape_string($con,$_POST['priority']);
   $deadline=mysqli_real_escape_string($con,$_POST['deadline']);
    

	$list_query="insert into tbl_task (list_id,task_name,description,priority,deadline) values('$list_id','$task_name','$desc','$priority','$deadline')";
	$run=mysqli_query($con,$list_query);

		if($run){

			$_SESSION['message']="Task has Successfully Saved!!";
	   			header('Location:task.php');
		}
		else{

			  $_SESSION['message']="Task Failed to Record";
             header('Location:task.php');
		}
	}


if(isset($_POST['updateTask'])){

		 $task_id=$_POST['task_id'];
      $task_name=mysqli_real_escape_string($con,$_POST['name']);
    $desc=mysqli_real_escape_string($con,$_POST['desc']);
   $list_id=mysqli_real_escape_string($con,$_POST['list']);
   $priority=mysqli_real_escape_string($con,$_POST['priority']);
   $deadline=mysqli_real_escape_string($con,$_POST['deadline']);
   

$query="update tbl_task  set list_id='',task_name='',description='',priority='',deadline='' where id='$list_id' ";
$run_query=mysqli_query($con, $query);

if($run_query){
    $_SESSION['message']="Task Updated Successfully";
    header('Location:task.php');
    }
    else{
        $_SESSION['message']="Task Updated Failed";
        header('Location:task.php');
    }

}
if(isset($_POST['delete_task'])){
    
    $taskid=$_POST['delete_task'];
    $query="delete from tbl_task  where id='$taskid' ";
    $run_query=mysqli_query($con, $query);

    if($run_query){
        $_SESSION['message']="Task has been Deleted Successfully";
        header('Location:task.php');
        }
        else{
            $_SESSION['message']="Delete Failed";
            header('Location:task.php');
        }
}



?>