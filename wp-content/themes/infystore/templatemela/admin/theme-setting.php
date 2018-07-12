<?php
/*===================================================================================================================
=============================================== General Settings ====================================================
=================================================================================================================== */
$options1 = array(array());
$options1[] = array("id" => "tm_logo_image",
					"label" => "Logo Image",
					"type" => "upload",
					"description" => "Upload Your Logo.");				
$options1[] = array("id" => "tm_logo_image_alt",
					"label" => "Logo Image Alt",
					"type" => "textbox",
					"description" => "Set your logo alternate text here.");

$options1[] = array("id" => "tm_mob_logo_image",
					"label" => "Mobile Logo Image",
					"type" => "upload-1",
					"description" => "Upload Your Mobile Logo.");	
$options1[] = array("id" => "tm_mob_logo_image_alt",
					"label" => "Mobile Logo Image Alt",
					"type" => "textbox",
					"description" => " Set your Mobile logo alternate text here.");
					
$options1[] = array("id" => "tm_site_icon",
					"label" => "Favicon Icon",
					"type" => "upload-2",
					"description" => "Define favicon icon path here.");
					
$options1[] = array("id" => "tm_showsite_description",
					"label" => "Show Site Description?",
					"type" => "select",
					"description" => "Display Site Description or Not.",
					"options" => array('no' => 'No','yes' => 'Yes'));
$options1[] = array("id" => "tm_contact_email",
					"label" => "Contact Email",
					"type" => "textbox",
					"description" => "Email ID where to receive contact emails.");
$options1[] = array("id" => "tm_control_panel",
					"label" => "Show Control Panel?",
					"type" => "select",
					"description" => "Enable or Disable Control Panel.",
					"options" => array('no' => 'No','yes' => 'Yes'));
$options1[] = array("label" => "Background Settings",
					"title" =>"Background Settings",
					"type" => "Title-1");
$options1[] = array("id" => "tm_texture",
					"label" => "Predefined Background Image",
					"type" => "texture",
					"std" =>"body-bg.png",
					"options" => array('body-bg.png' => 'body-bg', 'body-bg2.png'=>'body-bg2', 'body-bg3.png'=>'body-bg3', 'body-bg4.png'=>'body-bg4', 'body-bg5.png'=>'body-bg5', 'body-bg6.png'=>'body-bg6', 'body-bg7.png'=>'body-bg7', 'body-bg8.png'=>'body-bg8', 'body-bg9.png'=>'body-bg9', 'body-bg10.png'=>'body-bg10', 'body-bg11.png'=>'body-bg11', 'body-bg12.png'=>'body-bg12', 'body-bg13.png'=>'body-bg13', 'body-bg14.png'=>'body-bg14', 'body-bg15.png'=>'body-bg15', 'body-bg16.png'=>'body-bg16'),
					"description" => "Choose your body background texture image.");
$options1[] = array("id" => "tm_background_upload",
					"label" => "Upload Background Image",
					"type" => "upload-3",
					"description" => "Upload Your Background.");	
$options1[] = array("id" => "tm_back_repeat",
					"label" => "Background Repeat",
					"type" => "select",
					"description" => "Choose Background repeate.",
					"options" => array('no-repeat' => 'no-repeat','repeat' => 'repeat','repeat-x' => 'repeat-x','repeat-y' => 'repeat-y'));	
$options1[] = array("id" => "tm_back_position",
					"label" => " Background Position",
					"type" => "select",
					"description" => "Choose Backgroung position.",
					"options" => array('top+left' => 'top left','top+center' => 'top center','top+right' => 'top right','center+right' => 'center right','center+left' => 'center left','center+center' => 'center center','bottom+right' => 'bottom right','bottom+center' => 'bottom center','bottom+left' => 'bottom left'));	
$options1[] = array("id" => "tm_back_attachment",
					"label" => "Background Attachment",
					"type" => "select",
					"description" => "Choose Background attachment.",
					"options" => array('scroll' => 'Scroll','Fixed' => 'fixed'));	
$options1[] = array("id" => "tm_bkg_color",
					"label" => "Body Background Color",
					"type" => "textbox-1",
					"std" => "f5f5f5",
					"description" => "Change your body background color.");
$options1[] = array("id" => "tm_bodyfont_color",
					"label" => "Body Font Color",
					"std" => "808080",
					"type" => "textbox-1",
					"description" => "Change your body font color.");			
$options1[] = array("id" => "tm_bodyfont",
					"label" => "Body Font",
					"type" => "select",
					"description" => "Change your body font.",
					"options" => array('Raleway'=>'Raleway','please-select'=>'please-select','Oswald'=>'Oswald','Great Vibes'=>'Great+Vibes','Poppins'=>'Poppins','Nunito'=>'Nunito','Antic'=>'Antic','Bitter'=>'Bitter','Droid+Serif'=>'Droid Serif','Philosopher'=>'Philosopher','Oxygen'=>'Oxygen','Rokkitt'=>'Rokkitt','Galdeano'=>'Galdeano','Droid+Sans'=>'Droid Sans','Play'=>'Play','Cabin'=>'Cabin','Cuprum'=>'Cuprum','Varela'=>'Varela','Andika'=>'Andika','Ubuntu' =>'Ubuntu','Other+Fonts'=>'Other Fonts'));
$options1[] = array("id" => "tm_bodyfont_other",
					"label" => "Specified Other Body Font",
					"type" => "textbox",
					"description" => "Change your specified body font Like Arail,verdana etc.");
	
$options1[] = array("label" => "Button Settings",
					"title" =>"Button Settings",
					"type" => "Title-1");				
$options1[] = array("id" => "tm_button_font_family",
					"label" => "Button  Font",
					"type" => "select",
					"description" => "Change your button font.",
					"options" => array('Raleway'=>'Raleway','please-select'=>'please-select','Oswald'=>'Oswald','Great Vibes'=>'Great+Vibes','Poppins'=>'Poppins','Nunito'=>'Nunito','Antic'=>'Antic','Bitter'=>'Bitter','Droid+Serif'=>'Droid Serif','Philosopher'=>'Philosopher','Oxygen'=>'Oxygen','Rokkitt'=>'Rokkitt','Galdeano'=>'Galdeano','Droid+Sans'=>'Droid Sans','Play'=>'Play','Cabin'=>'Cabin','Cuprum'=>'Cuprum','Varela'=>'Varela','Andika'=>'Andika','Ubuntu' =>'Ubuntu','Other+Fonts'=>'Other Fonts'));
										
$options1[] = array("id" => "tm_button_color",
					"label" => "Buttons Background Color",
					"type" => "textbox-1",
					"std" => "EAAB00",
					"description" => "Change your buttons Background color.");
					
$options1[] = array("id" => "tm_button_border_color",
					"label" => "Buttons Border Color",
					"type" => "textbox-1",
					"std" => "EAAB00",
					"description" => "Change your buttons Border color.");			
									
$options1[] = array("id" => "tm_button_text_color",
					"label" => "Buttons Text Color",
					"type" => "textbox-1",
					"std" => "09589E",
					"description" => "Change your buttons text color.");					
					
$options1[] = array("id" => "tm_button_opacity",
					"label" => "Button background opacity",
					"type" => "textbox",
					"std" => "1",
					"description" => "Change your background opacity of your Button e.g. ( 0.0 to 1 )"); 
					
$options1[] = array("id" => "tm_button_hover_color",
					"label" => "Buttons Hover Color",
					"type" => "textbox-1",
					"std" => "232F3E",
					"description" => "Change your button hover color.");
					
$options1[] = array("id" => "tm_button_hover_boder_color",
					"label" => "Buttons Hover Border Color",
					"type" => "textbox-1",
					"std" => "232F3E",
					"description" => "Change your button hover border color.");					
					
$options1[] = array("id" => "tm_button_hover_text_color",
					"label" => "Buttons hover Text Color",
					"type" => "textbox-1",
					"std" => "FFFFFF",
					"description" => "Change your buttons hover text color.");										

$options1[] = array("id" => "tm_button_hover_opacity",
					"label" => "Button hover background opacity",
					"type" => "textbox",
					"std" => "1",
					"description" => "Change your background opacity of your Button hover e.g. ( 0.0 to 1 )");					
$options1[] = array("label" => "Revolution Slider Settings",
					"title" =>"Revolution Slider Alias Settings",
					"type" => "Title-1");					
$options1[] = array("id" => "tm_revslider_alias",
					"label" => "Revolution Slider Alias",
					"type" => "textbox",
					"std" => "tm_homeslider",
					"description" => "Change your Revolution Slider Alias name.");
	
/*===================================================================================================================
===============================================  Sidebar Text Color Settings ====================================================
=================================================================================================================== */
$options5 = array(array());

$options5[] = array("id" => "tm_sidebar_text_color",
					"label" => "Sidebar Text Color",
					"type" => "textbox-1",
					"std" => "808080",
					"description" => "Chnage Your Sidebar  Text Color.");	
					
$options5[] = array("id" => "tm_sidebar_text_hover_color",
					"label" => "Sidebar Text Link Hover Color",
					"type" => "textbox-1",
					"std" => "EAAB00",
					"description" => "Chnage Your Left Sidebar Text Link Hover Color.");						

/*===================================================================================================================
=============================================== Top Bar Settings ====================================================
=================================================================================================================== */
$options6 = array(array());
					
$options6[] = array("id" => "tm_show_topbanner",
					"label" => "Show Topbar CMS Banner?",
					"type" => "select",
					"description" => "Displays Topbar CMS Banner.",
					"options" => array('no' => 'No','yes' => 'Yes'));
					
$options6[] = array("id" => "tm_show_stickyheader",
					"label" => "Show Sticky Header",
					"type" => "select",
					"description" => "Displays Sticky Header.",
					"options" => array('no' => 'No','yes' => 'Yes'));					
					
$options6[] = array("id" => "tm_top_cms_banner_text",
					"label" => "Topbar Text",
					"type" => "textbox",
					"std" => "Biggest Indian Sale Flate ( Coupn Code : FREE 15 )",
					"description" => "Upload Your Topbar Banner Text.");
					
