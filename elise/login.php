<?php require_once "layout/header.php" ?>
<div class="banner-top">
	<div class="container">
		<h1>ELISE</h1>
		<em></em>
		<h4>
		<a href="index.php">Home </a>
		 / Đăng nhập</h4>
	</div>
</div>
<div class="container">
	<div class="row row-silver">
		<div class="col-lg-4"></div>
		<div class="col-lg-5 member-modal">
			<div class="box-form">
				<div class="bf-heading">Đăng nhập tài khoản</div>
				<form action="#" name="formLogin" id="formLogin" class="form-horizontal">
					<input type="text" name="mail" placeholder="Email của bạn" class="form-control">
					<input type="password" name="password" placeholder="Mật khẩu của bạn" class="form-control">
					<div class="form-group note">
						Bạn quên mật khẩu? <a href="#">Tìm lại ngay</a>
					</div>
					<a href="" class="btn-login" onclick="">Đăng nhập</a>
					<div class="hr"><span>HOẶC</span></div>
					<a href="" class="btn-facebook"><i class="fab fa-facebook-f"></i>&emsp;&emsp; Đăng nhập với facebook</a>
					<a href="" class="btn-google-plus"><i class="fab fa-google-plus-g"></i>&emsp;&emsp; Đăng nhập với google+</a>
					<a href="register.php" class="btn-register">Đăng ký</a>
				</form>
			</div>
		</div>
		<div class="col-lg-3"></div>
	</div>
</div>
<?php include "layout/footer.php" ?>
</body>
</html>