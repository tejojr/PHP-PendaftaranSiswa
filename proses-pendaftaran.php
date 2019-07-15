<?php 
	include 'config.php';

	if(isset($_POST['daftar'])){
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$jk = $_POST['jk'];
		$agama = $_POST['agama'];
		$sekolah = $_POST['sekolah_asal'];

		$sql = "insert into calon_siswa values (null,'$nama','$alamat','$jk','$agama', '$sekolah')";
		$query = mysqli_query($conn, $sql);

		if($query){
			header('Location: list_siswa.php?status=sukses');
		}else{
			header('Location: list_siswa?status=gagal');
		}

	} else {
		die("Akses dilarang...");
	}
 ?>