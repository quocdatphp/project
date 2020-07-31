$(document).ready(function(){
	$(".list--mn, .course-icon").find("li").on("click", function(event){
		event.preventDefault();
		if ($(this).hasClass("active")) {
			$(this).children(".list--con").slideUp();
			$(this).removeClass("active");
			$(this).find(".icon").html('&#xf105');
		}else {
			$(".list--con").slideUp();
			$(this).children(".list--con").slideDown(700);
			$(".list--mn").find("li").removeClass("active");
			$(this).addClass("active");
			$(this).find(".icon").html('&#xf107');
		}
	});
});
// $(document).ready(function() {
// 	$(".nav__mobile__cap2").find("li").on("click", function(event) {
// 		event.preventDefault();
// 		$(this).css({"transform" : "rotate(90deg)", "transition" : "transform .7s"});
// 	});
// });
// $(".course-icon").find(".icon").css({"transform" : "rotate(90deg)", "transition" : "transform .7s"});
$(document).ready(function() {
	$('#responsive').lightSlider({
		item:4,
		loop:false,
		slideMove:2,
		easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
		speed:600,
		responsive : [
			{
				breakpoint:800,
				settings: {
					item:3,
					slideMove:1,
					slideMargin:6,
				}
			},
			{
				breakpoint:480,
				settings: {
					item:2,
					slideMove:1
				}
			}
		]
	});
});