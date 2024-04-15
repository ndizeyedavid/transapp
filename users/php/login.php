<?php  
include '../includes/connect.php';

if (isset($_POST['email'])) {
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$pswd = mysqli_real_escape_string($con, $_POST['pswd']);

	$verify_email = mysqli_query($con, "SELECT * FROM users WHERE email='{$email}'");
	if (mysqli_num_rows($verify_email)>0){
		$verify_pswd = mysqli_fetch_assoc($verify_email);
		$id = $verify_pswd['u_id'];
		if ($pswd == $verify_pswd['pswd']){
			if ($verify_pswd['status'] == "2"){
				header("location: session.php?id=$id");
			}else{
				header("location: ../login.html?err=".$verify_pswd['status']);
			}
		}else{
			header("location: ../login.html?err=Password");
		}
	}else{
		header("location: ../login.html?err=email");
	}
}
?>