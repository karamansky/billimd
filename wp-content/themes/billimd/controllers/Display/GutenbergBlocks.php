<?php namespace Billi\Display;

if( !defined( 'ABSPATH' ) ) exit;

class GutenbergBlocks {

	public function __construct() {
		$this->initHooks();
	}

	public function initHooks() {
		add_filter( 'block_categories_all', [ $this, 'addBlocksCategory' ] );
		add_action( 'acf/init', [ $this, 'addBlocks' ] );
	}

	public function addBlocksCategory( $categories ) {
		$new_category = [
			'slug'  => 'billi-blocks',
			'title' => 'Billi Blocks'
		];

		array_unshift( $categories, $new_category );

		return $categories;
	}

	public static function checkForPreview( $block ) {
		if( empty( $_POST['query']['preview'] ) ) return false;

		echo '<hr>'.$block['title'];
		/* Render screenshot if it's exist for example */

		if(
			!empty( $block['example']['attributes']['data']['image'] ) &&
			file_exists( get_template_directory().'/assets/img/modules/'.
				$block['example']['attributes']['data']['image'] )
		) {
			echo '<img src="'.get_template_directory_uri().'/assets/img/modules/'.
				$block['example']['attributes']['data']['image'].
				'" style="display: block; margin: 0 auto; width: 100%; object-fit: contain;">';
		}

		echo '<hr>';

		return true;
	}

	public function addBlocks() {
		if( !function_exists( 'acf_register_block_type' ) ) return;

		$blocks = $this->returnListOfBlocks();
		foreach( $blocks as $block ) {
			if( empty( $block['name'] ) ) continue;

			acf_register_block_type(
				[
					'name'            => $block['name'],
					'title'           => __( !empty( $block['title'] ) ? $block['title'] : $block['name'] ),
					'description'     => !empty( $block['description'] ) ? __( $block['description'] ) : '',
					'render_template' => 'template-parts/blocks/'.$block['name'].'.php',
					'category'        => !empty( $block['category'] ) ? $block['category'] : '',
					'icon'            => !empty( $block['icon'] ) ? $block['icon'] : [ 'background' => '#17C47B', 'src' => 'desktop' ],
					'keywords'        => !empty( $block['keywords'] ) ? $block['keywords'] : [],
					'example'         => !empty( $block['example'] ) ? $block['example'] : [],
				]
			);
		}
	}

	public function returnListOfBlocks() {
		return [
			[
				'name'        => 'home_hero',
				'title'       => 'Home Hero block',
				'category'    => 'billi-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#17C47B', 'src' => 'admin-home' ],
				'keywords'    => [ 'hero', 'page', 'top', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'home-hero.png',
						]
					]
				]
			],
			[
				'name'        => 'page_hero1',
				'title'       => 'Page hero1 block',
				'category'    => 'billi-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#17C47B', 'src' => 'admin-home' ],
				'keywords'    => [ 'hero', 'page', 'top', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'page-hero1.png',
						]
					]
				]
			],
			[
				'name'        => 'page_hero2',
				'title'       => 'Page hero2 block',
				'category'    => 'billi-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#17C47B', 'src' => 'admin-home' ],
				'keywords'    => [ 'hero', 'page', 'top', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'page-hero2.png',
						]
					]
				]
			],
			[
				'name'        => 'commitment',
				'title'       => 'Сommitment block',
				'category'    => 'billi-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#17C47B', 'src' => 'cover-image' ],
				'keywords'    => [ 'commitment', 'page', 'image', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'commitment.png',
						]
					]
				]
			],
			[
				'name'        => 'running_images',
				'title'       => 'Running images block',
				'category'    => 'billi-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#17C47B', 'src' => 'editor-insertmore' ],
				'keywords'    => [ 'running', 'ticker', 'image', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'running-images.png',
						]
					]
				]
			],
			[
				'name'        => 'scrolling_cards',
				'title'       => 'Scrolling Cards block',
				'category'    => 'billi-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#17C47B', 'src' => 'editor-insertmore' ],
				'keywords'    => [ 'scrolling', 'cards', 'image', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'scrolling-cards.png',
						]
					]
				]
			],
			[
				'name'        => 'logos',
				'title'       => 'Logo images block',
				'category'    => 'billi-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#17C47B', 'src' => 'images-alt' ],
				'keywords'    => [ 'logo', 'cards', 'image', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'logos.png',
						]
					]
				]
			],
			[
				'name'        => 'cards',
				'title'       => 'Cards block',
				'category'    => 'billi-blocks',
				'description' => '',
				'icon'        => [ 'background' => '#17C47B', 'src' => 'table-row-before' ],
				'keywords'    => [ 'cards', 'image', 'text', 'block' ],
				'example'     => [
					'attributes' => [
						'mode' => 'preview',
						'data' => [
							'image' => 'cards.png',
						]
					]
				]
			],
		];
	}

}

new GutenbergBlocks();

class_alias( 'Billi\Display\GutenbergBlocks', 'GutenbergBlocks' );