$options6[] = array("id" => "tm_topbar_bkg_color",
					"label" => "Topbar background color",
					"type" => "textbox-1",
					"std" => "232F3E",
					"description" => "Change your background color of your Topbar. ");	

$options6[] = array("id" => "tm_topbar_bkg_opacity",
					"label" => "Topbar background opacity",
					"type" => "textbox",
					"std" => "1",
					"description" => "Change your background opacity of your Topbar. e.g. ( 0.0 to 1 )");

$options6[] = array("id" => "tm_topbar_text_color",
					"label" => "Topbar Text Color",
					"type" => "textbox-1",
					"std" => "ffffff",
					"description" => "Upload Your Topbar Banner Text Color.");	
										
/*===================================================================================================================
=============================================== Header Settings ====================================================
=================================================================================================================== */
$options2 = array(array());

$options2[] = array("id" => "tm_header_background_upload",
					"label" => "Upload Header Background Image",
					"type" => "upload-1",
					"description" => "Upload Your Header Background Image.");	
$options2[] = array("id" => "tm_header_back_repeat",
					"label" => "Header Image Background Repeat",
					"type" => "select",
					"description" => "Choose Header Image Background repeate.",
					"options" => array('no-repeat' => 'no-repeat','repeat' => 'repeat','repeat-x' => 'repeat-x','repeat-y' => 'repeat-y'));	
$options2[] = array("id" => "tm_header_back_position",
					"label" => "Header Image Background Position",
					"type" => "select",
					"description" => "Choose Header Image Backgroung position.",
					"options" => array('top+left' => 'top left','top+center' => 'top center','top+right' => 'top right','center+right' => 'center right','center+left' => 'center left','center+center' => 'center center','bottom+right' => 'bottom right','bottom+center' => 'bottom center','bottom+left' => 'bottom left'));	
$options2[] = array("id" => "tm_header_back_attachment",
					"label" => "Header Image Background Attachment",
					"type" => "select",
					"description" => "Choose Header Image Background attachment.",
					"options" => array('scroll' => 'Scroll','Fixed' => 'fixed'));	
$options2[] = array("id" => "tm_header_bkg_color",
					"label" => "Header Background Color",
					"type" => "textbox-1",
					"std" => "232F3E",
					"description" => "Change your header background color. ");					
$options2[] = array("id" => "tm_header_bkg_opacity",
					"label" => "Header Background Opacity",
					"type" => "textbox",
					"std" => "1",
					"description" => "Change your header background opacity e.g. ( 0.0 to 1 )");	

$options2[] = array("label" => "Top Header Setting",
					"title" =>"Top Header Setting",
					"type" => "Title-1");
					
$options2[] = array("id" => "tm_navbar_category_title",
					"label" => "Navigation Categoty Title",
					"type" => "textbox",
					"std" => "shop by category",
					"description" => "Change your Sidebar Category Title.");						

$options2[] = array("label" => "Navigation Menu bar & Text Setting",
					"title" =>"Navigation Menu Setting",
					"type" => "Title-1");			
					
$options2[] = array("id" => "tm_top_nav_bg_color",
					"label" => "Top Navbar background color",
					"type" => "textbox-1",
					"std" => "FFFFFF",
					"description" => "Change your background color of your menu Navigation. ");		

$options2[] = array("id" => "tm_menu_activelink_color",
					"label" => "Navigation active link color",
					"type" => "textbox-1",
					"std" => "ffffff",
					"description" => "Change active link color of navigation menu");	
					
$options2[] = array("id" => "tm_menu_activelinkhover_color",
					"label" => "Navigation active link hover color",
					"type" => "textbox-1",
					"std" => "ffffff",
					"description" => " Change active link hover color of navigation menu");	
													
$options2[] = array("id" => "tm_menu_parentlink_color",
					"label" => "Navigation parent link color",
					"type" => "textbox-1",
					"std" => "ffffff",
					"description" => "Change parent link color of navigation menu");	
					
$options2[] = array("id" => "tm_menu_parentlinkhover_color",
					"label" => "Navigation parent link hover color",
					"type" => "textbox-1",
					"std" => "EAAB00",
					"description" => " Change parent link hover color of navigation menu");	
					
$options2[] = array("id" => "tm_menu_childlink_color",
					"label" => "Navigation child link color",
					"type" => "textbox-1",
					"std" => "000000",
					"description" => " Change child link color of navigation menu");	
										
$options2[] = array("id" => "tm_menu_subchildlink_color",
					"label" => "Navigation child link color",
					"type" => "textbox-1",
					"std" => "000000",
					"description" => " Change sub-child link color of navigation menu");				
					
$options2[] = array("id" => "tm_menu_childlinkhover_color",
					"label" => "Navigation child link hover color",
					"type" => "textbox-1",
					"std" => "EAAB00",
					"description" => " Change child link hover color of navigation menu");	

$options2[] = array("label" => "Mobile Menu Setting",
					"title" =>"Mobile Menu Setting",
					"type" => "Title-1");	

$options2[] = array("id" => "tm_mobile_nav_bg_color",
					"label" => "Mobile menu background color",
					"type" => "textbox-1",
					"std" => "FFFFFF",
					"description" => "Change your background color of your Mobile menu. ");		

$options2[] = array("id" => "tm_mobile_nav_bar_opacity",
					"label" => "Mobile menu background opacity",
					"type" => "textbox",
					"std" => "1",
					"description" => "Change your background opacity of your mobile menu e.g. ( 0.0 to 1 )");	
					
$options2[] = array("id" => "tm_mobile_menu_text_color",
					"label" => "Mobile Menu text color",
					"type" => "textbox-1",
					"std" => "000000",
					"description" => "Change your text color of mobile menu");	
					
$options2[] = array("id" => "tm_mobile_menu_texthover_color",
					"label" => "Mobile Menu text hover color",
					"type" => "textbox-1",
					"std" => "EAAB00",
					"description" => "Change your text hover color of mobile menu");		
			
																			
/*===================================================================================================================
=============================================== Content Settings ====================================================
=================================================================================================================== */

$options3[] = array("id" => "tm_h1font",
					"label" => "h1 Font",
					"type" => "select",
					"description" => "Change your h1 font.",
					"options" => array('Oswald'=>'Oswald','please-select'=>'please-select','Raleway'=>'Raleway','Droid+Sans'=>'Droid Sans','Antic'=>'Antic','Bitter'=>'Bitter','Droid+Serif'=>'Droid Serif','Philosopher'=>'Philosopher','Oxygen'=>'Oxygen','Rokkitt'=>'Rokkitt','Galdeano'=>'Galdeano','Glegoo'=>'Glegoo','Play'=>'Play','Cuprum'=>'Cuprum','Varela'=>'Varela','Andika'=>'Andika','Poppins'=>'Poppins','Other+Fonts'=>'Other Fonts'));
$options3[] = array("id" => "tm_h1font_other",
					"label" => "Specified Other h1 Font",
					"type" => "textbox-3",
					"std" => "Arial",
					"description" => "Change your specified h1 font.");	
$options3[] = array("id" => "tm_h1color",
					"label" => "h1 Color",
					"type" => "textbox-1",
					"std" => "000000",
					"description" => "Change your h3 font color.");	
$options3[] = array("id" => "tm_h2font",
					"label" => "H2 Font",
					"type" => "select",
					"description" => "Change your H2 Font.",
					"options" => array('Raleway'=>'Raleway','please-select'=>'please-select','Oswald'=>'Oswald','Great Vibes'=>'Great+Vibes','Droid+Sans'=>'Droid Sans','Antic'=>'Antic','Bitter'=>'Bitter','Droid+Serif'=>'Droid Serif','Philosopher'=>'Philosopher','Oxygen'=>'Oxygen','Rokkitt'=>'Rokkitt','Galdeano'=>'Galdeano','Glegoo'=>'Glegoo','Oswald'=>'Oswald','Play'=>'Play','Cuprum'=>'Cuprum','Varela'=>'Varela','Andika'=>'Andika','Poppins'=>'Poppins','Other+Fonts'=>'Other Fonts'));
$options3[] = array("id" => "tm_h2font_other",
					"label" => "Specified Other H2 Font",
					"type" => "textbox-3",
					"std" => "Arial",
					"description" => "Change your specified H2 font.");
$options3[] = array("id" => "tm_h2color",
					"label" => "H2 Color",
					"type" => "textbox-1",
					"std" => "000000",
					"description" => "Change your H2 font color.");		
$options3[] = array("id" => "tm_h3font",
					"label" => "H3 Font",
					"type" => "select",
					"description" => "Change your H3 font.",
					"options" => array('Raleway'=>'Raleway','please-select'=>'please-select','Oswald'=>'Oswald','Great Vibes'=>'Great+Vibes','Droid+Sans'=>'Droid Sans','Antic'=>'Antic','Bitter'=>'Bitter','Droid+Serif'=>'Droid Serif','Philosopher'=>'Philosopher','Oxygen'=>'Oxygen','Rokkitt'=>'Rokkitt','Galdeano'=>'Galdeano','Glegoo'=>'Glegoo','Oswald'=>'Oswald','Play'=>'Play','Cuprum'=>'Cuprum','Varela'=>'Varela','Andika'=>'Andika','Poppins'=>'Poppins','Other+Fonts'=>'Other Fonts'));
$options3[] = array("id" => "tm_h3font_other",
					"label" => "Specified Other H3 Font",
					"type" => "textbox-3",
					"std" => "Arial",
					"description" => "Change your specified H3 font.");	
$options3[] = array("id" => "tm_h3color",
					"label" => "H3 Color",
					"type" => "textbox-1",
					"std" => "000000",
					"description" => "Change your H3 font color.");										
