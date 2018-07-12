<?php
/*
  Plugin Name: Templatemela Custom Widgets
  Plugin URI: http://www.templatemela.com
  Description: Templatemela Default Homepage Slide Show for templatemela WordPress themes.
  Version: 1.0
  Author: Templatemela
  Author URI: http://www.templatemela.com
  @copyright  Copyright (c) 2010 TemplateMela. (http://www.templatemela.com)
  @license    http://www.templatemela.com/license/
 */
?>
<?php 
//  Creating Widget 
// Reference : http://codex.wordpress.org/Widgets_API
/**
 * Register widgetized areas, including two sidebars and four widget-ready columns in the footer.
 *
 * To override tm_widgets_init() in a child theme, remove the action hook and add your own
 * function tied to the init hook.
 *
 
 * @uses register_sidebar
 */
function tm_register_sidebars() {
	register_sidebar( array(
		'name' => esc_html__( 'Header Area', 'infystore' ),
		'id' => 'header-widget',
		'description' => esc_html__( 'The Cart on header', 'infystore' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s tab_content">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Header Search Widget Area', 'infystore' ),
		'id' => 'header-search',
		'description' => esc_html__( 'The header search widget area', 'infystore' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => ' ',
		'after_title' => ' ',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Header Advertise Area', 'infystore' ),
		'id' => 'header-offer',
		'description' => esc_html__( 'Header Advertise Area', 'infystore' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => ' ',
		'after_title' => ' ',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Footer Top NewsLetter Area', 'infystore' ),
		'id' => 'footer-top-area',
		'description' => esc_html__( 'Footer Top Area', 'infystore' ),
		'before_widget' => '',
		'after_widget' => " ",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => esc_html__( 'Home CMS banners Widget Area', 'infystore' ),
		'id' => 'home-banners-area',
		'description' => esc_html__( 'Home CMS banners Widget Area', 'infystore' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s tab_content">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Home Category Widget Area', 'infystore' ),
		'id' => 'home-category',
		'description' => esc_html__( 'The home category widget area', 'infystore' ),
		'before_widget' => '',
		'after_widget' => " ",
		'before_title' => ' ',
		'after_title' => ' ',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Footer Top CMS Area', 'infystore' ),
		'id' => 'footer-top-cms',
		'description' => esc_html__( 'Footer Top CMS', 'infystore' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s tab_content">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => esc_html__( 'First Footer Widget Area', 'infystore' ),
		'id' => 'first-footer-widget-area',
		'description' => esc_html__( 'The first footer widget area', 'infystore' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => esc_html__( 'Second Footer Widget Area', 'infystore' ),
		'id' => 'second-footer-widget-area',
		'description' => esc_html__( 'The second footer widget area', 'infystore' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => esc_html__( 'Third Footer Widget Area', 'infystore' ),
		'id' => 'third-footer-widget-area',
		'description' => esc_html__( 'The third footer widget area', 'infystore' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
	register_sidebar( array(
		'name' => esc_html__( 'Fourth Footer Widget Area', 'infystore' ),
		'id' => 'fourth-footer-widget-area',
		'description' => esc_html__( 'The fourth footer widget area', 'infystore' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Home CMS banners Widget Area', 'infystore' ),
		'id' => 'home-banners-area',
		'description' => esc_html__( 'Home CMS banners Widget Area', 'infystore' ),
		'before_widget' => '',
		'after_widget' => " ",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Fifth Footer Widget Area', 'infystore' ),
		'id' => 'fifth-footer-widget-area',
		'description' => esc_html__( 'The fifth footer widget area', 'infystore' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Sixth Footer Widget Area', 'infystore' ),
		'id' => 'sixth-footer-widget-area',
		'description' => esc_html__( 'The sixth footer widget area', 'infystore' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	 register_sidebar( array(
		'name' => esc_html__( 'Payment Method Widget Area', 'infystore' ),
		'id' => 'payment-widget-area',
		'description' => esc_html__( 'Payment Method widget area', 'infystore' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => esc_html__( 'Single Product CMS Tab', 'infystore' ),
		'id' => 'single-product-cms-tab',
		'description' => esc_html__( 'Single Product Cms Tab', 'infystore' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
}
/**
 * Register sidebars by running tm_widgets_init() on the widgets_init hook. 
 */
add_action( 'widgets_init', 'tm_register_sidebars' );
get_template_part('templatemela/widgets/tm-service-cms-banner');
get_template_part('templatemela/widgets/tm-follow-us');
get_template_part('templatemela/widgets/tm-footer-contactus');
get_template_part('templatemela/widgets/tm-static-links');
get_template_part('templatemela/widgets/tm-left-banner');
get_template_part('templatemela/widgets/tm-brand-list');
get_template_part('templatemela/widgets/tm-cmsblock');
get_template_part('templatemela/widgets/tm-advance-search');
?>