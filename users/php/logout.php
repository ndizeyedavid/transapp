<?php  
include "../includes/connect.php";
session_start();

$id = $_SESSION['id'];
$log_date = date("h:m:s a  -  M, d Y");

$log = mysqli_query($con, "INSERT INTO logs(u_id, log_date, log) VALUES('{$id}', '{$log_date}', 'Logging out the account')");
if ($log){
	session_unset();
	$logout = session_destroy();
	if ($logout){
		header("location: ../login.html");
	}else{
		echo "Operation failed...";
	}
}

?>