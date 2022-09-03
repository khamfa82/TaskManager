<?php
session_start();

include('config/dbconfig.php');

if(isset($_POST['login_btn']))
{
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$password=mysqli_real_escape_string($con,$_POST['password']);

	$query="select * from users where email='$email' and password='$password' LIMIT 1";
	$run=mysqli_query($con,$query);

	if(mysqli_num_rows($run)>0){

		foreach ($run as $data) {

			$user_id=$data['id'];
			$user_name=$data['name'];
			$username=$data['username'];
			$user_email=$data['email'];
			$role=$data['role'];
		}

		$_SESSION['auth']=true;
		$_SESSION['auth_role']="$role"; //1=Admin,0=User
		$_SESSION['auth_user']=[

			'user_id'=>$user_id,
			'user_name'=>$user_name,
			'user_email'=>$user_email,
		];

		if($_SESSION['auth_role']=='1')
		{
			//$_SESSION['message']="Welcome to Dashboard";
	   		header('Location:dashboard.php');
	  		 exit(0);
		}
		elseif($_SESSION['auth_role']=='0')
		{
			//$_SESSION['message']="You are Logged In";
	   		header('Location:dashboard.php');
	  		 exit(0);
		}

	}
	else{

		$_SESSION['message']="Invalid Email or Password";
	   header('Location:index.php');
	   exit(0);
	}
}


?>