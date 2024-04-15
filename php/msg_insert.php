<link rel="stylesheet" type="text/css" href="../assets/vendor/sweetalert2/sweetalert2.min.css">
<script type="text/javascript" src="../assets/vendor/sweetalert2/sweetalert2.min.js"></script>
<?php
include "connect.php";

if (isset($_POST['name'])){
	$u_id = rand();
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $website = mysqli_real_escape_string($con, $_POST['website']);
    $msg = mysqli_real_escape_string($con, $_POST['msg']);

    $img = $_FILES['msg_profile']['name'];

    $ext = explode(".", $img);
    $ext = end($ext);

    $img_name = $u_id.'.'.$ext;

    $upload = move_uploaded_file($_FILES['msg_profile']['tmp_name'], "../uploads/msg_img/$img_name");

    if ($upload){
    	$insert = mysqli_query($con, "INSERT INTO message(u_name, email, website, msg, img) VALUES('{$name}', '{$email}', '{$website}', '{$msg}', '{$img_name}')");
    	if ($insert){
    		echo "<script>alert('Message sent successfully');window.location.assign('../index.html')</script>";
    	}else{
    		echo "<script>alert('Message not sent. And error occured');window.location.assign('../index.html')</script>";
    	}
    }else{
    	echo "<script>alert('Upload failed');window.location.assign('../index.html')</script>";
    }
}
?>
