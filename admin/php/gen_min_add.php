<?php 

include "../includes/connect.php";
session_start();

if ($_SESSION['id']) {
	if(isset($_POST['submit'])){
		$gen_id = rand();
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

		$img = $_FILES['cover']['name'];
		$ext = explode(".", $img);
		$ext = end($ext);
		$img_name = $gen_id.'.'.$ext;

		$upload = move_uploaded_file($_FILES['cover']['tmp_name'], "../uploads/cover/$img_name");

		if ($upload){
			$insert = mysqli_query($con, "INSERT INTO minor_genre(gen_id, title, title_meaning, cover_img, author, kiny_title, eng_title, fre_title, swah_title, english, french, swah, kiny, release_date) VALUES('{$gen_id}', '{$title}', '{$title_meaning}', '{$img_name}', '{$author}', '{$kiny_title}', '{$title}', '{$fr_title}', '{$swa_title}', '{$english}', '{$french}', '{$swahili}', '{$kinyarwanda}', '{$release}')");

			if ($insert){
				header("location: ../gen_min.php?new=$gen_id");
			}else{
				header("location: ../gen_min_add.php?err");
			}
		}else{
			header("location: ../gen_min_add.php?err");
		}
	}
}else{
	header("location: ../login.php");
}

?>