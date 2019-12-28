<?php require_once 'layout/header.php'; ?>
<?php require_once 'layout/sidebar.php'; ?>
<?php require '../classes/category.php'; ?>
<?php 
	$cat = new category();
	if (isset($_GET['delid'])) {
		$id = $_GET['delid'];
		$delcat = $cat->del_category($id);
	}
?>

	<div id="page-wrapper" >
			<div id="page-inner">
			 <div class="row">
					<div class="col-md-12">
						<h1 class="page-header">
							Danh sách sản phẩm <small> LIST </small>
						</h1>
					</div>
				</div> 
				 <!-- /. ROW  -->
			<div class="row">
				<div class="col-md-12">
					<!-- Advanced Tables -->
					<div class="panel panel-default">
						<div class="panel-heading">
							 Hiển thị danh mục&emsp; <a href="catadd.php" class="btn btn-success" title="Quay lại danh sách sản phẩm">Thêm danh mục mới</a>
						</div>
						<?php if (isset($delcat)) {
							echo $delcat;
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
											$show_cate = $cat->show_category();
											if ($show_cate) {
												// cho stt tự tăng $i++ và show danh mục ra
												$i = 0;
												while ($result = $show_cate->fetch_assoc()) {
													$i++;
										 ?>
										<tr class="name-list-item">
											<td><?php echo $i; ?></td>
											<td><?php echo $result['catName']; ?></td>
											<td><a class="fas fa-edit" href="catedit.php?catid=<?php echo $result['catID'] ?>">Sửa danh mục</a> || <a onclick="return confirm('Are you want to delete?')" href="?delid=<?php echo $result['catID'] ?>" >Xoá danh mục</a><i class="far fa-trash-alt"></i></td>
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