$options3[] = array("id" => "tm_h4font",
					"label" => "H4 Font",
					"type" => "select",
					"description" => "Change your H4 font.",
					"options" => array('Raleway'=>'Raleway','please-select'=>'please-select','Oswald'=>'Oswald','Great Vibes'=>'Great+Vibes','Poppins'=>'Poppins','Lato'=>'Lato','Raleway'=>'Raleway','Nunito'=>'Nunito','Droid+Sans'=>'Droid Sans','Antic'=>'Antic','Bitter'=>'Bitter','Droid+Serif'=>'Droid Serif','Philosopher'=>'Philosopher','Oxygen'=>'Oxygen','Rokkitt'=>'Rokkitt','Galdeano'=>'Galdeano','Glegoo'=>'Glegoo','Oswald'=>'Oswald','Play'=>'Play','Cuprum'=>'Cuprum','Varela'=>'Varela','Andika'=>'Andika','Poppins'=>'Poppins','Other+Fonts'=>'Other Fonts'));
$options3[] = array("id" => "tm_h4font_other",
					"label" => "Specified Other H4 Font",
					"type" => "textbox-3",
					"std" => "Arial",
					"description" => "Change your specified H4 font.");	
$options3[] = array("id" => "tm_h4color",
					"label" => "H4 Color",
					"type" => "textbox-1",
					"std" => "000000",
					"description" => "Change your H4 font color.");	
$options3[] = array("id" => "tm_h5font",
					"label" => "H5 Font",
					"type" => "select",
					"description" => "Change your H5 font.",
					"options" => array('Raleway'=>'Raleway','please-select'=>'please-select','Oswald'=>'Oswald','Great Vibes'=>'Great+Vibes','Poppins'=>'Poppins','Lato'=>'Lato','Raleway'=>'Raleway','Nunito'=>'Nunito','Droid+Sans'=>'Droid Sans','Antic'=>'Antic','Bitter'=>'Bitter','Droid+Serif'=>'Droid Serif','Philosopher'=>'Philosopher','Oxygen'=>'Oxygen','Rokkitt'=>'Rokkitt','Galdeano'=>'Galdeano','Glegoo'=>'Glegoo','Oswald'=>'Oswald','Play'=>'Play','Cuprum'=>'Cuprum','Varela'=>'Varela','Andika'=>'Andika','Poppins'=>'Poppins','Other+Fonts'=>'Other Fonts'));
$options3[] = array("id" => "tm_h5font_other",
					"label" => "Specified Other H5 Font",
					"type" => "textbox-3",
					"std" => "Arial",
					"description" => "Change your specified H5 font.");	
$options3[] = array("id" => "tm_h5color",
					"label" => "H5 Color",
					"type" => "textbox-1",
					"std" => "000000",
					"description" => "change your H5 font color.");	
$options3[] = array("id" => "tm_h6font",
					"label" => "H6 Font",
					"type" => "select",
					"description" => "Change your H6 font.",
					"options" => array('Raleway'=>'Raleway','please-select'=>'please-select','Oswald'=>'Oswald','Great Vibes'=>'Great+Vibes','Droid+Sans'=>'Droid Sans','Antic'=>'Antic','Bitter'=>'Bitter','Droid+Serif'=>'Droid Serif','Philosopher'=>'Philosopher','Oxygen'=>'Oxygen','Rokkitt'=>'Rokkitt','Galdeano'=>'Galdeano','Glegoo'=>'Glegoo','Oswald'=>'Oswald','Play'=>'Play','Cuprum'=>'Cuprum','Varela'=>'Varela','Andika'=>'Andika','Poppins'=>'Poppins','Other+Fonts'=>'Other Fonts'));
$options3[] = array("id" => "tm_h6font_other",
					"label" => "Specified Other H6 Font",
					"type" => "textbox-3",
					"std" => "Arial",
					"description" => "Change your specified H6 font.");		
$options3[] = array("id" => "tm_h6color",
					"label" => "H6 Color",
					"type" => "textbox-1",
					"std" => "000000",
					"description" => "Change your H6 font color.");		
$options3[] = array("id" => "tm_link_color",
					"label" => "Link Color",
					"type" => "textbox-1",
					"std" => "000000",
					"description" => "Change your link color.");	
$options3[] = array("id" => "tm_hoverlink_color",
					"label" => "Link Hover Color",
					"type" => "textbox-1",
					"std" => "EAAB00",
					"description" => "Change your link Hover color.");	

$options3[] = array("label" => "Sidebar setting for other pages",
					"title" =>"Sidebar setting for other pages",
					"type" => "Title-1");		
														
$options3[] = array("id" => "tm_page_sidebar",
      				"label" => "Display sidebar on other page?",
      				"type" => "select",
      				"description" => "Enable or Disable sidebar on other page .",
      				"options" => array('yes' => 'Yes','no' => 'No'));	
/*===================================================================================================================
=============================================== Footer Settings ====================================================
=================================================================================================================== */
$options4 = array(array());
$options4[] = array("id" => "tm_footer_top_bkg_color",
					"label" => "Footer Top Background Color",
					"type" => "textbox-1",
					"std" => "232F3E",
					"description" => "Change your footer Top background color.");

$options4[] = array("id" => "tm_footer_bottom_bkg_color",
					"label" => "Footer Bottom Background Color",
					"type" => "textbox-1",
					"std" => "18212B",
					"description" => "Change your footer Bottom background color.");

$options4[] = array("id" => "tm_footerlink_color",
					"label" => "Footer Link Color",
					"type" => "textbox-1",
					"std" => "E1E1E1",
					"description" => "Change your footer link color.");	
$options4[] = array("id" => "tm_footerhoverlink_color",
					"label" => "Footer Link Hover Color",
					"type" => "textbox-1",
					"std" => "EAAB00",
					"description" => "Change your footer link hover color.");
$options4[] = array("id" => "tm_footerfont",
					"label" => "Footer Font Family",
					"type" => "select",
					"description" => "Change your Footer font.",
					"options" => array('Raleway'=>'Raleway','please-select'=>'please-select','Oswald'=>'Oswald','Great Vibes'=>'Great+Vibes','Droid+Sans'=>'Droid Sans','Antic'=>'Antic','Bitter'=>'Bitter','Droid+Serif'=>'Droid Serif','Philosopher'=>'Philosopher','Oxygen'=>'Oxygen','Rokkitt'=>'Rokkitt','Galdeano'=>'Galdeano','Oswald'=>'Oswald','Play'=>'Play','Cabin'=>'Cabin','Cuprum'=>'Cuprum','Varela'=>'Varela','Andika'=>'Andika','Ubuntu' =>'Ubuntu','Other+Fonts'=>'Other Fonts'));		
	
$options4[] = array("id" => "tm_footer_slog",
					"label" => "Footer copyright",
					"type" => "textbox",
					"description" => "Enter your copyright statement here.",
					"std" => "Templatemela.");	
$options4[] = array("id" => "tm_footer_link",
					"label" => "Footer copyright Link",
					"std" => "https://www.google.co.in",
					"type" => "textbox",
					"description" => "Change your copyright link.");


//=============================================== Shop Settings ==================================================================
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) :
$options7 = array(array());
									

$options7[] = array("label" => "Product setting",
					"title" =>"Product setting",
					"type" => "Title-1");		
										
					
$options7[] = array("id" => "tm_related_items",
					"label" => "Related Products",	
					"type" => "textbox", 
					"std" => "12",				
					"description" => "Dispaly total number of Related products on single product page");
										
$options7[] = array("id" => "tm_upsells_items",
					"label" => "Upsell Products",	
					"type" => "textbox", 
					"std" => "12",				
					"description" => "Dispaly total number of Upsell products on single product page");

$options7[] = array("id" => "tm_crosssell_items",
					"label" => "Cross Sell Products",	
					"type" => "textbox", 
					"std" => "12",				
					"description" => "Dispaly total number of Cross sell products on checkout page");	

$options7[] = array("id" => "tm_secondaryimage",
      				"label" => "Do you want secondary image on product?",
      				"type" => "select",
      				"description" => "Enable or Disable secondary image for product.",
      				"options" => array('yes' => 'Yes','no' => 'No'));						
					
$options7[] = array("label" => "Sidebar setting for Single product page",
					"title" =>"Sidebar setting for Single product page",
					"type" => "Title-1");		
																			
$options7[] = array("id" => "tm_shop_sidebar",
      				"label" => "Display sidebar on Single product page?",
      				"type" => "select",
      				"description" => "Enable or Disable  sidebar on Single product page.",
      				"options" => array('no' => 'No','yes' => 'Yes'));										
endif;	
?>
<!-- =========================================== Call Font Script =========================================== -->
<div class="main-block">
<div id="wpbody-content">
  <div class="wrap">
    <div class="icon-templatemela"><img style="margin-top:15px;" src="<?php echo esc_url(get_option( 'siteurl' )).'/wp-content/themes/'.get_option( 'template' ).'/templatemela/logo.png'; ?>" /></div>
    <div class="tm_contents">
      <div class="entry-content">
        <p><a target="_blank" href="http://www.templatemela.com/template-framework-for-wordpress" title="<?php esc_html_e( 'Templatemela', 'infystore' );?>">TemplateMela</a> <br />
        <h3>Extremely Customizable, Responsive and fluid theme framework </h3>
        Make your site shine in few minutes by choosing from any of our high-quality premium WordPress themes.<br />
        With our hundreds of WordPress themes to choose from, you'll have a stylishly professional site that's sure to impress.
        </p>
      </div>
    </div>
    <div id="ajax-response"></div>   
  </div>  
</div>
<h2 class="title-themeset">TemplateMela - Theme Settings</h2>
<?php  global $result;   
	if ($result=='success') 
	 echo '<div class="updated settings-error" id="setting-error-settings_updated"><p><strong>Settings saved.</strong></p></div>';
