<?php  
include '../includes/connect.php';

if (isset($_POST['email'])) {
	$u_id = rand();
	$name = mysqli_real_escape_string($con, $_POST['uname']);
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$pswd = mysqli_real_escape_string($con, $_POST['pswd']);
	$country = mysqli_real_escape_string($con, $_POST['country']);

	$verify = mysqli_query($con, "SELECT * FROM users WHERE email='{$email}'");
	if (mysqli_num_rows($verify)==0){

		$insert = mysqli_query($con, "INSERT INTO users(u_id, name, email, pswd, country) VALUES('{$u_id}', '{$name}', '{$email}', '{$pswd}', '{$country}')");
		if ($insert){
			echo "<script>alert('Account created successfully. wait for 4 Hours and then login into your account');window.location.assign('../login.html');</script>";
		}else{
			header("location: ../register.html?err=An_error_occured_on_our_end");
		}
	}else{
		header("location: ../register.html?err=Email_Exists");
	}

}
?>