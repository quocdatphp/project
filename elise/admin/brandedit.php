<?php require_once 'layout/header.php'; ?>
<?php require_once 'layout/sidebar.php'; ?>
<?php require '../classes/brand.php'; ?>
<?php 
	$brand = new brand();
	// kiểm tra nếu không tồn tại thì quay lại brandlist.php
	if (!isset($_GET['brandid']) || $_GET['brandid'] == NULL) {
		echo "<script>window.location = 'brandlist.php'</script>";
	}else {
		$id = $_GET['brandid'];
	}
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$brandName = $_POST['brandName'];
		$updateBrand = $brand->update_brand($brandName,$id);
	}
 ?>

<div id="page-wrapper">
		<div id="page-inner">
			<div class="row">
				<div class="col-md-12">
					<h2>Sửa thương hiệu</h2>
					<div class="category-product">
						<?php if (isset($updateBrand)) {
						echo $updateBrand;
						} ?>
						<?php 
							// lấy giá trị của id tên danh mục 
							$get_brand_name = $brand->getbrandbyId($id);
							if ($get_brand_name) {
								while ($result = $get_brand_name->fetch_assoc()) {
						 ?>
						<form action="" method="post" accept-charset="utf-8">
							<div class="text-add">
								<input type="text" value="<?php echo $result['brandName'] ?>" name="brandName" placeholder="Edit category product..." class="form-control">
							</div>
							<div class="text-add">
								<input type="submit" name="submit" value="Chỉnh sửa" class="btn btn-success">
								<a href="brandlist.php" class="btn btn-success" title="Quay lại danh sách thương hiệu">Quay lại</a>
							</div>
						</form>
						<?php 
							}
						}
						?>
					</div>
				</div>
			</div>

<?php require_once "layout/footer.php" ?>