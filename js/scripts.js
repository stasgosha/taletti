$(document).ready(function(){

	// Mobile nav
	$('.menu-opener').bigSlide({
		side: 'left',
		easyClose: true,
		menuWidth: '280px'
	});

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


	$('.manufacture-text-slider').slick({
		arrows: false,
		dots: false,
		autoplay: false,
		speed: 600,
		slidesToShow: 1,
		slidesToScroll: 1,
		infinite: true,
		asNavFor: '.manufacture-images-slider'
	})

	function addClassesToProjectsSlider(nextSlide){
		$('.manufacture-images-slider .slick-slide').removeClass('slide-1 slide-2 slide-3');

		$('.manufacture-images-slider .slick-slide[data-slick-index=' + nextSlide + ']').addClass('slide-1')
			.next('.slick-slide').addClass('slide-2')
			.next('.slick-slide').addClass('slide-3');
	}

	$('.manufacture-images-slider').on('init', function (e, slick) {
		addClassesToProjectsSlider(0);

		$(".manufacture-images-slider").siblings('.slider-pagination').find('.current').text('01');

		let total = slick.slideCount < 10 ? '0' + slick.slideCount : slick.slideCount;
		$(".manufacture-images-slider").siblings('.slider-pagination').find('.total').text(total);
	});

	$('.manufacture-images-slider').slick({
		arrows: true,
		dots: false,
		autoplay: false,
		speed: 600,
		slidesToShow: 2,
		slidesToScroll: 1,
		infinite: true,
		asNavFor: '.manufacture-text-slider'
	});

	$('.manufacture-images-slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
		addClassesToProjectsSlider(nextSlide);

		let current = nextSlide + 1 < 10 ? '0' + (nextSlide + 1) : nextSlide + 1;
		$(".manufacture-images-slider").siblings('.slider-pagination').find('.current').text(current);
	});

	equalSlideHeight('.manufacture-images-slider');

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