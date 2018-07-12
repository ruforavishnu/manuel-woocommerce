<?php
/**
 * TemplateMela
 * @copyright  Copyright (c) 2010 TemplateMela. (http://www.templatemela.com)
 * @license    http://www.templatemela.com/license/
 */
?>
<?php  // Reference:  http://codex.wordpress.org/Widgets_API
class TmBrandList extends WP_Widget
{
   function __construct(){
		$widget_settings = array('description' => 'Brand List Widget', 'classname' => 'widgets-brand');
		parent::__construct(false,$name='TM - Brand Widget',$widget_settings);
    }
    function widget($args, $instance){
		extract($args);
		$title = apply_filters('widget_title', empty($instance['title']) ? '' : $instance['title']);
			echo balanceTags($before_widget);
			echo balanceTags($before_title);
			if($title)
			echo balanceTags($title);
			echo balanceTags($after_title); 
		$terms = get_terms( 'product_brand'); ?>	
		<ul class="toggle-block">
			<?php	foreach ( $terms as $term ) { ?>
			<li><a href="<?php echo get_term_link( $term ); ?>"><?php echo esc_attr($term->name);?></a>&nbsp;<mark class="count">(<?php echo esc_attr($term->count); ?>)</mark></li>
			<?php } ?>		
		</ul>
	<?php echo balanceTags($after_widget);
	}
	function update($new_instance, $old_instance){
		$instance = $old_instance;			
		$instance['title'] = strip_tags($new_instance['title']);
		return $instance;
	}
    function form($instance){
		$instance = wp_parse_args( (array) $instance, array(
		'title'=>'Brands',
		) );			
		$title = esc_attr($instance['title']);
	?>
			<p><label for="<?php echo esc_attr($this->get_field_id('title'));?>"><?php esc_html_e('Title:', 'infystore'); ?></label><input class="widefat" id="<?php echo esc_attr($this->get_field_id('title'));?>" name="<?php echo esc_attr($this->get_field_name('title'));?>" type="text" value="<?php echo esc_attr($title);?>" /></p>
	<?php }
}
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) :
	add_action('widgets_init', create_function('', 'return register_widget("TmBrandList");'));
endif;
?>