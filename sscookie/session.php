<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>session</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="box">
		<div class="tieude">bài tập thực hành</div>
		<div class="noidung">
			<form method="post">
				Tên đăng nhập: <input type="text" name="user"><br>
				Mật khẩu     : <input type="password" name="pass"><br>
				<input type="submit" name="login" value="Đăng nhập hệ thống">
			</form>
			<?php if (isset($_POST['login'])) {
				$_SESSION['user'] = $_POST['user'];
				$_SESSION['pass'] = $_POST['pass'];
				header("location:showsession.php");
			} ?>
		</div>
	</div>
</body>
</html>