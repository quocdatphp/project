<?php require "../classes/adminlogin.php"; ?>
<?php 
	$class = new adminlogin();
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$adminUser = $_POST['adminUser'];
		$adminPass = md5($_POST['adminPass']);

		$login_check = $class->login_admin($adminUser, $adminPass);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Trang quản trị</title>
	<!-- Bootstrap Styles-->
	<link rel="shortcut icon" href="../image/icon.png">
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<!-- FontAwesome Styles-->
	<link href="assets/css/font-awesome.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="../fontawesome/css/all.min.css">
	<!-- Morris Chart Styles-->
	<link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
	<!-- Custom Styles-->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link href="assets/css/custom-styles.css" rel="stylesheet" />
	<!-- Google Fonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/> 
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="form-login">
				<h3 class="heading"><i class="fas fa-baby"></i> Đăng nhập admin</h3>
				<span style="color: red"><?php 
								if (isset($login_check)) {
								echo $login_check;
							} 
							?></span>
				<form action="#" method="post" accept-charset="utf-8">
					<div class="form-group"><label for="">Tên Admin: </label>
						<input type="text" name="adminUser" placeholder="Tên admin" class="form-control" required>
					</div>
					<div class="form-group"><label for="">Mật khẩu:</label>
						<input type="password" name="adminPass" placeholder="Mật khẩu" class="form-control" required>
					</div>
					<div class="btn-login">
						<input type="submit" class="btn btn-lg btn-success" value="Đăng nhập">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
