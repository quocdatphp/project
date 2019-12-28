function closeSearch() {
	document.getElementById('myOverlay').style.display = "none";
}
function openSearch() {
	document.getElementById('myOverlay').style.display = "block";
}
// IMAGE click
$(document).ready(function(){
	$('.img-small').click(function(){
		var small_src = this.src;
		var big = document.getElementById('image-big');
		big.src = small_src;
	});
});


