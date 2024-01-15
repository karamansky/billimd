<?php
	
	/*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on gj, use a find and replace
        * to change 'gj' to the name of your theme in all the template files.
        */
	load_theme_textdomain( 'billi', get_template_directory().'/languages' );
	
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	
	/*
	* Let WordPress manage the document title.
	* By adding theme support, we declare that this theme does not use a
	* hard-coded <title> tag in the document head, and expect WordPress to
	* provide it for us.
	*/
	add_theme_support( 'title-tag' );
	
	/*
	* Enable support for Post Thumbnails on posts and pages.
	*
	* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	*/
	add_theme_support( 'post-thumbnails' );
	
	/*
	* Switch default core markup for search form, comment form, and comments
	* to output valid HTML5.
	*/
	add_theme_support(
		'html5',
		[
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		]
	);
	
	
	add_action( 'wp_enqueue_scripts', 'bl_enqueue_scripts' );
	function bl_enqueue_scripts(){
		$get_template_directory_uri = get_template_directory_uri();
		wp_enqueue_style( 'select2-styles', $get_template_directory_uri . '/assets/libs/select2/css/select2.min.css');
		wp_enqueue_style( 'aos-styles', $get_template_directory_uri . '/assets/libs/aos/aos.css');
		wp_enqueue_style( 'slick-theme-styles', $get_template_directory_uri . '/assets/libs/slick/slick-theme.css');
		wp_enqueue_style( 'slick-styles', $get_template_directory_uri . '/assets/libs/slick/slick.css');
		wp_enqueue_style( 'bl-styles', $get_template_directory_uri . '/assets/css/style.min.css');
		
		//scripts
		wp_enqueue_script('aos-script', $get_template_directory_uri . '/assets/libs/aos/aos.js', ['jquery'], '', true);
		wp_enqueue_script('select2-script', $get_template_directory_uri . '/assets/libs/select2/js/select2.min.js', ['jquery'], '', true);
		wp_enqueue_script('slick-script', $get_template_directory_uri . '/assets/libs/slick/slick.min.js', ['jquery'], '', true);
		wp_enqueue_script('bl-script', $get_template_directory_uri . '/assets/js/common.js', ['jquery'], '', true);
	}
