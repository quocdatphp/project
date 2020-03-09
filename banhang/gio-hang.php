<?php 
	require_once __DIR__. "/autoload/autoload.php";
	$sum=0;

	if(!isset($_SESSION['cart'])||count($_SESSION['cart'])==0)
	{
		echo "<script>alert('Không có sản phẩm nào trong giỏ hàng');location.href='index.php'</script>";
	}
	
?>
<?php require_once __DIR__. "/layouts/header.php";?>

                    <div class="col-md-12 bor">
                        

                        <section class="box-main1" text align="center">
                            <h3 class="title-main"><a href=""> Giỏ hàng của bạn</a> </h3>
                            <?php if(isset($_SESSION['success'])):?>
                                <div class="alert alert-success">
                                    <strong style="color: #3c763d">Success!</strong><?php echo $_SESSION['success'];unset($_SESSION['success'])?>
                                </div>
                        <?php endif?>
                            <table class="table table-hover" id="shoppingcart_info">
                            	<thead text align="center">
                            		<tr>
                            			<th>STT</th>
                            			<th>Tên sản phẩm</th>
                            			<th>Hình ảnh</th>
                            			<th>Số lượng</th>
                            			<th>Giá</th>
                            			<th>Tổng Tiền</th>
                            			<th>Thao tác</th>
                            		</tr>
                            	</thead>
                            	<tbody>
                            	<?php $stt=1; foreach ($_SESSION['cart'] as $key => $value): ?>                            			 
											<tr>
		                            			<td><?php echo $stt ?></td>
		                            			<td><?php echo $value['name']?></td>
		                            			<td>
		                            				<img src="<?php echo uploads()?>product/<?php echo $value['thunbar']?>" width="80px" height="80px">
		                            			</td>
		                            			<td>
		                            				<input type="number" name="qty" value="<?php echo $value['qty']?>" class="form-control qty" id="qty" min="0">
		                            			</td>
		                            			<td><?php echo formatPrice($value['price'])?></td>
		                            			<td><?php echo formatPrice($value['price']*$value['qty'])?></td>
		                            			<td>
		                            				<a href="remove.php?key=<?php echo $key?>" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i>Xóa sản phẩm</a>
		                            				<a href="#" class="btn btn-xs btn-info updatecart" data-key=<?php echo $key?>> <i class="fa fa-refresh"></i>Cập nhật sản phẩm</a>
		                            			</td>
		                            		</tr>
		                            		<?php $sum+=$value['price']*$value['qty']; $_SESSION['tongttien']=$sum;?>
                            	<?php $stt ++; endforeach?>                           		
                            	</tbody>
                            </table>
                            <div class="col-md-5 pull-right">
                            	<ul class="list-group">
                            		<li class="list-group-item">
                            			<h3>Thông tin đơn hàng</h3>
                            		</li>
                            		<li class="list-group-item">
                            			<span class="badge"><?php echo formatPrice($_SESSION['tongttien'])?></span>
                            			Số tiền
                            		</li>
                                     <li class="list-group-item">
                            			<span class="badge">5%</span>
                            			Thuế VAT
                            		</li> 
                            	    <!-- <li class="list-group-item">
                            			<span class="badge"><?php echo sale($_SESSION['tongttien'])?>%</span>
                            			Giảm giá
                            		</li>  --> 

                                    <li class="list-group-item">
                            			<span class="badge"><?php $_SESSION['total']=$_SESSION['tongttien']*105/100;echo formatPrice($_SESSION['total'])?></span>
                            			Tổng tiền thanh toán
                            		</li>   

                            		<li class="list-group-item">
                            			<a href="index.php" class="btn btn-primary">Tiếp tục mua hàng</a>
                            			<a href="thanh-toan.php" class="btn btn-primary">Thanh toán</a>
                            		</li>
                            	</ul>
                            </div>
                        </section>
                    </div>

<?php require_once __DIR__. "/layouts/footer.php";?>
           

              