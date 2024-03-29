jQuery(document).ready(function( $ ) {

	if( jQuery('.menu-item-has-children').length ){
		jQuery(document).on('click', '.menu-item-has-children > a[href="#"]', function(e){
			e.preventDefault();
		})
	}

	//sticky header
	jQuery(window).scroll(function() {
		const scrollPosition = jQuery(window).scrollTop();
		if (scrollPosition >= 50) {
			jQuery('.header').addClass('header--scrolled');
		} else {
			jQuery('.header').removeClass('header--scrolled');
		}
	});

	//select2 init
	setTimeout(function(){
		jQuery('.select-subject select').select2({
			minimumResultsForSearch: -1,
			placeholder: 'Choose subject',
		});

		// jQuery('select').select2({
		// 	minimumResultsForSearch: -1
		// });
	}, 150);


	if( jQuery('.header__menu .menu-item-has-children').length ){
		if( jQuery(window).width() > 768 ) {
			jQuery('.header__menu .menu-item-has-children').hover(
				function (e) {
					e.preventDefault();
					jQuery(this).addClass('bl-open');
				},
				function (e) {
					e.preventDefault();
					jQuery(this).removeClass('bl-open');
				}
			);
		}

		jQuery(document).mouseup(function (e){
			let div = jQuery('.header__menu .menu-item-has-children');
			if (!div.is(e.target)
				&& div.has(e.target).length === 0) {
				div.removeClass('bl-open');
			}
		});
	}


	if( jQuery('.footer__menu .menu-item-has-children').length ){
		if( jQuery(window).width() > 768 ){
			jQuery('.footer__menu .menu-item-has-children').hover(
				function(e){
					e.preventDefault();
					jQuery(this).addClass('bl-open');
				},
				function(e){
					e.preventDefault();
					jQuery(this).removeClass('bl-open');
				}
			);
		}

		jQuery(document).mouseup(function (e){
			let div = jQuery('.footer__menu .menu-item-has-children');
			if (!div.is(e.target)
				&& div.has(e.target).length === 0) {
				div.removeClass('bl-open');
			}
		});
	}


	if( jQuery('.header__search-btn').length ){
		jQuery(document).on('click', '.header__search-btn', function(e){
			e.preventDefault();
			jQuery(this).parent().toggleClass('bl-open');
			jQuery('.header__search-close').show();
		})
	}


	if( jQuery('.header__search-close').length ){
		jQuery(document).on('click', '.header__search-close', function(e){
			e.preventDefault();
			jQuery(this).parents('.header__search').removeClass('bl-open');
		})
	}


	if( jQuery('.header__search-clear').length ){
		jQuery(document).on('click', '.header__search-clear', function(e){
			e.preventDefault();
			jQuery(this).parents('.header__search').find('input').val('').removeClass('filled');
		})
	}


	if( jQuery('.header__search input').length ){
		jQuery('.header__search input').keyup(function(){
			if ( jQuery(this).val() !== '' ){
				jQuery(this).addClass('filled');
			}else{
				jQuery(this).removeClass('filled');
			}
		})
	}


	if( jQuery('.header__login-button').length ){
		jQuery('.header__login-button').hover(
			function(e){
				e.preventDefault();
				jQuery(this).parent().addClass('bl-open');
			},
			function(e){
				e.preventDefault();
				jQuery(this).parent().removeClass('bl-open');
			},
		);
	}


	if( jQuery('.header__hidden').length ){
		jQuery(document).on('click', '.header__hamburger', function(e){
			e.preventDefault();
		});

		jQuery(document).on('click', '.header__hamburger .hamburger-icon', function(e){
			e.preventDefault();
			jQuery(this).hide();
			jQuery('body').addClass('bl-open');
			jQuery('.header').addClass('bl-open');
			jQuery('.header__hamburger .close-icon').show();
			jQuery('.body-overlay').show();
			jQuery('.header__hidden').slideDown();
		});
		jQuery(document).on('click', '.header__hamburger .close-icon', function(e){
			e.preventDefault();
			closeHeaderMenu();
		});
		jQuery(document).mouseup(function (e){
			let div = jQuery('.header__hidden');
			if (!div.is(e.target)
				&& !jQuery('.header__hamburger .hamburger-icon').is(e.target)
				&& !jQuery('.header__hamburger .close-icon').is(e.target)
				&& div.has(e.target).length === 0) {
					closeHeaderMenu();
			}
		});
	}


	if( jQuery('.emr__slider--mobile').length ){
		jQuery('.emr__slider--mobile').slick({
			dots: true,
			arrows: false,
			infinite: true,
			speed: 300,
			slidesToShow: 1,
		});
	}


	if( jQuery('.services__items').length ){
		initServicesSlider();

		jQuery(window).resize(() => {
			initServicesSlider();
		});
	}
	function initServicesSlider(){
		if( jQuery(window).width() > 768 ){
			if ( jQuery('.services__items').hasClass('slick-initialized') ){
				jQuery('.services__items').slick('unslick');
			}

			const services__items = document.querySelector('.services__items');
			let isDown = false;
			let startX;
			let scrollLeft;

			services__items.addEventListener('mousedown', (e) => {
				isDown = true;
				services__items.classList.add('active');
				startX = e.pageX - services__items.offsetLeft;
				scrollLeft = services__items.scrollLeft;
			});
			services__items.addEventListener('mouseleave', () => {
				isDown = false;
				services__items.classList.remove('active');
			});
			services__items.addEventListener('mouseup', () => {
				isDown = false;
				services__items.classList.remove('active');
			});
			services__items.addEventListener('mousemove', (e) => {
				if(!isDown) return;
				e.preventDefault();
				const x = e.pageX - services__items.offsetLeft;
				const walk = (x - startX) * 1.25; //scroll-fast
				services__items.scrollLeft = scrollLeft - walk;
			});
		}else{
			jQuery('.services__items').not('.slick-initialized').slick({
				dots: true,
				arrows: false,
				infinite: false,
				speed: 300,
				slidesToShow: 1,
				centerMode: true,
				variableWidth: true
			});
		}
	}


	if( jQuery('.insurance__logos').length ){
		initInsuranceSlider();

		jQuery(window).resize(() => {
			initInsuranceSlider();
		});
	}
	function initInsuranceSlider(){
		if( jQuery(window).width() > 768 ){
			if ( jQuery('.insurance__logos').hasClass('slick-initialized') ){
				jQuery('.insurance__logos').slick('unslick');
			}
		}else{
			jQuery('.insurance__logos').not('.slick-initialized').slick({
				dots: true,
				arrows: false,
				infinite: false,
				speed: 300,
				slidesToShow: 1,
			});
		}
	}


	if( jQuery('.testimonials__items').length ){
		jQuery('.testimonials__items').not('.slick-initialized').slick({
			dots: true,
			arrows: true,
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			centerMode: true,
			variableWidth: true,
			appendArrows: jQuery('.testimonials__pagination'),
			appendDots: jQuery('.testimonials__pagination'),
		});
	}


	if( jQuery('.blog-block__items').length ){
		initBlogSlider();

		jQuery(window).resize(() => {
			initBlogSlider();
		});
	}
	function initBlogSlider(){
		if( jQuery(window).width() > 768 ){
			if ( jQuery('.blog-block__items').hasClass('slick-initialized') ){
				jQuery('.blog-block__items').slick('unslick');
			}
		}else{
			jQuery('.blog-block__items').not('.slick-initialized').slick({
				dots: true,
				arrows: false,
				infinite: true,
				speed: 300,
				slidesToShow: 1,
				centerMode: true,
				variableWidth: true,
			});
		}
	}


	if( jQuery('.cards__items').length ){
		initCardsSlider();

		jQuery(window).resize(() => {
			initCardsSlider();
		});
	}
	function initCardsSlider(){
		if( jQuery(window).width() > 768 ){
			if ( jQuery('.cards__items').hasClass('slick-initialized') ){
				jQuery('.cards__items').slick('unslick');
			}
		}else{
			jQuery('.cards__items').not('.slick-initialized').slick({
				dots: true,
				arrows: false,
				infinite: false,
				speed: 300,
				slidesToShow: 1,
				centerMode: true,
				variableWidth: true,
			});
		}
	}


	//scroll to element by id
	jQuery(document).on('click','a[href^=\\#]:not([href=\\#])', function (e) {
		if (this.hash) { //if link has #-anchor
			e.preventDefault();
			let id  = $(this).attr('href');
			if( jQuery(id).length ){
				let top = $(id).offset().top - 80;
				closeHeaderMenu();
				$('body,html').animate({scrollTop: top}, 600);
			}

		}
	});


	setTimeout(() => {
		AOS.init({
			disable: 'mobile'
		});
	}, 100);


	if( jQuery('.wpcf7').length ) {
		let wpcf7Elm = document.querySelector( '.wpcf7' );
		wpcf7Elm.addEventListener( 'wpcf7submit', function( event ) {
			jQuery('.wpcf7 select option:eq(0)').prop('selected',true);
			jQuery('.wpcf7 select').trigger('change');
		}, false );
	}


	function closeHeaderMenu(){
		jQuery('.header__hamburger .close-icon').hide();
		jQuery('.header__hamburger .hamburger-icon').show();
		jQuery('.header__hidden').slideUp();
		jQuery('body').removeClass('bl-open');
		jQuery('.header').removeClass('bl-open');
		setTimeout(function(){
			jQuery('.body-overlay').hide();
		}, 400);
	}
});