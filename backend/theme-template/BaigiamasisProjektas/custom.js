$(document).ready(function(){
	// Galerija
	$('[data-fancybox="gallery1"]').fancybox({
		loop: false,
		animationEffect: "rotate",
		animationDuration: 1000,
	});
    //Slider
    var slider = tns({
        container: '.slider-container',
        items: 3,
        slideBy: 'page',
        autoplay: true, 
        mouseDrag: true,
        autoplayButtonOutput: false,
        navPosition: "top",
        navAsThumbnails: true,
        controlsText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
    });
});