?>
<div class="tab_main">
<!-- =========================================== Start Tab =============================================== -->
<div id="tab-container" class='tab-container'>
  <ul class='etabs'>
    <li class="tab first"> <a href="#General" title="<?php esc_html_e( 'General Settings', 'infystore' );?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/megnor/admin/general_setting.png" alt="<?php echo esc_html_e('general','infystore'); ?>"/> <span class="title">
      <?php echo esc_html__('General','infystore');?>
      </span></a> </li>
	 <li class="tab sidebartext"> <a href="#Sidebartext"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/megnor/admin/topbar_setting.png" alt="<?php echo esc_html_e('sidebartext','infystore'); ?>"/> <span class="title">
      <?php echo esc_html__('Sidebar','infystore');?>
      </span></a> </li>
   <li class="tab topbar"> <a href="#Topbar"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/megnor/admin/topbar_setting.png" alt="<?php echo esc_html_e('Topbar','infystore'); ?>"/> <span class="title">
      <?php echo esc_html__('Topbar','infystore');?>
      </span></a> </li>
   <li class="tab header"> <a href="#Header"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/megnor/admin/header_setting.png" alt="<?php echo esc_html_e('header','infystore'); ?>"/> <span class="title">
      <?php echo esc_html__('Header','infystore');?>
      </span></a> </li>
    <li class="tab"> <a href="#Content"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/megnor/admin/content_settings.png" alt="<?php echo esc_html_e('content','infystore'); ?>"/> <span class="title">
      <?php echo esc_html__('Content','infystore');?>
      </span></a> </li>
    <li class="tab"> <a href="#Footer"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/megnor/admin/footer_settings.png" alt="<?php echo esc_html_e('footer','infystore'); ?>"/> <span class="title">
      <?php echo esc_html__('Footer','infystore');?>
      </span></a> </li>
	<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) : ?>  
    <li class="tab"> <a href="#product"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/megnor/admin/shop_setting.png" alt="<?php echo esc_html_e('product','infystore'); ?>"/> <span class="title">
      <?php echo esc_html__('Product','infystore');?>
      </span></a> </li>
	  <?php endif; ?>
	
  </ul>
  <!-- Start Panel-container -->
  <div class='panel-container'>
    <!-- =========================================== Start General Setting =========================================== -->
    <div id="General">
      <form enctype="multipart/form-data" method="post" id="settingForm1" name="settingForm1">
        <input type="hidden" name="action" value="save_options1"  />
        <?php 
	 if(!isset( $_REQUEST['action'])) {$_REQUEST['action']=''; }
	 if(!isset( $_REQUEST['reset1'])) {$_REQUEST['reset1']=''; }
       if ( 'save_options1' == $_REQUEST['action'] )
       {
 			foreach ($options1 as $value) {
				if(!isset( $value['id'] )) {$value['id']=''; }
				if(isset( $value['id'] ) && isset($_REQUEST[ $value['id'] ] )){
					update_option( $value['id'], $_REQUEST[ $value['id'] ] ); 
				}
			} 
      	} 
	    else if( 'reset1' == $_REQUEST['reset1'] )
        {
 	    	foreach ($options1 as $value) 
	    	{
				if(!isset( $value['id'] )) {$value['id']=''; }
				delete_option( $value['id'] ); 
          	}
        }
    	?>
        <div class="form-table">
        <div class="background-title">
          <label>
          <?php echo esc_html__('General Settings', 'infystore'); ?>
          </label>
        </div>
        <?php
       $i= 0;
	   foreach ($options1 as $value) { 
	   if(!isset( $value['type'] )) {$value['type'] =''; }
	   switch ( $value['type'] ) {
	 case 'textbox':?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
        <?php } else { ?>
        <div class="even setting_main">
          <?php }?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <div class="content">
            <input class="regular-text" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo esc_attr(stripslashes(get_option( $value['id'] ))); } else {  	 if(!isset( $value['std'] )) {$value['std'] =''; }  echo esc_attr(stripslashes($value['std'])); } ?>" />
            <span class="description"><?php echo esc_attr($value['description']); ?></span> </div>
        </div>
        <!--odd-even-->
        <?php
		break;
	case 'upload': ?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
        <?php } else { ?>
        <div class="even setting_main">
          <?php }?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
            <br />
            <br />
            <?php if(get_option('tm_logo_image') != '') { ?>
            <img src="<?php echo esc_url(get_option('tm_logo_image'));?>" id="slider_logodisplay"/>&nbsp;<a id="slider_remove_link1" href="javascript:tm_removeImage1();"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/megnor/admin/remove.png" /></a>
            <?php } ?>
            <script>
			function tm_removeImage1() {
				document.getElementById("tm_logo_image").value="";
				document.getElementById("slider_logodisplay").src="";
				document.getElementById("slider_remove_link1").innerHTML="";					
			}
		</script>
          </div>
          <div class="content">
            <input style=" <?php if($value['id'] != 'tm_logo_image') { echo 'display:none' ; } ?> " class="regular-text" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>" type="text" value="<?php echo esc_attr(get_option($value['id'])); ?>" />
            <input id="upload_image_button" class="button-primary" type="button" value="Upload Logo" />
            <span class="description"><?php echo esc_attr($value['description']); ?></span> </div>
        </div>
        <!--even odd setting-->
        <?php	break;
		
		case 'upload-1': ?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
        <?php } else { ?>
        <div class="even setting_main">
          <?php }?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
            <br />
            <br />
            <?php if(get_option('tm_mob_logo_image') != '') { ?>
            <img src="<?php echo esc_url(get_option('tm_mob_logo_image'));?>" id="slider_mob_logodisplay"/>&nbsp;<a id="slider_remove_mob_link" href="javascript:tm_removemobImage();"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/megnor/admin/remove.png" /></a>
            <?php } ?>
            <script>
			function tm_removemobImage() {
				document.getElementById("tm_mob_logo_image").value="";
				document.getElementById("slider_mob_logodisplay").src="";
				document.getElementById("slider_remove_mob_link").innerHTML="";					
			}
		</script>
          </div>
          <div class="content">
            <input style=" <?php if($value['id'] != 'tm_mob_logo_image') { echo 'display:none' ; } ?> " class="regular-text" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>" type="text" value="<?php echo esc_attr(get_option($value['id'])); ?>" />
            <input id="upload_image_button" class="button-primary" type="button" value="Upload Logo" />
            <span class="description"><?php echo esc_attr($value['description']); ?></span> </div>
        </div>
        <!--even odd setting-->
        <?php	break;
	case 'upload-2': ?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
        <?php } else { ?>
        <div class="even setting_main">
          <?php }?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
            <br />
            <br />
            <?php if(get_option('tm_site_icon') != '') { ?>
            <img src="<?php echo esc_url(get_option('tm_site_icon'));?>" id="slider_favicondisplay"/>&nbsp;<a id="slider_remove_link2" href="javascript:removeImage2();"><img src="<?php echo get_template_directory_uri(); ?>/images/megnor/admin/remove.png" /></a>
            <?php }	?>
            <script>
			function removeImage2() {
				document.getElementById("tm_site_icon").value="";
				document.getElementById("slider_favicondisplay").src="";
				document.getElementById("slider_remove_link2").innerHTML="";					
			}
		</script>
          </div>
          <div class="content">
            <input class"favicon-upload" style="<?php if($value['id'] != 'tm_site_icon') { echo 'display:none' ; } ?> " class="regular-text" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>" type="text" value="<?php echo get_option($value['id']); ?>" />
            <input id="upload_favicon_icon" class="button-primary" type="button" value="Upload Favicon Icon" />
            <span class="description"><?php echo esc_attr($value['description']); ?></span><br />
          </div>
        </div>
        <!--even odd setting-->
        <?php	break;	
	case 'select':	?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
        <?php } else { ?>
        <div class="even setting_main">
          <?php }?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <div class="content">
            <select class="select_input" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>">
              <?php foreach ($value['options'] as $op_id => $suboption) { ?>
              <option value="<?php echo esc_attr($op_id); ?>" <?php if (get_option($value['id']) == $op_id) { echo ' selected="selected"'; } ?>><?php echo esc_attr($suboption); ?></option>
              <?php } ?>
            </select>
            <span class="description"><?php echo esc_attr($value['description']); ?></span> </div>
        </div>
        <!--even-Odd-->
        <?php	break; //end Switch
	case 'textbox-1':?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
        <?php } else { ?>
        <div class="even setting_main">
          <?php }?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <div class="content">
            <?php if ( get_option( $value['id'] ) != "") { 
			$stylecolor =  stripslashes(get_option( $value['id'] )); 
			} else { 
			$stylecolor = stripslashes($value['std']); } 
			$stylecolor = 'style="background-color:#'.$stylecolor.'"';?>
            <input class="regular-text1" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo esc_attr(stripslashes(get_option( $value['id'] ))); } else { echo esc_attr(stripslashes($value['std'])); } ?>" <?php echo balanceTags($stylecolor); ?> />
            <span class="description"><?php echo esc_attr($value['description']); echo esc_attr(get_option( $value['id']));?></span> </div>
        </div>
        <!--odd-even-->
        <?php	break;	
	case 'upload-3': ?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
        <?php } else { ?>
        <div class="even setting_main">
          <?php }?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
            <br />
            <br />
            <?php if(get_option('tm_background_upload') != '') { ?>
            <img src="<?php echo esc_url(get_option('tm_background_upload'));?>" id="slider_backgrounddisplay"/>&nbsp;<a id="slider_remove_link3" href="javascript:tm_removeImage3();"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/megnor/admin/remove.png" /></a>
            <?php } ?>
            <script>
			function tm_removeImage3() {
				document.getElementById("tm_background_upload").value="";
				document.getElementById("slider_backgrounddisplay").src="";
				document.getElementById("slider_remove_link3").innerHTML="";					
			}
		</script>
          </div>
          <div class="content">
            <input style=" <?php if($value['id'] != 'tm_background_upload') { echo 'display:none' ; } ?> " class="regular-text" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>" type="text" value="<?php echo esc_attr(get_option($value['id'])); ?>" />
            <input id="upload_backgroundimage_button" class="button-primary" type="button" value="Upload Image" />
            <span class="description"><?php echo esc_attr($value['description']); ?></span><br />
          </div>
        </div>
        <!--even odd setting-->
        <?php	break;
	case 'texture': 	
		?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
          <?php } else { ?>
          <div class="even setting_main">
            <?php }
	    $img_dir = get_template_directory_uri() .'/images/megnor/colorpicker/pattern/';
		?>
            <div class="title">
              <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
            </div>
            <div class="content">
              <div class="tm_content">
                <div class="thumb-sel"> <img class="thumb" src="<?php if ( get_option( $value['id'] ) != ""){echo esc_url($img_dir.get_option($value['id']));}else{echo esc_url($img_dir.$value['std']);} ?>" /> <span id="switch" class="close"></span> </div>
                <div class="thumb-list">
                  <ul>
                    <?php foreach ($value['options'] as $opt_key => $opt_val) { 
		    if ( get_option( $value['id'] ) != "")   {
            if($opt_key == get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";}
            } else {
            if($opt_key == ($value['std'])) { $checked = "checked=\"checked\""; } else { $checked = ""; }
            } ?>
                    <li>
                      <input type="radio" name="<?php echo esc_attr($value['id']); ?>" value="<?php echo esc_attr($opt_key); ?>" <?php echo esc_attr($checked); ?>/>
                      <img class="thumb" src="<?php echo esc_url($img_dir.$opt_key); ?>" title="<?php echo esc_attr($opt_val); ?>" /> </li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
              <span class="description"><?php echo esc_attr($value['description']); ?></span> </div>
          </div>
          <?php break;
	case 'Title-1':		
		 if(!isset( $value['id'] )) {$value['id'] =''; }
		?>
          <div class="background-title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <?php break;
		}
	   $i++;
      }?>
        </div>
        <!--from-table-->
        <div class="submit">
          <input type="submit" value="Save Changes" class="button-primary" name="Submit" >
        </div>
      </form>
      <!--mainform-->
      <!-- reset Button -->
      <div class="reset-option">
        <form enctype="multipart/form-data" method="post" id="settingForm1" name="settingFormx"  >
          <p class="submit">
            <input type="hidden" name="reset1" value="reset1" />
            <input type="submit" value="Set Default" class="button-primary" name="reset"/>
          </p>
        </form>
      </div>
      <!-- End Reset Button -->
    </div>
    <!--general-setting-->
    <div style="clear:both"></div>
    <!-- =========================================== End General Settings =========================================== -->
	<!-- =========================================== Start Sidebar Text Color Settings =========================================== -->
    <div id="Sidebartext">
      <form enctype="multipart/form-data" method="post" id="settingForm6" name="settingForm6"  >
        <input type="hidden" name="action" value="save_options6" />
        <?php
	if(!isset( $_REQUEST['action'] )) {$_REQUEST['action']=''; }
	if(!isset( $_REQUEST['reset5'] )) {$_REQUEST['reset5']=''; }
    if ( 'save_options6' == $_REQUEST['action'] )
     {
 		foreach ($options5 as $value) {
				if(!isset( $value['id'] )) {$value['id']=''; }
				if(isset( $value['id'] ) && isset($_REQUEST[ $value['id'] ] )){
					update_option( $value['id'], $_REQUEST[ $value['id'] ] ); 
				}
		}
	    } 
     else if( 'reset5' == $_REQUEST['reset5'] )
      {
 	    foreach ($options5 as $value) 
	     {
				 if(!isset( $value['id'] )) {$value['id']=''; }
				 delete_option( $value['id'] ); 
        }
      }
    ?>
        <div class="form-table">
        <div class="background-title">
          <label>
          <?php echo esc_html__('Sidebar Text Settings', 'infystore'); ?>
          </label>
        </div>
        <?php
     foreach ($options5 as $value) { 
		if(!isset( $value['type'] )) {$value['type'] =''; }
	switch ( $value['type'] ) {
		case 'select':	?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
        <?php } else { ?>
        <div class="even setting_main">
          <?php }?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <div class="content">
            <select class="select_input" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>">
              <?php foreach ($value['options'] as $op_id => $suboption) { ?>
              <option value="<?php echo esc_attr($op_id); ?>" <?php if (get_option($value['id']) == $op_id) { echo ' selected="selected"'; } ?>><?php echo esc_attr($suboption); ?></option>
              <?php } ?>
            </select>
            <span class="description"><?php echo esc_attr($value['description']); ?></span> </div>
        </div>
        <!--even-Odd-->
        <?php	break; //end Switch
		case 'textbox':?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
        <?php } else { ?>
        <div class="even setting_main">
          <?php }?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <div class="content">
            <input class="regular-text" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo esc_attr(stripslashes(get_option( $value['id'] ))); } else { echo esc_attr(stripslashes($value['std'])); } ?>" />
            <span class="description"><?php echo esc_attr($value['description']); echo esc_attr(get_option( $value['id']));?></span> </div>
        </div>
        <!--odd-even-->
        <?php
		break;
		case 'textbox-3':?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
        <?php } else { ?>
        <div class="even setting_main">
          <?php }?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <div class="content">
            <input class="regular-text" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo esc_attr(stripslashes(get_option( $value['id'] ))); } else { echo esc_attr(stripslashes($value['std'])); } ?>" />
            <span class="description"><?php echo esc_attr($value['description']); ?></span> </div>
        </div>
        <!--odd-even-->
        <?php
		break;
		case 'textbox-1':?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
          <?php } else { ?>
          <div class="even setting_main">
            <?php }?>
            <div class="title">
              <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
            </div>
            <div class="content">
              <?php if ( get_option( $value['id'] ) != "") { 
			$stylecolor =  stripslashes(get_option( $value['id'] )); 
			} else { 
			$stylecolor = stripslashes($value['std']); } 
			$stylecolor = 'style="background-color:#'.$stylecolor.'"'; ?>
              <input class="regular-text1" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo esc_attr(stripslashes(get_option( $value['id'] ))); } else { echo esc_attr(stripslashes($value['std'])); } ?>" <?php echo balanceTags($stylecolor); ?> />
              <span class="description"><?php echo esc_attr($value['description']); echo esc_attr(get_option( $value['id']));?></span> </div>
          </div>
          <!--odd-even-->
          <?php
	break;
			case 'Title-1':		
	if(!isset( $value['id'] )) {$value['id'] =''; }
	?>
          <div class="background-title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <?php break;
		   }
		$i++;
      }
