<?php 
$conn = mysqli_connect('localhost', 'root', '', 'pendaftaran_siswa');
if(!$conn){
	die("Koneksi Gagal: ".mysqli_connect_error());
}
?>
