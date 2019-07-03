$(document).ready(function() {

	$(".item1").on('click',function(){
		$("#myCarousel").carousel(0);
	});
	$(".item2").on('click',function(){
		$("#myCarousel").carousel(1);
	});
	$(".item3").on('click',function(){
		$("#myCarousel").carousel(2);
	});

	$(".carousel-control-prev").on('click',function(){
		$("#myCarousel").carousel("prev");
	});
	$(".carousel-control-next").on('click',function(){
		$("#myCarousel").carousel("next");
	});
});