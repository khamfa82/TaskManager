<?php
session_start();
include('config/dbconfig.php');

if(isset($_POST["changePassword"])){

$id=$_POST["change_pass"];
$current_password=$_POST["old_password"];
$new_password=$_POST["new_password"]; //Password encryption with md5
$confirm_password=$_POST["confirm_password"]; //Password encryption with md5

$res=mysqli_query($con,"select * from users where id='$id' and password='$current_password'");

if($res==true){

$count=mysqli_num_rows($res);
if($count==1){

//check whether new password and confirm password match or not
	if($new_password==$confirm_password){
//update password
$sql=mysqli_query($con,"update users set  password='$new_password' where id='$id'");
		
		$_SESSION['message']="Password has been changed successfully";
	   			header('Location:users.php');
		
	}
	else{
// refdirect to manage user page with eeror message
		
			$_SESSION['message']="Password did not match";
	   			header('Location:users.php');
	
}
}

}

}

?>