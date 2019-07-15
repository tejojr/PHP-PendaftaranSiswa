<?php 
include 'config.php';

// cek kesiapan tombol
if (isset($_POST['simpan']) ){
	$id = $_POST['id'];
	echo "id";
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$sekolah = $_POST['sekolah_asal'];

	//perintah update
	$sql = "update calon_siswa set nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama ='$agama', sekolah_asal='$sekolah' where id =$id";
	$query = mysqli_query($conn, $sql);

	//cek keberhasilan
	if($query){
		header('Location: list_siswa.php');
	} else{
		die("gagal menyimpan perubahan");
	}
} else
{
	die("Akses tidak diperbolehkan.....");
}

 ?>