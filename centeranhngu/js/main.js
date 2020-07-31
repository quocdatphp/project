// getDay 
function startDay() {
	var today = new Date();
	var date = today.getDate();
	var m = today.getMonth() + 1;
	var y = today.getFullYear();
	var weekday = ["Chủ Nhật", "Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7"];
	var day = weekday[today.getDay()];
	document.getElementById("getDate").innerHTML = day + ", ngày " + date + " tháng " + m + " năm " + y;
}
startDay();

// active menu
// $(document).ready(function(){
// 	$(".nav").find("li").on("click", function(){
// 		$(this).addClass("active").siblings().removeClass("active");
// 	});
// });

$(document).ready(function() {
	$(".nav").find("li").on("click", function(){
		$(".nav li.active").removeClass("active");
		$(this).addClass("active");
	});
});

// click course
$(document).ready(function() {
	$(".news-page__wrapper").hide();
	$(".show").show();
	$(".news__list").find("li").on("click", function(event){
		event.preventDefault();
		var id = $(this).find("a").attr("data-id");
		if ($(this).hasClass("active")) {
			
		}else {
			$(".news__list").find("li").removeClass("active");
			$(this).addClass("active");
			$(".news-page__wrapper").removeClass("show").hide();
			$("#active_" + id).addClass("show").slideDown();
		}
	});
});


// slider banner
var sliderIndex = 0;
showSlider(sliderIndex);
function showSlider(index){
	var slider = document.querySelectorAll('.slider');
	var dots   = document.querySelectorAll('.dot');
	if(index >= slider.length) sliderIndex = 0;
	if(index < 0) sliderIndex = slider.length - 1;
	for(var i = 0 ; i < slider.length ; i++ ){
		slider[i].style.display = "none";
		dots[i].classList.remove('active-dot');
	} 
	slider[sliderIndex].style.display = "block";
	dots[sliderIndex].classList.add('active-dot');
}
document.querySelectorAll('.dot').forEach(function(element){
	element.addEventListener('click',function(){
		var dots = Array.prototype.slice.call(this.parentElement.children);
		var dotIndex = dots.indexOf(element);
		showSlider(sliderIndex = dotIndex);
	});
});
setInterval(function(){
	showSlider(++sliderIndex);
},4000);
// nav toggle mobile
$(document).ready(function() {
	$(".toggle--10").on("click", function() {
		$(this).toggleClass("close");
		$(".nav__toggle").slideToggle(500).css({"display" : "block"});
	}); 
});

$(document).ready(function() {
	$(".nav__toggle").find(".icon__cap1").on("click", function(){
		if ($(this).find(".icon__mobile").hasClass("icon__c1")) {
			$(this).find(".icon__mobile").removeClass("icon__c1");
			$(".nav__mobile__cap2").slideUp(500);
		}else {
			$(this).find(".icon__mobile").addClass("icon__c1");
			$(".nav__mobile__cap2").slideDown(500);
		}
	});
});

$(document).ready(function(){
	$(".icon__cap2").on("click", function() {
		if ($(this).find(".icon__mobile__cap2").hasClass("icon__c3")) {
			$(".nav__mobile__cap3").slideUp(500);
		}else {
			$(this).find(".icon__mobile__cap2").addClass("icon__c3");
			$(".nav__mobile__cap3").slideDown(500);
		}
	});
});