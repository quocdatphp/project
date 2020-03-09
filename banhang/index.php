<?php 
    require_once __DIR__. "/autoload/autoload.php";

    // unset($_SESSION['cart']);
    $sqlHomecate="SELECT name, id FROM category WHERE home = 1 ORDER BY updated_at";
    $CategoryHome=$db->fetchsql($sqlHomecate);


    $data=[];
    foreach ($CategoryHome as $item) {
        $cateId=intval($item['id']);

        $sql="SELECT * FROM product WHERE category_id= $cateId";
        $ProductHome=$db->fetchsql($sql);
        $data[$item['name']]=$ProductHome;
    }


?>
<?php require_once __DIR__. "/layouts/header.php";?>
                                
                        <!-- LOGO START -->
                        <div class="col-md-12">
                            <div class="mySlides fade">
                              <img src="public/frontend/img/banner2.jpg" style="width:1600px" height="500px">
                          </div>
                          <div class="mySlides fade">
                              <img src="public/frontend/img/slider_1.png" style="width:1600px" height="500x">
                          </div>
                        <div class="mySlides fade">
                              <img src="public/frontend/img/banner1.jpg" style="width:1600px" height="500px">
                          </div>
                          <div class="mySlides fade">
                              <img src="public/frontend/img/banner3.jpg" style="width:1600px" height="500px">
                          </div>
                          <div class="mySlides fade">
                              <img src="public/frontend/img/banner4.jpg" style="width:1600px" height="500px">
                          </div>
                          <div class="mySlides fade">
                              <img src="public/frontend/img/slider2.jpg" style="width:1600px" height="500px">
                          </div>

                            <div style="text-align:center">
                              <span class="dot"></span> 
                              <span class="dot"></span> 
                              <span class="dot"></span> 
                              <span class="dot"></span> 
                              <span class="dot"></span>
                              <span class="dot"></span>
                            </div>
                        </div>
                    </div>
                        <script>
                        var slideIndex = 0;
                        showSlides();

                        function showSlides() {
                          var i;
                          var slides = document.getElementsByClassName("mySlides");
                          var dots = document.getElementsByClassName("dot");
                          for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";  
                          }
                          slideIndex++;
                          if (slideIndex > slides.length) {slideIndex = 1}    
                          for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                          }
                          slides[slideIndex-1].style.display = "block";  
                          dots[slideIndex-1].className += " active";
                          setTimeout(showSlides, 4000); // Change image every 2 seconds
                        }
                        </script>
                        <!-- LOGO END -->
                        <!-- HEADER-RIGHT-CALLUS START -->
                        <section class="awe-section-3">
                        <section class="section_product_new">
                            <div class="container">

                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                  <a href="https://loza.vn/thoi-trang-cong-so"><img src="<?php echo base_url()?>public/frontend/img/thoitrang1.png"></a>
                              </div>
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                                  <a href="http://newnem.com/trends/thoi-trang-dao-pho/"><img src="<?php echo base_url()?>public/frontend/img/thoitrang2.png"></a>
                              </div>  
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                                  <a href="http://nessahouse.com/"><img src="<?php echo base_url()?>public/frontend/img/thoitrang3.png"></a>
                              </div>


                          <div class="row">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                   <div class="title_module_main a-center">
                                       <?php foreach ($data as $key => $value):?>
                                  
                           
                          <div class="row" text align="center">
                             <h3 class="title-main" align="center">
                                      <a href=""><?php echo $key?></a></h3>

                           <!--  </div>
                                <div class="showitem" style="margin-top: 30px;margin-bottom: 30px;">
                          </div> -->
                       <!--  <div>
                        <ul class="pagination">
                          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                      </div>
                       -->
                          <?php foreach ($value as $item):?> 
                                  <div class="col-md-3 item-product bor">
                                       <a href="chi-tiet-san-pham.php?id=<?php echo $item['id']?>">
                                          <img src="<?php echo uploads()?>/product/<?php echo $item['thunbar']?>" class="" width="100%" height="300">
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
                      <?php endforeach?> 
                     </section>
                    </div>
                    </div>
                  </section>

                    <div class="container">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-11">
                        <a href="https://damvaydep.net/dam-vay-dep-7m234.html"><img src="public/frontend/img/qc.png"></a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-11 ">
                        <a href="https://damvaydep.net/dam-vay-dep-7m234.html"><img src="public/frontend/img/qc2.png"></a>
                    </div>
                  </div>
                                            
<?php require_once __DIR__. "/layouts/footer.php";?>
           

              