<?php 
	$filepath = realpath(dirname(__FILE__));
	require_once ($filepath.'/../library/database.php');
	require_once ($filepath.'/../helpers/format.php');
 ?>

<?php 
	/**
	 * 
	 */
	class product 
	{
		private $db;
		private $fm;

		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}

		public function insert_product($data,$files)
		{
			$productName = mysqli_real_escape_string($this->db->link, $data['productName']);
			$brand = mysqli_real_escape_string($this->db->link, $data['brand']);
			$category = mysqli_real_escape_string($this->db->link, $data['category']);
			$price = mysqli_real_escape_string($this->db->link, $data['price']);
			$type = mysqli_real_escape_string($this->db->link, $data['type']);
			$product_desc = mysqli_real_escape_string($this->db->link, $data['product_desc']);

			$permited = array('jpg', 'jpeg', 'png', 'gif');
			$file_name = $_FILES['image']['name'];
			$file_size = $_FILES['image']['size'];
			$file_temp = $_FILES['image']['tmp_name'];
			// hàm explode chuyển một chuỗi thành mảng vd:đat ku te => ['đat', 'ku', 'te']
			// hàm strtolower chuyển các kí tự trong chuỗi thành kí tự thường
			// Hàm substr() sẽ trích xuất một phần của chuỗi, phần chuỗi được trích xuất sẽ tùy thuộc vào tham số truyền vào.
			$div = explode('.', $file_name);
			$file_ext = strtolower(end($div));
			$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
			$uploaded_image = "uploads/".$unique_image;

			if ($productName == "" || $brand == "" || $category == "" || $price == "" || $type == "" || $product_desc == "" || $file_name == "") {
				$alert = "<span class='error'>Các trường không được để trống</span>";
				return $alert;
			}else {
				move_uploaded_file($file_temp, $uploaded_image);
				$query = "INSERT INTO tbl_product(productName, catID, brandID, product_desc, type, price, image) VALUES('$productName', '$category', '$brand', '$product_desc', '$type', '$price', '$unique_image')";
				$result = $this->db->insert($query);
				if ($result) {
					$alert = "<span class='success'>Thêm sản phẩm thành công</span>";
					return $alert; 
				}else {
					$alert = "<span class='error'>Thêm sản phẩm thất bại</span>";
					return $alert;
				}
			}
		}
		public function show_product()
		{
			$query = "SELECT tbl_product.*, tbl_category.catName, tbl_brand.brandName FROM tbl_product 
						INNER JOIN tbl_category ON tbl_product.catID = tbl_category.catID 
						INNER JOIN tbl_brand ON tbl_product.brandID = tbl_brand.brandID 
						ORDER BY tbl_product.productID ASC";
			$result = $this->db->select($query);
			return $result;
		}
		public function update_product($data,$files,$id)
		{
			$productName = mysqli_real_escape_string($this->db->link, $data['productName']);
			$brand = mysqli_real_escape_string($this->db->link, $data['brand']);
			$category = mysqli_real_escape_string($this->db->link, $data['category']);
			$price = mysqli_real_escape_string($this->db->link, $data['price']);
			$type = mysqli_real_escape_string($this->db->link, $data['type']);
			$product_desc = mysqli_real_escape_string($this->db->link, $data['product_desc']);

			$permited = array('jpg', 'jpeg', 'png', 'gif');
			$file_name = $_FILES['image']['name'];
			$file_size = $_FILES['image']['size'];
			$file_temp = $_FILES['image']['tmp_name'];
			// hàm explode chuyển một chuỗi thành mảng vd:đat ku te => ['đat', 'ku', 'te']
			// hàm strtolower chuyển các kí tự trong chuỗi thành kí tự thường
			// Hàm substr() sẽ trích xuất một phần của chuỗi, phần chuỗi được trích xuất sẽ tùy thuộc vào tham số truyền vào.
			// hàm end($div) sẽ lấy phần cuối cùng vd: dat.jpg => jpg
			$div = explode('.', $file_name);
			$file_ext = strtolower(end($div));
			// $file_current = strtolower(current($div)) hàm current sẽ lấy tên của ảnh
			$unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
			$uploaded_image = "uploads/".$unique_image;

			if ($productName == "" || $brand == "" || $category == "" || $price == "" || $type == "" || $product_desc == "") {
				$alert = "<span class='error'>Các trường không được để trống</span>";
				return $alert;
			}else {
				if (!empty($file_name)) {
					// Nếu người dùng chọn ảnh
					if ($file_size > 20480) {
						$alert = "<span class='error'> File ảnh không được lớn hơn 20MB</span>";
						return $alert;
					} 
					// hàm in_array kiểm tra xem giá trị có tồn tại không 
					elseif (in_array($file_ext, $permited) === false) {
						$alert =  "<span class='error'>Bạn chỉ được các file ảnh có đuôi như sau: ".implode(' , ',$permited)."</span>";
						return $alert;
					}
					move_uploaded_file($file_temp,$uploaded_image);
					$query = "UPDATE tbl_product 
					SET productName = '$productName', catID = '$category', brandID = '$brand', product_desc = '$product_desc', type = '$type', price = '$price', image = '$unique_image'
					WHERE productID = '$id'";
				}else {
					// Nếu người dùng không chọn ảnh
					$query = "UPDATE tbl_product
					SET productName = '$productName', catID = '$category', brandID = '$brand', product_desc = '$product_desc', type = '$type', price = '$price'
					WHERE productID = '$id'";
				}
			
			$result = $this->db->update($query);
			if ($result) {
				$alert = "<span class='success'>Sửa sản phẩm thành công</span>";
				return $alert;
			}else {
				$alert = "<span class='error'>Sửa sản phẩm thất bại</span>";
				return $alert;
			}
		}
	}

		public function del_product($id)
		{
			$query = "DELETE FROM tbl_product WHERE productID = '$id'";
			$result = $this->db->delete($query);
			if ($result) {
					$alert = "<span class='success'>Xoá sản phẩm thành công</span>";
					return $alert; 
				}else {
					$alert = "<span class='error'>Xoá sản phẩm thất bại</span>";
					return $alert;
				}
		}
		public function getproductbyId($id)
		{
			$query = "SELECT * FROM tbl_product WHERE productID = '$id'";
			$result = $this->db->select($query);
			return $result;
		}
		// Xong backend
		// START FRONTEND
		public function getproduct_feathered()
		{
			$query = "SELECT * FROM tbl_product WHERE type = '0'";
			$result = $this->db->select($query);
			return $result;
		}
		public function getproduct_detail($id)
		{
			$query = "SELECT tbl_product.*, tbl_category.catName, tbl_brand.brandName FROM tbl_product 
			INNER JOIN tbl_category ON tbl_product.catId = tbl_category.catId
			INNER JOIN tbl_brand ON tbl_product.brandId = tbl_brand.brandId
			WHERE tbl_product.productId = '$id'";
			$result = $this->db->select($query);
			return $result;
		}
	}
 ?>