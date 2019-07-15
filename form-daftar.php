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
<!--Main-->  	
<main>
	<div class="container">
		<div class="animated rubberBand"><h4 class="center-align">Formulir Pendaftaran Siswa Baru SMK N 1 Purbalingga</h4></div>
		<form action="proses-pendaftaran.php" method="POST" onReset="window.alert('sukses hapus semua')">
			<fieldset>
				<p>
					<div class="input-field">
						<input id="" type="text" name="nama" required="required">
						<label class="validate">Nama</label>
					</div>
				</p>
				<p>
					<div class="input-field">			
						<textarea id="textarea1" class="materialize-textarea" name="alamat" required="required"></textarea>
						<label for="textarea1">Alamat</label>
						
					</div>

				</p>
				<p>
					<label for="jenis-kelamin">Jenis Kelamin:</label><br>
					<input type="radio" name="jk" value="laki-laki" id="jk1">
					<label for="jk1">Laki-laki</label>
					<input type="radio" name="jk" value="perempuan" id="jk2">
					<label for="jk2">Perempuan</label><br><br>
				</p>	
				<p>
					<div class="input-field">
						<select name="agama">
							<option value="" disabled selected>Agama</option>
							<option>Islam</option>
							<option>Khristen</option>
							<option>Hindu</option>
							<option>Budha</option>
							<option>Atheis</option>
						</select>
						<label for="agama">Agama: </label>
					</div>
				</p>
				<p>
					<div class="input-field">
						<label class="validate">Sekolah Asal</label>
						<input id="" type="text" name="sekolah_asal" required="required">
					</div>
					
				</p>
				<p>
					<button class="btn waves-effect waves-light green" type="submit" name="daftar">Daftar
						<i class="material-icons right">send</i>
					</button>
					<button class="btn waves-effect waves-light red" type="reset" name="reset">Bersih
						<i class="material-icons right">clear</i>
					</button>
				</p>
			</fieldset> 
		</form>
	</div>
	<br>
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