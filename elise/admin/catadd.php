<?php require_once 'layout/header.php'; ?>
<?php require_once 'layout/sidebar.php'; ?>
<?php require '../classes/category.php'; ?>
<?php 
	$cat = new category();
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$catName = $_POST['catName'];

		$insertCat = $cat->insert_category($catName);
	}

 ?>

	<div id="page-wrapper">
		<div id="page-inner">
			<div class="row">
				<div class="col-md-12">
					<h2>Thêm danh mục sản phẩm</h2>
					<div class="category-product">
						<?php if (isset($insertCat)) {
						echo $insertCat;
						} ?>
						<form action="catadd.php" method="post" accept-charset="utf-8">
							<div class="text-add">
								<input type="text" name="catName" placeholder="Add category product..." class="form-control">
							</div>
							<div class="text-add">
								<input type="submit" name="submit" value="Lưu" class="btn btn-success">
								<a href="catlist.php" class="btn btn-success" title="Đi tới danh sách danh mục">Đi tới danh sách</a>
							</div>
						</form>
					</div>
				</div>
			</div>

<?php require_once 'layout/footer.php'; ?>