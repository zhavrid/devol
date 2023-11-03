<?php

namespace App\Base;

final class Bootstrap {

	public const MENUS = [
		'header' => 'header-menu',
		'Footer-col-1' => 'footer-menu',
		// 'privacy' => 'privacy-menu',
		'Footer-col-2' => 'footer-menu_2',
		'Footer-col-3' => 'footer-menu_3',
	];

	public function __construct() {
		add_theme_support( 'menus' );
        add_theme_support( 'post-thumbnails' );
		add_action( 'init', [self::class, 'registerMenus'] );
		add_filter('upload_mimes', [self::class, 'allowUploadSvg']);
	}

	public static function registerMenus() {
		register_nav_menus(
			array(
				self::MENUS['header'] => __( 'Header Menu', TM_TEXTDOMAIN ),
				self::MENUS['Footer-col-1'] => __( 'Footer-col-1', TM_TEXTDOMAIN ),
				// self::MENUS['privacy'] => __( 'Privacy Menu', TM_TEXTDOMAIN ),
				self::MENUS['Footer-col-2'] => __( 'Footer-col-2', TM_TEXTDOMAIN ),
				self::MENUS['Footer-col-3'] => __( 'Footer-col-3', TM_TEXTDOMAIN ),
			)
		);
	}

	public static function bootstrap_main_menu() {
		wp_nav_menu( array(
			'theme_location' => self::MENUS['header']
		) );
	}

	public static function bootstrap_footer_col_1_menu() {
		wp_nav_menu( array(
			'theme_location' => self::MENUS['Footer-col-1']
		) );
	}
	public static function bootstrap_footer_col_2_menu() {
		wp_nav_menu( array(
			'theme_location' => self::MENUS['Footer-col-2']
		) );
	}
	public static function bootstrap_footer_col_3_menu() {
		wp_nav_menu( array(
			'theme_location' => self::MENUS['Footer-col-3']
		) );
	}

	// public static function bootstrap_privacy_menu() {
	// 	wp_nav_menu( array(
	// 		'theme_location' => self::MENUS['privacy']
	// 	) );
	// }
	
    public static function allowUploadSvg($mimes) {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }
}