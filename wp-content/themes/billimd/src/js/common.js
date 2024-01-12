jQuery(document).ready(function( $ ) {

	if( jQuery('.header__menu .menu-item-has-children').length ){
		jQuery(document).on('click', '.header__menu .menu-item-has-children a', function(e){
			e.preventDefault();
			jQuery(this).parent().toggleClass('bl-open');
		});

		jQuery(document).mouseup(function (e){
			let div = jQuery('.header__menu .menu-item-has-children');
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

	if( jQuery('.header__login-button').length ){
		jQuery(document).on('click', '.header__login-button', function(e){
			e.preventDefault();
			jQuery(this).parent().toggleClass('bl-open');
		});
		jQuery(document).mouseup(function (e){
			let div = jQuery('.header__login-button');
			if (!div.is(e.target)
				&& div.has(e.target).length === 0) {
				div.parent().removeClass('bl-open');
			}
		});
	}

	if( jQuery('.header__hidden').length ){
		jQuery(document).on('click', '.header__hamburger .hamburger-icon', function(e){
			e.preventDefault();
			jQuery(this).hide();
			jQuery('.header').addClass('bl-open');
			jQuery('.header__hamburger .close-icon').show();
			jQuery('.body-overlay').show();
			jQuery('.header__hidden').slideDown();
		});
		jQuery(document).on('click', '.header__hamburger .close-icon', function(e){
			e.preventDefault();
			jQuery(this).hide();
			jQuery('.header__hamburger .hamburger-icon').show();
			jQuery('.header__hidden').slideUp();
			jQuery('.header').removeClass('bl-open');
			setTimeout(function(){
				jQuery('.body-overlay').hide();
			}, 400);
		});
		jQuery(document).mouseup(function (e){
			let div = jQuery('.header__hidden');
			if (!div.is(e.target)
				&& !jQuery('.header__hamburger .hamburger-icon').is(e.target)
				&& !jQuery('.header__hamburger .close-icon').is(e.target)
				&& div.has(e.target).length === 0) {
					jQuery('.header__hamburger .close-icon').hide();
					jQuery('.header__hamburger .hamburger-icon').show();
					jQuery('.header__hidden').slideUp();
					jQuery('.header').removeClass('bl-open');
					setTimeout(function(){
						jQuery('.body-overlay').hide();
					}, 400);

			}
		});
	}


	if( jQuery('.erm__slider--mobile').length ){
		jQuery('.erm__slider--mobile').slick({
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
				arrow: false,
				infinite: true,
				speed: 300,
				slidesToShow: 1,
				centerMode: true,
				variableWidth: true
			});
		}
	}




});