<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="logo.png" type="image/icon">
	<title>Pendafataran Siswa Baru | SMK Negeri 1 Purbalingga</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="custom.css">
	<link rel="stylesheet" href="animate.css" />
</head>
<body>
	<!--Sidebar-->
	<ul id="slide-out" class="side-nav">
		<li>
			<div class="user-view">
				<div class="background">
					<img src="anyar.jpg">
				</div>
				<a href="#!user"><img src="avatar.jpg" class="circle"></a>
				<a href="#!name"><span class="white-text name">zeref.weismann</span></a>
				<a href="#!email"><span class="white-text email">pinter.gugel@gmail.com</span></a>
			</div>

		</li>
		<li>
			<a class="waves-effect" href="index.php">Home</a>
		</li>
		<li>
			<a class="waves-effect" href="form-daftar.php">Daftar Baru</a>
		</li>
		<li>
			<a class="waves-effect" href="list_siswa.php">Pendaftaran</a>
		</li>
	</ul>
	<!--Header-->
	<div class="navbar-fixed">
		<nav class="blue darken-1">
			<div class="nav-wrapper">
				<ul>
					<li>
						<a href="#" data-activates="slide-out" class="button-collapse show-on-large "><i class="material-icons">dehaze</i></a>
					</li>
					<li>
						<a href="index.php" id="header-logo" class="hide-on-med-and-down">SMK Negeri 1 PURBALINGGA</a>
					</li>
				</ul>
				<ul class="right hide-on-med-and-down">
					<li>
						<a class="modal-trigger waves-effect " onclick="$('#modal-coba').modal('open');">
							<i class="material-icons left "> mail</i>
							<span class="new badge amber pulse ">5</span>
						</a>
					</li>
					<li>
						<a href="javascript:void(0)" class="dropdown-button waves-effect" data-activates='mudun'>
							<img src="avatar.jpg" alt="" class="circle left mini-perfil">
							<span>zeref.weismann</span>
							<i class="material-icons right">arrow_drop_down</i>
						</a>
						
						<ul id='mudun' class='dropdown-content'>
							<li><a href="#!"><i class="material-icons">person</i>Profil</a>
							</li>
							<li><a href="#!"><i class="material-icons">account_circle</i>Account</a>
							</li>
							<li><a href="#!"><i class="material-icons">directions_run</i>Logout</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>
<!--Pesan-->
<div id="modal-coba" class="modal bottom-sheet">
	<div class="modal-content">
		<h4>Pesan</h4>
		<ul class="collection">
			<li class="collection-item avatar">
				<img src="yui.jpg" alt="" class="circle">
				<span class="title">Qwerty</span>
				<p>Kepo <br> Aja kepo
				</p>
				<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
			</li>
			<li class="collection-item avatar">
				<img src="inaho.jpg" alt="" class="circle">
				<span class="title">Qwerty</span>
				<p>Kepo <br> Aja kepo
				</p>
				<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
			</li>
			<li class="collection-item avatar">
				<img src="Zeref.png" alt="" class="circle">
				<span class="title">Qwerty</span>
				<p>Kepo <br> Aja kepo
				</p>
				<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
			</li>
			<li class="collection-item avatar">
				<img src="adolf.jpg" alt="" class="circle">
				<span class="title">Qwerty</span>
				<p>Kepo <br> Aja kepo
				</p>
				<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
			</li>
			<li class="collection-item avatar">
				<img src="natsu.png" alt="" class="circle">
				<span class="title">Qwerty</span>
				<p>Kepo <br> Aja kepo
				</p>
				<a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
			</li>
		</ul>
	</div>
</div>
<!--main-->
<main>
	<div class="container section scrollspy">

		<div class="animated rubberBand"><h4 class="center-align">Siswa yang Sudah Mendaftar di SMK N 1 Purbalingga</h4></div>
		<br>
		<a  href="form-daftar.php" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
		<a  href="cetak.php" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">print</i>
			
		</a>

		<br>

		<table class="striped responsive-table bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Jenis Kelamin</th>
					<th>Agama</th>
					<th>Sekolah Asal</th>
					<th>Tindakan</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$sql = 'select * from calon_siswa order by nama asc';
				$query = mysqli_query($conn, $sql);

				$no = 1;
				while ($siswa =mysqli_fetch_array($query)){
					echo "<tr>";

					echo "<td>".$no."</td>";
					echo "<td>".$siswa['nama']."</td>";
					echo "<td>".$siswa['alamat']."</td>";
					echo "<td>".$siswa['jenis_kelamin']."</td>";
					echo "<td>".$siswa['agama']."</td>";
					echo "<td>".$siswa['sekolah_asal']."</td>";

					echo "<td>";
					echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
					echo "<a onclick=\"javascript: return confirm('Anda yakin hapus data ini ?')\" href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
					echo "</tr>";

					$no++;
				}
				?>
			</tbody>
		</table>
		<p>Total: <?php echo mysqli_num_rows($query) ?></p>
	</div>
</main>
<!--Footer-->
<footer class="page-footer blue darken-1">
	<div class="row">
		<div class="col l6 s12">
			<h5 class="white-text">Tentang Website</h5>
			<p class="grey-text text-lighten-4">Website ini merupaka aplikasi pendaftaran sekolah berbasis web.</p>
		</div>
		<div class="col l4 offset-l2 s12">
			<h5 class="white-text">Hubungi Pembuat</h5>
			<ul>
				<li><a class="grey-text text-lighten-3" href="https://plus.google.com/u/0/103381267055772573687" target="_blank">Google+</a>
				</li>
				<li><a class="grey-text text-lighten-3" href="https://web.facebook.com/ammar.pasifiky" target="_blank">Facebook</a>
				</li>
				<li><a class="grey-text text-lighten-3" href="https://www.youtube.com/channel/UCGkvJzBd6L4_qYNcxlJyP9w" target="_blank">Youtube</a>
				</li>
				<li><a class="grey-text text-lighten-3" href="https://twitter.com/AmmarFiky" target="_blank">Twiter</a>
				</li>
				<li><a class="grey-text text-lighten-3" href="https://www.instagram.com/zeref.weismann" target="_blank">Instagram</a>
				</li>
				<li><a class="grey-text text-lighten-3" href="https://www.kaskus.co.id/profile/aboutme/9995572" target="_blank">Kaskus</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="footer-copyright ">
		<div class="container">
			<p class="center-align">Zeref.Weismann &copy; 2017</p>
		</div>
	</div>
</div>
</footer>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="materialize/js/materialize.min.js"></script>
<script type="text/javascript" src="app.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</body>
</html>