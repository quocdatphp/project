<?php require_once 'layout/header.php'; ?>
<?php require_once 'layout/sidebar.php'; ?>
<?php require '../classes/brand.php'; ?>
<?php 
	$brand = new brand();
	if (isset($_GET['delid'])) {
		$id = $_GET['delid'];
		$delbrand = $brand->del_brand($id);
	}
?>

	<div id="page-wrapper" >
		<div id="page-inner">
			<div class="row">
				<div class="col-md-12">
					<h1 class="page-header">
						Các thương hiệu sản phẩm <small> LIST </small>
					</h1>
				</div>
			</div> 
				 <!-- /. ROW  -->
			<div class="row">
				<div class="col-md-12">
					<!-- Advanced Tables -->
					<div class="panel panel-default">
						<div class="panel-heading">
							 Hiển thị thương hiệu&emsp; <a href="brandadd.php" class="btn btn-success" title="Quay lại danh sách sản phẩm">Thêm thương hiệu mới</a>
						</div>
						<?php if (isset($delbrand)) {
							echo $delbrand;
						} ?>
						<div class="panel-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover" id="dataTables-example">
									<thead>
										<tr class="heading">
											<th>Số thứ tự</th>
											<th>Tên danh mục</th>
											<th>Thao tác</th>
										</tr>
									</thead>
									<tbody>
										<?php 
											$show_brand = $brand->show_brand();
											if ($show_brand) {
												// cho stt tự tăng $i++ và show danh mục ra
												$i = 0;
												while ($result = $show_brand->fetch_assoc()) {
													$i++;
										 ?>
										<tr class="name-list-item">
											<td><?php echo $i; ?></td>
											<td><?php echo $result['brandName']; ?></td>
											<td><a class="fas fa-edit" href="brandedit.php?brandid=<?php echo $result['brandID'] ?>">Sửa thương hiêu</a> || <a onclick="return confirm('Are you want to delete?')" href="?delid=<?php echo $result['brandID'] ?>" >Xoá thương hiệu</a><i class="far fa-trash-alt"></i></td>
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
					<!--End Advanced Tables -->
				</div>
			</div>
		</div>
<?php require_once 'layout/footer.php' ?>