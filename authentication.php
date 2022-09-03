<?php
@session_start();

include('config/dbconfig.php');

if(!isset($_SESSION['auth']))
{

	$_SESSION['message']='Login to access Dashboard';
	header('location:index.php');
	exit(0);
}


?>