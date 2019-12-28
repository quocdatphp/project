<?php 
	$filepath = realpath(dirname(__FILE__));
	require_once ($filepath.'/../library/database.php');
	require_once ($filepath.'/../helpers/format.php');
 ?>

<?php 
	/**
	 * 
	 */
	class brand 
	{
		private $db;
		private $fm;

		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}

		public function insert_brand($brandName)
		{
			$brandName = $this->fm->validation($brandName);
			$brandName = mysqli_real_escape_string($this->db->link, $brandName);


			if (empty($brandName)) {
				$alert = "<span class='error'>Tên thương hiệu chưa nhập</span>";
				return $alert;
			}else {
				$query = "INSERT INTO tbl_brand(brandName) VALUES('$brandName')";
				$result = $this->db->insert($query);
				if ($result) {
					$alert = "<span class='success'>Thêm thương hiệu thành công</span>";
					return $alert; 
				}else {
					$alert = "<span class='error'>Thêm thương hiệu thất bại</span>";
					return $alert;
				}
			}
		}
		public function show_brand()
		{
			$query = "SELECT * FROM tbl_brand ORDER BY brandID ASC";
			$result = $this->db->select($query);
			return $result;
		}
			public function getbrandbyId($id)
		{
			$query = "SELECT * FROM tbl_brand WHERE brandID = '$id'";
			$result = $this->db->select($query);
			return $result;
		}
		public function update_brand($brandName,$id)
		{
			$brandName = $this->fm->validation($brandName);
			$brandName = mysqli_real_escape_string($this->db->link, $brandName);
			$id = mysqli_real_escape_string($this->db->link, $id);


			if (empty($brandName)) {
				$alert = "Category must be not empty";
				return $alert;
			}else {
				$query = "UPDATE tbl_brand SET brandName = '$brandName' WHERE brandID = '$id'";
				$result = $this->db->update($query);
				if ($result) {
					$alert = "<span class='success'> Brand Update Successfully</span>";
					return $alert; 
				}else {
					$alert = "<span class='error'>Brand Update Not Success</span>";
					return $alert;
				}
			}
		}
		public function del_brand($id)
		{
			$query = "DELETE FROM tbl_brand WHERE brandID = '$id'";
			$result = $this->db->delete($query);
			if ($result) {
					$alert = "<span class='success'>Deleted Brand Successfully</span>";
					return $alert; 
				}else {
					$alert = "<span class='error'>Deleted Brand Not Success</span>";
					return $alert;
				}
		}
		
	}
 ?>