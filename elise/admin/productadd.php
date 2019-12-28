<?php require_once "layout/header.php"; ?>
<?php require_once "layout/sidebar.php"; ?>
<?php require "../classes/category.php"; ?>
<?php require "../classes/brand.php"; ?>
<?php require "../classes/product.php"; ?>
<?php 
	$pd = new product();
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
		$insertProduct = $pd->insert_product($_POST, $_FILES);
	}
 ?>

	<div id="page-wrapper" >
		<div id="page-inner">
			<div class="row">
				<div class="col-md-12">
					<h1 class="page-header">
						Thêm sản phẩm <small>Add product </small><a href="productlist.php" class="btn btn-success">Quay lại</a>
					</h1>
					<?php if (isset($insertProduct)) {
						echo $insertProduct;
					} ?>
				</div>
			</div> 
				 <!-- /. ROW  -->
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="row">
								<form action="productadd.php" method="post" enctype="multipart/form-data">
									<div class="col-lg-4">
										<div class="form-group">
											<label>Tên sản phẩm</label>
											<input type="text" name="productName" class="form-control" placeholder="Nhập tên sản phẩm">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label>Chọn danh mục</label>
											<select class="form-control" name="category">
												<option>........ Danh sách danh mục ........</option>
												<?php 
												$cat =  new category();
												$catlist = $cat->show_category();
												if ($catlist) {
													while ($result = $catlist->fetch_assoc()) {
												?>
												<option value="<?php echo $result['catID'] ?>"><?php echo $result['catName'] ?></option>
												<?php 
												}
											} 
											?>
											</select>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label>Chọn thương hiệu</label>
											<select class="form-control" name="brand">
												<option>.......Danh sách thương hiệu........</option>
												<?php 
													$brand = new brand();
													$brandlist = $brand->show_brand();
													if ($brandlist) {
														while ($result = $brandlist->fetch_assoc()) {
												 ?>
												<option value="<?php echo $result['brandID'] ?>"><?php echo $result['brandName'] ?></option>
												<?php 
														}
													} 
												?>
											</select>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Giá sản phẩm</label>
											<input type="text" name="price" placeholder="Nhập giá của sản phẩm" class="form-control">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Sản phẩm nổi bật</label>
											<select class="form-control" name="type">
												<option>........Sản phẩm loại.........</option>
												<option value="feature">Hot</option>
												<option value="non-feature">Thường</option>
											</select>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label>Hình ảnh sản phẩm</label>
											<input type="file" name="image">
										</div>
									</div>
									<div class="col-lg-8">
										<div class="form-group">
											<label>Mô tả sản phẩm</label>
											<textarea name="product_desc" id="post_content"></textarea>
										</div>
									</div>
									<div class="text-add col-lg-1">
										<input type="submit" name="submit" value="Lưu sản phẩm" class="btn btn-success">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php require_once "layout/footer.php" ?>
<script>
	CKEDITOR.replace("post_content");
</script>