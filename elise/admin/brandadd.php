<?php require_once 'layout/header.php'; ?>
<?php require_once 'layout/sidebar.php'; ?>
<?php require '../classes/brand.php'; ?>
<?php 
	$brand = new brand();
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$brandName = $_POST['brandName'];

		$insertBrand = $brand->insert_brand($brandName);
	}

 ?>

	<div id="page-wrapper">
		<div id="page-inner">
			<div class="row">
				<div class="col-md-12">
					<h2>Thêm thương hiệu sản phẩm</h2>
					<div class="category-product">
						<?php if (isset($insertBrand)) {
						echo $insertBrand;
						} ?>
						<form action="brandadd.php" method="post" accept-charset="utf-8">
							<div class="text-add">
								<input type="text" name="brandName" placeholder="Add new brand product..." class="form-control">
							</div>
							<div class="text-add">
								<input type="submit" name="submit" value="Lưu" class="btn btn-success">
								<a href="brandlist.php" class="btn btn-success" title="Đi tới danh sách danh mục">Đi tới danh sách</a>
							</div>
						</form>
					</div>
				</div>
			</div>

<?php require_once 'layout/footer.php'; ?>