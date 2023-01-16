<!DOCTYPE html>
<html lang="en" id="home">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>About Me</title>


	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
	<!-- navbar -->
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand page-scroll">Gigih Ling</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php" class="page-scroll">Home</a></li>
					<li><a href="#about" class="page-scroll">About</a></li>
					<li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
					<li><a href="#contact" class="page-scroll">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!--end navbar  -->

	<!-- jumbotron -->
	<div class="jumbotron text-center">
		<img src="img/gigih.jpg" class="img-circle">
		<h1>Gigih Godzali Wijaya</h1>
		<p>Software Engineer | Seo Specialist | Server Management </p>
	</div>
	<!-- akhir jumbotron -->


	<!-- about -->
	<section class="about" id="about">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="text-center">About</h2>
					<hr>
				</div>
			</div>


			<div class="row">
				<div class="col-sm-5 col-sm-offset-1">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="col-sm-5">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- akhir about -->


	<!-- portfolio -->
	<section class="portfolio" id="portfolio">
		<div class="container">
			<div class="row">
				<h2 class="text-center">Portfolio</h2>
				<hr>
			</div>

			<div class="row text-center">
				<div class="col-sm-4">
					<a href="img/large/11.jpg">
						<img src="img/1.jpg" class="thumbnail">
					</a>
				</div>
				<div class="col-sm-4">
					<a href="">
						<img src="img/2.jpg" class="thumbnail">
					</a>
				</div>
				<div class="col-sm-4">
					<a href="">
						<img src="img/3.jpg" class="thumbnail">
					</a>
				</div>
				<div class="col-sm-4">
					<a href="">
						<img src="img/4.jpg" class="thumbnail">
					</a>
				</div>
				<div class="col-sm-4">
					<a href="">
						<img src="img/5.jpg" class="thumbnail">
					</a>
				</div>
				<div class="col-sm-4">
					<a href="">
						<img src="img/6.jpg" class="thumbnail">
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- akhir portfolio -->


	<!-- contact -->
	<section class="contact" id="contact">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<h2>Contact</h2>
					<hr>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-8  col-sm-offset-2">
					<form action="" method="post">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" id="nama" class="form-control" placeholder="Masukkan Nama">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" id="email" class="form-control" placeholder="Masukkan email">
						</div>
						<div class="form-group">
							<label for="telp">No Telepon</label>
							<input type="text" id="telp" class="form-control" placeholder="Masukkan no Telepon">
						</div>
						<select class="form-control">
							<option>-- Pilih Kategori --</option>
							<option>Web Design</option>
							<option>Web Development</option>
						</select>
						<div>
							<div class="form-group">
								<label for="pesan">Pesan</label>
								<textarea class="form-control" rows="10" placeholder="Masukkan Pesan"></textarea>
							</div>
							<button type="submit" class="btn btn-primary">Kirim Pesan</button>
							<input type="reset" name="reset" class="btn btn-danger">

						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- akhir contact -->


	<!-- footer -->
	<footer>
		<div class="container text-center">
			<div class="row">
				<div class="col-sm-12">
					<p>&copy; copyright 2017 | built with <i class="glyphicon glyphicon-star-empty"></i> by. <a href="https/instagram.com/ghbldphn1241302">Gigih Ling</a></p>
				</div>
			</div>
			<div class="row">
				<a class="btn btn-danger" href="bladphoenix24@gmail.com"> <i class="
					glyphicon glyphicon-envelope"></i> kirim pesan ke gmail</a>
			</div>
		</div>
	</footer>
	<!-- akhir footer -->





	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>

	<script type="text/javascript" src="js/script.js"></script>
</body>

</html>