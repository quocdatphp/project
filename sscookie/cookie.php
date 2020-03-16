<!DOCTYPE html>
<html>
<head>
	<title>cookie</title>
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
				setcookie('user',$_POST['user'],time()+3000);
				setcookie('pass',$_POST['pass'],time()+3000);
				header("location: showcookie.php");
			} ?>
		</div>
	</div>
</body>
</html>