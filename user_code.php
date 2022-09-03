<?php
session_start();

include('config/dbconfig.php');

if(isset($_POST['addUser'])){

    $name=mysqli_real_escape_string($con,$_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $username=mysqli_real_escape_string($con,$_POST['username']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
    $confirm_password=mysqli_real_escape_string($con,$_POST['cpassword']);
    

if($password==$confirm_password)
{
	//check email
	$checkemail="select * from users where email='$email'";
	$run_checkemail=mysqli_query($con,$checkemail);

	if(mysqli_num_rows($run_checkemail)>0){

		//Already Email Exit
		$_SESSION['message']="Email already Exit";
	   header('Location:users.php');
	}
	else{

		echo $user_query="insert into users (name,email,username,password) values('$name','$email','$username','$password')";
		$run=mysqli_query($con,$user_query);

		if($run){

			$_SESSION['message']="User has Successfully Saved!!";
	   			header('Location:users.php');
		}
		else{

			  $_SESSION['message']="User Registration Failed";
             header('Location:users.php');
		}
	}
}
else{

	$_SESSION['message']="Password and Confirm Password does not Match";
	header('Location:users.php');
}


}

if(isset($_POST['updateUser'])){

    $user_id=$_POST['user_id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $username=$_POST['username'];
    $role=$_POST['role'];
    $status=$_POST['status']==true? '1':'0';

$query="update users set name='$name',email='$email',username='$username',role='$role',status='$status' where id='$user_id' ";
$run_query=mysqli_query($con, $query);

if($run_query){
    $_SESSION['message']="User Updated Successfully";
    header('Location:users.php');
    }
    else{
        $_SESSION['message']="User Updated Failed";
        header('Location:users.php');
    }

}

//if(isset($_POST['delete_user'])){
    
   // $userid=$_POST['delete_user'];
   // $query="delete from users  where id='$userid' ";
   // $run_query=mysqli_query($con, $query);

  //  if($run_query){
    //    $_SESSION['message']="User Deleted Successfully";
    //    header('Location:users.php');
     //   }
     //   else{
         //   $_SESSION['message']="User Delete Failed";
       //     header('Location:users.php');
      //  }
//}

if(isset($_POST['delete_btn_set'])){
    
    $userid=$_POST['delete_id'];
    $query="delete from users  where id='$userid' ";
    $run_query=mysqli_query($con, $query);

    
}


?>