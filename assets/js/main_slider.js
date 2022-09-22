$(document).ready(function (){
	
	$('.home-slider__slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		autoplay: true,
		autoplaySpeed: 2000,
		arrows: true,
	});
	$('.home-slider__slider').on('afterChange', function(){
		homeSliderLine();
	});
	homeSliderLine();
	
	function homeSliderLine () {
		var length = $(".home-slider__slider .slick-dots li").length;
		var activeItemIndex =  $(".home-slider__slider .slick-dots li.slick-active").index() + 1;
		var x;
		x = 100/length;
		$('.home-slider__slider--line__default').css( { height:40*length });
		$('.home-slider__slider--line__active').css( { height:activeItemIndex*x+'%', });
		if (length < 10 ){
			$(".home-slider__slider--line__num_last ").html('0'+length);
		}else{
			$(".home-slider__slider--line__num_last ").html(length);
		}
		$(".home-slider__slider .slick-dots").hide()
	}
	
});
