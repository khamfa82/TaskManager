<?php
session_start();

include('config/dbconfig.php');

if(isset($_POST['addList'])){

    $list_name=mysqli_real_escape_string($con,$_POST['name']);
    $desc=mysqli_real_escape_string($con,$_POST['desc']);
   
    

if($password==$confirm_password)
{
	//check email
	$checklist="select * from tbl_list where listname='$list_name'";
	$run_checklist=mysqli_query($con,$checklist);

	if(mysqli_num_rows($run_checklist)>0){

		//Already Email Exit
		$_SESSION['message']="List Name already Exit";
	   header('Location:list.php');
	}
	else{

	$list_query="insert into tbl_list (listname,list_desc) values('$list_name','$desc')";
	$run=mysqli_query($con,$list_query);

		if($run){

			$_SESSION['message']="Record has Successfully Saved!!";
	   			header('Location:list.php');
		}
		else{

			  $_SESSION['message']="List Name Failed to Record";
             header('Location:list.php');
		}
	}
}


}

if(isset($_POST['updateList'])){

    $list_id=$_POST['list_id'];
    $name=$_POST['name'];
    $description=$_POST['desc'];
   

$query="update tbl_list  set listname='$name',list_desc='$description' where id='$list_id' ";
$run_query=mysqli_query($con, $query);

if($run_query){
    $_SESSION['message']="List Updated Successfully";
    header('Location:list.php');
    }
    else{
        $_SESSION['message']="List Updated Failed";
        header('Location:list.php');
    }

}
if(isset($_POST['delete_list'])){
    
    $listid=$_POST['delete_list'];
    $query="delete from tbl_list  where id='$listid' ";
    $run_query=mysqli_query($con, $query);

    if($run_query){
        $_SESSION['message']="List Name has been Deleted Successfully";
        header('Location:list.php');
        }
        else{
            $_SESSION['message']="Delete Failed";
            header('Location:list.php');
        }
}



?>