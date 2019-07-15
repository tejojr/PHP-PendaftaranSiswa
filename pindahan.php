<nav>
	<?php if(isset($_GET['status'])): ?>
		<p>
			<?php 
			if($_GET['status'] == 'sukses'){
				echo "Pendaftaran Berhasil";

			}else{
				echo "Pendaftaran Gagal!";
			}
			?>
		</p>
	<?php endif; ?>
	<ul>
		<li><a href="form-daftar.php">Daftar Baru</a></li>
		<li><a href="list_siswa.php">Pendaftaran</a></li>
		
	</ul>
</nav>