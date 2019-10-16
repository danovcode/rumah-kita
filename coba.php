<!DOCTYPE html>
<html>
<head>
	<title>RumahKita</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="grid.css">
</head>
<body>
	<div class="container-img">
		<nav class="nav" style="padding: 0px;">
			<ul>
				<li><a href="index.html"><img src="./assets/logo1.png" style="margin-bottom: 5px; margin-right: 30px;"></a></li>
				<li><a href="pelatihan.html">Pelatihan</a></li>
				<li><a href="loker.html">lowongan Pekerjaan</a>
				</li>
				<li><a href="karya.html">Karya</a></li>
				<li><a href="cerita.html" class="mr-50">Cerita Sukses</a></li>
				<li><a href="profile.html" class="mr-30">Lihat Profile</a></li>
				<li class="li-button"><button class="button-pink-s">logout</button></li>
			</ul>
		</nav>
		<div class="highlight mt-120" style="text-align: center;">
			<h1 align="center">Semua orang memiliki kesempatan yang sama.</h1>
		</div>
		<div class="sub-highlight mt-30" style="text-align: center;">
			<h3  style="color: #ffffff" align="center" class="mb-50">Temukan kesempatan untuk bekerja sesuai dengan passion dan keistimewaan kamu bersama website rumahkita</h4>
			<div class="row" style="width: 90%; margin: 0 auto;">
				<input type="text" name="search" placeholder="Posisi,Perusahaaan,Lokasi" class="search mr-20 ml-20">
				<button class="button-pink-xs mr-20">cari</button>
			</div>
		</div>
	</div>
	<div class="container1" style=" background-color : #F5F9F7; padding-bottom: 150px; padding-top: 150px;">
		<div class="feature">
			<h2 align="center">Pelatihan Mandiri</h2>
			<h3 align="center" class="mt-50" style="line-height: 40px;">Membantu anda dalam menggali keahlian, menemukan koneksi serta mengasah potensi semudah mungkin.</h3>
			<hr width = "20%", color = "#F9196A" class="mt-30">
		</div>
		<div class="row mt-50">
			<div class="col-md-auto mid">
				<?php 
					$dasar = file_get_contents("data.json");
					var_dump($dasar);
					foreach ($dasar as $d) {
				?>

				<div class="card">
					<img src="./assets/card1/jahit.png" alt="Avatar" style="width:100%">
					<div class="card-container">
						<h1><?php echo $d['pelatihan']; ?></h1>
					  <h4 style="font-family: Poppins-Bold">Pelatihan Menjahit</h4> 
					  <h4 style="font-size: 10px;">Jangan lewatkan kesempatan unt....</h4> 
					  <div class="row">
					  	<img style="width: 10%; height: 10%; margin-top: 10px; margin-right: 10px;" src="./assets/card1/calendar.png">
					  	<h5 style="font-size: 9px;">13 September 2019</h5>
					  </div>
					  <div class="row">
					  	<img style="width: 10%; height: 10%; margin-top: 10px; margin-right: 10px;" src="./assets/card1/clock.png">
					  	<h5 style="font-size: 9px;">10.00 - 12.00 WIB</h5>
					  </div>
					  <div class="row">
					  	<img style="width: 10%; height: 10%; margin-top: 10px; margin-right: 10px;" src="./assets/card1/loc.png">
					  	<h5 style="font-size: 9px;">Pendopo Kec. Slawi</h5>
					  </div>
					  <a href=""><p>Info lengkap ></p></a>
					</div>	
				</div>
				<?php } ?>
			</div>
		</div>
		<div class="mid" align="center" style="margin-top: 50px;">
			<button class="button-pink-xs">Lihat Selengkapnya</button>
		</div>
	</div>
	<img src="./assets/footer.png">
	<div class="footer container1">
			<div class="row">
				<div class="col-5 mr-30">
					<img src="assets/logo1.png">
					<h5 style="width: 360px;">Rumahkita perkumpulan orang disabilitas yang mempunyai tekad untuk mencetak sumber daya manusia yang berkualitas</h5>
					<div class="row">
						<img src="./assets/email.png" style=" width: 25px; height: 20px; margin-top: 10px; margin-right: 10px;">
						<h5>rumahkita@gmail.com</h5>
					</div>
					<div class="row">
						<img src="./assets/world.png" style=" width: 20px; height: 20px; margin-top: 10px; margin-right: 15px;">
						<h5>www.rumahkita.com</h5>
					</div>
				</div>
				<div class="col-8">
					<p>perusahaan</p>
					<h5>Home</h5>
					<h5>Lokasi</h5>
					<h5>Tentang</h5>
				</div>
				<div class="col-8">
					<p>Program</p>
					<h5>Pelatihan</h5>
					<h5>Lowongan Pekerjaan</h5>
					<h5>Kerja</h5>
					<h5>Cerita Sukses</h5>
				</div>
				<div class="col-8">
					<p>Support</p>
					<h5>FAQ</h5>
					<h5>Hubungi Kami</h5>
				</div>
			</div>
		</div>
</body>
</html>