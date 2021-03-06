<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="CSS/bootstrap.min.css">
	<link rel="stylesheet" href="CSS/style.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<title>Ruang ITATS</title>
</head>

<body>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark warna-navbar pt-3 pb-3">
		<div class="container">
			<img src="img/ITATS.png" style="width: 30px; height: 40px; margin-right: 8px;">
			<a class="navbar-brand" href="index.php?page=auth&aksi=view">Ruang ITATS</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarText">
				<ul class="navbar-nav mr-auto">

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
							Konten Kuis
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="index.php?page=auth&aksi=loginUser">Fisika</a>
							<a class="dropdown-item" href="index.php?page=auth&aksi=loginUser">Matematika</a>
						</div>
					</li>
				</ul>
				<span class="navbar-text">
					<img src="img/profile.png" style="width: 30px; height: 30px;">
					<a href="index.php?page=auth&aksi=loginUser" class="btn btn-transparent" style="font-size: 20px;">Login</a>
				</span>
			</div>
		</div>
	</nav>

	<div class="main">
		<div class="jumbotron" style="height: 900px; padding-left: 170px;">
			<h1 style="padding-top: 75px;">Ruang ITATS</h1>
			<h2>Uji Kemampuanmu Disini!</h2>
			<p class="lead">Web untuk Menemani Belajarmu Menjadi Lebih Mudah!</p>
			<img src="img/Tiny student sitting on book pile and reading [Converted].png" style="width: 500px; height: 300px;">
			<h6 style="padding-top: 15px;">Ruang ITATS adalah aplikasi belajar online yang menyediakan layanan
				berupa<br>
				bimbel (bimbingan belajar) untuk membantu kamu dalam meningkatkan pemahaman<br>
				di setiap materi pelajaran. Dengan aplikasi Ruang ITATS, kamu akan dimudahkan<br>
				dalam kebutuhan belajar dan kuis yang dapat diakses kapan pun dan di mana pun.</p>
				<a class="btn btn-primary btn-lg" href="#" role="button">Selengkapnya</a>
		</div>
		<center>
			<div class="contents">
				<div class="container">
					<div class="row">
						<div class="col-sm pb-5">
							<h1>Konten Ruang ITATS</h1>
						</div>
					</div>
					<div class="row">
						<div data-aos="fade-right">
							<div class="col-sm">
								<div class="card">
									<img src="img/Fisika.jpg" class="card-img-top" style="width: 32rem; height: 28rem;">
									<div class="card-body">
										<h5 class="card-title">Fisika</h5>
										<p class="card-text" style="width: 20rem;">Deskripsi Konten</p>
										<a href="index.php?page=auth&aksi=loginUser" class="btndewe btn-success">Detail Program</a>
									</div>
								</div>
							</div>
						</div>
						<div data-aos="fade-left">
							<div class="col-sm">
								<div class="card">
									<img src="img/Matematika.jpg" class="card-img-top" style="width: 32rem; height: 28rem;">
									<div class="card-body">
										<h5 class="card-title">Matematika</h5>
										<p class="card-text" style="width: 20rem;">Deskripsi Konten</p>
										<a href="index.php?page=auth&aksi=loginUser" class="btndewe btn-success">Detail Program</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</center>
	</div>

	<footer class="page-footer font-small blue">
		<div class="container text-md-left">
			<div class="row">
				<div class="col-md-6 mt-md-0 mt-3 address">
					<div class="logo font-red-hat-display">
						Ruang ITATS
					</div>
					<div class="social-media">
						<a href="#">
							<img src="img/ITATS.png" style="width: 30px; height: 30px;" alt="" class="img-fluid mr-4">
						</a>
					</div>
					<div class="copyright font-red-hat-display">
						2021 All rights reserved.
					</div>
				</div>
				<hr class="clearfix w-100 d-md-none pb-3">
				<div class="row col-md-6 nav-footer">
					<div class="col-md-4 mb-md-0 mb-3">
						<p>
							Features
						</p>
						<ul class="list-unstyled">
						</ul>
					</div>
					<div class="col-md-4 mb-md-0 mb-3">
						<p>
							Resources
						</p>
						<ul class="list-unstyled">
						</ul>
					</div>
					<div class="col-md-4 mb-md-0 mb-3">
						<p>
							Our Company
						</p>
						<ul class="list-unstyled">
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->


</body>

</html>