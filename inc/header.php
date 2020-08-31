<?php
	session_start();
	//Base URL
	$url = 'http://localhost/team05/ecommerce';

	//Cash control
	header("Cache-Control: no-cache, must-revalidate");
	header("Pragma: no-cache");
	header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
	header("Cache-Control: max-age=2592000");

	
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initil-scale=1">

		<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/asset/css/bootstrap.min.css">

		<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/asset/css/animate.css">

		<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/asset/css/fontawesome-all.css">

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

		<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/asset/css/style.css">
		<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
		<script>
			$(document).ready(function(){
				$(window).scroll(function(){
					if($(window).scrollTop() > 300){
					$('.scroll-up').css({
						"opacity":"1", "pointer-events":"auto"
					});
					}else{
					$('.scroll-up').css({
						"opacity":"0", "pointer-events":"none"
					});
					}
				});
				$('.scroll-up').click(function(){
					$('html').animate({scrollTop:0}, 500);
				});
			});
		</script>
		<title>E-commerce</title>
	</head>

	<body>

	<div class="" style="" title="Record">
		<a href="getpro.php" class="text-light">
			<i class="fas fa-file" style="padding: 14px 17px;position: fixed; bottom: 40px; left: 40px; font-size:27px; z-index:99999; background:#0d4aa5; border-radius:50%;"></i>
		</a>
	</div>

	<div class="">
		<i class="fas fa-angle-up scroll-up text-light"></i>
	</div>

		<div class="wrapper">
			<section class="sticky-top">
				<div class="row m-0" style="background-color: #ccc; border-bottom: 3px solid #F26822;">
					<div class="col-1 img pt-1" style="">
						<a href="#">
							<img src="<?php echo $url; ?>/asset/image/logo2.png">
						</a>
					</div>
					<div class="col-sm-8 col-10 text-left">
						<form class="search-box d-block ml-auto" action="search.php" method="post" style="margin-top: 5px;">
							<div class="input-group">
								<input type="search" name="search" class="form-control"  style="height:33px;">
								<div class="input-group-append">
									<button type="submit" name="submit" style="background:transparent; border:none">
										<span class="input-group-text" style="margin: 8px 0px -3px -7px;">
											<i class="fas fa-search"></i>
										</span>
									</button>
								</div>
							</div>
						</form>
					</div>
					<div class="menu" style="height:59px">
						<div class="account text-right">
							<a href="cart.php" class="pl-3 pr-3">
								<i class="fas fa-shopping-cart text-light"></i>
								<span class="text-light">Cart</span>
								<?php
									if(isset($_SESSION['cart'])){
								?>
								<sup class="badge badge-danger">
								<?php
										echo count($_SESSION['cart']);
									}
								?>
								</sup>
							</a>

							<?php
								if(!isset($_SESSION['id'])){
							?>
							<a href="login.php" class="pl-3 pr-3">
								<i class="fas fa-user text-light"></i>
								<span class="text-light">Login</span>
							</a>
							<?php
								 } else{
							?>
							<a href="logout.php" class="pl-3 pr-3">
								<i class="fas fa-power-off text-light"></i>
								<span class="text-light">Logout</span>
							</a>
							<?php
							
								 }
							?>

						</div>
					</div>
				</div>
			</section>

			<section class="">
				<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #000">
					<a class="navbar-brand" href="index.php"><b>FR E AK</b></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto ml-auto">
							<li class="nav-item active">
								<a class="nav-link animated bounceInDown" style="animation-delay: 0.2s;" href="index.php">Home <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
								<a class="nav-link animated bounceInDown" style="animation-delay: 0.4s;" href="shop.php">Shop</a>
							</li>
							<li class="nav-item">
								<a class="nav-link animated bounceInDown" style="animation-delay: 0.6s;" href="about.php">About</a>
							</li>
							<li class="nav-item">
								<a class="nav-link animated bounceInDown" style="animation-delay: 0.8s;" href="contact.php">Contact</a>
							</li>
						</ul>
					</div>
				</nav>
			</section>

	