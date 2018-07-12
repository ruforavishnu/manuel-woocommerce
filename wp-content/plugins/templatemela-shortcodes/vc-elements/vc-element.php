<?php
/**
 * Visual Composer functions
 *
 * @author Templatemela
 * @link http://templatmela.com
 */

/* ---------------------------------------------------------------------------
 * Shortcodes | Image compatibility
 * --------------------------------------------------------------------------- */
if( ! function_exists( 'tm_vc_image' ) )
{
	function tm_vc_image( $image = false ){
		if( $image && is_numeric( $image ) ){
			$image = wp_get_attachment_image_src( $image, 'full' );
			$image = $image[0];
		}
		return $image;
	}
}
/* ---------------------------------------------------------------------------
 * Shortcodes | blog
 * --------------------------------------------------------------------------- */

add_action ( 'vc_before_init', 'tm_vc_integrateWithVC' );
if( ! function_exists( 'tm_vc_integrateWithVC' ) )
{
	function tm_vc_integrateWithVC() {
	
// Accordition	
	vc_map( array (
			'name' 			=> __('Accordion', 'tm-opts'),
			'description' 	=> __('Collapsible content panels', 'tm-opts'),
			'base' 			=> 'tm_accordion',
			"as_parent" => array('only' => 'accordion'),
    		"content_element" => true,
    		"show_settings_on_create" => true,
			 "js_view" => 'VcColumnView',
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-accordion',
			'params' 		=> array (
				array (
					'param_name' 	=> 'style',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Style', 'tm-opts'),
					'description' 	=> __('Select type of accordion style.', 'tm-opts'),
					'admin_label'	=> false,
					'value' 		=> array_flip(array(
						'1'		=> __('One', 'tm-opts'),
						'2'		=> __('Two', 'tm-opts'),
						'3'		=> __('Three', 'tm-opts'),
						'4'		=> __('Four', 'tm-opts'),
					)),
				),
		)
	));	
 	vc_map( array (
			'base' 			=> 'accordion',
			'name' 			=> __('Accordation Content', 'tm-opts'),
			"content_element" => true,
		    "as_child" => array('only' => 'tm_accordion'),
			"show_settings_on_create" => true,	
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-accordion',
			'params' 		=> array (
				array (
					'param_name' 	=> 'title',
					'type' 			=> 'textfield',
					'heading' 		=> __('Title', 'tm-opts'),
					'description' 	=> __('Title ex.Welcome To Store', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'content',
					'type' 			=> 'textarea',
					'heading' 		=> __('Content', 'tm-opts'),
					'description' 	=> __('HTML tags allowed', 'tm-opts'),
					'admin_label'	=> false,
				),
		)
	));
	
/**** Single Product *****/	
	vc_map( array (
			'base' 			=> 'home_products',
			'name' 			=> __('Home Single Product', 'tm-opts'),
			'description' 	=> __('promotional Product with counter', 'tm-opts'),
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-woo-pro',
			'params' 		=> array (
				array (
					'param_name' 	=> 'height',
					'type' 			=> 'textfield',
					'heading' 		=> __('Main Image Height', 'tm-opts'),
					'description' 	=> __('Main Image Height in pixel (note:enter number without px ex.100)', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'width',
					'type' 			=> 'textfield',
					'heading' 		=> __('Main Image Width', 'tm-opts'),
					'description' 	=> __('Main Image Width in pixel (note:enter number without px ex.100)', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'thumbnail_height',
					'type' 			=> 'textfield',
					'heading' 		=> __('Thumbnail Image Height', 'tm-opts'),
					'description' 	=> __('Thumbnail Image Height in pixel (note:enter number without px ex.100)', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'thumbnail_width',
					'type' 			=> 'textfield',
					'heading' 		=> __('Thumbnail Image Width', 'tm-opts'),
					'description' 	=> __('Thumbnail Image Width in pixel (note:enter number without px ex.100)', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'number_of_items',
					'type' 			=> 'textfield',
					'heading' 		=> __('Total Product', 'tm-opts'),
					'description' 	=> __('2,3,4..', 'tm-opts'),
					'admin_label'	=> true,
				),
		)
	));	


// Blogs
	vc_map( array (
			'base' 			=> 'blog_posts',
			'name' 			=> __('Blogs', 'tm-opts'),
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-blog_slider',
			'description' 	=> __('Blogs in grid or slider', 'tm-opts'),
			'params' 		=> array (
				array (
					'param_name' 	=> 'type',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Type', 'tm-opts'),
					'admin_label'	=> false,
					'value' 		=> array_flip(array(
						'grid'		=> __('Grid', 'tm-opts'),	
						'slider'	=> __('Slider', 'tm-opts'),
					)),
				),
				array (
					'param_name' 	=> 'items_per_column',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Items Per Column', 'tm-opts'),
					'admin_label'	=> true,
					'value' 		=> array_flip(array(
						'1'		=> __('One', 'tm-opts'),
						'2'		=> __('Two', 'tm-opts'),
						'3'		=> __('Three', 'tm-opts'),
						
							
					)),
				),
				array (
					'param_name' 	=> 'number_of_posts',
					'type' 			=> 'textfield',
					'heading' 		=> __('Total Posts', 'tm-opts'),
					'description' 	=> __('How many total number of items to display per page. (2,3,4 ..)', 'tm-opts'),
					'admin_label'	=> true,
				),
				array (
					'param_name' 	=> 'category',
					'type' 	 => 'textfield',
					'heading' 	 => __('Category', 'tm-opts'),
					'description' 	=> __('Post Category ID', 'tm-opts'),
					'admin_label'	=> true,
				),
				
				
				array (
					'param_name' 	=> 'height',
					'type' 			=> 'textfield',
					'heading' 		=> __('Height', 'tm-opts'),
					'description' 	=> __('Blog image height in pixcel (note:enter number without px, ex.50 )( default valiue is : 410 )', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'width',
					'type' 			=> 'textfield',
					'heading' 		=> __('Width', 'tm-opts'),
					'description' 	=> __('Blog image width in pixcel (note:enter number without px, ex.50 ) ( default valiue is : 600 )', 'tm-opts'),
					'admin_label'	=> false,
				),
		)
	));	
	
// Brand logo in grid or slider
	vc_map( array (
			'base' 			=> 'tm_brand',
			'name' 			=> __('Brand', 'tm-opts'),
			'description' 	=> __('Brands logo in slider', 'tm-opts'),
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-brand',
			'params' 		=> array (
				array (
					'param_name' 	=> 'style',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Style Type', 'tm-opts'),
					'admin_label'	=> false,
					'description' 	=> __('Select type of Brand style.', 'tm-opts'),
					'value' 		=> array_flip(array(
						'1'		=> __('One', 'tm-opts'),
						'2'		=> __('Two', 'tm-opts'),
					)),
				),
				array (
					'param_name' 	=> 'items_per_column',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Items Per Column', 'tm-opts'),
					'description' 	=> __('Enter number of items to display per column', 'tm-opts'),
					'admin_label'	=> false,
					'value' 		=> array_flip(array(
						'1'		=> __('One', 'tm-opts'),
						'2'		=> __('Two', 'tm-opts'),
						'3'		=> __('Three', 'tm-opts'),
						'4'		=> __('Four', 'tm-opts'),
						'5'		=> __('Five', 'tm-opts'),	
						
						'7'		=> __('Seven', 'tm-opts'),			
					)),
				),
				array (
					'param_name' 	=> 'image_height',
					'type' 			=> 'textfield',
					'heading' 		=> __('Brand Image Height', 'tm-opts'),
					'description' 	=> __('Brand Image Height in pixcel (note:enter number without px ex.120)', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'image_width',
					'type' 			=> 'textfield',
					'heading' 		=> __('Brand Image Width', 'tm-opts'),
					'description' 	=> __('Brand Image Width in pixcel (note:enter number without px ex.120)', 'tm-opts'),
					'admin_label'	=> false,
				),
		)
	));	
	
// Brand lists
	vc_map( array (
			'base' 			=> 'tm_brand_list',
			'name' 			=> __('Brand List', 'tm-opts'),
			'description' 	=> __('All brands logo & name in cloumn', 'tm-opts'),
			'category' 	 	=> __('Templatemela Builder', 'tm-opts'),
			'icon' 	 		=> 'tm-vc-icon-brand-list',
			'params' 	 	=> array (
				array (
					'param_name' 	=> 'column',
					'type' 		 	=> 'dropdown',
					'heading' 	 	=> __('Items Per Column', 'tm-opts'),
					'description' 	=> __('Enter number of items to display per column.', 'tm-opts'),
					'admin_label'	=> false,
					'value' 	 	=> array_flip(array(
					'1'	 		=> __('One', 'tm-opts'),
					'2'	 		=> __('Two', 'tm-opts'),	
					'3'	 		=> __('Three', 'tm-opts'),	
					'4'	 		=> __('Four', 'tm-opts'),	
					'5'			=> __('Five', 'tm-opts'),	
					)),
				),
				array (
					'param_name' 	=> 'image_height',
					'type' 	        => 'textfield',
 					'heading' 	 	=> __('Brand Image Height', 'tm-opts'),
					'description' 	=> __('Brand Image Height in pixcel (note:enter number without px ex.120)', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'image_width',
					'type' 	   		=> 'textfield',
					'heading' 	 	=> __('Brand Image Width', 'tm-opts'),
					'description' 	=> __('Brand Image Width in pixcel (note:enter number without px ex.120)', 'tm-opts'),
					'admin_label'	=> false,
				),
	)));
	
// Button
	vc_map( array (
			'base' 			=> 'tm_button',
			'name' 			=> __('Button', 'tm-opts'),
			'description' 	=> __('Type of buttons with Icon', 'tm-opts'),
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-button',
			'params' 		=> array (
				array (
					'param_name' 	=> 'content',
					'type' 			=> 'textfield',
					'heading' 		=> __('Button Name', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'align',
					'type' 			=> 'textfield',
					'heading' 		=> __('Align', 'tm-opts'),
					'description' 	=> __('Button Alignment ex.left,right,center', 'tm-opts'),
				),
				array (
					'param_name' 	=> 'type',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Button Type', 'tm-opts'),
					'admin_label'	=> false,
					'description' 	=> __('Defualt valuse is medium', 'tm-opts'),
					'value' 		=> array_flip(array(
						'medium'	=> __('Medium', 'tm-opts'),
						'small'		=> __('Small', 'tm-opts'),
						'big'		=> __('Big', 'tm-opts'),
						'mini'		=> __('Mini', 'tm-opts'),
					)),
					
				),
				array (
					'param_name' 	=> 'icon',
					'type' 			=> 'textfield',
					'heading' 		=> __('Font Awesome Icon', 'tm-opts'),
					'description' 	=> __('fa-arrows-alt', 'tm-opts'),
				),
				array (
					'param_name' 	=> 'icon_align',
					'type' 			=> 'textfield',
					'heading' 		=> __('Icon Alignment', 'tm-opts'),
					'description' 	=> __('Icon Alignment ex.left,right,center', 'tm-opts'),
				),
				array (
					'param_name' 	=> 'background_color',
					'type' 			=> 'colorpicker',
					'heading' 		=> __('Icon Background Color', 'tm-opts'),
				),
				array (
					'param_name' 	=> 'link_url',
					'type' 			=> 'textfield',
					'heading' 		=> __('Link URL', 'tm-opts'),
					'description' 	=> __('ex. https://www.google.co.in/', 'tm-opts'),
				),
				array (
					'param_name' 	=> 'target',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Button | Target', 'tm-opts'),
					'description' 	=> __('Define where to open the linked document', 'tm-opts'),
					'admin_label'	=> false,
					'value'			=> array_flip( array(
						'' 			=> 'Default | _self',
						'_blank' 	=> 'New Tab or Window | _blank' ,
					)),
				),
		)
	));

// Category Tabs	
	vc_map( array (
				'base' 	 => 'woo_categories',
				'name' 	 => __('Categories Tabs', 'tm-opts'),
				'description' 	=> __('Show Category Tab wise products in grid/slider', 'tm-opts'),
				'category' 	 => __('Templatemela Builder', 'tm-opts'),
				'icon' 	 => 'tm-vc-icon-tabs',
				'params' 	 => array (
							array (
								'param_name' 	=> 'type',
								'type' 	     	=> 'dropdown',
								'heading' 	 	=> __('Type', 'tm-opts'),
								'admin_label'	=> false,
								'value' 	 	=> array_flip(array(
										'slider' => __('Slider', 'tm-opts'),	
										'grid'	 => __('Grid', 'tm-opts'),	
								)),
							),
							array (
								'param_name' 	=> 'items_per_column',
								'type' 	 => 'dropdown',
								'heading' 	 => __('Items Per Column', 'tm-opts'),
								'description' 	=> __('Enter number of items to display per column.', 'tm-opts'),
								'admin_label'	=> false,
								'value' 	 => array_flip(array(
								'2'	 => __('2', 'tm-opts'),	
								'3'	 => __('3', 'tm-opts'),	
								'4'	 => __('4', 'tm-opts'),	
								'5'	=> __('5', 'tm-opts'),
							)),
							),
							array (
								'param_name' 	=> 'items_per_page',
								'type' 	 => 'textfield',
								'heading' 	 => __('Items', 'tm-opts'),
								'description' 	=> __('Enter number of items to display per column.', 'tm-opts'),
								'admin_label'	=> false,
							),
							array (
								'param_name' 	=> 'category_ids',
								'type' 	 => 'textfield',
								'heading' 	 => __('Category Id', 'tm-opts'),
								'description' 	=> __('Enter ID of product category to display products(ex. 88,105,165)', 'tm-opts'),
								'admin_label'	=> false,
							),
				)
		));
		
/**** woo category *****/	
	vc_map( array (
		'name' 	 => __('Woo Category', 'tm-opts'),
		'description' 	=> __('Product category with image ', 'tm-opts'),
		'base' 	 => 'woo_sub_categories',
		'category' 	 => __('Templatemela Builder', 'tm-opts'),
		'icon' 	 => 'tm-vc-icon-accordion',
		'params' 	 => array (
			array (
				'param_name' 	=> 'category_ids',
				'type' 	 => 'textfield',
				'heading' 	 => __('category id', 'tm-opts'),
			),
			array (
				'param_name' 	=> 'height',
				'type' 	 => 'textfield',
				'heading' 	 => __('Category Image Height', 'tm-opts'),
				'description' 	=> __('Category Image Height in pixel (note:enter number without px ex.250)', 'tm-opts'),
				'admin_label'	=> false,
			),
			array (
				'param_name' 	=> 'width',
				'type' 	 => 'textfield',
				'heading' 	 => __('Category Image Width', 'tm-opts'),
				'description' 	=> __('Category Image Width in pixel (note:enter number without px ex.250)', 'tm-opts'),
				'admin_label'	=> false,
			),
			array (
					'param_name' 	=> 'style',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Style Type', 'tm-opts'),
					'admin_label'	=> false,
					'description' 	=> __('Select type of Category style.', 'tm-opts'),
					'value' 		=> array_flip(array(
						'1'		=> __('One', 'tm-opts'),
						'2'		=> __('Two', 'tm-opts'),
					)),
				),
		)
	));	
/**** CMS Image Banners *****/		
	vc_map( array (
			'base' 			=> 'tm_cms_block',
			'name' 			=> __('CMS Banners Block', 'tm-opts'),
			'description' 	=> __('CMS block with background Images', 'tm-opts'),
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-cms',
			'params' 		=> array (
			   array (
					'param_name' 	=> 'classname',
					'type' 			=> 'textfield',
					'heading' 		=> __('Classname', 'tm-opts'),
					'description' 	=> __('Give classname for this block', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'image',
					'type' 			=> 'attach_image',
					'heading' 		=> __('Image', 'tm-opts'),
					'description' 	=> __('Attach image for cms block from here', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'style',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Style Type', 'tm-opts'),
					'admin_label'	=> false,
					'description' 	=> __('Select type of Hover effect.', 'tm-opts'),
					'value' 		=> array_flip(array(
						'1'		=> __('One', 'tm-opts'),
						'2'		=> __('Two', 'tm-opts'),
						'3'		=> __('Three', 'tm-opts'),
					)),
				),
				array (
					'param_name' 	=> 'link_text',
					'type' 			=> 'textfield',
					'heading' 		=> __('link_text', 'tm-opts'),
					'description' 	=> __('URL linkable text  ex.Shop Now', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'link_url',
					'type' 			=> 'textfield',
					'heading' 		=> __('Link URL', 'tm-opts'),
					'description' 	=> __('ex. https://www.google.co.in/', 'tm-opts'),
				),
				array (
					'param_name' 	=> 'target',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Button | Target', 'tm-opts'),
					'description' 	=> __('Define where to open the linked document', 'tm-opts'),
					'admin_label'	=> false,
					'value'			=> array_flip( array(
						'_self' 			=> 'Default | _self',
						'_blank' 	=> 'New Tab or Window | _blank' ,
					)),
				),
				array (
					'param_name' 	=> 'text1',
					'type' 			=> 'textfield',
					'heading' 		=> __('Text1', 'tm-opts'),
					'description' 	=> __('Text1  ex. Table Lights', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'text2',
					'type' 			=> 'textfield',
					'heading' 		=> __('Text2', 'tm-opts'),
					'description' 	=> __('Text2  ex. The World Catelog Ideas', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'hover_effect',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Hover Effect', 'tm-opts'),
					'admin_label'	=> false,
					'description' 	=> __('Select value of hover effect "yes" or  "no" (defaylt valuse is YES).', 'tm-opts'),
					'value' 		=> array_flip(array(
						'yes'		=> __('Yes', 'tm-opts'),
						'no'		=> __('No', 'tm-opts'),
					)),
			),
		)
	));		
			
				
// Contact Address	
	vc_map( array (
			'base' 			=> 'tm_address',
			'name' 			=> __('Contact Address', 'tm-opts'),
			'description' 	=> __('Display contact details', 'tm-opts'),
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-contact_box',
			'params' 		=> array (
				array (
					'param_name' 	=> 'title',
					'type' 			=> 'textfield',
					'heading' 		=> __('Title', 'tm-opts'),
					'description' 	=> __('', 'tm-opts'),
					'admin_label'	=> true,
				),
				array (
					'param_name' 	=> 'description',
					'type' 			=> 'textfield',
					'heading' 		=> __('Description', 'tm-opts'),
					'description' 	=> __('', 'tm-opts'),
					'admin_label'	=> true,
				),
				array (
					'param_name' 	=> 'address_label',
					'type' 			=> 'textfield',
					'heading' 		=> __('Address Label', 'tm-opts'),
					'description' 	=> __('', 'tm-opts'),
					'admin_label'	=> true,
				),
				array (
					'param_name' 	=> 'content',
					'type' 			=> 'textarea',
					'heading' 		=> __('Address', 'tm-opts'),
					'description' 	=> __('HTML tags allowed', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'phone_label',
					'type' 			=> 'textfield',
					'heading' 		=> __('Phone Label', 'tm-opts'),
					'description' 	=> __('', 'tm-opts'),
					'admin_label'	=> true,
				),
				array (
					'param_name' 	=> 'phone',
					'type' 			=> 'textfield',
					'heading' 		=> __('Phone Number', 'tm-opts'),
					'description' 	=> __('', 'tm-opts'),
					'admin_label'	=> true,
				),
				array (
					'param_name' 	=> 'email_label',
					'type' 			=> 'textfield',
					'heading' 		=> __('Email Label', 'tm-opts'),
					'description' 	=> __('', 'tm-opts'),
					'admin_label'	=> true,
				),
				array (
					'param_name' 	=> 'email',
					'type' 			=> 'textfield',
					'heading' 		=> __('Email', 'tm-opts'),
					'description' 	=> __('Give Email Address Here ex. support@templatemela.com', 'tm-opts'),
					'admin_label'	=> true,
				),
				array (
					'param_name' 	=> 'email_link',
					'type' 			=> 'textfield',
					'heading' 		=> __('Email Link', 'tm-opts'),
					'description' 	=> __('(ex. mailto:support@templatemela.com)', 'tm-opts'),
					'admin_label'	=> true,
				),
				array (
					'param_name' 	=> 'other_label',
					'type' 			=> 'textfield',
					'heading' 		=> __('Other Label', 'tm-opts'),
					'description' 	=> __('', 'tm-opts'),
					'admin_label'	=> true,
				),
				array (
					'param_name' 	=> 'other',
					'type' 			=> 'textfield',
					'heading' 		=> __('Other', 'tm-opts'),
					'description' 	=> __('ex,time of office', 'tm-opts'),
					'admin_label'	=> true,
				),
		)
	));
		
// Counter						
	vc_map( array (
			'base' 			=> 'tm_counter',
			'name' 			=> __('Counter', 'tm-opts'),
			'description' 	=> __('Number counter', 'tm-opts'),
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-counter',
			'params' 		=> array (
				array (
					'param_name' 	=> 'title',
					'type' 			=> 'textfield',
					'heading' 		=> __('Title', 'tm-opts'),
					'description' 	=> __('Title for the counter', 'tm-opts'),
					'admin_label'	=> true,
				),	
				array (
					'param_name' 	=> 'id',
					'type' 			=> 'textfield',
					'heading' 		=> __('Unique Id', 'tm-opts'),
					'description' 	=> __('Temp1', 'tm-opts'),
					'admin_label'	=> true,
				),
				array (
					'param_name' 	=> 'start',
					'type' 			=> 'textfield',
					'heading' 		=> __('Start Number', 'tm-opts'),
					'description' 	=> __('Start Number for counter', 'tm-opts'),
					'admin_label'	=> true,
				),
				array (
					'param_name' 	=> 'end',
					'type' 			=> 'textfield',
					'heading' 		=> __('End Number', 'tm-opts'),
					'description' 	=> __('End Number for counter', 'tm-opts'),
					'admin_label'	=> true,
				),
				array (
					'param_name' 	=> 'decimal',
					'type' 			=> 'textfield',
					'heading' 		=> __('Decimal Number', 'tm-opts'),
					'description' 	=> __('One or more digits to the right of the decimal point. Default : 0', 'tm-opts'),
					'admin_label'	=> true,
				),
				array (
					'param_name' 	=> 'duration',
					'type' 			=> 'textfield',
					'heading' 		=> __('Duration', 'tm-opts'),
					'description' 	=> __('Duration for the Counter when it ends. Default : 20', 'tm-opts'),
					'admin_label'	=> true,
				),
				
		)
	));

// FAQ
	vc_map( array (
			'base' 			=> 'faqs',
			'name' 			=> __('FAQ', 'tm-opts'),
			'description' 	=> __('List of FAQs questions & answers', 'tm-opts'),
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-faq',
			'params' 		=> array (
				array (
					'param_name' 	=> 'style',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Style Type', 'tm-opts'),
					'admin_label'	=> false,
					'description' 	=> __('Select type of FAQs style.', 'tm-opts'),
					'value' 		=> array_flip(array(
						'1'		=> __('One', 'tm-opts'),
						'2'		=> __('Two', 'tm-opts'),
					)),
				),
				array (
					'param_name' 	=> 'category',
					'type' 			=> 'textfield',
					'heading' 		=> __('Category ID', 'tm-opts'),
					'description' 	=> __('Enter Category ID of faq categories ex.92', 'tm-opts'),
					'admin_label'	=> true,
				),	
		)
	));	
			
// Feature Content	
	vc_map( array (
			'base' 			=> 'tm_about',
			'name' 			=> __('Feature Content', 'tm-opts'),
			'description' 	=> __('Feature image with content', 'tm-opts'),
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-feature_box',
			'params' 		=> array (
				array (
					'param_name' 	=> 'title',
					'type' 			=> 'textfield',
					'heading' 		=> __('Title', 'tm-opts'),
					'description' 	=> __('Title ex.Feature', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'image',
					'type' 			=> 'attach_image',
					'description' 	=> __('Attach here Feature Image.', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'image_align',
					'type' 			=> 'textfield',
					'heading' 		=> __('Image Align', 'tm-opts'),
					'description' 	=> __('Image Align ex.left,right,center', 'tm-opts'),
					'admin_label'	=> false,
				),
			    array (
					'param_name' 	=> 'content',
					'type' 			=> 'textarea',
					'heading' 		=> __('Content', 'tm-opts'),
					'description' 	=> __('HTML tags allowed', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'link_text',
					'type' 			=> 'textfield',
					'heading' 		=> __('Link Text', 'tm-opts'),
				),
				array (
					'param_name' 	=> 'link_url',
					'type' 			=> 'textfield',
					'heading' 		=> __('Link URL', 'tm-opts'),
				),
				array (
					'param_name' 	=> 'target',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Button | Target', 'tm-opts'),
					'description' 	=> __('Define where to open the linked document', 'tm-opts'),
					'admin_label'	=> false,
					'value'			=> array_flip( array(
						'' 			=> 'Default | _self',
						'_blank' 	=> 'New Tab or Window | _blank' ,
					)),
				),
		)
	));
/**** Home Page Service *****/		
	vc_map( array (
			'base' 			=> 'tm_service',
			'name' 			=> __('Home Page Service', 'tm-opts'),
			'description' 	=> __('Style For Services with Images', 'tm-opts'),
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-services',
			'params' 		=> array (
				array (
					'param_name' 	=> 'service_number',
					'type' 			=> 'textfield',
					'heading' 		=> __('Service Number', 'tm-opts'),
					'description' 	=> __('Identify Number for service. ex.1,2,3,..', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'service_title',
					'type' 			=> 'textfield',
					'heading' 		=> __('Service Title', 'tm-opts'),
					'description' 	=> __('Service Title ex. 24 x 7 free Support', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'service_other_text',
					'type' 			=> 'textfield',
					'heading' 		=> __('Other Text', 'tm-opts'),
					'description' 	=> __('Description  ex. Ready to help you with any questions related to our Global Trade', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'style',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Type', 'tm-opts'),
					'admin_label'	=> false,
					'description' 	=> __('Select type of Service style.', 'tm-opts'),
					'value' 		=> array_flip(array(
						'1'		=> __('One', 'tm-opts'),
						'2'		=> __('Two', 'tm-opts'),
					)),
				),
		)
	));	
		
// Lists
	vc_map( array (
			'name' 			=> __('Lists', 'tm-opts'),
			'description' 	=> __('Show list of content with icon', 'tm-opts'),
			'base' 			=> 'tm_list',
			"as_parent" => array('only' => 'list_item'),
    		"content_element" => true,
    		"show_settings_on_create" => false,
			 "js_view" => 'VcColumnView',
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-list',
	));	
	vc_map( array (
			'base' 			=> 'list_item',
			'name' 			=> __('List Item', 'tm-opts'),
			"content_element" => true,
		    "as_child" => array('only' => 'tm_list'),
			"show_settings_on_create" => true,	
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-portfolio_grid',
			'params' 		=> array (
				array (
					'param_name' 	=> 'icon',
					'type' 			=> 'textfield',
					'heading' 		=> __('Font Awesome Icon', 'tm-opts'),
					'description' 	=> __('fa-arrows-alt', 'tm-opts'),
				),
				array (
					'param_name' 	=> 'color',
					'type' 			=> 'colorpicker',
					'heading' 		=> __('Icon Color', 'tm-opts'),
				),
				array (
					'param_name' 	=> 'content',
					'type' 			=> 'textarea',
					'heading' 		=> __('Content', 'tm-opts'),
					'description' 	=> __('HTML tags allowed', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'link_url',
					'type' 			=> 'textfield',
					'heading' 		=> __('Link URL', 'tm-opts'),
					'description' 	=> __('ex. https://www.google.co.in/', 'tm-opts'),
				),
				array (
					'param_name' 	=> 'target',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Button | Target', 'tm-opts'),
					'description' 	=> __('Define where to open the linked document', 'tm-opts'),
					'admin_label'	=> false,
					'value'			=> array_flip( array(
						'' 			=> 'Default | _self',
						'_blank' 	=> 'New Tab or Window | _blank' ,
					)),
				),
		)
	));
	
// Links
	vc_map( array (
			'name' 			=> __('Multiple Links', 'tm-opts'),
			'description' 	=> __('Craete linkable text', 'tm-opts'),
			'base' 			=> 'tm_links',
			"as_parent" => array('only' => 'link'),
    		"content_element" => true,
    		"show_settings_on_create" => false,
			 "js_view" => 'VcColumnView',
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-multiple-link',
	));	
	vc_map( array (
			'base' 			=> 'link',
			'name' 			=> __('Link', 'tm-opts'),
			"content_element" => true,
		    "as_child" => array('only' => 'tm_links'),
			"show_settings_on_create" => true,	
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-portfolio_grid',
			'params' 		=> array (
				array (
					'param_name' 	=> 'link_url',
					'type' 			=> 'textfield',
					'heading' 		=> __('Link URL', 'tm-opts'),
				),
				array (
					'param_name' 	=> 'target',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Button | Target', 'tm-opts'),
					'description' 	=> __('Define where to open the linked document', 'tm-opts'),
					'admin_label'	=> false,
					'value'			=> array_flip( array(
						'' 			=> 'Default | _self',
						'_blank' 	=> 'New Tab or Window | _blank' ,
					)),
				),
				array (
					'param_name' 	=> 'content',
					'type' 			=> 'textarea',
					'heading' 		=> __('Content', 'tm-opts'),
					'description' 	=> __('HTML tags allowed', 'tm-opts'),
					'admin_label'	=> false,
				),
		)
	));
	
// Newsletter Text	
	vc_map( array (
			'base' 			=> 'tm_newsletter',
			'name' 			=> __('Newsletter content', 'tm-opts'),
			'description' 	=> __('Newsletter details', 'tm-opts'),
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-newslatter-text',
			'params' 		=> array (
				array (
					'param_name' 	=> 'title',
					'type' 			=> 'textfield',
					'heading' 		=> __('Text', 'tm-opts'),
					'description' 	=> __('Newsletter Text', 'tm-opts'),
					'admin_label'	=> true,
				),
				array (
					'param_name' 	=> 'text',
					'type' 			=> 'textfield',
					'heading' 		=> __('Extra Text', 'tm-opts'),
					'description' 	=> __('Newsletter Extra Text', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'content',
					'type' 			=> 'textarea',
					'heading' 		=> __('Content', 'tm-opts'),
					'description' 	=> __('HTML tags allowed', 'tm-opts'),
					'admin_label'	=> false,
				),
		)
	));	
		
// Portfolio Filter	
	vc_map( array (
			'base' 			=> 'tm_portfolio_filter',
			'name' 			=> __('Portfolio Filter', 'tm-opts'),
			'description' 	=> __('Responsive portfolio filter gallery', 'tm-opts'),
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-portfolio',
			'params' 		=> array (
				array (
					'param_name' 	=> 'items_per_column',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Items Per Column', 'tm-opts'),
					'description' 	=> __('Enter number of items to display per column.', 'tm-opts'),
					'admin_label'	=> false,
					'value' 		=> array_flip(array(
						'1'		=> __('One', 'tm-opts'),
						'2'		=> __('Two', 'tm-opts'),
						'3'		=> __('Three', 'tm-opts'),
						'4'		=> __('Four', 'tm-opts'),
						'5'		=> __('Five', 'tm-opts'),			
					)),
				),
		)
	));	
	
// Portfolio Slider
	vc_map( array (
			'base' 			=> 'tm_portfolio_slider',
			'name' 			=> __('Portfolio Slider', 'tm-opts'),
			'description' 	=> __('Portfolio carousel slider', 'tm-opts'),
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-portfolio_slider',
			'params' 		=> array (
				array (
					'param_name' 	=> 'items_per_column',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Items Per Column', 'tm-opts'),
					'admin_label'	=> true,
					'admin_label'	=> false,
					'value' 		=> array_flip(array(
						'1'		=> __('One', 'tm-opts'),
						'2'		=> __('Two', 'tm-opts'),
						'3'		=> __('Three', 'tm-opts'),
						'4'		=> __('Four', 'tm-opts'),
						'5'		=> __('Five', 'tm-opts'),
							
					)),					
				),
				array (
					'param_name' 	=> 'number_of_posts',
					'type' 			=> 'textfield',
					'heading' 		=> __('Total Posts', 'tm-opts'),
					'description' 	=> __('Enter total number of posts to display. (2,3,4..)', 'tm-opts'),
					'admin_label'	=> true,
				),
				array (
					'param_name' 	=> 'category',
					'type' 			=> 'textfield',
					'heading' 		=> __('Category', 'tm-opts'),
					'description' 	=> __('Portfolio Category ID', 'tm-opts'),
					'admin_label'	=> true,
				),
			
		)
	));	
	
// Portfolios Grid	
	vc_map( array (
			'base' 			=> 'tm_portfolio',
			'name' 			=> __('Portfolios Grid', 'tm-opts'),
			'description' 	=> __('Responsive portfolio with column', 'tm-opts'),
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-portfolio_grid',
			'params' 		=> array (
				array (
					'param_name' 	=> 'column',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Items Per Column', 'tm-opts'),
					'description' 	=> __('Enter number of items to display per column.', 'tm-opts'),
					'admin_label'	=> false,
					'value' 		=> array_flip(array(
						'1'		=> __('One', 'tm-opts'),
						'2'		=> __('Two', 'tm-opts'),
						'3'		=> __('Three', 'tm-opts'),
						'4'		=> __('Four', 'tm-opts'),
						'5'		=> __('Five', 'tm-opts'),				
					)),
				),
				array (
					'param_name' 	=> 'max',
					'type' 			=> 'textfield',
					'heading' 		=> __('Total Posts', 'tm-opts'),
					'description' 	=> __('Enter Maximum number of items to display per page. (2,3,4..)', 'tm-opts'),
					'admin_label'	=> true,
				),
		)
	));	

// Pricing Table
	vc_map( array (
			'base' 			=> 'tm_pricingtable',
			'name' 			=> __('Pricing Table', 'tm-opts'),
			'description' 	=> __('responsive pricing table content', 'tm-opts'),
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-pricing_item',
			'params' 		=> array (	
				array (
					'param_name' 	=> 'heading',
					'type' 			=> 'textfield',
					'heading' 		=> __('Title', 'tm-opts'),
					'description' 	=> __('', 'tm-opts'),
					'admin_label'	=> true,
				),
				array (
					'param_name' 	=> 'selected',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Featured', 'tm-opts'),
					'admin_label'	=> false,
					'value' 		=> array_flip(array(
						'no'		=> __('No', 'tm-opts'),
						'yes'		=> __('Yes', 'tm-opts')
					)),
				),
				array (
					'param_name' 	=> 'button_text',
					'type' 			=> 'textfield',
					'heading' 		=> __('Button Text', 'tm-opts'),
					'description' 	=> __('Read More', 'tm-opts'),
					'admin_label'	=> true,
				),
				array (
					'param_name' 	=> 'button_link',
					'type' 			=> 'textfield',
					'heading' 		=> __('Button Link', 'tm-opts'),
					'description' 	=> __('Link will appear only if this field will be filled.', 'tm-opts'),
					'admin_label'	=> true,
				),
				array (
					'param_name' 	=> 'target',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Button | Target', 'tm-opts'),
					'description' 	=> __('Define where to open the linked document', 'tm-opts'),
					'admin_label'	=> false,
					'value'			=> array_flip( array(
						'' 			=> 'Default | _self',
						'_blank' 	=> 'New Tab or Window | _blank' ,
					)),
				),
				array (
					'param_name' 	=> 'price',
					'type' 			=> 'textfield',
					'heading' 		=> __('Price', 'tm-opts'),
				),
				array (
					'param_name' 	=> 'price_per',
					'type' 			=> 'textfield',
					'heading' 		=> __('Price for period', 'tm-opts'),
				),
				array (
					'param_name' 	=> 'content',
					'type' 			=> 'textarea',
					'heading' 		=> __('Content', 'tm-opts'),
					'description' 	=> __('HTML tags allowed', 'tm-opts'),
					'admin_label'	=> false,
					'value'			=> '<ul><li><strong>List</strong> item</li></ul>',
				),
			)
	));	
	
// Products 	
	vc_map( array (
			'base' 			=> 'woo_products',
			'name' 			=> __('Products', 'tm-opts'),
			'description'   => __('Show products in grid or slider', 'tm-opts'),
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-woo_pro',
			'params' 		=> array (
				array (
					'param_name' 	=> 'type',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Type', 'tm-opts'),
					'admin_label'	=> false,
					'value' 		=> array_flip(array(
						'slider'	=> __('Slider', 'tm-opts'),	
						'grid'		=> __('Grid', 'tm-opts'),	
					)),
				),
				array (
					'param_name' 	=> 'items_per_column',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Items Per Column  ( use if product type is "slider") ', 'tm-opts'),
					'description' 	=> __('Enter number of items to display per column.', 'tm-opts'),
					'admin_label'	=> false,
					'value' 		=> array_flip(array(
						'1'		=> __('One', 'tm-opts'),
						'2'		=> __('Two', 'tm-opts'),
						'3'		=> __('Three', 'tm-opts'),
						'4'		=> __('Four', 'tm-opts'),
						'5'		=> __('Five', 'tm-opts'),	
									
					)),
				),
				array (
					'param_name' 	=> 'classname',
					'type' 			=> 'textfield',
					'heading' 		=> __('classname', 'tm-opts'),
					'description' 	=> __('classname', 'tm-opts'),
					'admin_label'	=> true,
				),
				array (
					'param_name' 	=> 'content',
					'type' 			=> 'textarea',
					'heading' 		=> __('Content ( when Type is "Grid" add columns value to set items per column) ', 'tm-opts'),
					'description' 	=> __('HTML tags allowed like [recent_products per_page="12" columns="4" orderby="date" order="desc"]  for new product', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'no_more',
					'type' 			=> 'textfield',
					'heading' 		=> __('No more Products ( use if Product type is "grid")', 'tm-opts'),
					'description' 	=> __('no more product description', 'tm-opts'),
					'admin_label'	=> true,
				),
		)
	));
	
// Products Tabs	
	vc_map( array (
			'name' 			=> __('Product Tabs', 'tm-opts'),
			'description' 	=> __('Woo products tabs', 'tm-opts'),
			'base' 			=> 'tm_product_tabs',
			"as_parent" => array('only' => 'tm_tab_home'),
    		"content_element" => true,
    		"show_settings_on_create" => true,
			 "js_view" => 'VcColumnView',
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-tabs',
			'params' 		=> array (
				array (
					'param_name' 	=> 'tab1_text',
					'type' 			=> 'textfield',
					'heading' 		=> __('Tab1 Title', 'tm-opts'),
				),
				array (
					'param_name' 	=> 'tab2_text',
					'type' 			=> 'textfield',
					'heading' 		=> __('Tab2 Title', 'tm-opts'),
				),
				array (
					'param_name' 	=> 'tab3_text',
					'type' 			=> 'textfield',
					'heading' 		=> __('Tab3 Title', 'tm-opts'),
				),
				array (
					'param_name' 	=> 'tab4_text',
					'type' 			=> 'textfield',
					'heading' 		=> __('Tab4 Title', 'tm-opts'),
				),
		)
	));	
	vc_map( array (
			'base' 			=> 'tm_tab_home',
			'name' 			=> __('Product Tab Container', 'tm-opts'),
			"content_element" => true,
		    "as_child" => array('only' => 'tm_product_tabs'),
			"show_settings_on_create" => true,	
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-woo_pro',
			'params' 		=> array (
				array (
					'param_name' 	=> 'content',
					'type' 			=> 'textarea',
					'heading' 		=> __('Content', 'tm-opts'),
					'description' 	=> __('HTML tags allowed', 'tm-opts'),
					'admin_label'	=> false,
				),
		)
	));
	
// Services	
	vc_map( array (
			'base' 			=> 'service',
			'name' 			=> __('Service', 'tm-opts'),
			'description' 	=> __('Service with different icon & styles', 'tm-opts'),
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-services',
			'params' 		=> array (
				array (
					'param_name' 	=> 'title',
					'type' 			=> 'textfield',
					'heading' 		=> __('Title', 'tm-opts'),
					'description' 	=> __('Service Title', 'tm-opts'),

				),
				array (
					'param_name' 	=> 'style',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Type', 'tm-opts'),
					'admin_label'	=> false,
					'value' 		=> array_flip(array(
						'1'		=> __('One', 'tm-opts'),
						'2'		=> __('Two', 'tm-opts'),
						'3'		=> __('Three', 'tm-opts'),
						'4'		=> __('Four', 'tm-opts'),
					)),
				),
				array (
					'param_name' 	=> 'icon',
					'type' 			=> 'textfield',
					'heading' 		=> __('Font Awesome Icon', 'tm-opts'),
					'description' 	=> __('ex. fa-arrows-alt', 'tm-opts'),
				),
				array (
					'param_name' 	=> 'color',
					'type' 			=> 'colorpicker',
					'heading' 		=> __('Icon Color', 'tm-opts'),
				),
				array (
					'param_name' 	=> 'icon_background_color',
					'type' 			=> 'colorpicker',
					'heading' 		=> __('Icon Background Color', 'tm-opts'),
				),
				array (
					'param_name' 	=> 'content',
					'type' 			=> 'textarea',
					'heading' 		=> __('Content', 'tm-opts'),
					'description' 	=> __('HTML tags allowed', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'link_text',
					'type' 			=> 'textfield',
					'heading' 		=> __('Link Text', 'tm-opts'),
				),
				array (
					'param_name' 	=> 'link_url',
					'type' 			=> 'textfield',
					'heading' 		=> __('Link URL', 'tm-opts'),
				),
				array (
					'param_name' 	=> 'target',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Button | Target', 'tm-opts'),
					'description' 	=> __('Define where to open the linked document', 'tm-opts'),
					'admin_label'	=> false,
					'value'			=> array_flip( array(
						'' 			=> 'Default | _self',
						'_blank' 	=> 'New Tab or Window | _blank' ,
					)),
				),
		)
	));	

// Static Text	
	vc_map( array (
			'base' 			=> 'text',
			'name' 			=> __('Static Text', 'tm-opts'),
			'description' 	=> __('Arbitary text with HTML', 'tm-opts'),
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-static-text',
			'params' 		=> array (
				array (
					'param_name' 	=> 'align',
					'type' 			=> 'textfield',
					'heading' 		=> __('Text Align', 'tm-opts'),
					'description' 	=> __('Text-Alignment ex.left,right,center', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'content',
					'type' 			=> 'textarea',
					'heading' 		=> __('Text Detail', 'tm-opts'),
					'description' 	=> __('HTML tags allowed', 'tm-opts'),
					'admin_label'	=> false,
				),
		)
	));	

// Tabs ( Horizontal + Vertical )	
	vc_map( array (
			'name' 			=> __('Tabs', 'tm-opts'),
			'description' 	=> __('Horizontal and Vertical tabs with diiferent styles ', 'tm-opts'),
			'base' 			=> 'tm_tabs',
			"as_parent" => array('only' => 'tm_tab'),
    		"content_element" => true,
    		"show_settings_on_create" => true,
			 "js_view" => 'VcColumnView',
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-tabs',
			'params' 		=> array (
				array (
					'param_name' 	=> 'style',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Style Type', 'tm-opts'),
					'admin_label'	=> false,
					'description' 	=> __('Select type of Tabs style.', 'tm-opts'),
					'value' 		=> array_flip(array(
						'1'		=> __('One', 'tm-opts'),
						'2'		=> __('Two', 'tm-opts'),
						'3'		=> __('Three', 'tm-opts'),
					)),
				),
				array (
					'param_name' 	=> 'tab_type',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Tab Type', 'tm-opts'),
					'admin_label'	=> false,
					'value' 		=> array_flip(array(
						'horizontal'		=> __('Horizontal', 'tm-opts'),
						'vertical'		=> __('Vertical', 'tm-opts'),
					)),
				),
		)
	));	
	vc_map( array (
			'base' 			=> 'tm_tab',
			'name' 			=> __('Tab', 'tm-opts'),
			"content_element" => true,
		    "as_child" => array('only' => 'tm_tabs'),
			"show_settings_on_create" => true,	
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-tabs',
			'params' 		=> array (
				array (
					'param_name' 	=> 'title',
					'type' 			=> 'textfield',
					'heading' 		=> __('Title', 'tm-opts'),
					'description' 	=> __('Title ex.Welcome To Store', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'content',
					'type' 			=> 'textarea',
					'heading' 		=> __('Content', 'tm-opts'),
					'description' 	=> __('HTML tags allowed', 'tm-opts'),
					'admin_label'	=> false,
				),
		)
	));
		
// Title
	vc_map( array (
			'base' 			=> 'title',
			'name' 			=> __('Title', 'tm-opts'),
			'description' 	=> __('Identify name of content or block', 'tm-opts'),
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-fancy_heading',
			'params' 		=> array (
				array (
					'param_name' 	=> 'content',
					'type' 			=> 'textfield',
					'heading' 		=> __('Title', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'size',
					'type' 			=> 'textfield',
					'heading' 		=> __('Text Size', 'tm-opts'),
					'description' 	=> __('ex. small,normal,big (default value is normal )', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'align',
					'type' 			=> 'textfield',
					'heading' 		=> __('Text Align', 'tm-opts'),
					'description' 	=> __('ex.left,right,center  (default value is center )', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'color',
					'type' 			=> 'colorpicker',
					'heading' 		=> __('Text Color', 'tm-opts'),
				),
				array (
					'param_name' 	=> 'subtitle',
					'type' 			=> 'textfield',
					'heading' 		=> __('Subtitle', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'subtitle_color',
					'type' 			=> 'colorpicker',
					'heading' 		=> __('Subtitle Text Color', 'tm-opts'),
				),
				array (
					'param_name' 	=> 'upertitle',
					'type' 			=> 'textfield',
					'heading' 		=> __('Upertitle', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'upertitle_color',
					'type' 			=> 'colorpicker',
					'heading' 		=> __('Upertitle Text Color', 'tm-opts'),
				),
				array (
					'param_name' 	=> 'classname',
					'type' 			=> 'textfield',
					'heading' 		=> __('Classname', 'tm-opts'),
					'description' 	=> __('extra classname', 'tm-opts'),
					'admin_label'	=> false,
				),				
		)
	));	

// Team	
	vc_map( array (
			'base' 			=> 'tm_ourteam',
			'name' 			=> __('Our Team', 'tm-opts'),
			'description' 	=> __('Team members in grid or slider', 'tm-opts'),
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-team',
			'params' 		=> array (
				array (
					'param_name' 	=> 'type',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Type', 'tm-opts'),
					'admin_label'	=> false,
					'value' 		=> array_flip(array(
						'grid'		=> __('Grid', 'tm-opts'),
						'slider'	=> __('Slider', 'tm-opts'),
					)),
				),
				array (
					'param_name' 	=> 'items_per_column',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Items Per Column', 'tm-opts'),
					'description' 	=> __('Enter number of items to display per column.', 'tm-opts'),
					'admin_label'	=> false,
					'value' 		=> array_flip(array(
						'1'		=> __('One', 'tm-opts'),
						'2'		=> __('Two', 'tm-opts'),
						'3'		=> __('Three', 'tm-opts'),
						'4'		=> __('Four', 'tm-opts'),
						'5'		=> __('Five', 'tm-opts'),		
					)),
				),
				array (
					'param_name' 	=> 'number_of_posts',
					'type' 			=> 'textfield',
					'heading' 		=> __('Total Posts', 'tm-opts'),
					'description' 	=> __('How many total number of items to display. (2,3,4..)', 'tm-opts'),
					'admin_label'	=> true,
				),
		)
	));	
	
// Testimonials	
	vc_map( array (
			'base' 			=> 'tm_custom_testimonials',
			'name' 			=> __('Testimonials', 'tm-opts'),
			'description' 	=> __('Custom testimonials in grid or slider', 'tm-opts'),
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-testimonials',
			'params' 		=> array (
				array (
					'param_name' 	=> 'style',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Style Type', 'tm-opts'),
					'admin_label'	=> false,
					'description' 	=> __('Select type of Tabs style.', 'tm-opts'),
					'value' 		=> array_flip(array(
						'1'		=> __('One', 'tm-opts'),
						'2'		=> __('Two', 'tm-opts'),
						'3'		=> __('Three', 'tm-opts'),
					)),
				),
				array (
					'param_name' 	=> 'type',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Type', 'tm-opts'),
					'admin_label'	=> false,
					'value' 		=> array_flip(array(
						'grid'		=> __('Grid', 'tm-opts'),
						'slider'		=> __('Slider', 'tm-opts'),	
					)),
				),
				array (
					'param_name' 	=> 'items_per_column',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Items Per Column', 'tm-opts'),
					'description' 	=> __('Enter number of items to display per column.', 'tm-opts'),
					'admin_label'	=> false,
					'value' 		=> array_flip(array(
						'1'		=> __('One', 'tm-opts'),
						'2'		=> __('Two', 'tm-opts'),
						'3'		=> __('Three', 'tm-opts'),
						'4'		=> __('Four', 'tm-opts'),
						'5'		=> __('Five', 'tm-opts'),				
					)),
				),
				array (
					'param_name' 	=> 'number_of_posts',
					'type' 			=> 'textfield',
					'heading' 		=> __('Total Testimonials', 'tm-opts'),
					'description' 	=> __('How many total number of items to display. (1,2,3,4..)', 'tm-opts'),
					'admin_label'	=> true,
				),
				array (
					'param_name' 	=> 'image_width',
					'type' 			=> 'textfield',
					'heading' 		=> __('Image width', 'tm-opts'),
					'description' 	=> __('Testimonial image width in px, default value is 120px', 'tm-opts'),
					'admin_label'	=> true,
				),
				array (
					'param_name' 	=> 'image_height',
					'type' 			=> 'textfield',
					'heading' 		=> __('Image Height', 'tm-opts'),
					'description' 	=> __('Testimonial image height in px, default value is 120px', 'tm-opts'),
					'admin_label'	=> true,
				),
		)
	));	

// Toggle	
	vc_map( array (
			'name' 			=> __('Toggle', 'tm-opts'),
			'base' 			=> 'tm_toggle',
			"as_parent" => array('only' => 'toggle'),
    		"content_element" => true,
			'description' 	=> __('Toggle element block', 'tm-opts'),
    		"show_settings_on_create" => true,
			 "js_view" => 'VcColumnView',
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-toggle',
			'params' 		=> array (
				array (
					'param_name' 	=> 'style',
					'type' 			=> 'dropdown',
					'heading' 		=> __('Style', 'tm-opts'),
					'admin_label'	=> false,
					'value' 		=> array_flip(array(
						'1'		=> __('One', 'tm-opts'),
						'2'		=> __('Two', 'tm-opts'),
						'3'		=> __('Three', 'tm-opts'),
						'4'		=> __('Four', 'tm-opts'),
					)),
				),
		)
	));	
	vc_map( array (
			'base' 			=> 'toggle',
			'name' 			=> __('Toggle Content', 'tm-opts'),
			"content_element" => true,
		    "as_child" => array('only' => 'tm_toggle'),
			"show_settings_on_create" => true,	
			'category' 		=> __('Templatemela Builder', 'tm-opts'),
			'icon' 			=> 'tm-vc-icon-toggle',
			'params' 		=> array (
				array (
					'param_name' 	=> 'title',
					'type' 			=> 'textfield',
					'heading' 		=> __('Title', 'tm-opts'),
					'description' 	=> __('Title ex.Welcome To Store', 'tm-opts'),
					'admin_label'	=> false,
				),
				array (
					'param_name' 	=> 'content',
					'type' 			=> 'textarea',
					'heading' 		=> __('Content', 'tm-opts'),
					'description' 	=> __('HTML tags allowed', 'tm-opts'),
					'admin_label'	=> false,
				),
		)
	));
	

 }
}
?>