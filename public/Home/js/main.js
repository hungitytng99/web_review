
;(function () {
	'use strict';
	// iPad and iPod detection	
	var isiPad = function () {
		return (navigator.platform.indexOf("iPad") != -1);
	};

	var isiPhone = function () {
		return (
			(navigator.platform.indexOf("iPhone") != -1) ||
			(navigator.platform.indexOf("iPod") != -1)
		);
	};

	var fullHeight = function () {
		if (!isiPad() && !isiPhone()) {
			$('.js-fullheight').css('height', $(window).height());
			$(window).resize(function () {
				$('.js-fullheight').css('height', $(window).height());
			})
		}


	};

	var sliderMain = function () {

		$('#home .flexslider').flexslider({
			animation: "fade",
			slideshowSpeed: 5000
		});

		$('#home .flexslider .slides > li').css('height', $(window).height());
		$(window).resize(function () {
			$('#home .flexslider .slides > li').css('height', $(window).height());
		});

	};


	// var offcanvasMenu = function () {
	// 	$('body').prepend('<div id="offcanvas" />');
	// 	$('body').prepend('<a href="#" class="js-nav-toggle nav-toggle"><i></i></a>');
	// 	$('#offcanvas').append('<div class="mobile__menu"> menu </div>');
	// 	$('.header__nav-list.--left').each(function () {
	// 		var $this = $(this);
	// 		$('#offcanvas').append($this.clone());
	// 	});
	// 	$('#offcanvas').append('<a href="/login" class="mobile-nav__login">Đăng nhập</a>')
	// };
	// Burger Menu
	var burgerMenu = function () {

		$('body').on('click', '.js-nav-toggle', function (event) {

			var $this = $(this);

			$('body').toggleClass('overflow offcanvas-visible');
			$this.toggleClass('active');
			event.preventDefault();

		});

	};

	var scrolledWindow = function () {

		$(window).scroll(function () {

			var scrollPos = $(this).scrollTop();


			$('#home .text').css({
				'opacity': 1 - (scrollPos / 300),
				'margin-top': (-212) + (scrollPos / 1)
			});

			$('#home .flexslider .overlay').css({
				'opacity': (.5) + (scrollPos / 2000)
			});

			if (scrollPos > 300) {
				$('#home .text').css('display', 'none');
			} else {
				$('#home .text').css('display', 'block');
			}


		});

		$(window).resize(function () {
			if ($('body').hasClass('offcanvas-visible')) {
				$('body').removeClass('offcanvas-visible');
				$('.js-nav-toggle').removeClass('active');
			}
		});

	};


	var goToTop = function () {

		$('.js-gotop').on('click', function (event) {

			event.preventDefault();

			$('html, body').animate({
				scrollTop: $('html').offset().top
			}, 500);

			return false;
		});

	};


	// Page Nav
	var clickMenu = function () {
		var topVal = ($(window).width() < 769) ? 0 : 58;
		
		$(window).resize(function () {
			topVal = ($(window).width() < 769) ? 0 : 58;
		});
		$('.main-nav a:not([class="external"]), #offcanvas a:not([class="external"])').click(function (event) {
			var section = $(this).data('nav-section');

			if ($('div[data-section="' + section + '"]').length) {

				$('html, body').animate({
					scrollTop: $('div[data-section="' + section + '"]').offset().top - topVal
				}, 500);

			}
		});


	};
	// Animations
	var homeAnimate = function () {
		if ($('#home').length > 0) {

			$('#home').waypoint(function (direction) {

				if (direction === 'down' && !$(this.element).hasClass('animated')) {


					setTimeout(function () {
						$('#home .to-animate').each(function (k) {
							var el = $(this);

							setTimeout(function () {
								el.addClass('fadeInUp animated');
							}, k * 200, 'easeInOutExpo');

						});
					}, 200);


					$(this.element).addClass('animated');

				}
			}, { offset: '80%' });

		}
	};

	var typeAnimate = function () {
		var type = $('#type');
		if (type.length > 0) {

			type.waypoint(function (direction) {

				if (direction === 'down' && !$(this.element).hasClass('animated')) {


					setTimeout(function () {
						type.find('.to-animate').each(function (k) {
							var el = $(this);

							setTimeout(function () {
								el.addClass('fadeInUp animated');
							}, k * 200, 'easeInOutExpo');

						});
					}, 200);

					$(this.element).addClass('animated');

				}
			}, { offset: '80%' });

		}
	};
	var footerAnimate = function () {
		var footer = $('#footer');
		if (footer.length > 0) {

			footer.waypoint(function (direction) {

				if (direction === 'down' && !$(this.element).hasClass('animated')) {


					setTimeout(function () {
						footer.find('.to-animate').each(function (k) {
							var el = $(this);

							setTimeout(function () {
								el.addClass('fadeIn animated');
							}, k * 200, 'easeInOutExpo');

						});
					}, 200);

					setTimeout(function () {
						footer.find('.to-animate-2').each(function (k) {
							var el = $(this);

							setTimeout(function () {
								el.addClass('fadeInUp animated');
							}, k * 200, 'easeInOutExpo');

						});
					}, 500);

					$(this.element).addClass('animated');

				}
			}, { offset: '80%' });

		}
	};



	// Document on load.
	$(function () {

		fullHeight();
		sliderMain();
		// offcanvasMenu();
		burgerMenu();
		scrolledWindow();
		clickMenu();
		goToTop();

		homeAnimate();
		typeAnimate();
		footerAnimate();



	});


}());