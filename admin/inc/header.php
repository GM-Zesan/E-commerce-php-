<?php 
    $url = 'http://localhost/team05/ecommerce/admin';

    header("Cache-Control: no-cache, must-revalidate");
    header("Pragma: no-cache"); 
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
    header("Cache-Control: max-age=2592000");

    session_start();
    if(!isset($_SESSION['user'])){
        header('location:login.php');
	}
	
	include 'inc.php';
    $apple = new Inc();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">


<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<meta content="Start your development with a Dashboard for Bootstrap 4." name="description">
	<meta content="Spruko" name="author">

	<!-- Title -->
	<title>Mini Freak</title>

	<!-- Favicon -->
	<link href="<?php echo $url; ?>/assets/img/brand/favicon.png" rel="icon" type="image/png">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800" rel="stylesheet">

	<!-- Icons -->
	<link href="<?php echo $url; ?>/assets/css/icons.css" rel="stylesheet">

	<!--Bootstrap.min css-->
	<link rel="stylesheet" href="<?php echo $url; ?>/assets/plugins/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

	<!-- jquery-ui min css -->
    <link href="<?php echo $url; ?>/assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />

	<!-- Ansta CSS -->
	<link href="<?php echo $url; ?>/assets/css/dashboard.css" rel="stylesheet" type="text/css">

	<!-- Custom scroll bar css-->
	<link href="<?php echo $url; ?>/assets/plugins/customscroll/jquery.mCustomScrollbar.css" rel="stylesheet" />

	<!-- Sidemenu Css -->
	<link href="<?php echo $url; ?>/assets/plugins/toggle-sidebar/css/sidemenu.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/assets/css/style.css">

</head>
<body class="app sidebar-mini rtl" >
	<div id="global-loader" ></div>
	<div class="page">
		<div class="page-main">
			<!-- Sidebar menu-->
			<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
			<aside class="app-sidebar ">
				<div class="sidebar-img">
					<a class="navbar-brand" href="<?php echo $url;?>/adminProfile.php">
						<img class="navbar-brand-img main-logo" src="<?php echo $url; ?>/assets/img/brand/logo-dark1.png"> 
						<img class="navbar-brand-img logo" src="<?php echo $url; ?>/assets/img/brand/logo.png">
					</a>
					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item active" href="<?php echo $url;?>/dashboard.php">
								<i class="side-menu__icon fe fe-home"></i>
								<span class="side-menu__label">Dashboard</span>
							</a>
						</li>
						<li class="slide">
							<a class="side-menu__item active" href="<?php echo $url;?>/user.php">
								<i class="side-menu__icon fe fe-users"></i>
								<span class="side-menu__label">User</span>
							</a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fas fa-th-list"></i><span class="side-menu__label">Category</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo $url;?>/category_add.php" class="slide-item">Add Category</a>
								</li>
								<li>
									<a href="<?php echo $url;?>/category.php" class="slide-item">Category list</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
								<i class="side-menu__icon fe fe-map"></i>
								<span class="side-menu__label">Product</span>
								<i class="angle fa fa-angle-right"></i>
							</a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo $url;?>/product_add.php" class="slide-item">Product Add</a>
								</li>
								<li>
									<a href="<?php echo $url;?>/product_list.php" class="slide-item">Product List</a>
								</li>
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-file-text"></i><span class="side-menu__label">Order</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li>
									<a href="<?php echo $url;?>/order_remain.php" class="slide-item">Order Remaining</a>
								</li>
								<li>
									<a href="<?php echo $url;?>/order_complete.php" class="slide-item">Order Complete</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</aside>
			<!-- Sidebar menu-->

			<!-- app-content-->
			<div class="app-content ">
				<div class="side-app">
					<div class="main-content">
						<div class="p-2 d-block d-sm-none navbar-sm-search">
							<!-- Form -->
							<form class="navbar-search navbar-search-dark form-inline ml-lg-auto">
								<div class="form-group mb-0">
									<div class="input-group input-group-alternative">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fas fa-search"></i></span>
										</div><input class="form-control" placeholder="Search" type="text">
									</div>
								</div>
							</form>
						</div>
						<!-- Top navbar -->
						<nav class="navbar navbar-top  navbar-expand-md navbar-dark" id="navbar-main">
							<div class="container-fluid">
								<a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>

								<!-- Horizontal Navbar -->
								

								<!-- Brand -->
								<a class="navbar-brand pt-0 d-md-none" href="index-2.html">
									<img src="assets/img/brand/logo-light.png" class="navbar-brand-img">
								</a>
								<!-- Form -->
								<form class="navbar-search navbar-search-dark form-inline mr-5  ml-lg-auto">
									<div class="form-group mb-0">
										<div class="input-group input-group-alternative">
											<div class="input-group-prepend">
												<span class="input-group-text"><i class="fas fa-search"></i></span>
											</div><input class="form-control" placeholder="Search" type="text">
										</div>
									</div>
								</form>
								<!-- User -->
								<ul class="navbar-nav align-items-center ">
									<li class="nav-item dropdown d-none d-md-flex">
										<a class="nav-link pr-0" href="inbox.php" role="button">
										<div class="media mr-5 align-items-center">
											<i class="fe fe-mail"></i>
										<sup class="text-danger">
											<b>
											<?php
												$org = $apple->msg_count();        
												if($org){
													$count = mysqli_num_rows($org);
													echo "(".$count.")";
												}
											?>
											</b>
										</sup>

										</div></a>
									</li>
									<li class="nav-item d-none d-md-flex">
										<div class="d-none mr-5 d-md-flex mt-2 ">
											<a class="nav-link full-screen-link pl-0 pr-0"><i class="fe fe-maximize-2 floating " id="fullscreen-button"></i></a>
										</div>
									</li>
									<li class="nav-item">
										<a class="nav-link pr-md-0" href="<?php echo $url; ?>/logout.php" role="button">
											<div class="media align-items-center">
												<div class="media-body d-none d-lg-block">
													<span class="mb-0 ">Log Out</span>
													<i class="fas fa-power-off"></i>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
                        </nav>
                        <!-- Top navbar-->