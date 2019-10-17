$(document).ready(function(){

	// Mobile nav
	$('.menu-opener').bigSlide({
		side: 'left',
		easyClose: true,
		menuWidth: '280px'
	});

	$('.panel-nav .menu-item-has-children').click(function(){
		$(this).toggleClass('opened').find('.sub-menu').stop().slideToggle(300);
	});

	$('.panel-nav a').click(function(e){
		e.stopPropagation();
	})

	// Product Images
	$('[data-big-image]').click(function(){
		$('.big-image img').attr('src', $(this).data('big-image'));
		$(this).addClass('selected').siblings().removeClass('selected');
	});

	$('[data-big-image]:first-child').click();

	// Sliders
	function equalSlideHeight(slider){
		$(slider).on('setPosition', function () {
			$(this).find('.slick-slide').height('auto');
			var slickTrack = $(this).find('.slick-track');
			var slickTrackHeight = $(slickTrack).height();
			$(this).find('.slick-slide').css('height', slickTrackHeight + 'px');
		});
	}

	$('.big-slider').on('init', function (e, slick) {
		$(".big-slider").closest('.big-slider-section').find('.current').text('01');

		let total = slick.slideCount < 10 ? '0' + slick.slideCount : slick.slideCount;
		$(".big-slider").closest('.big-slider-section').find('.total').text(total);
	});

	$('.big-slider').slick({
		arrows: true,
		dots: false,
		autoplay: false,
		speed: 600,
		slidesToShow: 1,
		slidesToScroll: 1,
		infinite: true
	});

	$('.big-slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
		let current = nextSlide + 1 < 10 ? '0' + (nextSlide + 1) : nextSlide + 1;
		$(".big-slider").closest('.big-slider-section').find('.current').text(current);
	});

	$('.photos-slider').slick({
		arrows: true,
		dots: true,
		speed: 600,
		slidesToShow: 3,
		slidesToScroll: 1,
		infinite: true,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});

	$('.brands-slider').slick({
		arrows: true,
		dots: true,
		speed: 600,
		slidesToShow: 4,
		slidesToScroll: 1,
		infinite: true,
		responsive: [
			{
				breakpoint: 992,
				settings: {
					slidesToShow: 3,
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 2,
				}
			},
			{
				breakpoint: 400,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});

	equalSlideHeight('.brands-slider');

	$('.how-we-work-slider').slick({
		arrows: true,
		dots: true,
		speed: 600,
		slidesToShow: 2,
		slidesToScroll: 1,
		infinite: true,
		responsive: [
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});

	equalSlideHeight('.how-we-work-slider');

	$('.features-slider').slick({
		arrows: true,
		dots: true,
		speed: 600,
		slidesToShow: 2,
		slidesToScroll: 1,
		infinite: true,
		responsive: [
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});

	equalSlideHeight('.features-slider');


	// Tabs
	$("[data-tab]").click(function(e){
		e.preventDefault();
		var dest = $( $(this).data('tab') );
		dest.stop().fadeIn(300).siblings().hide(0);
		$(this).addClass('current').siblings().removeClass('current');
	});

	$("[data-tab]:first-child").trigger('click');
	$("[data-tab].preselected").trigger('click');


	$('.manufacture-text-slider').flickity({
		wrapAround: true,
		cellAlign: 'left',
		selectedAttraction: 0.01,
		friction: 0.15,
		draggable: false,
		prevNextButtons: false,
		pageDots: false,
		autoPlay: false,
		// asNavFor: '.manufacture-text-slider',
		// asNavFor: '.manufacture-images-slider'
	});

	$('.manufacture-images-slider').flickity({
		wrapAround: true,
		cellAlign: 'left',
		selectedAttraction: 0.01,
		friction: 0.15,
		draggable: true,
		prevNextButtons: true,
		pageDots: false,
		autoPlay: false,
		on: {
			change: function (i) {
				setSliderClasses(i, this.slides.length);

				console.log(i);

				$('div').is('.manufacture-text-slider') && $('.manufacture-text-slider').flickity( 'select', i );

				let current = this.selectedIndex + 1 < 10 ? '0' + (this.selectedIndex + 1) : this.selectedIndex + 1;
				$(".manufacture-images-slider").siblings('.slider-pagination').find('.current').text(current);
			},

			ready: function(){
				setSliderClasses(0);

				$(".manufacture-images-slider").siblings('.slider-pagination').find('.current').text('01');
				let total = this.slides.length < 10 ? '0' + this.slides.length : this.slides.length;
				$(".manufacture-images-slider").siblings('.slider-pagination').find('.total').text(total);
			}
		}
	}).on( 'staticClick.flickity', function( event, pointer, cellElement, cellIndex ) {
		// if ( typeof cellIndex == 'number' ) {
			// $('.manufacture-images-slider').flickity( 'select', cellIndex ).flickity('playPlayer');
		// }
	});

	function setSliderClasses(current, numberOfSlides) {
		var step = 3;
		var current = current;
		var numberOfSlides = numberOfSlides;

		$('.manufacture-images-slider .slide-wrap').removeClass('slide-1 slide-2 slide-3');

		for (i = 3; i >= 1; i--) {
			var eq = current + i
			if (eq < 0) eq += numberOfSlides;
			if (eq > numberOfSlides - 1) eq -= numberOfSlides;

			$('.manufacture-images-slider .slide-wrap').eq(eq-1).addClass('slide-'+(i));
		}
	}

	// function addClassesToProjectsSlider(nextSlide){
	// 	$('.manufacture-images-slider .slick-slide').removeClass('slide-1 slide-2 slide-3');

	// 	$('.manufacture-images-slider .slick-slide[data-slick-index=' + nextSlide + ']').addClass('slide-1')
	// 		.next('.slick-slide').addClass('slide-2')
	// 		.next('.slick-slide').addClass('slide-3');
	// }

	// $('.manufacture-images-slider').on('init', function (e, slick) {
	// 	addClassesToProjectsSlider(0);

		// $(".manufacture-images-slider").siblings('.slider-pagination').find('.current').text('01');

		// let total = slick.slideCount < 10 ? '0' + slick.slideCount : slick.slideCount;
		// $(".manufacture-images-slider").siblings('.slider-pagination').find('.total').text(total);
	// });

	// $('.manufacture-images-slider').slick({
	// 	arrows: true,
	// 	dots: false,
	// 	autoplay: false,
	// 	speed: 600,
	// 	slidesToShow: 2,
	// 	slidesToScroll: 1,
	// 	infinite: true,
	// 	// asNavFor: '.manufacture-text-slider'
	// });

	// $('.manufacture-images-slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
	// 	addClassesToProjectsSlider(nextSlide);

		// let current = nextSlide + 1 < 10 ? '0' + (nextSlide + 1) : nextSlide + 1;
		// $(".manufacture-images-slider").siblings('.slider-pagination').find('.current').text(current);
	// });

	// equalSlideHeight('.manufacture-images-slider');

	$('.products-slider').slick({
		arrows: true,
		dots: false,
		autoplay: false,
		speed: 600,
		slidesToShow: 4,
		slidesToScroll: 1,
		infinite: true,
		responsive: [
			{
				breakpoint: 992,
				settings:{
					slidesToShow: 3
				}
			},
			{
				breakpoint: 768,
				settings:{
					slidesToShow: 2,
					dots: true
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
					dots: true
				}
			}
		]
	});

	equalSlideHeight('.products-slider');


	$('.certs-slider').slick({
		arrows: true,
		dots: false,
		autoplay: false,
		speed: 600,
		slidesToShow: 3,
		slidesToScroll: 1,
		infinite: true,
		responsive: [
			{
				breakpoint: 992,
				settings:{
					slidesToShow: 2
				}
			},
			{
				breakpoint: 768,
				settings:{
					slidesToShow: 2,
					dots: true
				}
			},
			{
				breakpoint: 576,
				settings: {
					slidesToShow: 1,
					dots: true
				}
			}
		]
	});

	// Big Nav
	$('.big-nav-opener').click(function(){
		$(this).toggleClass('active');

		$(this).siblings('.big-nav-toggle').stop().slideToggle(300);
	});


	// Sticky Header
	$(window).scroll(function(){
		$(this).scrollTop() >= 50 
			? $('.header, .mobile-header').addClass('sticky') 
			: $('.header, .mobile-header').removeClass('sticky');
	});

	// Accordions
	$('.faq-accordion .accordion-opener, .faq-accordion .accordion-header').click(function(){
		$(this).closest('.faq-accordion').toggleClass('opened')
			.find('.accordion-content').stop().slideToggle(300);
	});

	// Fancybox
	$(".slick-slide:not(.slick-cloned) .fancybox").fancybox();

	// TODO: ↓↓↓ remove this script ↓↓↓
	// Current menu item highlithing
	$(function () {
		var location = window.location.href;
		var cur_url = location.split('/').pop();

		$('.top-nav li, .panel-nav li, .footer-nav li').each(function () {
			var link = $(this).find('a').attr('href');

			// console.log(link);

			if (cur_url == '') {
				cur_url = 'index.php';
			}

			if (cur_url == link)
			{
				$(this).addClass('current-menu-item');
				$(this).parents('li').addClass('current-menu-parent');
			}
		});
	});
});