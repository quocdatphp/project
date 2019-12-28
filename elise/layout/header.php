<?php require 'library/session.php';
// mỗi phiên giao dịch sẽ là một session như một mã số token
	Session::init();
?>
<?php 
	require "library/database.php";
	require "helpers/format.php";

	// Hàm tự động lấy các file trong classes ko cần require_once
	spl_autoload_register(function($className){
		require "classes/".$className.".php";
	});
	$db = new Database();
	$fm = new Format();
	$ct = new cart();
	$us = new user();
	$cat = new category();
	$product = new product();
 ?>
<?php
	header("Cache-Control: no-cache, must-revalidate");
	header("Pragma: no-cache"); 
	header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); 
	header("Cache-Control: max-age=2592000");
	header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Elise - Thời trang cao cấp</title>
	<meta name="title" content="Elise - Thời trang cao cấp">
	<meta name="keywords" content="vẻ đẹp trẻ trung, năng động, hiện đại....">
	<meta name="description" content="vẻ đẹp trẻ trung, năng động, hiện đại....">
	<link rel="shortcut icon" href="image/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body>
	<header style="margin-bottom: 20px">
		<div class="header">
			<div class="container">
				<div class="head">
					<div class="logo">
						<a href="index.php"><img src="image/logo.png" alt="" class="img-logo"></a>
					</div>
				</div>
			</div>
			<div class="head-top">
				<div class="container">
					<div class="head-left offset-2 col-sm-5 col-5">
						<ul>
							<li><a href="#">Hotline: 035 406 5353</a></li>
							<li><a href="login.php"> | Tài khoản</a></li>
						</ul>
					</div>
					<div class="head-right col-sm-5">
						<ul>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fas fa-globe"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#"><i class="fas fa-wifi"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- TOGGLE RESPONSIVE -->

			<div class="sidebarmenu">
				<div class="col-lg-7 col-sm-7 col-md-7 sidebar-menu">
					<ul>
						<li><a href="index.php" class="fa fa-home"></a></li>
						<li><a href="product.php">Sản phẩm</a></li>
						<li><a href="">Bộ sưu tập</a></li>
						<li><a href="">Tin tức</a></li>
						<li><a href="">Video</a></li>
						<li><a href="">Hệ thống cửa hàng</a></li>
						<li><a href="">Chăm sóc khách hàng</a></li>
						<li><a href="">Liên hệ</a></li>
						<li><a href="">Membership</a>
					</ul>
				</div>
				<div class="col-sm-2 col-md-2 search-right">
					<div id="myOverlay" class="overlay">
						<span class="closebtn" onclick="closeSearch()" title="tắt tìm kiếm">x</span>
						<div class="overlay-content">
							<form action="#">
								<input type="text" placeholder="Tìm kiếm...." name="search">
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</div>
					<div class="box">
						<a href="wishlist.html" class="heart"><i class="fas fa-heart">  </i></a>
						<a class="openBtn" onclick="openSearch()"><i class="fa fa-search"></i></a>
					</div>
					<div class="total-cart">
						<a href="checkout.html" class="price"><span class="total">$0.00</span>
							<img src="image/cart.png" alt="giỏ hàng của bạn" title="giỏ hàng của bạn">
							<p class="emptycart">Empty Cart</p>
						</a>
					</div>
				</div>
				
			</div>
		</div>
	</header>