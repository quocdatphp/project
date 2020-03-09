<!DOCTYPE html>
<html>
	<head>
		<title>HALU shop</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/frontend/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/frontend/css/bootstrap.min.css">
		
		<script  src="<?php echo base_url()?>public/frontend/js/jquery-3.2.1.min.js"></script>
		<script  src="<?php echo base_url()?>public/frontend/js/bootstrap.min.js"></script>
		<!---->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/frontend/css/slick.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/frontend/css/slick-theme.css"/>
		<!--slide-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/frontend/css/style1.css">


		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
		
		<!-- FONTS
		============================================ -->    
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'> 
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
				
		<!-- animate CSS
		============================================ -->
		<link rel="stylesheet" href="<?php echo base_url()?>public/frontend/css/animate.css">      
		
		<!-- FANCYBOX CSS
		============================================ -->            
		<link rel="stylesheet" href="<?php echo base_url()?>public/frontend/css/jquery.fancybox.css">  
		
		<!-- BXSLIDER CSS
		============================================ -->            
		<link rel="stylesheet" href="<?php echo base_url()?>public/frontend/css/jquery.bxslider.css">          
				
		<!-- MEANMENU CSS
		============================================ -->            
		<link rel="stylesheet" href="<?php echo base_url()?>public/frontend/css/meanmenu.min.css"> 
		
		<!-- JQUERY-UI-SLIDER CSS
		============================================ -->            
		<link rel="stylesheet" href="<?php echo base_url()?>public/frontend/css/jquery-ui-slider.css">     
		
		<!-- NIVO SLIDER CSS
		============================================ -->            
		<link rel="stylesheet" href="<?php echo base_url()?>public/frontend/css/nivo-slider.css">
		
		<!-- OWL CAROUSEL CSS   
		============================================ -->    
		<link rel="stylesheet" href="<?php echo base_url()?>public/frontend/css/owl.carousel.css">
		
		<!-- OWL CAROUSEL THEME CSS     
		============================================ -->    
		 <link rel="stylesheet" href="<?php echo base_url()?>public/frontend/css/owl.theme.css">
		
		<!-- BOOTSTRAP CSS 
		============================================ -->    
		<link rel="stylesheet" href="<?php echo base_url()?>public/frontend/css/bootstrap.min.css">
		
		<!-- FONT AWESOME CSS 
		============================================ -->
		<link rel="stylesheet" href="<?php echo base_url()?>public/frontend/css/font-awesome.min.css">
		
		<!-- NORMALIZE CSS 
		============================================ -->
		<link rel="stylesheet" href="<?php echo base_url()?>public/frontend/css/normalize.css">
		
		<!-- MAIN CSS 
		============================================ -->
		<link rel="stylesheet" href="<?php echo base_url()?>public/frontend/css/main.css">
		
		<!-- STYLE CSS 
		============================================ -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/frontend/css/custom.css">

		<link rel="stylesheet" href="style.css">
		
		<!-- RESPONSIVE CSS 
		============================================ -->
		<link rel="stylesheet" href="<?php echo base_url()?>public/frontend/css/responsive.css">
		
		<!-- IE CSS 
		============================================ -->
		<link rel="stylesheet" href="<?php echo base_url()?>public/frontend/css/ie.css">
		
		<!-- MODERNIZR JS 
		============================================ -->
		<script src="<?php echo base_url()?>public/frontend/js/vendor/modernizr-2.6.2.min.js"></script>
		
	</head>
