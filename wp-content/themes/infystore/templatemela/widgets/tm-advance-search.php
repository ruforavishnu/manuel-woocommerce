<?php
/**
 * TemplateMela
 * @copyright  Copyright (c) 2010 TemplateMela. (http://www.templatemela.com)
 * @license    http://www.templatemela.com/license/
 */
?>
<?php  // Reference:  http://codex.wordpress.org/Widgets_API

class TmAdvanceSearch extends WP_Widget
{

    function __construct(){
		$widget_settings = array('description' => 'Advanced Search Widget', 'classname' => 'widgets-advancedsearch');
		parent::__construct(false,$name='TM - Advance Search Widget',$widget_settings);
    }
    function widget($args, $instance){
		extract($args);
		$title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title']);
			echo balanceTags($before_widget);
			echo balanceTags($before_title);
			if($title)
			    echo balanceTags($title);
			echo balanceTags($after_title); 	?>
		<form method="get" class="woocommerce-product-search" action="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>">
			    <select class="orderby" name="product_cat">
				<?php  	
				
							$taxonomy     = 'product_cat';
							  $orderby      = 'name';  
							  $show_count   = 0;      // 1 for yes, 0 for no
							  $pad_counts   = 0;      // 1 for yes, 0 for no
							  $hierarchical = 1;      // 1 for yes, 0 for no  
							  $title        = '';  
							  $empty        = 0;	
					
							 $args = array(
								 'taxonomy'     => $taxonomy,
								 'orderby'      => $orderby,
								 'show_count'   => $show_count,
								 'pad_counts'   => $pad_counts,
								 'hierarchical' => $hierarchical,
								 'title_li'     => $title,
								 'hide_empty'   => $empty
						  );
							$all_categories = get_categories( $args ); ?>
								<option value="<?php echo esc_html_e( '', 'infystore' );?>" selected="selected"><?php echo esc_html_e( 'All Categories', 'infystore' ); ?></option>
						<?php foreach ($all_categories as $cat) {   ?>
								<option value="<?php echo esc_attr($cat->slug); ?>" <?php if(isset($_GET['product_cat']) && $_GET['product_cat'] == $cat->slug){ echo esc_attr("selected='selected'");  } ?>><?php echo esc_attr($cat->name);?></option>
						<?php } ?>
				</select>    
				<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search Products&hellip;', 'placeholder', 'infystore' ); ?>" value="<?php echo esc_attr(get_search_query()); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'infystore' ); ?>" />
				<input type="hidden" name="post_type" value="product" />
				<input type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'infystore' ); ?>" />
			</form>
	<?php echo balanceTags($after_widget);
	}
	function update($new_instance, $old_instance){
		$instance = $old_instance;			
		$instance['title'] = strip_tags($new_instance['title']);
		return $instance;
	}
    function form($instance){
		$instance = wp_parse_args( (array) $instance, array(
		'title'=>'Product Search by Category',
		 ) );			
		$title = esc_attr($instance['title']);
		?>
			<p><label for="<?php echo esc_attr($this->get_field_id('title'));?>"><?php esc_html_e('Title:', 'infystore'); ?></label><input class="widefat" id="<?php echo esc_attr($this->get_field_id('title'));?>" name="<?php echo esc_attr($this->get_field_name('title'));?>" type="text" value="<?php echo esc_attr($title);?>" /></p>
	<?php }

}

if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) :
	add_action('widgets_init', create_function('', 'return register_widget("TmAdvanceSearch");'));
endif;
// end ServicesWidget

?>