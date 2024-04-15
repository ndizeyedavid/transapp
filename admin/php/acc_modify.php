<?php  
include "../includes/connect.php";
session_start();
if ($_SESSION['id']){
	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$mode = "";

		if (isset($_GET['ver'])) {
			$oper = mysqli_query($con, "UPDATE users SET status='2' WHERE u_id='{$id}'");
			$mode = "Verified";
		}

		if (isset($_GET['block'])){
			$oper = mysqli_query($con, "UPDATE users SET status='1' WHERE u_id='{$id}'");
			$mode = "Blocked";
		}

		if ($oper){
			header("location: ../logged_in.php?succ=$id&status=$mode");
		}else{
			header("location: ../logged_in.php?err");
		}

	}else{
		header("location: ../logged_in.php");
	}
}else{
	header("location: ../login.php");
}
?>