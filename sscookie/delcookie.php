<?php 
	setcookie('user',$_POST['user'],time()-3000);
	setcookie('pass',$_POST['pass'],time()-3000);
	header("location:showcookie.php");
 ?>