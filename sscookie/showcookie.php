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
			<?php if (isset($_COOKIE['user']) && isset($_COOKIE['pass'])) {
				echo "Tên truy cập:".$_COOKIE['user']."<br>";
				echo "Mật khẩu:".$_COOKIE['pass'];
			}else{
				echo "Cookie không tồn tại!";
			} ?>
			<br><a href="cookie.php" title="">Về trang cookie</a> | <a href="delcookie.php" title="">Huỷ Cookie</a>
		</div>
	</div>
</body>
</html>