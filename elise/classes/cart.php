<?php 
	$filepath = realpath(dirname(__FILE__));
	require_once ($filepath."/../library/database.php");
	require_once ($filepath."/../helpers/format.php");
 ?>

 <?php 
	/**
	 * 
	 */
	class cart
	{
		private $db;
		private $fm;

		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}

		public function add_to_cart($quantity, $id)
		{
			// kiểm tra $quantity có rỗng hay không
			$quantity = $this->fm->validation($quantity);
			$quantity = mysqli_real_escape_string($this->db->link, $quantity);
			$id = mysqli_real_escape_string($this->db->link, $id);
			$sId = session_id();

			$query = "SELECT * FROM tbl_product WHERE productID = '$id'";
			$result = $this->db->select($query)->fetch_assoc();

			$productName = $result['productName'];
			$price = $result['price'];
			$image = $result['image'];

			// $check_cart = "SELECT * FROM tbl_cart WHERE productID ='$id' AND sID = '$sId'";
			// if($check_cart) {
			// 	$msg = "Sản phẩm này đã có trong giỏ hàng";
			// 	return $msg;
			// }else{
			var_dump($query_insert);
				$query_insert = "INSERT INTO tbl_cart(productID, sID, productName, price, quantity, image) VALUES('$id', '$sId','$productName', '$price', '$quantity', '$image')";
				$insert_cart = $this->db->insert($query_insert);
				if($insert_cart) {
					header("Location:cart.php");
				}else{
					header("Location:404.php");
				}
			// }
		}

		public function get_product_cart()
		{
			$sId = session_id();
			$query = "SELECT * FROM tbl_cart WHERE sID = '$sId'";
			$result = $this->db->select($query);
			return $result;
		}

		public function update_quantity_cart($quantity, $cartId)
		{
			$quantity = mysqli_real_escape_string($this->db->link, $quantity);
			$cartId = mysqli_real_escape_string($this->db->link, $cartId);
			$query = "UPDATE tbl_cart SET quantity = '$quantity' WHERE cartID = '$cartId'";
			$result = $this->db->update($query);
			if ($result) {
				$msg = "<span class='success'>Số lượng sản phẩm đã được thêm</span>";
				return $msg;
			}else {
				$msg = "<span class='error'>Cập nhật số lượng không thành công</span>";
				return $msg;
			}
		}
	}

?>