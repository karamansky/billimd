<?php namespace Billi\Menu;

if( !defined( 'ABSPATH' ) ) exit;

class CustomizeMenu {
	
	public function __construct() {
		$this->initHooks();
	}
	
	public function initHooks() {
		add_action( 'wp_nav_menu_objects', [ $this, 'addMenuParentClass' ] );
	}

	function addMenuParentClass( $items ) {
		$parents = [];
		foreach ( $items as $item ) {
			if ( in_array('current-page-ancestor', $item->classes)  ) {
				$parents[] = $item->menu_item_parent;
			}
			
			if ( in_array('current-post-ancestor', $item->classes)  ) {
				$parents[] = $item->menu_item_parent;
			}
		}
		
		foreach ( $items as $item ) {
			if ( in_array( $item->ID, $parents ) ) {
				$item->classes[] = 'current-menu-ancestor';
			}
		}
		
		return $items;
	}
}

new CustomizeMenu();