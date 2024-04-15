<?php  
echo "Deleting initialised<br>";
echo "<b>".date('h:m:s')."</b> - Deleting Cover img<br>";

 include "../includes/connect.php";
 session_start();

 if ($_SESSION['id']) {
 	if (isset($_GET['id'])) {
 		$id = $_GET['id'];
 		$fetch = mysqli_query($con, "SELECT * FROM minor_genre WHERE id = '{$id}'");
 		$data = mysqli_fetch_assoc($fetch);

 		$cover_img = $data['cover_img'];

 		$delete_img = unlink("../uploads/cover/$cover_img");
 		if ($delete_img){
			echo "<b>".date('h:m:s')."</b> - Deleting genre<br>";
 			$delete = mysqli_query($con, "DELETE FROM minor_genre WHERE id='{$id}'");
 			if ($delete){
				echo "<b>".date('h:m:s')."</b> - Deleting completed<br>";
 				echo "<script>alert('Genre Deleted Successfully'); window.location.assign('../gen_min.php');</script>";
 			}else{
 				echo "<script>alert('Operation failed. Please Try again!'); window.location.assign('../gen_min.php');</script>";
 			}
 		}else{
 			echo "<script>alert('Deleting genre image failed. Please Try again!'); window.location.assign('../gen_min.php');</script>";
 		}
 	}else{
 		header("location: gen_min.php");
 	}
 }else{
 	header("location: ../login.php");
 }

?>