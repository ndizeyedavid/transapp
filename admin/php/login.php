<?php  
include '../includes/connect.php';

if (isset($_POST['email'])) {
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$pswd = mysqli_real_escape_string($con, $_POST['pswd']);

	$verify_email = mysqli_query($con, "SELECT * FROM admin WHERE email='{$email}' OR uname='{$email}'");
	if (mysqli_num_rows($verify_email)>0){
		$verify_pswd = mysqli_fetch_assoc($verify_email);
		$id = $verify_pswd['id'];
		if ($pswd == $verify_pswd['pswd']){
			header("location: session.php?id=$id");
		}else{
			header("location: ../login.php?err=pas");
		}
	}else{
		header("location: ../login.php?err=em");
	}
}
?>