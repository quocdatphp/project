  <?php
	$conn = mysqli_connect("localhost","root","","banhang") or die("Không kết nối được database");
	mysqli_set_charset($conn,"utf8");
	

  if (isset($_GET['q']) && !empty($_GET['q'])) {
	$keyword = $_GET['q'];

	$sql = "SELECT * FROM product WHERE id LIKE '%$keyword%' OR name LIKE '%$keyword%'";
  }
  else
  {
	$sql = "SELECT * FROM product";
  }

  $result = mysqli_query($conn, $sql);

  
  if(!$result){
	die("Câu truy vấn sai!");
  }
  ?> 
	  <?php require_once __DIR__. "/autoload/autoload.php";?>
<?php require_once __DIR__. "/layouts/header.php";?>
					<br>
					 <h1>Sản phẩm tìm kiếm</h1>
				   
					<?php 
						$i = 1;
						while($row = mysqli_fetch_assoc($result)){
					?>
					 <div class="container"> 
					  <div class="col-md-3 item-product bor">
					 <p><a href="chi-tiet-san-pham.php?id=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a></p>
								  
									   <a href="chi-tiet-san-pham.php?id=<?php echo $row['id']?>">
										  <img src="<?php echo uploads()?>/product/<?php echo $row['thunbar']?>" class="" width="100%" height="300">
									  </a>

								<div class="info-item">
									  <a href="chi-tiet-san-pham.php?id=<?php echo $row['id']?>"><?php echo $row['name']?></a>
									  <p><strike class="sale"><?php echo formatPrice($row['price'])?></strike><b class="price"><?php echo formatpricesale($row['price'],$row['sale'])?></b></p>
								</div>

									  <div class="hidenitem">
										  <p><a href="chi-tiet-san-pham.php?id=<?php echo $row['id']?>"><i class="fa fa-search"></i></a></p>
										  <p><a href=""><i class="fa fa-heart"></i></a></p>
										  <p><a href="addcart.php?id=<?php echo $row['id']?>"><i class="fa fa-shopping-cart"></i></a></p>
									  </div>
									</div>
						<?php $i++; } ?>
				 </div>
				
			   
<?php require_once __DIR__. "/layouts/footer.php";?>
		   

			  

		   

			  