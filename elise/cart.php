<?php require_once "layout/header.php"; ?>
<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
	$cartId = $_POST["cartId"];
	$quantity = $_POST["quantity"];
	$update_quantity_cart = $ct->update_quantity_cart($quantity, $cartId);
} ?>
<div class="container container-cart">
	<div class="container-white">
		<div class="cart-heading">
			Giỏ hàng của bạn
		</div>
		<?php if (isset($update_quantity_cart)) {
			echo $update_quantity_cart;
		} ?>
		<table class="table-cart table table-bordered">
			<thead>
				<tr>
					<th>Sản phẩm</th>
					<th>Size</th>
					<th>Số lượng</th>
					<th>Đơn giá</th>
 					<th>Thành tiền</th>
				</tr>
			</thead>
			<?php 
			$get_product_cart = $ct->get_product_cart();
			if ($get_product_cart) {
				$subtotal = 0;
				$qty = 0;
				while ($result = $get_product_cart->fetch_assoc()) {
			 ?>
			<tbody><form action="" method="post">
				<tr class="cart-item">
					<td class="name">
						<a href="" title="<?php echo $result['productName'] ?>">
							<img class="thumb" alt="<?php echo $result['productName'] ?>" src="admin/uploads/<?php echo $result['image'] ?>">
						</a>
						<div class="heading-cart" style="text-align: left;">
							<a href="" title="<?php echo $result['productName'] ?>"><?php echo $result['productName'] ?></a>
							<br><small>Mã: FW1907280DIWORD</small>
						</div>
						<div style="text-align: left;"><a class="delete" href=""> X Bỏ sản phẩm</a></div>
					</td>
					<td class="size">
						<select name="size[3413]">
							<option selected value="1">S</option>
							<option value="2">M</option>
							<option value="3">L</option>
							<option value="4">XL</option>
						</select>
					</td>
					<td class="qty">
						<input type="number" name="quantity" class="quantity-value" min="0" value="<?php echo $result['quantity'] ?>">
					</td>
					<td class="price">
						<div class="price-buy"><?php echo $result['price'] ?></div>
						<div class="price-off">2.198.000đ</div>
					</td>
					<td class="total">
						<?php 
						$total = $result['price'] * $result['quantity'];
						echo $total; ?>
						<input type="hidden" name="cartId" class="order-product-price" value="<?php echo $result['cartID'] ?>">
					</td>
					</form>
				</tr>
			</tbody>
			<?php 
			$subtotal += $total;
				}
			}
			?>
			<form action="" method="post" accept-charset="utf-8">
			<tfoot>
				<tr>
					<td colspan="2" rowspan="1" headers="" style="padding: 8px">
						<button type="submit" name="submit" class="btn-update-cart"><i class="fas fa-sync"></i>&nbsp;Cập nhật giỏ hàng</button>
					</td>
					<td colspan="4" rowspan="1" headers="">
						<div style="text-align: right;"><small>Thành tiền:</small> <span class="order-value"><?php echo $subtotal ?></span></div>
					</td>
				</tr>
			</tfoot>
			</form>
		</table>
	</div>
	<div class="cart-heading">
		Thông tin giao dịch
	</div>
	<div class="row">
		<div class="col-md-8 infor">
			<form action="" method="post" accept-charset="utf-8" id="frmPayment" name="frmPayment">
				<div class="ct-heading">
					Thông tin mua hàng
				</div>
				<div class="ct-content">
					<div class="sp-heading">
						Thông tin người mua hàng
					</div>
					<div class="bound-input">
						<div class="row">
							<div class="col-sm-4"><input type="text" name="sender-name" class="form-control" placeholder="Họ tên người mua hàng*"></div>
							<div class="col-sm-4"><input type="text" name="sender-phone" class="form-control" placeholder="Số điện thoại liên lạc*" pattern="[09-03-08-07-05]{2}"></div>
							<div class="col-sm-4"><input type="text" name="sender-email" class="form-control" placeholder="Email nhận hoá đơn"></div>
						</div>
						<div class="bound-input">
							<input type="text" name="sender-address" id="sender-address" class="form-control" placeholder="Địa chỉ (số nhà, tên đường,...)">
						</div>
						<div class="bound-input">
							<div class="row">
								<div class="col-sm-6">
									<select name="sender-city" id="sender-city" class="form-control" style="border-color: #A11D1D">
										<option value="0">Chọn tỉnh / thành phố </option>
										<option value="1">Đà Nẵng</option>
										<option value="2">TP.HCM</option>
										<option value="3">Hà Nội</option>
										<option value="4">Hải Phòng</option>
									</select>
								</div>
								<div class="col-sm-6">
									<select name="sender-district" id="sender-district" class="form-control" style="border-color: #A11D1D">
										<option value="0">Q.Liên Chiểu</option>
										<option value="0">Q.Hải Châu</option>
										<option value="0">Q.Thanh Khê</option>
										<option value="0">Q.Sơn Trà</option>
										<option value="0">Q.Cẩm Lệ</option>
										<option value="0">Q.Ngũ Hành Sơn</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="" style="padding-top: 15px; font-size: 14px"><i class="fas fa-truck "></i> &nbsp; Miễn phí vận chuyển cho đơn hàng từ 1.000.000 </div>
				</div>
			</form>
		</div>
		<div class="col-md-4">
			<div class="cart-item">
				<div class="ct-heading">
						Hình thức thanh toán
				</div>
				<div class="sp-heading">
					Thanh toán online: 
				</div>
				<div class="bill-payment">
					<table class="bill">
						<thead>
							<tr>
								<th class="product-name">Sản phẩm</th>
								<th class="product-total">Tổng cộng</th>
							</tr>
						</thead>
						<tbody>
							<tr class="cart-item">
								<td class="product-name">Đầm liền / váy đỏ đính trai
									<strong class="product-quantity"> x1</strong></td>
								<td class="product-total">1.599.000</td>
							</tr>
						</tbody>
						<tfoot>
							<tr class="cart-subtotal">
								<td>Đơn giá</td>
								<td class="product-total">1.599.000</td>
							</tr>
							<tr class="order-total">
								<td>Tổng tiền</td>
								<td class="product-total">2.198.000đ</td>
							</tr>
						</tfoot>
					</table>
					<div class="payment">
						<a href="#" class="">Tiến hành thanh toán</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require 'layout/footer.php'; ?>
</body>
</html>