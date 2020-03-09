<?php 
	require_once __DIR__. "/autoload/autoload.php";

	$id=intval(getInput('id'));
	// $product=$db->fetchID("product",$id);

	//chi tiet san pham
	
	$product=$db->fetchID("product",$id);

	// lay danh muc san pham
	// $cateid=$product['category_id'];
	$cateid=intval($product['category_id']);

	$sql="SELECT * FROM product WHERE category_id=$cateid ORDER BY ID DESC LIMIT 8";
	$sanphamkemtheo=$db->fetchsql($sql);
?>
<?php require_once __DIR__. "/layouts/header.php";?>

 		<div class="col-md-12 bor">
				<section class="box-main1" >
	                <div class="col-md-5 text-center">
	                    <img src="<?php echo uploads()?>product/<?php echo $product['thunbar']?>" class="img-responsive bor" id="imgmain" width="100%" height="370" data-zoom-image="images/one-helf1.jpg">
	                    
	                    <ul class="text-center bor clearfix" id="imgdetail">
	                        <li>
	                            <img src="<?php echo base_url()?>public/frontend/images/one-helf1.jpg" class="img-responsive pull-left" width="80" height="80">
	                        </li>
	                        <li>
	                            <img src="<?php echo base_url()?>public/frontend/images/one-helf1.jpg" class="img-responsive pull-left" width="80" height="80">
	                        </li>
	                        <li>
	                            <img src="<?php echo base_url()?>public/frontend/images/one-helf1.jpg" class="img-responsive pull-left" width="80" height="80">
	                        </li>
	                        <li>
	                            <img src="<?php echo base_url()?>public/frontend/images/one-helf1.jpg" class="img-responsive pull-left" width="80" height="80">
	                        </li>
	                         <li>
	                            <img src="<?php echo base_url()?>public/frontend/images/one-helf1.jpg" class="img-responsive pull-left" width="80" height="80">
	                        </li>
	                         <li>
	                            <img src="<?php echo base_url()?>public/frontend/images/one-helf1.jpg" class="img-responsive pull-left" width="80" height="80">
	                        </li>
	                    </ul>
	                </div>
	                <div class="col-md-6 bor" style="margin-top: 20px; margin-bottom: 20px;">
	                   <ul id="right">
	                        <li><h3><?php echo $product['name']?></h3></li>

	                        <?php if($product['sale']>0):?>
	                        	<li><p><strike class="sale"><?php echo formatPrice($product['price'])?></strike><b class="price"><?php echo formatpricesale($product['price'],$product['sale'])?></b></p></li>
	                        <?php else:?>
	                        	<li><p><b><?php echo formatPrice($product['price'])?></b></p></li>
	                        <?php endif?>
	                        
	                        <li><a href="addcart.php?id=<?php echo $item['id']?>" class="btn btn-default"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a></li>
						<div class="tab-content">
	                        <div id="home" class="tab-pane fade in active">
	                            <h3>Nội dung</h3>
	                            <p><?php echo $product['content']?></p>
	                        </div>
	                    </div>
	                   </ul>
	                </div>

	            </section>
	        
	        <!--     <div class="col-md-12" id="tabdetail">
	                <div class="row">
	                        
	                    <ul class="nav nav-tabs">
	                        <li class="active"><a data-toggle="tab" href="#home"> Sản phẩm cùng loại </a></li>
	                        <li><a data-toggle="tab" href="#menu1">Thông tin khác </a></li>
	                       
	                    </ul>
	                </div>
	            </div> -->
	            
	            <div class="col-md-9" style="margin-left: 190px;">
	            	<div class="showitem" style="margin-top: 10px;margin-bottom: 10px;">
                             <h2>Sản phẩm cùng loại</h2><?php foreach ($sanphamkemtheo as $item):?> 
                                        <div class="col-md-3  item-product bor">
                                             <a href="chi-tiet-san-pham.php?id=<?php echo $item['id']?>">
                                                <img src="<?php echo uploads()?>/product/<?php echo $item['thunbar']?>" class="" width="100%" height="180">
                                            </a>

                                            <div class="info-item">
                                                <a href="chi-tiet-san-pham.php?id=<?php echo $item['id']?>"><?php echo $item['name']?></a>
                                                <p><strike class="sale"><?php echo formatPrice($item['price'])?></strike> <b class="price"><?php echo formatpricesale($item['price'],$item['sale'])?></b></p>
                                            </div>

                                            <div class="hidenitem">
                                                <p><a href="chi-tiet-san-pham.php?id=<?php echo $item['id']?>"><i class="fa fa-search"></i></a></p>
                                                <!-- <p><a href=""><i class="fa fa-heart"></i></a></p> -->
                                                <p><a href="addcart.php?id=<?php echo $item['id']?>"><i class="fa fa-shopping-cart"></i></a></p>
                                            </div>

                                        </div>
                                <?php endforeach?>                                    
                            
                            </div>
	            </div>
		</div>
		
<?php require_once __DIR__. "/layouts/footer.php";?>
           

