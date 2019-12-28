<?php 
	$filepath = realpath(dirname(__FILE__));
	require_once ($filepath.'/../library/session.php');
	Session::checkLogin();
	require_once ($filepath.'/../library/database.php');
	require_once ($filepath.'/../helpers/format.php');
 ?>

<?php 
	/**
	 * 
	 */
	class adminlogin 
	{
		private $db;
		private $fm;

		public function __construct()
		{
			$this->db = new Database();
			$this->fm = new Format();
		}

		public function login_admin($adminUser, $adminPass)
		{
			// kiểm tra biến adminUser & adminPass
			$adminUser = $this->fm->validation($adminUser);
			$adminPass = $this->fm->validation($adminPass);

			// Kiểm tra dữ liệu hợp lệ hay k bằng hàm mysqli_real_escape_string
			$adminUser = mysqli_real_escape_string($this->db->link, $adminUser);
			$adminPass = mysqli_real_escape_string($this->db->link, $adminPass);

			if (empty($adminUser) || empty($adminPass)) {
				$alert = "<span class='error'>Tên quản trị viên hoặc mật khẩu chưa nhập</span>";
				return $alert;
			}else {
				$query = "SELECT * FROM tbl_admin WHERE adminUser = '$adminUser' AND adminPass = '$adminPass' LIMIT 1";
				$result = $this->db->select($query);

				if ($result != false) {
					$value = $result->fetch_assoc();
					// Phiên làm việc tên adminlogin
					Session::set('adminlogin', true);

					Session::set('adminID', $value['adminID']);
					Session::set('adminUser', $value['adminUser']);
					Session::set('adminName', $value['adminName']);
					// Nếu đúng thì sẽ hướng quay về trang index.php
					header('Location:index.php');
				}else {
					// Nếu người dùng nhập sai pass or tên sẽ thông báo
					$alert = "User and Pass not match";
					return $alert;
				}
			}
		}
	}
 ?>