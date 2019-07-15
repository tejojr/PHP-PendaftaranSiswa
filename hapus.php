<?php
include 'config.php';
if(isset($_GET['id'])){
	$id = $_GET['id'];

	$sql= "delete from calon_siswa where id = $id";
	$query = mysqli_query($conn, $sql);

	if($query){
		header('Location: list_siswa.php');
	} else{
		die("gagal menghapus...");
	}
} else{
	die("akses dilarang");

}
?>

