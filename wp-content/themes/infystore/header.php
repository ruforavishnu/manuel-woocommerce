<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Templatemela
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width,user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11"/>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
<?php tm_header(); ?>
 <?php wp_head();?> 
</head>
<body <?php body_class(); ?>>
<?php if ( get_option('tm_control_panel') == 'yes' ) do_action('tm_show_panel'); ?>

<!--CSS Spinner-->
<div class="spinner-wrapper">
<div class="spinner">
  <div class="double-bounce1"></div>
  <div class="double-bounce2"></div>
</div>
</div>

<div id="page" class="hfeed site">
<?php if ( get_header_image() ) : ?>
<div id="site-header"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"> <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="<?php echo esc_html_e('Siteheader','infystore'); ?>"> </a> </div>
<?php endif; ?>
<!-- Header -->
<?php tm_header_before(); ?>
<header id="masthead" class="site-header  site-header-fix <?php echo "header".esc_attr(get_option('tm_header_layout'));  ?> <?php echo esc_attr(tm_sidebar_position()); ?>">
<div class="theme-container">

<?php if (get_option('tm_show_stickyheader') == 'yes') : ?>	
		<div class="header-main header-fix">
		<?php else: ?>
		<div class="header-main">
  	<?php endif; ?>
<div class="theme-container">
<?php if ( has_nav_menu('account-menu') ) { ?>   
<div class="header-top-content">
	<?php if (get_option('tm_show_topbanner') == 'yes') :
    $tm_top_cms_banner_text = get_option('tm_top_cms_banner_text'); ?>	
		<div class="topbar-outer">
			<i class="fa fa-tag" aria-hidden="true"></i>
				<?php echo esc_attr(stripslashes(get_option('tm_top_cms_banner_text')))?>
		</div>
  	<?php endif; ?>
			<!-- Topbar link -->
				
		<div class="nav-menu-right">
			<div class="account-menu-links">
				<?php
							$tm_account_menu=array(
							'menu' => esc_html__('TM Header account Links','infystore'),
							'depth'=> 1,
							'echo' => false,
							'menu_class'      => 'account-menu', 
							'container'       => '', 
							'container_class' => '', 
							'theme_location' => 'account-menu'
							);
							echo wp_nav_menu($tm_account_menu);				    
							?>
			</div>
			</div>
			</div>
				<?php } ?> 			 					

					<!-- Start header_left -->							
					<?php tm_header_inside(); ?>	
					<div class="header-middle">
					   <div class="header-top">
						
						<!-- Header LOGO-->
						<div class="header-logo">
						<?php if (get_option('tm_logo_image') != '') : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
							<?php tm_get_logo(); ?>
							</a>
						<?php else: ?>
							<h3 class="site-title"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<?php bloginfo( 'name' ); ?>
								</a>
							</h3>
						<?php endif; ?>
						<?php if(get_option('tm_showsite_description') == 'yes') : ?>
							<h2 class="site-description">
								<?php bloginfo( 'description' ); ?>
							</h2>
						<?php endif; // End tm_showsite_description ?>
						</div>
					</div>
							<!-- Header Mob LOGO-->
					<div class="header-mob-logo">
								<?php if (get_option('tm_mob_logo_image') != '') : ?>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
									<?php tm_get_mob_logo(); ?>
									</a>
								<?php else: ?>
									<h3 class="site-title"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
										<?php bloginfo( 'name' ); ?>
										</a>
									</h3>
								<?php endif; ?>
								<?php if(get_option('tm_showsite_description') == 'yes') : ?>
									<h2 class="site-description">
										<?php bloginfo( 'description' ); ?>
									</h2>
								<?php endif; // End tm_showsite_description ?>
					</div>
							<!-- Start Header Left -->
					<div class="header-left">
								<!-- #site-navigation -->
								<nav id="site-navigation" class="navigation-bar main-navigation">																			
									<h3 class="menu-toggle"><?php esc_html_e( 'Menu', 'infystore' ); ?></h3>
									<a class="screen-reader-text skip-link" href="#content" title="<?php esc_html_e( 'Skip to content', 'infystore' ); ?>"><?php esc_html_e( 'Skip to content', 'infystore' ); ?></a>	
										<div class="mega-menu">
											<?php wp_nav_menu( array( 'theme_location' => 'primary','menu_class' => 'mega' ) ); ?>			
										</div>	
										<div class="mobile-menu">	
										<span class="close-menu"></span>	
											<?php wp_nav_menu( array( 'theme_location' => 'primary','menu_class' => 'mobile-menu-inner') ); ?>
										</div>	
								</nav>
					</div>
					
							<!-- Start Header Right -->	
					<div class="header-right">
							
								<!--Cart -->				
							<div class="header-cart">
												<?php 
													// Woo commerce Header Cart
													if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) && is_active_sidebar('header-widget') ) : ?>
													<div class="cart togg">
													<?php global $woocommerce;
													ob_start();?>						
													<div class="shopping_cart tog" title="<?php esc_html_e('View your shopping cart', 'infystore'); ?>">
												<a class="cart-contents" href="<?php echo esc_url($woocommerce->cart->get_cart_url()); ?>" title="<?php esc_html_e('View your shopping cart', 'infystore'); ?>"><div class="cart-price"><span class="label"><?php esc_html_e('Shopping Cart', 'infystore'); ?></span><div class="cart-qty"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'infystore'), $woocommerce->cart->cart_contents_count);?><?php esc_html_e(' items - ', 'infystore'); ?></div><?php echo translate($woocommerce->cart->get_cart_total()); ?></div></a>
													</div>	
													<?php global $woocommerce; ?>
													<?php tm_get_widget('header-widget'); ?>		
												</div>							
											<?php endif; ?>												
											</div>
								
									<div class="topbar-link">
												<div class="topbar-link-toggle">
												<div class="account-content">
													<span class="account-title"><?php echo esc_html_e('my account', 'infystore'); ?></span>
													<span class="sub-title"><?php echo esc_html_e('get all option', 'infystore'); ?></span>
												</div>
												</div>
												 <div class="topbar-link-wrapper">   
									<div class="header-menu-links">						
										<?php if ( has_nav_menu('header-menu') ) { ?> 						
											<?php 
											// Woo commerce Header Cart
											$tm_header_menu =array(
											'menu' => esc_html__('TM Header Top Links','infystore'),
											'depth'=> 1,
											'echo' => false,
											'menu_class'      => 'header-menu', 
											'container'       => '', 
											'container_class' => '', 
											'theme_location' => 'header-menu'
											);
											echo wp_nav_menu($tm_header_menu);				    
											?>
											<?php } ?>
											<?php
											$logout_url = '';
											if ( is_user_logged_in() ) {
												$myaccount_page_id = get_option( 'woocommerce_myaccount_page_id' ); 
												if ( $myaccount_page_id ) { 
												$logout_url = wp_logout_url( get_permalink( $myaccount_page_id ) ); 
												if ( get_option( 'woocommerce_force_ssl_checkout' ) == 'yes' )
												if (is_ssl()) {
												$logout_url = str_replace( 'http:', 'https:', $logout_url );
												}
												} ?>
												<a class="logout" href="<?php echo esc_url($logout_url); ?>" ><?php echo esc_html_e('Logout','infystore'); ?></a>
															<?php }
															else { ?>
															<a class="login" href="<?php echo  get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><?php echo esc_html_e('User Login','infystore'); ?></a>
											<?php } ?>
									</div>
									</div>
											</div>
										
								 <!--  Header Search -->
								 <!-- Search -->								
					
					</div>					