<div class="header-top">
			<div class="container">
				<div class="row">
					<!-- HEADER-LEFT-MENU START -->
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="header-left-menu">
							<div class="welcome-info">
								Hotline: <span><strong>035 406 5353</strong></span>
							</div>
							<div class="currenty-converter">
								<form method="post" action="#" id="currency-set">
									<div class="current-currency">
										<span class="cur-label">Email: <span><strong>quocdatit@gmail.com</strong></span>
									</div>
								</form>                                 
							</div>
						</div>
					</div>
					<!-- HEADER-LEFT-MENU END -->
					<!-- HEADER-RIGHT-MENU START -->
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="header-right-menu">
							<nav id="header-nav-top">
								<ul class="list-inline" id="headermenu">
									 <?php if(isset($_SESSION['name_user'])):?>
											<li style="color: blue">Xin chào boss:<?php echo $_SESSION['name_user']?>
												<li><a href="gio-hang.php"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a></li>
											</li>
											<?php else:?>
									
									<li><a href="dang-ki.php"><i class="fa fa-user-plus"></i>Đăng kí</a></li>
									<li><a href="dang-nhap.php"><i class="fa fa-user"></i>Đăng nhập</a></li>
								<?php endif;?>
									<li><a href="thoat.php"><i class="fa fa-sign-out"></i>Đăng xuất</a></li>
								</ul>                                   
							</nav>
						</div>
					</div>
					<!-- HEADER-RIGHT-MENU END -->
				</div>
			</div>
		</div>

		<section class="header-middle">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<!-- LOGO START -->
						<div class="logo">
							<a href="index.php"><img src="public/frontend/img/logohalu.png" height="120px" /></a>
						</div>
						<!-- LOGO END -->
						<!-- HEADER-RIGHT-CALLUS START -->
						<div class="header-right-callus">
							<h3>Liên hệ trực tiếp</h3>
							<span>0972 7777 27</span>
						</div>
						<!-- HEADER-RIGHT-CALLUS END -->
						<!-- CATEGORYS-PRODUCT-SEARCH START -->
						<div class="categorys-product-search">
							<form action="search.php" method="get" class="search-form-cat">
								<div class="search-product form-group">
									<input type="text" class="form-control search-form" name="q" value="<?php if(isset($_GET['q'])) {echo $_GET['q'];} ?>" placeholder="Bạn cần tìm gì... " />
									<button class="search-button" value="search" name="submit" type="submit">
										<i class="fa fa-search"></i>
									</button>                                    
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>


		<!-- MENU BANNER -->
		 <div id="menunav">
   <div class="container">
	  <nav>
		 <div class="home pull-left">
			<a href="index.php">Trang chủ</a>
		 </div>
		 <!--menu main-->
		 <ul id="menu-main">
			<li>
			   <a href="gioi-thieu.php">giới thiệu</a>
			</li>

			<li><a href="https://www.24h.com.vn/tin-tuc-trong-ngay-c46.html">Tin tức</a> 
				<div class="drodown-mega-menu">
					<div class="mega-menu-list"> 
				   <!--  <ul>    
					 <?php foreach($category as $item) : ?>
					 <li><a href="danh-muc-san-pham.php?id=<?php echo $item['id'] ?>"><?php echo $item['name'] ?></a></li>
					 <?php endforeach; ?>
					</ul></a> -->
		<!--    </div>
	   </div>
 -->
			</li> 
			<li>
				<a href="https://tonnutuongvy.wordpress.com/author/tonnutuongvy/">blog</a>
			</li>
		   
			<li>
			   <a href="contact.php">liên hệ</a>
			</li>
			<li>
			   <a href="cham-soc-khach-hang.php">chăm sóc khách hàng</a>
			</li>
		 </ul>
		 <!-- end menu main-->
		 <!--Shopping-->
		 <ul class="pull-center" id="main-shopping">
			<li>
			   <a href="gio-hang.php"><i class="fa fa-shopping-cart" title="Giỏ hàng của bạn"></i></a>
			</li>
		 </ul>
		 <!--end Shopping-->
	  </nav>
   </div>
</div>

				<div class="col-12">
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
						<a href=""><img src="<?php echo base_url()?>public/frontend/img/animation.png"></a>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 ">
						<a href=""><img src="<?php echo base_url()?>public/frontend/img/animation2.png"></a>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 ">
						<a href=""><img src="<?php echo base_url()?>public/frontend/img/animation3.png"></a>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 ">
						<a href=""><img src="<?php echo base_url()?>public/frontend/img/animation4.png"></a>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 ">
						<a href=""><img src="<?php echo base_url()?>public/frontend/img/animation9.png"></a>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 ">
						<a href=""><img src="<?php echo base_url()?>public/frontend/img/animation11.png"></a>
					</div>

				</div>