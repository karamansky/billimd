<?php namespace Billi\Menu;

if( !defined( 'ABSPATH' ) ) exit;

class RegisterCustom {

    public function __construct() {
        $this->initHooks();
    }

    public function initHooks() {
        add_action( 'after_setup_theme', [ $this, 'registerCustomMenuLocations' ] );
    }

    public function registerCustomMenuLocations() {
        register_nav_menus( [
            'primary-menu'     => 'Primary menu',
            'footer-menu'      => 'Footer menu',
            'policy-menu'      => 'Policy menu',
            'social-menu'      => 'Social menu',
        ] );
    }

}

new RegisterCustom();