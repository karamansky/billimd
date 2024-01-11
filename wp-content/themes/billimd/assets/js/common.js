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
		jQuery(document).on('click', '.hamburger-icon', function(e){
			e.preventDefault();
			jQuery(this).hide();
			jQuery(this).parent().find('.close-icon').show();
			jQuery('.header__hidden').slideDown();
		});
		jQuery(document).on('click', '.close-icon', function(e){
			e.preventDefault();
			jQuery(this).hide();
			jQuery(this).parent().find('.hamburger-icon').show();
			jQuery('.header__hidden').slideUp();
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
			}
		});
	}






});