?>
        </div>
        <!--form table-->
        <div class="submit">
          <input type="submit" value="Save Changes" class="button-primary" name="Submit" >
        </div>
      </form>
      <!-- reset Button -->
      <div class="reset-option">
        <form enctype="multipart/form-data" method="post" id="settingForm6" name="settingForm6"   >
          <p class="submit">
            <input type="hidden" name="reset5" value="reset5" />
            <input type="submit" value="Set Default" class="button-primary" name="reset"/>
          </p>
        </form>
      </div>
      <!-- End Reset Button -->
    </div>
    <!---#color-->
    <script type="text/javascript">
function Ajax(){
var xmlHttp;
	try{	
		xmlHttp=new XMLHttpRequest();// Firefox, Opera 8.0+, Safari
	}
	catch (e){
		try{
			xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
		}
		catch (e){
		    try{
				xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (e){
				alert("No AJAX!?");
				return false;
			}
		}
	}
xmlHttp.onreadystatechange=function(){
	if(xmlHttp.readyState==4){
		document.getElementById('tab_main').innerHTML=xmlHttp.responseText;
		return false;
	}
}
xmlHttp.send(null);
}
window.onload=function(){
}
</script>
    <div style="clear:both"></div>
    <!-- =========================================== End Sidebar Text Color Settings =========================================== -->
	<!-- =========================================== Start Top bar Settings =========================================== -->
    <div id="Topbar">
      <form enctype="multipart/form-data" method="post" id="settingForm6" name="settingForm6"  >
        <input type="hidden" name="action" value="save_options6" />
        <?php
	if(!isset( $_REQUEST['action'] )) {$_REQUEST['action']=''; }
	if(!isset( $_REQUEST['reset6'] )) {$_REQUEST['reset6']=''; }
    if ( 'save_options6' == $_REQUEST['action'] )
     {
 		foreach ($options6 as $value) {
				if(!isset( $value['id'] )) {$value['id']=''; }
				if(isset( $value['id'] ) && isset($_REQUEST[ $value['id'] ] )){
					update_option( $value['id'], $_REQUEST[ $value['id'] ] ); 
				}
		}
	    } 
     else if( 'reset6' == $_REQUEST['reset6'] )
      {
 	    foreach ($options6 as $value) 
	     {
				 if(!isset( $value['id'] )) {$value['id']=''; }
				 delete_option( $value['id'] ); 
        }
      }
    ?>
        <div class="form-table">
        <div class="background-title">
          <label>
          <?php echo esc_html__('Topbar Settings', 'infystore'); ?>
          </label>
        </div>
        <?php
     foreach ($options6 as $value) { 
		if(!isset( $value['type'] )) {$value['type'] =''; }
	switch ( $value['type'] ) {
		case 'select':	?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
        <?php } else { ?>
        <div class="even setting_main">
          <?php }?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <div class="content">
            <select class="select_input" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>">
              <?php foreach ($value['options'] as $op_id => $suboption) { ?>
              <option value="<?php echo esc_attr($op_id); ?>" <?php if (get_option($value['id']) == $op_id) { echo ' selected="selected"'; } ?>><?php echo esc_attr($suboption); ?></option>
              <?php } ?>
            </select>
            <span class="description"><?php echo esc_attr($value['description']); ?></span> </div>
        </div>
        <!--even-Odd-->
        <?php	break; //end Switch
		case 'textbox':?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
        <?php } else { ?>
        <div class="even setting_main">
          <?php }?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <div class="content">
            <input class="regular-text" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo esc_attr(stripslashes(get_option( $value['id'] ))); } else { echo esc_attr(stripslashes($value['std'])); } ?>" />
          <span class="description"><?php echo esc_attr($value['description']); echo esc_attr(stripslashes(get_option( $value['id'])));?></span> </div>
        </div>
        <!--odd-even-->
        <?php
		break;
		case 'textbox-3':?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
        <?php } else { ?>
        <div class="even setting_main">
          <?php }?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <div class="content">
            <input class="regular-text" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo esc_attr(stripslashes(get_option( $value['id'] ))); } else { echo esc_attr(stripslashes($value['std'])); } ?>" />
            <span class="description"><?php echo esc_attr($value['description']); ?></span> </div>
        </div>
        <!--odd-even-->
        <?php
		break;
		case 'textbox-1':?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
          <?php } else { ?>
          <div class="even setting_main">
            <?php }?>
            <div class="title">
              <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
            </div>
            <div class="content">
              <?php if ( get_option( $value['id'] ) != "") { 
			$stylecolor =  stripslashes(get_option( $value['id'] )); 
			} else { 
			$stylecolor = stripslashes($value['std']); } 
			$stylecolor = 'style="background-color:#'.$stylecolor.'"'; ?>
              <input class="regular-text1" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo esc_attr(stripslashes(get_option( $value['id'] ))); } else { echo esc_attr(stripslashes($value['std'])); } ?>" <?php echo balanceTags($stylecolor); ?> />
              <span class="description"><?php echo esc_attr($value['description']); echo esc_attr(get_option( $value['id']));?></span> </div>
          </div>
          <!--odd-even-->
          <?php
	break;
	case 'Title-1':		
	if(!isset( $value['id'] )) {$value['id'] =''; }
	?>
          <div class="background-title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <?php break;
		   }
		$i++;
      }
