<?php 

include "../includes/connect.php";
session_start();

if ($_SESSION['id']) {
	if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$fetch = mysqli_query($con, "SELECT * FROM major_genre WHERE id='{$id}'");
		$data = mysqli_fetch_assoc($fetch);

		$gen_id = $data['gen_id'];
		$title = mysqli_real_escape_string($con, $_POST['title']);
		$fr_title = mysqli_real_escape_string($con, $_POST['fre_title']);
		$kiny_title = mysqli_real_escape_string($con, $_POST['kiny_title']);
		$swa_title = mysqli_real_escape_string($con, $_POST['swa_title']);
		$title_meaning = mysqli_real_escape_string($con, $_POST['title_meaning']);
		$author = $_SESSION['name'];

		$english = mysqli_real_escape_string($con, $_POST['eng']);
		$french = mysqli_real_escape_string($con, $_POST['fra']);
		$kinyarwanda = mysqli_real_escape_string($con, $_POST['kiny']);
		$swahili = mysqli_real_escape_string($con, $_POST['swah']);

		$release = date("d - m - Y");

		if ($_FILES['cover']['name']!=""){
			$existing_img = $data['cover_img'];
			$delete = unlink("../uploads/cover/$existing_img");
			$img = $_FILES['cover']['name'];
			$ext = explode(".", $img);
			$ext = end($ext);
			$img_name = $gen_id.'.'.$ext;
		}else{
			$img_name = mysqli_real_escape_string($con, $_POST['existing_img']);
		}


		$upload = move_uploaded_file($_FILES['cover']['tmp_name'], "../uploads/cover/$img_name");

		$update = mysqli_query($con, "UPDATE major_genre SET title='{$title}',title_meaning='{$title_meaning}',cover_img='{$img_name}',author='{$author}',kiny_title='{$kiny_title}',eng_title='{$eng_title}',fre_title='{$fre_title}',swah_title='{$swa_title}',english='{$english}',french='{$french}',swah='{$swahili}',kiny='{$kinyarwanda}',release_date='{$release}' WHERE id  = '{$id}'");

		if ($update){
			header("location: ../gen_maj.php?new=$gen_id");
		}else{
			header("location: ../gen_maj_edit.php?err");
		}

	}
}else{
	header("location: ../login.php");
}

?>