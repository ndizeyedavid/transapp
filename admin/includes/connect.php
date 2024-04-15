<?php  

$host = "localhost";
$user = "root";
$password = "";
$database = "tdl";

$con = mysqli_connect($host, $user, $password, $database);

if (!$con){
	echo "Connection Failed";
	header("location: error.php?code=501");
}

?>