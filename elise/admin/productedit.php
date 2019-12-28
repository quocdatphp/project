<?php require_once "layout/header.php"; ?>
<?php require_once "layout/sidebar.php"; ?>
<?php require "../classes/category.php"; ?>
<?php require "../classes/brand.php"; ?>
<?php require "../classes/product.php"; ?>
<?php 
	$pd = new product();
	if (!isset($_GET['productid']) ||$_GET['productid'] == NULL) {
		echo "<script>window.location = 'productlist.php'</script>";
	}else {
		$id = $_GET['productid'];
	}
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
		$updateProduct = $pd->update_product($_POST, $_FILES, $id);
	}
 ?>

	<div id="page-wrapper" >
		<div id="page-inner">
			<div class="row">
				<div class="col-md-12">
					<h1 class="page-header">
						Sửa sản phẩm <small>Update product </small><a href="productlist.php" class="btn btn-success">Quay lại</a>
					</h1>
					<?php if (isset($updateProduct)) {
						echo $updateProduct;
					} ?>
				</div>
			</div> 
				 <!-- /. ROW  -->
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="row">
								<?php 
								$get_product_by_id = $pd->getproductbyId($id);
									if ($get_product_by_id) {
										while ($result_product = $get_product_by_id->fetch_assoc()){
								 ?>
								<form action="" method="post" enctype="multipart/form-data">
									<div class="col-lg-4">
										<div class="form-group">
											<label>Tên sản phẩm</label>
											<input type="text" name="productName" class="form-control" placeholder="Nhập tên sản phẩm" value="<?php echo $result_product['productName'] ?>">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label>Chọn danh mục</label>
											<select class="form-control" name="category">
												<?php 
												$cat =  new category();
												$catlist = $cat->show_category();
												if ($catlist) {
													while ($result = $catlist->fetch_assoc()) {
												?>
												<option 
												<?php 
												if ($result['catID'] == $result_product['catID']) {
													echo 'selected';
												}
												 ?>
												value="<?php echo $result['catID'] ?>"><?php echo $result['catName'] ?></option>
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
												<?php 
													$brand = new brand();
													$brandlist = $brand->show_brand();
													if ($brandlist) {
														while ($result = $brandlist->fetch_assoc()) {
												 ?>
												<option 
												<?php if ($result['brandID'] == $result_product['brandID']) {
													echo 'selected';
												} ?>
												value="<?php echo $result['brandID'] ?>"><?php echo $result['brandName'] ?></option>
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
											<input type="text" name="price" placeholder="Nhập giá của sản phẩm" class="form-control" value="<?php echo $result_product['price'] ?>">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Sản phẩm nổi bật</label>
											
											<select class="form-control" name="type">
												<?php if ($result_product['type'] == 0) {
												 ?>
												<option selected value="0">Hot</option>
												<option value="1">Thường</option>
											<?php 
											}else {
											?>
												<option value="0">Hot</option>
												<option selected value="1">Thường</option>
											<?php } ?>
											</select>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="col-lg-3">
											<div class="form-group">
												<label>Hình ảnh sản phẩm</label>
												<input type="file" name="image">
												<img src="uploads/<?php echo $result_product['image'] ?>" alt="" style="width: 240px; height: 310px; margin-top: 10px;" >
											</div>
										</div>
										<div class="col-lg-9">
											<div class="form-group">
												<label>Mô tả sản phẩm</label>
												<textarea name="product_desc" id="post_content"><?php echo $result_product['product_desc'] ?></textarea>
											</div>
										</div>
									</div>
									<div class="text-add col-lg-1">
										<input type="submit" name="submit" value="Sửa sản phẩm" class="btn btn-success">
									</div>
								</form>
								<?php 
								}
								}
								 ?>
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