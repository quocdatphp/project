<?php require_once 'layout/header.php'; ?>
<?php require_once 'layout/sidebar.php'; ?>
<?php require '../classes/category.php'; ?>
<?php 
	$cat = new category();
	if (!isset($_GET['catid']) || $_GET['catid'] == NULL) {
		echo "<script>window.location = 'catlist.php'</script>";
	}else {
		$id = $_GET['catid'];
	}
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$catName = $_POST['catName'];
		$updateCat = $cat->update_category($catName,$id);
	}
 ?>

<div id="page-wrapper">
		<div id="page-inner">
			<div class="row">
				<div class="col-md-12">
					<h2>Sửa danh mục sản phẩm</h2>
					<div class="category-product">
						<?php if (isset($updateCat)) {
						echo $updateCat;
						} ?>
						<?php 
							// lấy giá trị của id tên danh mục 
							$get_cate_name = $cat->getcatbyId($id);
							if ($get_cate_name) {
								while ($result = $get_cate_name->fetch_assoc()) {
						 ?>
						<form action="" method="post" accept-charset="utf-8">
							<div class="text-add">
								<input type="text" value="<?php echo $result['catName'] ?>" name="catName" placeholder="Edit category product..." class="form-control">
							</div>
							<div class="text-add">
								<input type="submit" name="submit" value="Chỉnh sửa" class="btn btn-success">
								<a href="catlist.php" class="btn btn-success" title="Quay lại danh sách sản phẩm">Quay lại</a>
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