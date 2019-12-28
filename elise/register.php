<?php require_once "layout/header.php" ?>
<div class="banner-top">
	<div class="container">
		<h1>ELISE</h1>
		<em></em>
		<h4>
		<a href="index.php">Home </a>
		 / Đăng ký</h4>
	</div>
</div>
<div class="container">
	<div class="row row-silver">
		<div class="col-lg-4"></div>
		<div class="col-lg-5 member-modal">
			<div class="box-form">
				<div class="bf-heading">Đăng ký tài khoản</div>
				<form action="#" name="formLogin" id="formLogin" class="form-horizontal">
					<input type="text" name="mail" placeholder="Email đăng nhập" class="form-control">
					<input type="password" name="password" placeholder="Mật khẩu" class="form-control">
					<input type="text" name="fullname" placeholder="Họ và tên" class="form-control">
					<input type="text" name="phone" placeholder="Số điện thoại" class="form-control">
					<input type="text" name="address" placeholder="Địa chỉ" class="form-control">
					<div class="row row-gender">
						<div class="col-sm-6">
							<a href="#" class="btn-member"><span><i class="fas fa-check"> Nam</i></span></a>
						</div>
						<div class="col-sm-6">
							<a href="#" class="btn-member"><span><i class="fas fa-check"> Nữ</i></span></a>
						</div>
					</div>
					<div class="form-group note">
						Bằng việc đăng ký, đăng nhập bạn đã đồng ý với <a href="#" class="important">chính sách điều khoản</a> của elise
					</div>
					<a href="" class="btn-register" onclick="">Đăng ký</a>
					<div class="form-group note">
						Bạn đã là thành viên? <a href="login.php" class="important">Đăng nhập ngay</a>
					</div>
					<div class="hr"><span>HOẶC</span></div>
					<a href="" class="btn-facebook"><i class="fab fa-facebook-f"></i>&emsp;&emsp; Đăng nhập với facebook</a>
					<a href="" class="btn-google-plus"><i class="fab fa-google-plus-g"></i>&emsp;&emsp; Đăng nhập với google+</a>
				</form>
			</div>
		</div>
		<div class="col-lg-3"></div>
	</div>
</div>
<?php include "layout/footer.php" ?>
</body>
</html>