</div>	
					<?php if (is_active_sidebar('home-category') || is_active_sidebar('header-search') || is_active_sidebar('header-offer')) : ?>
					<div class="header-bottom">
							<?php if (is_active_sidebar('home-category')) : ?>
									<div class="box-category-heading">
										<div class="box-category">
											<span class="heading-img"></span><?php echo get_option( 'tm_navbar_category_title' ); ?>
										</div>
									</div>
							<?php endif; ?>	
							<?php if (is_active_sidebar('header-search')) : ?>
									<div class="header-search">
											<div class="search-button"> </div>
													<?php tm_get_widget('header-search');  ?>
									 </div>	
							<?php endif; ?>	
							<?php if (is_active_sidebar('header-offer')) : ?>
									<div class="header-banner-content">
											<div class="offerbanner-outer">
													<?php tm_get_widget('header-offer');  ?>	
											</div>
									</div>
							<?php endif; ?>				
					</div>		
					<?php endif; ?>		
				</div> 
			</div>   
			</div>
</header>
<?php tm_header_after(); ?>
<?php tm_main_before(); ?>
	<?php 
		$tm_page_layout = tm_page_layout(); 
		if( isset( $tm_page_layout) && !empty( $tm_page_layout ) ):
		$tm_page_layout = $tm_page_layout; 
		else:
		$tm_page_layout = '';
		endif;
	?>
<?php 
$shop = '0';
	if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) :
	if(is_shop())
		$tm_page_layout = 'wide-page';
		$shop = '1';
	endif;
?>
<div id="main" class="site-main <?php if (get_option('tm_show_topbar') == 'yes') echo "extra"; ?>">
<div class="main_inner">
<div class="main-container category left-sidebar single-product-sidebar">
<div class="main-inner-container">
<!-- category block -->
			<?php if (is_active_sidebar('home-category')) : ?>
			<div class="category-box">
				<div class="home-category one_fifth widget_product_categories">
					<?php tm_get_widget('home-category');  ?>	
				</div>
				</div>
			<?php endif; ?>	
		<!-- end category block -->
</div>
</div>



<?php 
	$tm_page_layout = tm_page_layout(); 
	if( isset( $tm_page_layout) && !empty( $tm_page_layout ) ):
	$tm_page_layout = $tm_page_layout; 
	else:
	$tm_page_layout = '';
	endif;
if ( $tm_page_layout == 'wide-page' ) : ?>
	<div class="main-content-inner-full">
<?php else: 		
if(is_archive() || is_tag() || is_404()) : ?>
	<div class="main-content">
<?php else : ?>
	<div class="main-content-inner  <?php echo esc_attr(tm_sidebar_position()); ?>">
<?php endif; ?>
<?php endif; ?>
<?php tm_content_before(); ?>