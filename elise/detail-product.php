<?php require_once "layout/header.php"; ?>
<?php 
	if (!isset($_GET['proid']) || $_GET['proid'] == NULL) {
		echo "<script>window.location = '404.php'</script>";
	}else {
		$id = $_GET['proid'];
	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
		$quantity = $_POST['quantity'];
		$AddtoCart = $ct->add_to_cart($quantity, $id);
	}
?>
<div class="container container-product">
	<div class="row row-detail">
		<!-- $product được khởi tạo bên header.php -->
		<?php 
		$get_product_details = $product->getproduct_detail($id);
		if ($get_product_details) {
			while ($result_details = $get_product_details->fetch_assoc()) {
		?>
		<div class="col-lg-6 col-md-6 col-thumbs">
			<div class="product-thumbs">
				<ul>
					<li><img src="image/detail.jpg" alt="" class="img-small"></li>
					<li><img src="image/detail2.jpg" alt="" class="img-small"></li>
					<li><img src="image/detail3.jpg" alt="" class="img-small"></li>
					<li><img src="image/detail4.jpg" alt="" class="img-small"></li>
				</ul>
				<div class="product-zoom">
					<img src="admin/uploads/<?php echo $result_details['image'] ?>" alt="" id="image-big" class="image-big">
				</div>
			</div>
		</div>
		<div class="product-summary col-lg-6 col-md-6">
			<h1><?php echo $result_details['productName'] ?></h1>
			<div class="statistic">
				<div class="col-md-12">
					Mã: <span>FW1907054DITWPK</span>
				</div>
			</div>
			<div class="price-detail">
				<span class="price-red"><?php echo $result_details['price']."đ" ?></span> &nbsp; <span class="price-silver">2.799.000</span>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="extends">
						<div class="size">
							<div class="ext-heading">
								<span>Chọn size: </span>
								<b class="extend_text_size"></b>
							</div>
							<ul class="ul-extends">
								<li><a href="">S</a></li>
								<li><a href="">M</a></li>
								<li><a href="">L</a></li>
								<li><a href="">XL</a></li>
							</ul>
						</div>
						<form action="" method="post">
							<div class="qty">
								<div class="ext-heading">
									<span>Số lượng: </span>
									<!-- <b class="quantity-text"></b> -->
									<div class="qty">
										<a href="#" class="button-minus"> - </a>&nbsp;
										<input type="number" id="quantity" name="quantity" value="1" min="1">&nbsp;
										<a href="#" class="button-plus"> + </a>
									</div>
								</div>
							</div>
							<!-- onclick="return confirm('Sản phẩm này đã có trong giỏ hàng')" -->
							<input type="submit" name="submit" class="quantity-cart add-cart" value="đặt mua">
							<?php 
								if(isset($AddtoCart)) {
									echo "<script>confirm('Sản phẩm này đã có trong giỏ hàng');</script>";
								}
							?>
						</form>
						<ul class="buy-note">
							<li class=""><i class="fas fa-book"></i><a href="#">Cách thức mua hàng</a></li>
							<li class=""><i class="fas fa-pencil-ruler"></i><a href="#">Hướng dẫn chọn size và giặt là</a></li>
						</ul>
						<ul class="buy-note">
							<li class="">Mua hàng online qua hot line</li>
							<li class=""><i class="fas fa-phone-volume"></i><a href="#">035 406 5353</a></li>
							<li class=""><i class="fas fa-fax"></i><a href="#">0243 577 778</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<?php
			}
		} ?>
		<!-- END PRODUCT-SUMMARY -->
		<!-- INFORMATION PRODUCT -->
		<div class="product-content">
			<ul class="list-inline">
				<li class="selected"><a href="">Thông tin chi tiết</a></li>
				<li class=""><a href="">Cách thức mua hàng</a></li>
				<li class=""><a href="">Bảng size & giặt là</a></li>
			</ul>
			<div class="pc-heading">
			Hướng dẫn mua hàng
			</div>
			<div class="pc-content">
				<p><strong>1. &nbsp; CHỌN LỰA HÀNG HÓA</strong></p>
				<p>- Quý khách chọn xem chi tiết các mẫu sản phẩm tại website&nbsp;www.elise.vn<br>
				- Khi đã tìm được sản phẩm quan tâm và phù hợp, Quý khách có thể đặt hàng theo các hình thức sau đây:</p>

				<p><strong>2. &nbsp; Hình thức Mua hàng trực tuyến:</strong><br>
				- Chọn kích cỡ, màu sắc, số lượng sản phẩm rồi click vào nút “Mua hàng ngay” để đưa sản phẩm vào Giỏ hàng của mình.<br>
				-&nbsp;Để lựa chọn thêm sản phẩm khác, vui lòng click vào nút&nbsp; “Tiếp tục mua hàng”. Nếu không, quý khách vui lòng click vào nút “Gửi đơn hàng”&nbsp; để tiếp tục quy trình mua hàng và thanh toán.</p>

				<p><strong>3. &nbsp; Hình thức Mua hàng qua điện thoại:</strong><br>
				- Chọn kích cỡ, màu sắc, số lượng sản phẩm rồi gọi&nbsp;cho chúng tôi vào số hotline: <strong>18002091</strong>&nbsp;để đặt hàng, nhân viên của chúng tôi sẽ liên hệ lại để xác nhận thông tin sản phẩm của Quý khách. Và hướng dẫn Quý khách chuyển khoản thanh toán.</p>

				<p>Lưu ý: Nếu chọn hình thức mua hàng qua điện thoại, Quý khách vui lòng bỏ qua bước Gửi đơn hàng</p>

				<p><strong>4. &nbsp; Thanh toán đơn hàng</strong></p>

				<p>Chúng tôi sử dụng&nbsp;hình thức thanh toán&nbsp;chuyển khoản qua ngân hàng. Vui lòng liên hệ Hotline&nbsp;&nbsp;<strong>18002091</strong><b>&nbsp;</b>nếu quý khách thắc mắc thêm.</p>
			</div>
			<div class="pc-heading">
			Hướng dẫn chọn size
			</div>
			<div class="pc-content">
				<p><img src="image/g.jpg" alt=""></p>
			</div>
			<div class="product-sidebar">
				<div class="ps-heading">
					Sản phẩm cùng loại
				</div>
				<div class="row">
					<div class="list-product">
						<div class="item-gird col-lg-3 col-md-3 col-sm-6">
							<div class="product-item">
								<a href="#" title="MĂNG TÔ DẠ VÀNG LÔNG CỪU CÚC SƯỜN"><img src="image/product8.jpg" alt="" class="img-product"></a>
								<div class="holder">
									<h2 class="heading-product"><a href="" title="">MẶT NẠ LÔNG CỪU NẮP TÚI</a></h2>
									<div class="code">FS1910011BKWOWH</div>
									<div class="price">
										<span class="price-sale">7.000.000</span>&nbsp; &nbsp;
										<span class="price-white">9.000.000</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item-gird col-lg-3 col-md-3 col-sm-6">
							<div class="product-item">
								<a href="#" title="MĂNG TÔ DẠ VÀNG LÔNG CỪU CÚC SƯỜN"><img src="image/product9.jpg" alt="" class="img-product"></a>
								<div class="holder">
									<h2 class="heading-product"><a href="" title="">MẶT NẠ LÔNG CỪU NẮP TÚI</a></h2>
									<div class="code">FS1910011BKWOWH</div>
									<div class="price">
										<span class="price-sale">7.000.000</span>&nbsp; &nbsp;
										<span class="price-white">9.000.000</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item-gird col-lg-3 col-md-3 col-sm-6">
							<div class="product-item">
								<a href="#" title="MĂNG TÔ DẠ VÀNG LÔNG CỪU CÚC SƯỜN"><img src="image/product10.jpg" alt="" class="img-product"></a>
								<div class="holder">
									<h2 class="heading-product"><a href="" title="">MẶT NẠ LÔNG CỪU NẮP TÚI</a></h2>
									<div class="code">FS1910011BKWOWH</div>
									<div class="price">
										<span class="price-sale">7.000.000</span>&nbsp; &nbsp;
										<span class="price-white">9.000.000</span>
									</div>
								</div>
							</div>
						</div>
						<div class="item-gird col-lg-3 col-md-3 col-sm-6">
							<div class="product-item">
								<a href="#" title="MĂNG TÔ DẠ VÀNG LÔNG CỪU CÚC SƯỜN"><img src="image/product11.jpg" alt="" class="img-product"></a>
								<div class="holder">
									<h2 class="heading-product"><a href="" title="">MẶT NẠ LÔNG CỪU NẮP TÚI</a></h2>
									<div class="code">FS1910011BKWOWH</div>
									<div class="price">
										<span class="price-sale">7.000.000</span>&nbsp; &nbsp;
										<span class="price-white">9.000.000</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END PRODUCT-CONTENT -->
	</div>
</div>
<?php require_once "layout/footer.php" ?>
</body>
</html>