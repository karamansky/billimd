<?php namespace Billi\Enqueue;

if( !defined( 'ABSPATH' ) ) exit;

class EnqueueFiles {

	public static $version = 1.0;

	public function __construct() {
		$this->applyActions();
	}

	/**
	 * Add actions and filters
	 */
	public function applyActions() {
		add_action( 'wp_enqueue_scripts', [ $this, 'enqueueScripts' ] );
	}

	/**
	 * Enqueue scripts & styles
	 */
	public function enqueueScripts() {
		$get_template_directory_uri = get_template_directory_uri();
		wp_enqueue_style( 'select2-styles', $get_template_directory_uri . '/assets/libs/select2/css/select2.min.css');
		wp_enqueue_style( 'aos-styles', $get_template_directory_uri . '/assets/libs/aos/aos.css');
		wp_enqueue_style( 'slick-theme-styles', $get_template_directory_uri . '/assets/libs/slick/slick-theme.css');
		wp_enqueue_style( 'slick-styles', $get_template_directory_uri . '/assets/libs/slick/slick.css');
		wp_enqueue_style( 'bl-styles', $get_template_directory_uri . '/assets/css/style.min.css', '', '');
		
		//scripts
		wp_enqueue_script('aos-script', $get_template_directory_uri . '/assets/libs/aos/aos.js', ['jquery'], '', true);
		wp_enqueue_script('select2-script', $get_template_directory_uri . '/assets/libs/select2/js/select2.min.js', ['jquery'], '', true);
		wp_enqueue_script('slick-script', $get_template_directory_uri . '/assets/libs/slick/slick.min.js', ['jquery'], '', true);
		wp_enqueue_script('bl-script', $get_template_directory_uri . '/assets/js/common.js', ['jquery'], '', true);
	}
}

new EnqueueFiles();

class_alias( 'Billi\Enqueue\EnqueueFiles', 'EnqueueFiles' );
