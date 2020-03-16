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
			<?php if (isset($_SESSION['user']) && isset($_SESSION['pass'])) {
				echo "Tên truy cập:".$_SESSION['user']."<br>";
				echo "Mật khẩu: ".$_SESSION['pass'];
			}else{
				echo "Session không tồn tại !";
			} ?><br>
			<a href="session.php" title="">Trở về trang session</a> | <a href="delsession.php" title="">Huỷ session</a>
		</div>
	</div>
</body>
</html>