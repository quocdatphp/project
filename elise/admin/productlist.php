<?php require_once "layout/header.php"; ?>
<?php require_once "layout/sidebar.php"; ?>
<?php require "../classes/category.php"; ?>
<?php require "../classes/brand.php"; ?>
<?php require "../classes/product.php"; ?>
<?php require_once "../helpers/format.php"; ?>
<?php 
	$fm = new Format();
	$pd = new product(); 
	if (isset($_GET['productid'])) {
		$id = $_GET['productid'];
		$delpro = $pd->del_product($id);
	}

?>

<div id="page-wrapper" >
			<div id="page-inner">
			 <div class="row">
					<div class="col-md-12">
						<h1 class="page-header">
							Danh sách sản phẩm <small>List product</small>
						</h1>
					</div>
					<?php 
					if (isset($delpro)) {
						echo $delpro;
					}
					?>
				</div> 
			<div class="row">
				<div class="col-md-12">
					<!-- Advanced Tables -->
					<div class="panel panel-default">
						<div class="panel-heading">
							Hiển thị danh sách sản phẩm:&emsp; <a href="productadd.php" class="btn btn-success">Thêm sản phẩm mới</a>
						</div>
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr class="heading">
											<th>Số thứ tự</th>
											<th>Tên sản phẩm</th>
											<th>Tên danh mục</th>
											<th>Tên thương hiệu</th>
											<th>Mô tả sản phẩm</th>
											<th>Sản phẩm loại</th>
											<th>Giá sản phẩm</th>
											<th>Hình ảnh sản phẩm</th>
											<th>Thao tác</th>
										</tr>
									</thead>
									<tbody>
										<?php 
											$pdlist = $pd->show_product();
											if ($pdlist) {
												$i = 0;
												while ($result = $pdlist->fetch_assoc()) {
													$i++;
										 ?>
										<tr class="name-list-item">
											<td><?php echo $i ?></td>
											<td><?php echo $result['productName'] ?></td>
											<td><?php echo $result['catName'] ?></td>
											<td><?php echo $result['brandName'] ?></td>
											<td><?php echo $fm->textShorten($result['product_desc'], 10) ?></td>
											<td>
												<?php 
												if ($result['type'] == 0) {
													echo 'hot';
												}else {
													echo 'thường';
												} ?>
											</td>
											<td><?php echo $result['price'] ?></td>
											<td><img src="uploads/<?php echo $result['image'] ?>" alt=""></td>
											<td><a href="productedit.php?productid=<?php echo $result['productID'] ?>" title="Sửa sản phẩm" class="fas fa-edit"></a> || <a href="?productid=<?php echo $result['productID'] ?>" title="Xoá sản phẩm" class="far fa-trash-alt" onclick="return confirm('Bạn có muốn xoá không??')" ></a></td>
										</tr>
										<?php 
												}
											}
										 ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php require_once "layout/footer.php" ?>