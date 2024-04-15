<?php  

include '../includes/connect.php';
session_start();

if (isset($_GET['id'])){
	$id = $_GET['id'];
	$fetch = mysqli_query($con, "SELECT * FROM users WHERE u_id='{$id}'");
	$data = mysqli_fetch_assoc($fetch);

	$_SESSION['id'] = $id;
	$_SESSION['name'] = $data['name'];
	$_SESSION['country'] = $data['country'];
	$_SESSION['profile'] = $data['profile'];
	$_SESSION['email'] = $data['email'];

	if ($_SESSION['id']){
		header("location: ../");
	}else{
		header("location: ../register.php?err=error_occured_on_our_end");
	}
}

?>