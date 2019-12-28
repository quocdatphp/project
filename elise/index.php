<?php require_once "layout/header.php" ?>
	<!-- Banner -->
	<div class="banner">
		<div class="slide">
			<a href="#"><img src="image/banner3.jpg" alt="" class="img-banner"></a>
		</div>
		<div class="left carousel-control">
			<a href="#"><i class="fas fa-chevron-left"></i></a>
		</div>
		<div class="right carousel-control">
			<a href="#"><i class="fas fa-chevron-right"></i></a>
		</div>
	</div>
	<!-- content -->
	<div class="content">
		<!-- product-hot -->
		<div class="product-hot">
			<div class="block-heading">
				<a href="" class="headings">SẢN PHẨM HOT</a>
			</div>
			<div class="block-content">
				<ul class="navbar">
					<li class="active"><a href="#">ELISE WOMAN</a></li>
					<li><a href="">ELISE SHOSE</a></li>
					<li><a href="">ELISE BAGS</a></li>
					<li><a href="">ELISE COSMETIS</a></li>
				</ul>
				<div class="tab-content">
					<div class="list-product">
						<?php 
						$product_feathered = $product->getproduct_feathered();
						if ($product_feathered) {
							while ($result = $product_feathered->fetch_assoc()) {
						 ?>
						<div class="item-gird col-lg-3 col-md-3 col-sm-6">
							<div class="product-item">
								<a href="detail-product.php?proid=<?php echo $result['productID'] ?>" title="<?php echo $result['productName'] ?>"><img src="admin/uploads/<?php echo $result['image'] ?>" alt="" class="img-product"></a>
								<div class="holder">
									<h2 class="heading-product"><a href="detail-product.php?proid=<?php echo $result['productID'] ?>" title=""><?php echo $result['productName'] ?></a></h2>
									<div class="code">FS1910011BKWOWH</div>
									<div class="price">
										<span class="price-white"><?php echo $result['price'] ?></span>&nbsp; &nbsp;
										<span class="price-sale">7.000.000</span>
									</div>
								</div>
							</div>
						</div>
						<?php 
					}
				}
						 ?>
					</div>
					<div class="pagination">
						<span class="dot"></span>&nbsp;
						<span class="dot"></span>&nbsp;
						<span class="dot"></span>&nbsp;
					</div>
				</div>
			</div>
		</div>
		<!-- end- producthot -->
		<!-- collection -->
		<div class="collection">
			<div class="block-heading"><a href="">bộ sưu tập</a></div>
			<div class="block-content">
				<div class="row">
					<div class="collection-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<article class="">
							<a href="" class="thumb" title="the cold winter"><img src="image/banner1.jpg" alt="the cold winter"></a>
							<h3 class="heading-coll"><a href="#" class="title" title="the cold winter">the cold winter</a></h3>
						</article>
					</div>
					<div class="collection-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<article class="">
							<a href="" class="thumb" title="the cold winter"><img src="image/banner2.jpg" alt="the cold winter"></a>
							<h3 class="heading-coll"><a href="#" class="title" title="the cold winter">worderland</a></h3>
						</article>
					</div>
					<div class="collection-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<article class="">
							<a href="" class="thumb" title="the cold winter"><img src="image/banner.jpg" alt="the cold winter"></a>
							<h3 class="heading-coll"><a href="#" class="title" title="the cold winter">có phải mùa đông thật ấm áp</a></h3>
						</article>
					</div>
				</div>
			</div>
		</div>
		<!-- END COLLECTION -->
		<!-- block-news-video-shopsystem -->
		<div class="container">
			<div class="homecontent">
				<div class="row">
					<div class="col-lg-4 col-md-4">
						<div class="news">
							<div class="block-heading">
								<a href="#">Tin tức</a>
							</div>
						</div>
						<div class="block-content">
							<article class="top-item">
								<a href="#" class="thumb" title=""><img src="image/col.jpg" alt="" id="imgnews"></a>
								<h3 class="heading-news"><a href="#" class="title">huyền my thanh lịch ngọt ngào trong bộ váy thu đông thời trang 2019</a></h3>
							</article>
							<div class="list-item">
								<h3 class="heading"><a href="#" class="list-frontpaper" title="Cơ hội cho ai - Tập 5: sếp Nga không hài lòng vơi nhà báo lại văn sâm">Cơ hội cho ai - Tập 5: sếp Nga không hài lòng với nhà báo lại văn sâm</a></h3>
							</div>
							<div class="list-item">
								<h3 class="heading"><a href="#" class="list-frontpaper" title="lộ diện top 10 hoa hậu hoàn vũ việt nam 2019">lộ diện top 10 hoa hậu hoàn vũ việt nam 2019</a></h3>
							</div>
							<div class="list-item">
								<h3 class="heading"><a href="#" class="list-frontpaper" title="Cơ hội cho ai - Tập 5: sếp Nga không hài lòng vơi nhà báo lại văn sâm">Hoa hậu Đặng Thu Thảo hoá cô nàng mùa thu ngọt ngào</a></h3>
							</div>
							<div class="list-item">
								<h3 class="heading"><a href="#" class="list-frontpaper" title="Cơ hội cho ai - Tập 5: sếp Nga không hài lòng vơi nhà báo lại văn sâm">CEO thời trang Elise Lưu Nga: không ai muốn lựa chọn ứng viên tự xem mình là ngôi sao!</a></h3>
							</div>
							<div class="list-item">
								<h3 class="heading"><a href="#" class="list-frontpaper" title="Cơ hội cho ai - Tập 5: sếp Nga không hài lòng vơi nhà báo lại văn sâm">Cơ hội cho ai - Tập 5: sếp Nga không hài lòng với nhà báo lại văn sâm</a></h3>
							</div>
							<div class="list-item">
								<h3 class="heading"><a href="#" class="list-frontpaper" title="Cơ hội cho ai - Tập 5: sếp Nga không hài lòng vơi nhà báo lại văn sâm">Cơ hội cho ai - Tập 5: sếp Nga không hài lòng với nhà báo lại văn sâm</a></h3>
							</div>
							<div class="list-item">
								<h3 class="heading"><a href="#" class="list-frontpaper" title="Cơ hội cho ai - Tập 5: sếp Nga không hài lòng vơi nhà báo lại văn sâm">Cơ hội cho ai - Tập 5: sếp Nga không hài lòng với nhà báo lại văn sâm</a></h3>
							</div>
						</div>
					</div>
					<div class="col-lg-8 col-md-8">
						<div class="row">
							<div class="block-video col-md-6">
								<div class="block-heading">
									<a href="#" title="video">video</a>
								</div>
								<div class="block-content">
									<article class="top-video">
										<video src="video/video-1574409136.mp4" height="300px" width="100%;" controls>
											<source type="video/mp4">Trình duyệt không hỗ trợ video 
										</video>
										<h3 class="headingvid"><a href="#">wonderland</a></h3>
									</article>
									<div class="list-item row">
										<div class="col-sm-6 col-xs-6">
											<article>
												<video src="video/video-1574409137.mp4" controls width="100%" height="200px"></video>
											</article>
											<h3 class="headingvid"><a href="#">The autumn isnot it</a></h3>
										</div>
										<div class="col-sm-6 col-xs-6">
											<article>
												<video src="video/video-1574409163.mp4" controls width="100%" height="200px"></video>
											</article>
											<h3 class="headingvid"><a href="#">fall in love with ginko</a></h3>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 system-store scrollBar">
								<div class="block-heading"><a href="#" title="hệ thống cửa hàng">hệ thống cửa hàng</a></div>
								<div class="block-content">
									<div class="address-item">
										<h3 class="heading"><a href="#" class="list-frontpaper" title="29 Thái Hà, Q. Đống Đa, Hà Nội - tel:0909898324">29 Thái Hà, Q. Đống Đa, Hà Nội - tel:0909898324</a></h3>
									</div>
									<div class="address-item">
										<h3 class="heading"><a href="#" class="list-frontpaper" title="Tầng 4 - Tràng Tiền Plaza, HN - Tel:0243 9392540">Tầng 4 - Tràng Tiền Plaza, HN - Tel:0243 9392540</a></h3>
									</div>
									<div class="address-item">
										<h3 class="heading"><a href="#" class="list-frontpaper" title="Số 46 đường Thời đại - B1 Times City, 458 Minh Khai, Q. Hai Bà Trưng, Hà Nội - Tel: 024 3200 5995">Số 46 đường Thời đại - B1 Times City, 458 Minh Khai, Q. Hai Bà Trưng, Hà Nội - Tel: 024 3200 5995</a></h3>
									</div>
									<div class="address-item">
										<h3 class="heading"><a href="#" class="list-frontpaper" title="29 Thái Hà, Q. Đống Đa, Hà Nội - tel:0909898324">29 Thái Hà, Q. Đống Đa, Hà Nội - tel:0909898324</a></h3>
									</div>
									<div class="address-item">
										<h3 class="heading"><a href="#" class="list-frontpaper" title="29 Thái Hà, Q. Đống Đa, Hà Nội - tel:0909898324">29 Thái Hà, Q. Đống Đa, Hà Nội - tel:0909898324</a></h3>
									</div>
										<div class="address-item">
										<h3 class="heading"><a href="#" class="list-frontpaper" title="29 Thái Hà, Q. Đống Đa, Hà Nội - tel:0909898324">29 Thái Hà, Q. Đống Đa, Hà Nội - tel:0909898324</a></h3>
									</div>
									<div class="address-item">
										<h3 class="heading"><a href="#" class="list-frontpaper" title="29 Thái Hà, Q. Đống Đa, Hà Nội - tel:0909898324">29 Thái Hà, Q. Đống Đa, Hà Nội - tel:0909898324</a></h3>
									</div>
									<div class="address-item">
										<h3 class="heading"><a href="#" class="list-frontpaper" title="29 Thái Hà, Q. Đống Đa, Hà Nội - tel:0909898324">29 Thái Hà, Q. Đống Đa, Hà Nội - tel:0909898324</a></h3>
									</div>
									<div class="address-item">
										<h3 class="heading"><a href="#" class="list-frontpaper" title="29 Thái Hà, Q. Đống Đa, Hà Nội - tel:0909898324">29 Thái Hà, Q. Đống Đa, Hà Nội - tel:0909898324</a></h3>
									</div>
										<div class="address-item">
										<h3 class="heading"><a href="#" class="list-frontpaper" title="29 Thái Hà, Q. Đống Đa, Hà Nội - tel:0909898324">29 Thái Hà, Q. Đống Đa, Hà Nội - tel:0909898324</a></h3>
									</div>
									<div class="address-item">
										<h3 class="heading"><a href="#" class="list-frontpaper" title="29 Thái Hà, Q. Đống Đa, Hà Nội - tel:0909898324">29 Thái Hà, Q. Đống Đa, Hà Nội - tel:0909898324</a></h3>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END CONTENT -->
	<?php include "layout/footer.php" ?>
</body>
</html>