?>
        </div>
        <!--form table-->
        <div class="submit">
          <input type="submit" value="Save Changes" class="button-primary" name="Submit" >
        </div>
      </form>
      <!-- reset Button -->
      <div class="reset-option">
        <form enctype="multipart/form-data" method="post" id="settingForm6" name="settingForm6"   >
          <p class="submit">
            <input type="hidden" name="reset6" value="reset6" />
            <input type="submit" value="Set Default" class="button-primary" name="reset"/>
          </p>
        </form>
      </div>
      <!-- End Reset Button -->
    </div>
    <!---#color-->
    <script type="text/javascript">
function Ajax(){
var xmlHttp;
	try{	
		xmlHttp=new XMLHttpRequest();// Firefox, Opera 8.0+, Safari
	}
	catch (e){
		try{
			xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
		}
		catch (e){
		    try{
				xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (e){
				alert("No AJAX!?");
				return false;
			}
		}
	}
xmlHttp.onreadystatechange=function(){
	if(xmlHttp.readyState==4){
		document.getElementById('tab_main').innerHTML=xmlHttp.responseText;
		return false;
	}
}
xmlHttp.send(null);
}
window.onload=function(){
}
</script>
    <div style="clear:both"></div>
    <!-- =========================================== End Top bar Settings =========================================== -->
    <!-- =========================================== Start Shop Settings =========================================== -->
<?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) : ?>
    <div id="product">
      <form enctype="multipart/form-data" method="post" id="settingForm7" name="settingForm7" >
        <input type="hidden" name="action" value="save_options7" />
        <?php
	if(!isset( $_REQUEST['action'])) {$_REQUEST['action']=''; }	
	if(!isset( $_REQUEST['reset7'])) {$_REQUEST['reset7']=''; }	
       if ( 'save_options7' == $_REQUEST['action'] )
        {
 	    	foreach ($options7 as $value) {
				if(!isset( $value['id'] )) {$value['id']=''; }
				if(isset( $value['id'] ) && isset($_REQUEST[ $value['id'] ] )){
					update_option( $value['id'], $_REQUEST[ $value['id'] ] ); 
				}
			} 
	     } 
       else if( 'reset7' == $_REQUEST['reset7'] )
         {
 	     foreach ($options7 as $value) 
	     {
		 	if(!isset( $value['id'] )) {$value['id']=''; }
		 	delete_option( $value['id'] ); 
         }
      }
     ?>
        <div class="form-table">
        <?php
        foreach ($options7 as $value) { 
if(!isset( $value['type'])) {$value['type']=''; }	
	    switch ( $value['type'] ) {
	case 'textbox':?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
        <?php } else { ?>
        <div class="even setting_main">
          <?php }?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <div class="content">
            <input class="regular-text" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo esc_attr(stripslashes(get_option( $value['id'] ))); } else { echo esc_attr(stripslashes($value['std'])); } ?>" />
            <span class="description"><?php echo esc_attr($value['description']); ?></span> </div>
        </div>
        <!--odd-even-->
        <?php break;
	case 'select':	?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
          <?php } else { ?>
          <div class="even setting_main">
            <?php }?>
            <div class="title">
                <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
            </div>
            <div class="content">
              <select class="select_input" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>">
                <?php foreach ($value['options'] as $op_id => $suboption) { ?>
                <option value="<?php echo esc_attr($op_id); ?>" <?php if (get_option($value['id']) == $op_id) { echo ' selected="selected"'; } ?>><?php echo esc_attr($suboption); ?></option>
                <?php } ?>
              </select>
              <span class="description"><?php echo esc_attr($value['description']); ?></span> </div>
          </div>
          <!--even-Odd-->
          <?php	break; //end Switch
		  case 'Title-1':		
		 if(!isset( $value['id'] )) {$value['id'] =''; }
		?>
          <div class="background-title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <?php break;
		  case 'radio':?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <div class="content cont-layout">
            <?php
			 foreach ($value['options'] as $key=>$option) {
			 if ( get_option( $value['id'] ) != "")   {
			 if($key == get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";}
			} else {
			if($key == ($value['std'])) { $checked = "checked=\"checked\""; } else { $checked = ""; }
			} ?>
            <div class="cont-layout-option">
              <input type="radio" name="<?php echo esc_attr($value['id']); ?>" value="<?php echo esc_attr($key); ?>" <?php echo esc_attr($checked); ?> />
              <br/>
              <?php if($key == '1'){?>
              <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/megnor/admin/header1.png' ?>" alt="<?php echo esc_html_e('header1','infystore'); ?>" />
              <?php } ?>
              <?php if($key == '2'){?>
              <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/megnor/admin/header2.png' ?>" alt="<?php echo esc_html_e('header2','infystore'); ?>" />
              <?php } ?>
              <?php if($key == '3'){?>
              <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/megnor/admin/header3.png' ?>" alt="<?php echo esc_html_e('header3','infystore'); ?>" />
              <?php } ?>
              <?php if($key == '4'){?>
              <img src="<?php echo esc_attr(get_template_directory_uri()) . '/images/megnor/admin/header4.png' ?>" alt="<?php echo esc_html_e('header4','infystore'); ?>" />
              <?php } ?>
              <br/>             
            </div>
            <?php } ?>
          </div>
          <?php	break;				
       }
     $i++;
    }
   ?>
        </div>
        <!--form-table-->
        <div class="submit">
          <input type="submit" value="Save Changes" class="button-primary" name="Submit" >
        </div>
      </form>
      <!-- reset Button -->
      <div class="reset-option">
        <form enctype="multipart/form-data" method="post" id="settingForm7" name="settingFormx" >
          <p class="submit">
            <input type="hidden" name="reset7" value="reset7" />
            <input type="submit" value="Set Default" class="button-primary" name="reset"/>
          </p>
        </form>
      </div>
      <!-- End Reset Button -->
    </div>
	<?php endif; ?>
    <!-- =========================================== End Shop Settings =========================================== -->
	
    <!-- =========================================== Start Header Settings =========================================== -->
    <div id="Header">
      <form enctype="multipart/form-data" method="post" id="settingForm2" name="settingForm2"  >
        <input type="hidden" name="action" value="save_options2" />
        <?php
	if(!isset( $_REQUEST['action'] )) {$_REQUEST['action']=''; }
	if(!isset( $_REQUEST['reset2'] )) {$_REQUEST['reset2']=''; }
    if ( 'save_options2' == $_REQUEST['action'] )
     {
 		foreach ($options2 as $value) {
				if(!isset( $value['id'] )) {$value['id']=''; }
				if(isset( $value['id'] ) && isset($_REQUEST[ $value['id'] ] )){
					update_option( $value['id'], $_REQUEST[ $value['id'] ] ); 
				}
		}
	    } 
     else if( 'reset2' == $_REQUEST['reset2'] )
      {
 	    foreach ($options2 as $value) 
	     {
				 if(!isset( $value['id'] )) {$value['id']=''; }
				 delete_option( $value['id'] ); 
        }
      }
    ?>
        <div class="form-table">
        <div class="background-title">
			<label>
          <?php echo esc_html__('Header Settings', 'infystore'); ?>
		  	</label>
        </div>
        <?php
     foreach ($options2 as $value) { 
		if(!isset( $value['type'] )) {$value['type'] =''; }
	switch ( $value['type'] ) {
		case 'select':	?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
        <?php } else { ?>
        <div class="even setting_main">
          <?php }?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <div class="content">
            <select class="select_input" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>">
              <?php foreach ($value['options'] as $op_id => $suboption) { ?>
              <option value="<?php echo esc_attr($op_id); ?>" <?php if (get_option($value['id']) == $op_id) { echo ' selected="selected"'; } ?>><?php echo esc_attr($suboption); ?></option>
              <?php } ?>
            </select>
            <span class="description"><?php echo esc_attr($value['description']); ?></span> </div>
        </div>
        <!--even-Odd-->
        <?php	break; //end Switch
		case 'textbox-3':?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
        <?php } else { ?>
        <div class="even setting_main">
          <?php }?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <div class="content">
            <input class="regular-text" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo esc_attr(stripslashes(get_option( $value['id'] ))); } else { echo esc_attr(stripslashes($value['std'])); } ?>" />
            <span class="description"><?php echo esc_attr($value['description']); ?></span> </div>
        </div>
        <!--odd-even-->		
        <?php
	
		break;
		
		case 'textbox':?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
        <?php } else { ?>
        <div class="even setting_main">
          <?php }?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <div class="content">
            <input class="regular-text" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo esc_attr(stripslashes(get_option( $value['id'] ))); } else { echo esc_attr(stripslashes($value['std'])); } ?>" />
            <span class="description"><?php echo esc_attr($value['description']); echo esc_attr(get_option( $value['id']));?></span> </div>
        </div>
		
		<?php
		break;	
		case 'textbox-1':?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
        <?php } else { ?>
        <div class="even setting_main">
          <?php }?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <div class="content">
            <?php if ( get_option( $value['id'] ) != "") { 
			$stylecolor =  stripslashes(get_option( $value['id'] )); 
			} else { 
			$stylecolor = stripslashes($value['std']); } 
			$stylecolor = 'style="background-color:#'.$stylecolor.'"'; ?>
            <input class="regular-text1" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'] )); } else { echo stripslashes($value['std']); } ?>" <?php echo balanceTags($stylecolor); ?> />
            <span class="description"><?php echo esc_attr($value['description']); echo esc_attr(get_option( $value['id']));?></span> </div>
        </div>
        <!--odd-even-->
        <?php
		break;
