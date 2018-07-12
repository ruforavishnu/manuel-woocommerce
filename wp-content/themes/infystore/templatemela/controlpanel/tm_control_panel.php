<?php
add_action( 'wp_head', 'tm_customstyle' );
function tm_customstyle() { ?>
<?php
$font_family1 = get_option('tm_bodyfont');
$font_family1 = str_replace(' ', '+', $font_family1);
$font_family2 = get_option('tm_navfont');
$font_family2 = str_replace(' ', '+', $font_family2);
$font_family3 = get_option('tm_h1font');
$font_family3 = str_replace(' ', '+', $font_family3);
$font_family4 = get_option('tm_h2font');
$font_family4 = str_replace(' ', '+', $font_family4);
$font_family5 = get_option('tm_h3font');
$font_family5 = str_replace(' ', '+', $font_family5);
$font_family6 = get_option('tm_h4font');
$font_family6 = str_replace(' ', '+', $font_family6);
$font_family7 = get_option('tm_h5font');
$font_family7 = str_replace(' ', '+', $font_family7);
$font_family8 = get_option('tm_h6font');
$font_family8 = str_replace(' ', '+', $font_family8);
$font_family9 = get_option('tm_footerfont');
$font_family9 = str_replace(' ', '+', $font_family9);
// REMOVES DUPLICATE GOOGLE FONT CALL
$fonts_array = array($font_family1,$font_family2,$font_family3,$font_family4,$font_family5,$font_family6,$font_family7,$font_family8,$font_family9);
// REMOVES DUPLICATE GOOGLE FONT CALL
$fonts_array= array_unique($fonts_array);
foreach ($fonts_array as $key => $val) {
	if($val!='' && $val!='please-select' && $val!='Other+Fonts' && $val!='Raleway'){ ?>
		<link href='https://fonts.googleapis.com/css?family=<?php echo esc_attr($val); ?>' rel='stylesheet' type='text/css' />
	<?php }
}
// end REMOVES DUPLICATE GOOGLE FONT CALL
?>
<style type="text/css">
	<?php if( (get_option('tm_h1font') == "Other+Fonts") || get_option('tm_h1font') == "please-select"){  
	if	(get_option('tm_h1font_other') != ""){ ?>
	h1 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tm_h1font_other'))); ?>', Arial, Helvetica, sans-serif;		
	}	
	<?php } } elseif(get_option('tm_h1font') != "" && get_option('tm_h1font') != "please-select"){ ?>
	h1 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tm_h1font'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } ?>
	<?php if (get_option('tm_h1color') != ""){ ?>
	h1 {	
		color:#<?php echo esc_attr(get_option('tm_h1color')); ?>;	
	}	
	<?php } ?>
	<?php if( (get_option('tm_h2font') == "Other+Fonts") || get_option('tm_h2font') == "please-select"){  
	if	(get_option('tm_h2font_other') != ""){ ?>
	h2 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tm_h2font_other'))); ?>', Arial, Helvetica, sans-serif;	
	}	
	<?php } } elseif(get_option('tm_h2font') != "" && get_option('tm_h2font') != "please-select"){ ?>
	h2 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tm_h2font'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } ?>
	<?php if(get_option('tm_h2color') != ""){ ?>
	h2 {	
		color:#<?php echo esc_attr(get_option('tm_h2color')); ?>;	
	}	
	<?php } ?>
	<?php 
	if( (get_option('tm_h3font') == "Other+Fonts") || get_option('tm_h3font') == "please-select"){  
	if	(get_option('tm_h3font_other') != ""){ ?>
	h3 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tm_h3font_other'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } } elseif(get_option('tm_h3font') != "" && get_option('tm_h3font') != "please-select"){ ?>
	h3 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tm_h3font'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } ?>
	<?php if (get_option('tm_h3color') != ""){ ?>
	h3 { color:#<?php echo esc_attr(get_option('tm_h3color')); ?>;}
	<?php } ?>
	<?php if( (get_option('tm_h4font') == "Other+Fonts") || get_option('tm_h4font') == "please-select"){  
	if	(get_option('tm_h4font_other') != ""){ ?>
	h4 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tm_h4font_other'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } } elseif(get_option('tm_h4font') != "" && get_option('tm_h4font') != "please-select"){ ?>
	h4 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tm_h4font'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } ?>	
	<?php if(get_option('tm_h4color') != ""){ ?>
	h4 {	
		color:#<?php echo esc_attr(get_option('tm_h4color')); ?>;	
	}	
	<?php } ?>
	<?php if( (get_option('tm_h5font') == "Other+Fonts") || get_option('tm_h5font') == "please-select"){  
	if	(get_option('tm_h5font_other') != ""){ ?>
	h5 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tm_h5font_other'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } } elseif(get_option('tm_h5font') != "" && get_option('tm_h5font') != "please-select"){ ?>
	h5 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tm_h5font'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } ?>
	<?php if(get_option('tm_h5color') != ""){ ?>
	h5 {	
		color:#<?php echo esc_attr(get_option('tm_h5color')); ?>;	
	}	
	<?php } ?>
	<?php if( (get_option('tm_h6font') == "Other+Fonts") || get_option('tm_h6font') == "please-select"){  
	if	(get_option('tm_h6font_other') != ""){ ?>
	h6 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tm_h6font_other'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } } elseif(get_option('tm_h6font') != "" && get_option('tm_h6font') != "please-select"){ ?>
	h6 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tm_h6font'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php }  ?>	
	<?php 
	if(get_option('tm_h6color') != ""){ ?>
	h6 {	
		color:#<?php echo esc_attr(get_option('tm_h6color')); ?>;	
	}	
	<?php } ?>
	<?php if( (get_option('tm_h3font') == "Other+Fonts") || get_option('tm_h3font') == "please-select"){  
	if	(get_option('tm_h3font_other') != ""){ ?>
	.home-service h3.widget-title {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tm_h3font_other'))); ?>', Arial, Helvetica, sans-serif;	
	}	
	<?php } } elseif(get_option('tm_h3font') != "" && get_option('tm_h3font') != "please-select"){ ?>
	.home-service h3.widget-title {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tm_h3font'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } ?>
	.primary-sidebar a {
		color:#<?php echo esc_attr(get_option('tm_sidebar_text_color')); ?>;
	}
	 .primary-sidebar a:hover ,.header-menu-links a:hover,.nav-menu-right li a:hover,.primary-sidebar .widget.woocommerce ul li a:hover{
		color:#<?php echo esc_attr(get_option('tm_sidebar_text_hover_color')); ?>;
	}	
	
	a {
		color:#<?php echo esc_attr(get_option('tm_link_color')); ?>;
	}
	a:hover ,
	.custom-testimonial .style-1 .testimonial-title a:hover,
	.cat_img_block:hover .category{
		color:#<?php echo esc_attr(get_option('tm_hoverlink_color')); ?>;
	}
	.footer a, .site-footer a, .site-footer{
		color:#<?php echo esc_attr(get_option('tm_footerlink_color')); ?>; 
	}
	.footer a:hover, .footer .footer-links li a:hover, .site-footer a:hover{
		color:#<?php echo esc_attr(get_option('tm_footerhoverlink_color')); ?>;		 
	}
	<?php 
	if( (get_option('tm_h3font') == "Other+Fonts") || get_option('tm_h3font') == "please-select"){  
	if	(get_option('tm_h3font_other') != ""){ ?>
	h3 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tm_h3font_other'))); ?>', Arial, Helvetica, sans-serif;	
	}	
	<?php } } elseif(get_option('tm_h3font') != "" && get_option('tm_h3font') != "please-select"){ ?>
	h3 {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tm_h3font'))); ?>', Arial, Helvetica, sans-serif;	
	}	
	<?php } ?>	
	<?php 
	if( (get_option('tm_footerfont') == "Other+Fonts") || get_option('tm_footerfont') == "Please-Select"){  
	if	(get_option('tm_footerfont_other') != ""){ ?>
	.site-footer {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tm_footerfont_other'))); ?>', Arial, Helvetica, sans-serif;
	}	
	<?php } } elseif(get_option('tm_footerfont') != "" && get_option('tm_footerfont') != "please-select"){ ?>
	.site-footer {	
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tm_footerfont'))); ?>', Arial, Helvetica, sans-serif;	
	}	
	<?php } ?>	
	.footer-top {
		background-color:#<?php echo esc_attr(get_option('tm_footer_top_bkg_color')) ; ?> ;
	}
	.footer-bottom {
		background-color:#<?php echo esc_attr(get_option('tm_footer_bottom_bkg_color')) ; ?> ;
	}
	body {
		background-color:#<?php echo esc_attr(get_option('tm_bkg_color')) ; ?> ;
		<?php if(get_option('tm_background_upload')==''){ ?>
		background-image: url("<?php echo esc_url(get_template_directory_uri()); ?>/images/megnor/colorpicker/pattern/<?php echo esc_attr(get_option('tm_texture')); ?>");
		background-position:<?php echo esc_attr(str_replace('+',' ',get_option('tm_back_position'))); ?> ;
		background-repeat:<?php echo esc_attr(get_option('tm_back_repeat')); ?>;
		background-attachment:<?php echo esc_attr(get_option('tm_back_attachment')); ?>;
		<?php } else { ?>
		background-image: url("<?php echo esc_attr(get_option('tm_background_upload')); ?>");
		background-position:<?php echo esc_attr(str_replace('+',' ',get_option('tm_back_position'))); ?>;
		background-repeat:<?php echo get_option('tm_back_repeat'); ?>;
		background-attachment:<?php echo esc_attr(get_option('tm_back_attachment')); ?>;
		<?php } ?>			
		color:#<?php echo esc_attr(get_option('tm_bodyfont_color')); ?>;
	} 
	.header-top-content{background:<?php echo tm_hex_to_rgba(esc_attr(get_option('tm_topbar_bkg_color')),esc_attr(get_option('tm_topbar_bkg_opacity'))); ?>;color:#<?php echo esc_attr(get_option('tm_topbar_text_color')); ?>; }
	.nav-menu-right li a{color:#<?php echo esc_attr(get_option('tm_topbar_text_color')); ?>;}
	.header-top{background-color:<?php echo tm_hex_to_rgba(esc_attr(get_option('tm_top_header_bg_color')),esc_attr(get_option('tm_top_header_opacity'))); ?>}
	.service-cms{background-color:<?php echo tm_hex_to_rgba(esc_attr(get_option('tm_service_block_bg_color')),esc_attr(get_option('tm_service_block_bg_color_opacity'))); ?>}
	.navigation-bar{background-color:<?php echo tm_hex_to_rgba(esc_attr(get_option('tm_top_nav_bg_color'))); ?>}
	
	.mega-menu ul .mega-hover a,.mega-menu ul li a, .mobile-menu ul li a {color:#<?php echo esc_attr(get_option('tm_menu_parentlink_color')); ?>; }
	.mega-menu ul li a:hover,.mobile-menu ul li a:hover{color:#<?php echo esc_attr(get_option('tm_menu_parentlinkhover_color')); ?>; }
	.mega-menu .current_page_item > a{color:#<?php echo esc_attr(get_option('tm_menu_activelink_color')); ?>; }
	.mega-menu .current_page_item > a:hover{color:#<?php echo esc_attr(get_option('tm_menu_activelinkhover_color')); ?>; }
	.mega-menu ul .sub li.mega-hdr li a, .mega-menu ul li .sub-container.non-mega li a{color:#<?php echo esc_attr(get_option('tm_menu_subchildlink_color')); ?>; }
	.mega-menu ul li .sub li.mega-hdr a.mega-hdr-a{color:#<?php echo esc_attr(get_option('tm_menu_childlink_color')); ?>; }
	.mega-menu ul .sub li.mega-hdr li a:hover, .mega-menu ul li .sub-container.non-mega li a:hover{color:#<?php echo esc_attr(get_option('tm_menu_childlinkhover_color')); ?>; }
		
	
	.mobile-menu{background-color:<?php echo tm_hex_to_rgba(esc_attr(get_option('tm_mobile_nav_bg_color')),esc_attr(get_option('tm_mobile_nav_bar_opacity'))); ?>}
	.mobile-menu ul li a{color:#<?php echo esc_attr(get_option('tm_mobile_menu_text_color')); ?>; }
	.mobile-menu ul li a:hover,.mobile-menu .current_page_item > a{color:#<?php echo esc_attr(get_option('tm_mobile_menu_texthover_color')); ?>; }
		
		
	.site-header {
		background-color:<?php echo tm_hex_to_rgba(esc_attr(get_option('tm_header_bkg_color')),esc_attr(get_option('tm_header_bkg_opacity'))); ?>;
		<?php if(get_option('tm_header_background_upload')!=''){ ?>
		background-image: url("<?php echo esc_attr(get_option('tm_header_background_upload')); ?>");
		background-position:<?php echo esc_attr(str_replace('+',' ',get_option('tm_header_back_position'))); ?>;
		background-repeat:<?php echo esc_attr(get_option('tm_header_back_repeat')); ?>;
		background-attachment:<?php echo esc_attr(get_option('tm_header_back_attachment')); ?>;
		<?php } ?>
	} 
	<?php 
	if( (get_option('tm_bodyfont') == "Other+Fonts") || get_option('tm_bodyfont') == "please-select"){  
	if	(get_option('tm_bodyfont_other') != ""){ ?>
	body {	
		font-family: '<?php echo esc_attr(str_replace('+',' ',get_option('tm_bodyfont_other'))); ?>', Arial, Helvetica, sans-serif;	
	}	
	<?php } } elseif(get_option('tm_bodyfont') != "" && get_option('tm_bodyfont') != "please-select"){ ?>
	body {	
		font-family: '<?php echo esc_attr(str_replace('+',' ',get_option('tm_bodyfont'))); ?>', Arial, Helvetica, sans-serif;	
	}


.widget button, .widget input[type="button"], .widget input[type="reset"], .widget input[type="submit"], a.button, button, .contributor-posts-link, input[type="button"], input[type="reset"], input[type="submit"], .button_content_inner a, .woocommerce #content input.button, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce-page #content input.button, .woocommerce-page #respond input#submit, .woocommerce-page a.button, .woocommerce-page button.button, .woocommerce-page input.button, .woocommerce .wishlist_table td.product-add-to-cart a,.woocommerce .wc-proceed-to-checkout .checkout-button:hover,
.woocommerce-page input.button:hover,.woocommerce #content input.button.disabled,.woocommerce #content input.button:disabled,.woocommerce #respond input#submit.disabled,.woocommerce #respond input#submit:disabled,.woocommerce a.button.disabled,.woocommerce a.button:disabled,.woocommerce button.button.disabled,.woocommerce button.button:disabled,.woocommerce input.button.disabled,.woocommerce input.button:disabled,.woocommerce-page #content input.button.disabled,.woocommerce-page #content input.button:disabled,.woocommerce-page #respond input#submit.disabled,.woocommerce-page #respond input#submit:disabled,.woocommerce-page a.button.disabled,.woocommerce-page a.button:disabled,.woocommerce-page button.button.disabled,.woocommerce-page button.button:disabled,.woocommerce-page input.button.disabled,.woocommerce-page input.button:disabled,.loadgridlist-wrapper .woocount:hover,#primary .entry-summary .single_add_to_cart_button:hover,.yith-wcwl-wishlistaddedbrowse.show, .yith-wcwl-wishlistexistsbrowse.show, .woocommerce .yith-wcwl-add-to-wishlist a.add_to_wishlist, .woocommerce .compare-button a.compare, .woocommerce ul.products .button.product_type_grouped, .woocommerce ul.products .button.add_to_cart_button, .woocommerce ul.products a.compare.button{
	background-color:<?php echo tm_hex_to_rgba(esc_attr(get_option('tm_button_color')),esc_attr(get_option('tm_button_opacity'))); ?>;
	color:#<?php echo esc_attr(get_option('tm_button_text_color')); ?>;
	border-color:#<?php echo esc_attr(get_option('tm_button_border_color')); ?>;

	 font-family:<?php echo esc_attr(get_option('tm_button_font_family')); ?>;
<?php  if(get_option('tm_button_font_family') != "" && get_option('tm_button_font_family') != "please-select"){ ?>
		font-family:'<?php echo esc_attr(str_replace('+',' ',get_option('tm_button_font_family'))); ?>', Arial, Helvetica, sans-serif;
	<?php } ?>
}

.widget input[type="button"]:hover,.widget input[type="button"]:focus,.widget input[type="reset"]:hover,.widget input[type="reset"]:focus,.widget input[type="submit"]:hover,.widget input[type="submit"]:focus,a.button:hover,a.button:focus,button:hover,button:focus,.contributor-posts-link:hover,input[type="button"]:hover,input[type="button"]:focus,input[type="reset"]:hover,input[type="reset"]:focus,input[type="submit"]:hover,input[type="submit"]:focus,.calloutarea_button a.button:hover,.calloutarea_button a.button:focus,.button_content_inner a:hover,.button_content_inner a:focus,.woocommerce #content input.button:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce-page #content input.button:hover, .woocommerce-page #respond input#submit:hover, .woocommerce-page a.button:hover, .woocommerce-page button.button:hover, .woocommerce #content table.cart .checkout-button:hover,#primary .entry-summary .single_add_to_cart_button,.woocommerce .wc-proceed-to-checkout .checkout-button,.loadgridlist-wrapper .woocount,.yith-wcwl-wishlistaddedbrowse.show:hover, .yith-wcwl-wishlistexistsbrowse.show:hover, .woocommerce .yith-wcwl-add-to-wishlist a.add_to_wishlist:hover, .woocommerce ul.products a.compare.button:hover, .woocommerce ul.products .button.add_to_cart_button:hover{
		background-color:<?php echo tm_hex_to_rgba(esc_attr(get_option('tm_button_hover_color')),esc_attr(get_option('tm_button_hover_opacity'))); ?>;
		color:#<?php echo esc_attr(get_option('tm_button_hover_text_color')); ?>;
		border-color:#<?php echo esc_attr(get_option('tm_button_hover_color')); ?>;
	}	

	<?php }  ?>		
</style>
<?php if(get_option('tm_control_panel') == 'no') return; 
	$bkg_color = get_option('tm_bkg_color') ;
	$texture = get_option('tm_texture');
	$bodyfont = str_replace('+',' ',get_option('tm_bodyfont'));
	$bodyfont_color = get_option('tm_bodyfont_color');
	$headerfont = str_replace('+',' ',get_option('tm_headerfont'));
	$headerfont_color = get_option('tm_h1color');
	$navfont = str_replace('+',' ',get_option('tm_navfont'));
	$navfont_color = get_option('tm_navlink_color');
	$link_color = get_option('tm_link_color');
	$link_color_hover = get_option('tm_hoverlink_color');
	$footer_link_color = get_option('tm_footerlink_color');
?>
<script type="text/javascript">
var bkg_color_default = '<?php echo esc_attr($bkg_color); ?>',
	bodyfont_color_default = '<?php echo esc_attr($bodyfont_color); ?>',
	headerfont_color_default = '<?php echo esc_attr($headerfont_color); ?>',
	navfont_color_default = '<?php echo esc_attr($navfont_color); ?>',
	link_color_default = '<?php echo esc_attr($link_color); ?>',
	footer_link_color_default = '<?php echo esc_attr($footer_link_color); ?>';
</script>
<?php } 
add_action( 'wp_head', 'tm_panel_head' );
function tm_panel_head(){
	if(get_option('tm_control_panel') == 'no') return;
	//=========================================== Background Settings ===========================================//
	$tm_bkgcolor = isset($_COOKIE['tm_bkgcolor']) ? $_COOKIE['tm_bkgcolor'] : '';
	$tm_texture = isset($_COOKIE['tm_texture']) ? $_COOKIE['tm_texture'] : '';
	$style = '';
	if ( $tm_bkgcolor != '' || $tm_texture != '' ) {
		if ( $tm_bkgcolor != '' ) $style .= '<style type="text/css">body{ background-color: #' .$tm_bkgcolor. '; }</style>';
		if ( $tm_texture != '' ) $style .= '<style type="text/css">body{ background-image: url('.get_template_directory_uri().'/css/images/'.$tm_texture.'.png) }</style>';
		echo $style;
	}	
	//=========================================== Body Settings ===========================================//
	$tm_bodyfont_tag = 'body';
	$tm_bodyfont = isset($_COOKIE['tm_bodyfont']) ? $_COOKIE['tm_bodyfont'] : '';
	$tm_bodyfont_color = isset($_COOKIE['tm_bodyfont_color']) ? $_COOKIE['tm_bodyfont_color'] : '';
	$body_style = '';					
	if ( $tm_bodyfont != '' || $tm_bodyfont_color != '') {
		if ( $tm_bodyfont != '' ) {
			$tm_bodyfont_family = str_replace(' ', '+', $tm_bodyfont);
			$body_style .= '<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family='.$tm_bodyfont_family.'" />';
			$body_style .= '<style type="text/css">'.$tm_bodyfont_tag.' { font-family: '.$tm_bodyfont.'; }</style>';
		}
		if ( $tm_bodyfont_color != '' ) {
			$body_style .= '<style type="text/css">'.$tm_bodyfont_tag.' { color: #'.$tm_bodyfont_color.'; }</style>';
		}	
		echo $body_style;
	}
	//=========================================== Header Settings ===========================================//
	$tm_headerfont_tag = 'h1,h2,h3,h4,h5,h6,.entry-title, .entry-title a,#secondary .widget-title,.widget-title,#footer-widget-area .widget-title,h3.service-block1,.block2 .widget-title,h3.featured-title-slide,.page h2,.block3 h3,.block3 h3,.entry-content a';
	$tm_headerfont = isset($_COOKIE['tm_headerfont']) ?	$_COOKIE['tm_headerfont'] : '';
	$tm_headerfont_color = isset($_COOKIE['tm_headerfont_color']) ? $_COOKIE['tm_headerfont_color'] : '';
	$header_style = '';
	if ( $tm_headerfont != '' || $tm_headerfont_color != '' ) {
		if ( $tm_headerfont != '' ) {
			$tm_headerfont_family = str_replace(' ', '+', $tm_headerfont);
			$header_style .= '<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family='.$tm_headerfont_family.'" />';
			$header_style .= '<style type="text/css">'.$tm_headerfont_tag.' { font-family: '.$tm_headerfont.'; }</style>';
		}
		if ( $tm_headerfont_color != '' ) {
			$header_style .= '<style type="text/css">'.$tm_headerfont_tag.' { color: #'.$tm_headerfont_color.'; }</style>';
		}	
		echo $header_style;
	}
	//=========================================== Navigation Settings ===========================================//
	$tm_navfont_tag = '.mega-menu ul li a';
	$tm_navfont = isset($_COOKIE['tm_navfont']) ? $_COOKIE['tm_navfont'] : '';
	$tm_navfont_color = isset($_COOKIE['tm_navfont_color']) ? $_COOKIE['tm_navfont_color'] : '';
	$nav_style = '';
	if ( $tm_navfont != '' || $tm_navfont_color != '') {
		if ( $tm_navfont != '' ) {
			$tm_navfont_family = str_replace(' ', '+', $tm_navfont);
			$nav_style .= '<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family='.$tm_navfont_family.'" />';
			$nav_style .= '<style type="text/css">'.$tm_navfont_tag.' { font-family: '.$tm_navfont.'; }</style>';
		}
		if ( $tm_navfont_color != '' ) {
			$nav_style .= '<style type="text/css">'.$tm_navfont_tag.'{ color: #'.$tm_navfont_color.'; }</style>';
		}		
		echo $nav_style;
	}
	//=========================================== Link Settings ===========================================//
	$tm_linkcolor = isset($_COOKIE['tm_linkcolor']) ? $_COOKIE['tm_linkcolor'] : '';
	$link_style = '';
	if ($tm_linkcolor != '') {
		$link_style .= '<style type="text/css">a{ color: #' .$tm_linkcolor. '; }</style>';	
		echo $link_style;
	}
	//=========================================== Footer Link Settings ===========================================//
	$tm_footercolor_tag = '.footer a';
	$tm_footercolor = isset($_COOKIE['tm_footercolor']) ? $_COOKIE['tm_footercolor'] : '';
	$footer_style = '';
	if ($tm_footercolor != '') {
		$footer_style .= '<style type="text/css">'.$tm_footercolor_tag.'{ color: #' .$tm_footercolor. '; }</style>';	
		echo $footer_style;
	}	
}
add_action('tm_show_panel','tm_control_panel');
function tm_control_panel(){
	$google_fonts = array('Droid+Sans','Antic','Bitter','Droid+Serif','Philosopher','Oxygen','Rokkitt','Galdeano','Raleway','Oswald','Play','Varela','Andika','Montserrat'); ?>
<div id="tm-control-panel">
  <div id="tm-panel-container">
    <div class="tm-panel-bg"> <a id="tm-panel-switch" href="#"><span class="icon-settings"></span></a>
      <div id="tm-panel-inner">
        <div class="tm-panel-title-main"> <span class="main-title"><?php esc_html__('Theme Settings','infystore') ?></span> </div>
        <!--tm-panel-title-main-->
        <form method="post" id="panel_form" name="panel_form">
          <div class="tm-panel-block">
            <div class="tm-panel-title-back">Background Color</div>
            <?php
						$bkgcolor = (isset($_COOKIE['tm_bkgcolor'])) ? $_COOKIE['tm_bkgcolor'] : (get_option('tm_bkg_color'));
						if($bkgcolor == ''){$bkgcolor_style='style="background-color:#767676"';}else{$bkgcolor_style = ($bkgcolor != (get_option('tm_bkg_color'))) ? 'style="background-color:#'.$bkgcolor.'"' : 'style="background-color:#'.(get_option('tm_bkg_color')).'"';}
						?>
            <div class="tm-panel-colorpicker">
              <input id="tm-panel-bkgcolor" class="tm-item" type="text" name="tm-panel-bkgcolor" <?php echo esc_attr($bkgcolor_style); ?>>
            </div>
          </div>
          <!--tm-panel-block-->
          <div class="tm-panel-block">
            <div class="tm-panel-title-text-back">Background Texture</div>
            <div class="clear"></div>
            <?php 
							for ( $i=1; $i<=18; $i++ ) { ?>
            <a id="tm-bkg-texture<?php echo esc_attr($i); ?>" class="tm-panel-item" href="#" title="body-bg<?php echo esc_attr($i); ?>"></a>
            <?php } ?>
          </div>
          <!--tm-panel-block-->
          <div class="tm-panel-block">
            <div class="tm-panel-title">Body font</div>
            <?php 
						$bodyfont_color = (isset($_COOKIE['tm_bodyfont_color'])) ? $_COOKIE['tm_bodyfont_color'] : (get_option('tm_bodyfont_color'));
						if($bodyfont_color == ''){$bodyfont_color_style='style="background-color:#555555"';}else{$bodyfont_color_style = ($bodyfont_color != (get_option('tm_bodyfont_color'))) ? 'style="background-color:#'.$bodyfont_color.'"' : 'style="background-color:#'.(get_option('tm_bodyfont_color')).'"';}
						?>
            <?php
						$body_font = '';
						$body_font = ( isset( $_COOKIE['tm_bodyfont'] ) ) ? $_COOKIE['tm_bodyfont'] : str_replace('+', ' ', get_option('tm_bodyfont')); ?>
            <select name="tm-panel-body-font" id="tm-panel-body-font">
              <?php foreach( $google_fonts as $font ) { ?>
              <?php $encoded_value = str_replace( '+', ' ', $font ); ?>
              <option value="<?php echo esc_attr($encoded_value); ?>" <?php selected( $body_font, $encoded_value ); ?>><?php echo esc_attr($encoded_value); ?></option>
              <?php } ?>
            </select>
            <div class="tm-panel-colorpicker">
              <input id="tm-panel-body-font-color" class="tm-item" type="text" name="tm-panel-body-font-color" <?php echo esc_attr($bodyfont_color_style); ?>>
            </div>
          </div>
          <!--tm-panel-block-->
          <div class="tm-panel-block">
            <div class="tm-panel-title">
              <?php esc_html_e('Header font','infystore');?>
            </div>
            <?php 
						$headerfont_color = (isset($_COOKIE['tm_headerfont_color'])) ? $_COOKIE['tm_headerfont_color'] : (get_option('tm_h1color'));
						if($headerfont_color == ''){$headerfont_color_style='style="background-color:#767676"';}else{	$headerfont_color_style = ($headerfont_color != (get_option('tm_h1color'))) ? 'style="background-color:#'.$headerfont_color.'"' : 'style="background-color:#'.(get_option('tm_h1color')).'"';}	
						?>
            <?php
						$header_font = '';
						$header_font = ( isset( $_COOKIE['tm_headerfont'] ) ) ? $_COOKIE['tm_headerfont'] : str_replace('+', ' ', get_option('tm_headerfont')); ?>
            <select name="tm-panel-header-font" id="tm-panel-header-font">
              <?php foreach( $google_fonts as $font ) { ?>
              <?php $encoded_value = str_replace( '+', ' ', $font ); ?>
              <option value="<?php echo esc_attr($encoded_value); ?>" <?php selected( $header_font, $encoded_value ); ?>><?php echo esc_attr($encoded_value); ?></option>
              <?php } ?>
            </select>
            <div class="tm-panel-colorpicker">
              <input id="tm-panel-header-font-color" class="tm-item" type="text" name="tm-panel-header-font-color" <?php echo esc_attr($headerfont_color_style); ?>>
            </div>
          </div>
          <!--tm-panel-block-->
          <div class="tm-panel-block">
            <div class="tm-panel-title">Navigation font</div>
            <?php 
						$navfont_color = (isset($_COOKIE['tm_navfont_color'])) ? $_COOKIE['tm_navfont_color'] : (get_option('tm_navlink_color'));
						if($navfont_color == ''){$navfont_color_style='style="background-color:#333333"';}else{$navfont_color_style = ($navfont_color != (get_option('tm_navlink_color'))) ? 'style="background-color:#'.$navfont_color.'"' : 'style="background-color:#'.(get_option('tm_navlink_color')).'"';}
						?>
            <?php
						$nav_font = '';
						$nav_font = ( isset( $_COOKIE['tm_navfont'] ) ) ? $_COOKIE['tm_navfont'] : str_replace('+', ' ', get_option('tm_navfont')); ?>
            <select name="tm-panel-nav-font" id="tm-panel-nav-font">
              <?php foreach( $google_fonts as $font ) { ?>
              <?php $encoded_value = str_replace( '+', ' ', $font ); ?>
              <option value="<?php echo esc_attr($encoded_value); ?>" <?php selected( $nav_font, $encoded_value ); ?>><?php echo esc_attr($encoded_value); ?></option>
              <?php } ?>
            </select>
            <div class="tm-panel-colorpicker">
              <input id="tm-panel-nav-font-color" class="tm-item" type="text" name="tm-panel-nav-font-color" <?php echo esc_attr($navfont_color_style); ?>>
            </div>
          </div>
          <!--tm-panel-block-->
          <div class="tm-panel-block">
            <div class="tm-panel-title">
              <?php esc_html_e('Link Color','infystore');?>
            </div>
            <?php
						$linkcolor = (isset($_COOKIE['tm_linkcolor'])) ? $_COOKIE['tm_linkcolor'] : (get_option('tm_link_color'));
						if($linkcolor == ''){$linkcolor_style='style="background-color:#767676"';}else{$linkcolor_style = ($linkcolor != (get_option('tm_link_color'))) ? 'style="background-color:#'.$linkcolor.'"' : 'style="background-color:#'.(get_option('tm_link_color')).'"';}
						?>
            <div class="tm-panel-colorpicker">
              <input id="tm-panel-linkcolor" class="tm-item" type="text" name="tm-panel-linkcolor" <?php echo esc_attr($linkcolor_style); ?>>
            </div>
          </div>
          <!--tm-panel-block-->
          <div class="tm-panel-block">
            <div class="tm-panel-title-back">
              <?php esc_html_e('Footer Link Color','infystore');?>
            </div>
            <?php
						$footercolor = (isset($_COOKIE['tm_footercolor'])) ? $_COOKIE['tm_footercolor'] : (get_option('tm_footerlink_color'));
						if($footercolor == ''){$footercolor_style='style="background-color:#FFFFFF"';}else{$footercolor_style = ($footercolor != (get_option('tm_footerlink_color'))) ? 'style="background-color:#'.$footercolor.'"' : 'style="background-color:#'.(get_option('tm_footerlink_color')).'"';}
						?>
            <div class="tm-panel-colorpicker">
              <input id="tm-panel-footercolor" class="tm-item" type="text" name="tm-panel-footercolor" <?php echo esc_attr($footercolor_style); ?> />
            </div>
          </div>
          <!--tm-panel-block-->
          <div class="more-set"> <a style="color:#000; font-size:12px;" href="<?php echo esc_url(admin_url()); ?>admin.php?page=tm_theme_settings" target="_blank">
            <?php esc_html_e('See more settings in admin panel','infystore');?>
            </a> </div>
          <!--more-set-->
        </form>
        <!--panel_form-->
        <?php
					if ( isset($_REQUEST['apply']) ) {
						$tm_bkgcolor = $_COOKIE['tm_bkgcolor'];
						$tm_texture = $_COOKIE['tm_texture'];
						$tm_bodyfont = $_COOKIE['tm_bodyfont'];
						$tm_bodyfont_color = $_COOKIE['tm_bodyfont_color'];
						$tm_headerfont = $_COOKIE['tm_headerfont'];
						$tm_headerfont_color = $_COOKIE['tm_headerfont_color'];
						$tm_navfont = $_COOKIE['tm_navfont'];
						$tm_navfont_color = $_COOKIE['tm_navfont_color'];
						$tm_linkcolor = $_COOKIE['tm_linkcolor'];
						$tm_footercolor = $_COOKIE['tm_footercolor'];
					} 
					elseif ( isset($_REQUEST['reset']) || !(isset($_REQUEST['reset'])) ) {
						$tm_bkgcolor = $tm_texture = $tm_bodyfont = $tm_bodyfont_color = $tm_headerfont = $tm_headerfont_color = $tm_navfont = $tm_navfont_color = $tm_linkcolor = $tm_footercolor ='';
 					} 
				?>
      </div>
      <!--tm-panel-inner-->
    </div>
    <!--tm-panel-bg-->
  </div>
  <!--tm-panel-container-->
</div>
<!--tm-control-panel-->
<?php } ?>