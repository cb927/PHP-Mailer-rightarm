$(document).ready(function () {

	var hamburger = $('.hamburger')
	var navMenu = $('.nav-menu')

	hamburger.click(function () {
		hamburger.toggleClass('active')
		navMenu.toggleClass('active')
	})


	$(window).scroll(function () {
		if ($(window).scrollTop() >= 1) {
			$('header').addClass('header-sticky')
			$('.scroll-top').addClass('active')
		} else {
			$('header').removeClass('header-sticky')
			$('.scroll-top').removeClass('active')
		}
	});

	$('.nav-menu-close').click(function(){
		$('.nav-menu').removeClass('active')
		hamburger.removeClass('active')
	})

	$('.scroll-top').click(function(){
		$('html, body').animate({scrollTop: '0px'}, 300)
	})

	// $('.step__item').click(function(){
	// 	$(this).addClass('active');
	// 	$(this).siblings().removeClass('active');
	// })

	$('.btn__item').click(function(){
		$(this).toggleClass('active');
	})
})