case 'texture': 
		?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
        <?php } else { ?>
        <div class="even setting_main">
          <?php }
								$img_dir = get_template_directory_uri().'/templatemela/images/';
								?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <div class="content">
            <div class="tm_content">
              <div class="thumb-sel"> <img class="thumb" src="<?php if ( get_option( $value['id'] ) != ""){echo esc_url($img_dir.get_option($value['id']));}else{echo esc_url($img_dir.$value['std']);} ?>" /> <span id="switch" class="close"></span> </div>
              <div class="thumb-list">
                <ul>
                  <?php foreach ($value['options'] as $opt_key => $opt_val) { 
					    if ( get_option( $value['id'] ) != "")   {
                        if($opt_key == get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";}
                        } else {
                        if($opt_key == ($value['std'])) { $checked = "checked=\"checked\""; } else { $checked = ""; }
                         } ?>
                  <li>
                    <input type="radio" name="<?php echo esc_attr($value['id']) ?>" value="<?php echo esc_attr($opt_key); ?>" <?php echo esc_attr($checked); ?>/>
                    <img class="thumb" src="<?php echo esc_url($img_dir.$opt_key); ?>" title="<?php echo esc_attr($opt_val); ?>" /> </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
            <span class="description"><?php echo esc_attr($value['description']); ?></span> </div>
        </div>
        <?php
				break;
		case 'upload': ?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
        <?php } else { ?>
        <div class="even setting_main">
          <?php }?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <div class="content">
            <input style=" <?php if($value['id'] != 'tm_background_upload') { echo 'display:none' ; } ?> " class="regular-text" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>" type="text" value="<?php echo esc_attr(get_option($value['id'])); ?>" />
            <input id="upload_image_button1" class="button-primary" type="button" value="Upload Image" />
            <span class="description"><?php echo esc_attr($value['description']); ?></span> </div>
        </div>
        <!--even odd setting-->
        <?php	break;
		case 'upload-1': ?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
          <?php } else { ?>
          <div class="even setting_main">
            <?php }?>
            <div class="title">
              <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
              <br />
              <br />
              <?php if(get_option('tm_header_background_upload') != '') { ?>
              <img src="<?php echo esc_url(get_option('tm_header_background_upload'));?>" id="slider_backgrounddisplay1" class="thumb"/>&nbsp;<a id="slider_remove_link31" href="javascript:tm_removeImage31();"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/megnor/admin/remove.png" /></a>
              <?php } ?>
              <script>
			function tm_removeImage31() {
				document.getElementById("tm_header_background_upload").value="";
				document.getElementById("slider_backgrounddisplay1").src="";
				document.getElementById("slider_remove_link31").innerHTML="";					
			}
		</script>
            </div>
            <div class="content">
              <input style=" <?php if($value['id'] != 'tm_header_background_upload') { echo 'display:none' ; } ?> " class="regular-text" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>" type="text" value="<?php echo esc_attr(get_option($value['id'])); ?>" />
              <input id="upload_backgroundimage_button" class="button-primary" type="button" value="Upload Image" />
              <span class="description"><?php echo esc_attr($value['description']); ?></span><br />
            </div>
          </div>
          <!--even odd setting-->
          <?php	break;
		case 'Title-1':		
		 if(!isset( $value['id'] )) {$value['id'] =''; }
		?>
          <div class="background-title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <?php break;
		  case 'radio':?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <div class="content cont-layout">
            <?php
			 foreach ($value['options'] as $key=>$option) {
			 if ( get_option( $value['id'] ) != "")   {
			 if($key == get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";}
			} else {
			if($key == ($value['std'])) { $checked = "checked=\"checked\""; } else { $checked = ""; }
			} ?>
            <div class="cont-layout-option">
              <input type="radio" name="<?php echo esc_attr($value['id']); ?>" value="<?php echo esc_attr($key); ?>" <?php echo esc_attr($checked); ?> />
              <br/>
              <?php if($key == '1'){?>
              <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/megnor/admin/header1.png' ?>" alt="<?php echo esc_html_e('header1','infystore'); ?>" />
              <?php } ?>
              <?php if($key == '2'){?>
              <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/megnor/admin/header2.png' ?>" alt="<?php echo esc_html_e('header2','infystore'); ?>" />
              <?php } ?>
              <?php if($key == '3'){?>
              <img src="<?php echo esc_url(get_template_directory_uri()) . '/images/megnor/admin/header3.png' ?>" alt="<?php echo esc_html_e('header3','infystore'); ?>" />
              <?php } ?>
              <?php if($key == '4'){?>
              <img src="<?php echo esc_attr(get_template_directory_uri()) . '/images/megnor/admin/header4.png' ?>" alt="<?php echo esc_html_e('header4','infystore'); ?>" />
              <?php } ?>
              <br/>             
            </div>
            <?php } ?>
          </div>
          <?php	break;		
		   }
		$i++;
      }
?>
        </div>
        <!--form table-->
        <div class="submit">
          <input type="submit" value="Save Changes" class="button-primary" name="Submit" >
        </div>
      </form>
      <!-- reset Button -->
      <div class="reset-option">
        <form enctype="multipart/form-data" method="post" id="settingForm2" name="settingFormx"   >
          <p class="submit">
            <input type="hidden" name="reset2" value="reset2" />
            <input type="submit" value="Set Default" class="button-primary" name="reset"/>
          </p>
        </form>
      </div>
      <!-- End Reset Button -->
    </div>
    <!---#color-->
    <script type="text/javascript">
