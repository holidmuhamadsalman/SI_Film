<?php include "../config.php";?>
<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>SIFilm - Best Movie collections</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
		<!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
		<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="./assetscss/animate.min.css">
		<link rel="stylesheet" href="./assets/css/magnific-popup.css">
		<link rel="stylesheet" href="./assets/css/fontawesome-all.min.css">
		<link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="./assets/css/flaticon.css">
		<link rel="stylesheet" href="./assets/css/odometer.css">
		<link rel="stylesheet" href="./assets/css/aos.css">
		<link rel="stylesheet" href="./assets/css/slick.css">
		<link rel="stylesheet" href="./assets/css/default.css">
		<link rel="stylesheet" href="./assets/css/style1.css">
		<link rel="stylesheet" href="./assets/css/responsive.css">
		<link rel="stylesheet" href="./assets/css/navbar.css">
	</head>

	<body>
		<!-- header-area -->
		<?php $query = mysqli_query($conn, "SELECT * FROM genre ");	?>
		<header>
			<div id="sticky-header" class="menu-area transparent-header">
				<div class="container custom-container">
					<div class="row">
						<div class="col-12">
							<div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
							<div class="menu-wrap">
								<nav class="menu-nav show">
									<div class="logo">
										<a href=".index.php">
											<img src="./assets/images/SiFilm.png" alt="Logo">
										</a>
									</div>
									<div class="navbar-wrap main-menu d-none d-lg-flex">
										<ul class="navigation">
											<li>
												<a href="./index.php">Home</a>
											</li>
											<li class="menu-item-has-children">
												<a href="#">Genre</a>
												<ul class="submenu">
													<?php foreach ($query as $row) : ?>
														<li>
															<a href="genre.php?id_genre=<?=$row['id_genre']?>"><?php echo $row['nama_genre'];?></a>
														</li>
													<?php endforeach;?>
												</ul>
											</li>
											<li><a href="./about.php">About Us</a></li>
											<li><a href="contact.php">Contact Us</a></li>
										</ul>

									</div>
								 <?php if (!isset($_SESSION['username'])) { ?>
									<div class="header-actions">
										<button class="btn">
											<a href="../index.php" style="text-decoration:none;" class="font-weight-bold">Login</a>
										</button>
									</div>
									<?php } else {?>
										<div class="action">
											<div class="profile" onclick="menuToggle();">
												<?php
													if(($data['foto_user'])==null){
														echo "<img src=../include/img-user/user.png>";
													} else {?>
													<?php
														echo "<img src=../include/img-user/$data[foto_user]>";
													}
												?>
											</div>
											<ul>

										</ul>
											<?php
												$username = $_SESSION['username'];
												$sql = mysqli_query($conn,"SELECT * FROM login
												WHERE username = '$username'") or die(mysqli_error($con));
												$data = mysqli_fetch_array($sql);
											?>
											<div class="menu">
												<ul class="submenu">
													<li><a href="change-pw.php">Change Password</a></li>
													<li><a href="account-set.php?username=<?=$data['username']?>">Account Setting</a></li>
													<li><a href="../logout.php"> Log Out</a></li>
												</ul>
											<?php }?>
										</div>

									</div>
									<?php
										$nama = $data['nama'];
										$array = explode (" ", "$data[nama]");
									?>
									<li class="pr-5"><a><?= $array[0]?></a></li>
										<script>
											function menuToggle(){
												const toggleMenu = document.querySelector('.menu');
												toggleMenu.classList.toggle('active')
											}
										</script>
									</div>
								</nav>
							</div>

							<!-- Mobile Menu  -->
							<div class="mobile-menu">
								<div class="close-btn"><i class="fas fa-times"></i></div>
								<nav class="menu-box">
									<div class="nav-logo">
										<a href="index.html"><img src="img/logo/logo.png" alt="" title=""></a>
									</div>
									<div class="menu-outer"></div>
									<div class="social-links">
										<ul class="clearfix">
											<li><a href="#"><span class="fab fa-twitter"></span></a></li>
											<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
											<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
											<li><a href="#"><span class="fab fa-instagram"></span></a></li>
											<li><a href="#"><span class="fab fa-youtube"></span></a></li>
										</ul>
									</div>
								</nav>
							</div>
						<div class="menu-backdrop"></div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- header-area-end -->

		<!-- JS here -->
		<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
		<script src="js/vendor/jquery-3.6.0.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.odometer.min.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/ajax-form.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/aos.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>