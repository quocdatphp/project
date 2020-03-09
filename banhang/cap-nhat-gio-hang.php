<?php 
	require_once __DIR__. "/autoload/autoload.php";
	$key = intval(getInput("key")); // lấy id sản phẩm
	$qty = intval(getInput("qty"));

	// kiểm tra sem số lượng người dùng mua có lớn hơn số lượng sản phẩm đấy trong giỏ hàng
	$_SESSION['cart'][$key]['qty'] = $qty;
	echo 1;

?>