function Ajax(){
var xmlHttp;
	try{	
		xmlHttp=new XMLHttpRequest();// Firefox, Opera 8.0+, Safari
	}
	catch (e){
		try{
			xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
		}
		catch (e){
		    try{
				xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (e){
				alert("No AJAX!?");
				return false;
			}
		}
	}
xmlHttp.onreadystatechange=function(){
	if(xmlHttp.readyState==4){
		document.getElementById('tab_main').innerHTML=xmlHttp.responseText;
		return false;
	}
}
xmlHttp.send(null);
}
window.onload=function(){
}
</script>
    <!-- =========================================== Start Content Settings =========================================== -->
    <div id="Content">
      <form enctype="multipart/form-data" method="post" id="settingForm3" name="settingForm3" >
        <input type="hidden" name="action" value="save_options3" />
        <?php
	 if(!isset( $_REQUEST['action'])) {$_REQUEST['action']=''; }
	 if(!isset( $_REQUEST['reset3'])) {$_REQUEST['reset3']=''; }
       if ( 'save_options3' == $_REQUEST['action'] )
           {
 	    	foreach ($options3 as $value) {
				if(!isset( $value['id'] )) {$value['id']=''; }
				if(isset( $value['id'] ) && isset($_REQUEST[ $value['id'] ] )){
					update_option( $value['id'], $_REQUEST[ $value['id'] ] ); 
				}
			 }
	     } 
       else if( 'reset3' == $_REQUEST['reset3'] )
         {
 	     foreach ($options3 as $value) 
	     {
			 if(!isset( $value['id'] )) {$value['id']=''; }
			 delete_option( $value['id'] ); 
         }
      }
     ?>
        <div class="form-table">
        <div class="background-title">
          <label>
          <?php echo esc_html__('Content Settings', 'infystore'); ?>
          </label>
        </div>
        <?php
        foreach ($options3 as $value) { 
	    switch ( $value['type'] ) {
		case 'select':
		?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
        <?php } else { ?>
        <div class="even setting_main">
          <?php }?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <div class="content">
            <select class="select_input" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>">
              <?php foreach ($value['options'] as $op_id => $suboption) { ?>
              <option value="<?php echo esc_attr($op_id); ?>" <?php if (get_option($value['id']) == $op_id) { echo ' selected="selected"'; } ?>><?php echo esc_attr($suboption); ?></option>
              <?php } ?>
            </select>
            <span class="description"><?php echo esc_attr($value['description']); ?></span> </div>
        </div>
        <?php
		break;
		case 'textbox-3':?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
        <?php } else { ?>
        <div class="even setting_main">
          <?php }?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <div class="content">
            <input class="regular-text" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo esc_attr(stripslashes(get_option( $value['id'] ))); } else { echo esc_attr(stripslashes($value['std'])); } ?>" />
            <span class="description"><?php echo esc_attr($value['description']); ?></span> </div>
        </div>
        <!--odd-even-->
        <?php
		break;
		case 'Title-1':		
	if(!isset( $value['id'] )) {$value['id'] =''; }
	?>
          <div class="background-title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <?php break;
		  
		case 'textbox-1':?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
        <?php } else { ?>
        <div class="even setting_main">
          <?php }?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <div class="content">
            <?php if ( get_option( $value['id'] ) != "") { 
					$stylecolor =  stripslashes(get_option( $value['id'] )); 
					} else { 
					$stylecolor = stripslashes($value['std']); } 
					$stylecolor = 'style="background-color:#'.$stylecolor.'"'; ?>
            <input class="regular-text1" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo esc_attr(stripslashes(get_option( $value['id'] ))); } else { echo esc_attr(stripslashes($value['std'])); } ?>" <?php echo balanceTags($stylecolor); ?> />
            <span class="description"><?php echo esc_attr($value['description']); echo esc_attr(get_option( $value['id']));?></span> </div>
        </div>
        <!--odd-even-->
        <?php
		break;
		case 'textbox':?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
          <?php } else { ?>
          <div class="even setting_main">
            <?php }?>
            <div class="title">
              <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
            </div>
            <div class="content">
              <input class="regular-text" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo esc_attr(stripslashes(get_option( $value['id'] ))); } else { echo esc_attr(stripslashes($value['std'])); } ?>" />
              <span class="description"><?php echo esc_attr($value['description']); echo esc_attr(get_option( $value['id']));?></span> </div>
          </div>
          <!--odd-even-->
          <?php
		break;
       }
     $i++;
    }
   ?>
        </div>
        <!--form-table-->
        <div class="submit">
          <input type="submit" value="Save Changes" class="button-primary" name="Submit" >
        </div>
      </form>
      <!-- reset Button -->
      <div class="reset-option">
        <form enctype="multipart/form-data" method="post" id="settingForm3" name="settingFormx" >
          <p class="submit">
            <input type="hidden" name="reset3" value="reset3" />
            <input type="submit" value="Set Default" class="button-primary" name="reset"/>
          </p>
        </form>
      </div>
      <!-- End Reset Button -->
    </div>
    <!--Font-->
    <!-- =========================================== Start Footer Settings =========================================== -->
    <div id="Footer">
      <form enctype="multipart/form-data" method="post" id="settingForm4" name="settingForm4"  >
        <input type="hidden" name="action" value="save_options4" />
        <?php
	 if(!isset( $_REQUEST['action'])) {$_REQUEST['action']=''; }
	 if(!isset( $_REQUEST['reset4'])) {$_REQUEST['reset4']=''; }
    if ( 'save_options4' == $_REQUEST['action'] )
     {
 		foreach ($options4 as $value) {
				if(!isset( $value['id'] )) {$value['id']=''; }
				if(isset( $value['id'] ) && isset($_REQUEST[ $value['id'] ] )){
					update_option( $value['id'], $_REQUEST[ $value['id'] ] ); 
				}
		}
	    } 
     else if( 'reset4' == $_REQUEST['reset4'] )
      {
 	    foreach ($options4 as $value) 
	     {
			 if(!isset( $value['id'] )) {$value['id']=''; }
			 delete_option( $value['id'] ); 
        }
      }
    ?>
        <div class="form-table">
        <div class="background-title">
          <label>
          <?php echo esc_html__('Footer Settings', 'infystore'); ?>
          </label>
        </div>
        <?php
     foreach ($options4 as $value) { 
	if(!isset( $value['type'])) {$value['type']=''; }
	switch ( $value['type'] ) {
		case 'select':	?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
        <?php } else { ?>
        <div class="even setting_main">
          <?php }?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <div class="content">
            <select class="select_input" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>">
              <?php foreach ($value['options'] as $op_id => $suboption) { ?>
              <option value="<?php echo esc_attr($op_id); ?>" <?php if (get_option($value['id']) == $op_id) { echo ' selected="selected"'; } ?>><?php echo esc_attr($suboption); ?></option>
              <?php } ?>
            </select>
            <span class="description"><?php echo esc_attr($value['description']); ?></span> </div>
        </div>
        <!--even-Odd-->
        <?php	break; //end Switch
		case 'upload-1': ?>
        <?php if( $i % 2 != 0) { ?>
       	 <div class="odd setting_main">
          	<?php } else { ?>
          		<div class="even setting_main">
            	<?php }?>
            <div class="title">
              <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
              <br />
              <br />
              <?php if(get_option('tm_footer_background_upload') != '') { ?>
              <img src="<?php echo esc_url(get_option('tm_footer_background_upload'));?>" id="slider_backgrounddisplay1" class="thumb"/>&nbsp;<a id="slider_remove_link31" href="javascript:tm_removeImage31();"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/megnor/admin/remove.png" /></a>
              <?php } ?>
              <script>
				function tm_removeImage31() {
					document.getElementById("tm_header_background_upload").value="";
					document.getElementById("slider_backgrounddisplay1").src="";
					document.getElementById("slider_remove_link31").innerHTML="";					
				}
				</script>
            </div>
            <div class="content">
              <input style=" <?php if($value['id'] != 'tm_footer_background_upload') { echo 'display:none' ; } ?> " class="regular-text" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>" type="text" value="<?php echo esc_attr(get_option($value['id'])); ?>" />
              <input id="upload_backgroundimage_button" class="button-primary" type="button" value="Upload Image" />
              <span class="description"><?php echo esc_attr($value['description']); ?></span><br />
            </div>
          </div>
          <!--even odd setting-->
          <?php	break;
		 
		case 'textbox-3':?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
        <?php } else { ?>
        <div class="even setting_main">
          <?php }?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <div class="content">
            <input class="regular-text" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo esc_attr(stripslashes(get_option( $value['id'] ))); } else { echo esc_attr(stripslashes($value['std'])); } ?>" />
            <span class="description"><?php echo esc_attr($value['description']); ?></span> </div>
        </div>
        <!--odd-even-->
        <?php
		break;
		case 'textbox-1':?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
        <?php } else { ?>
        <div class="even setting_main">
          <?php }?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <div class="content">
            <?php if ( get_option( $value['id'] ) != "") { 
					$stylecolor =  stripslashes(get_option( $value['id'] )); 
					} else { 
					$stylecolor = stripslashes($value['std']); } 
					$stylecolor = 'style="background-color:#'.$stylecolor.'"'; ?>
            <input class="regular-text1" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo esc_attr(stripslashes(get_option( $value['id'] ))); } else { echo esc_attr(stripslashes($value['std'])); } ?>" <?php echo balanceTags($stylecolor); ?> />
            <span class="description"><?php echo esc_attr($value['description']); echo esc_attr(get_option( $value['id']));?></span> </div>
        </div>
        <!--odd-even-->
        <?php
		break;
		case 'textbox-2':?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
        <?php } else { ?>
        <div class="even setting_main">
          <?php }?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <div class="content">
            <?php if ( get_option( $value['id'] ) != "") { 
					$stylecolor =  stripslashes(get_option( $value['id'] )); 
					} else { 
					$stylecolor = stripslashes($value['std']); } 
					$stylecolor = 'style="background-color:#'.$stylecolor.'"'; ?>
            <input class="regular-text1" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo esc_attr(stripslashes(get_option( $value['id'] ))); } else { echo esc_attr(stripslashes($value['std'])); } ?>" <?php echo balanceTags($stylecolor); ?> />
            <span class="description"><?php echo esc_attr($value['description']); echo esc_attr(get_option( $value['id']));?></span> </div>
        </div>
        <!--odd-even-->
        <?php
		break;
case 'texture': 
		?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
        <?php } else { ?>
        <div class="even setting_main">
          <?php }
	        $img_dir = get_template_directory_uri().'/images/megnor/admin/';
			?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <div class="content">
            <div class="tm_content">
              <div class="thumb-sel"> <img class="thumb" src="<?php if ( get_option( $value['id'] ) != ""){echo esc_url($img_dir.get_option($value['id']));}else{echo esc_url($img_dir.$value['std']);} ?>" /> <span id="switch" class="close"></span> </div>
              <div class="thumb-list">
                <ul>
                  <?php foreach ($value['options'] as $opt_key => $opt_val) { 
				if ( get_option( $value['id'] ) != "")   {
				if($opt_key == get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";}
				} else {
				if($opt_key == ($value['std'])) { $checked = "checked=\"checked\""; } else { $checked = ""; }
				 } ?>
                  <li>
                    <input type="radio" name="<?php echo esc_attr($value['id']) ?>" value="<?php echo esc_attr($opt_key) ?>" <?php echo esc_attr($checked); ?>/>
                    <img class="thumb" src="<?php echo esc_url($img_dir.$opt_key) ?>" title="<?php echo esc_attr($opt_val) ?>" /> </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
            <span class="description"><?php echo esc_attr($value['description']); ?></span> </div>
        </div>
        <?php break;
	case 'upload': ?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
        <?php } else { ?>
        <div class="even setting_main">
          <?php }?>
          <div class="title">
            <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
          </div>
          <div class="content">
            <input style=" <?php if($value['id'] != 'tm_background_upload') { echo 'display:none' ; } ?> " class="regular-text" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>" type="text" value="<?php echo esc_attr(get_option($value['id'])); ?>" />
            <input id="upload_image_button1" class="button-primary" type="button" value="Upload Image" />
            <span class="description"><?php echo esc_attr($value['description']); ?></span> </div>
        </div>
        <!--even odd setting-->
        <?php	break;
		case 'textbox':?>
        <?php if( $i % 2 != 0) { ?>
        <div class="odd setting_main">
          <?php } else { ?>
          <div class="even setting_main">
            <?php }?>
            <div class="title">
              <label for="<?php echo esc_attr($value['id']); ?>"><?php echo esc_attr($value['label']); ?></label>
            </div>
            <div class="content">
              <input class="regular-text" name="<?php echo esc_attr($value['id']); ?>" id="<?php echo esc_attr($value['id']); ?>" type="text" value="<?php if ( get_option( $value['id'] ) != "") { echo esc_attr(stripslashes(get_option( $value['id'] ))); } else { echo esc_attr(stripslashes($value['std'])); } ?>" />
              <span class="description"><?php echo esc_attr($value['description']); ?></span> </div>
          </div>
          <!--odd-even-->
          <?php
		break;
		   }
		$i++;
      }
?>
        </div>
        <!--form table-->
        <div class="submit">
          <input type="submit" value="Save Changes" class="button-primary" name="Submit" >
        </div>
      </form>
      <!-- reset Button -->
      <div class="reset-option">
        <form enctype="multipart/form-data" method="post" id="settingForm4" name="settingFormx"   >
          <p class="submit">
            <input type="hidden" name="reset4" value="reset4" />
            <input type="submit" value="Set Default" class="button-primary" name="reset"/>
          </p>
        </form>
     </div>
      <!-- End Reset Button -->
    </div>
    <div id="ajax-response"></div>
    <br class="clear">
  </div>
</div>
<div id="ajax-response"></div>