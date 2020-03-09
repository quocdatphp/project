
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
						
<?php require_once __DIR__. "/layouts/footer.php";?>
		   

			  