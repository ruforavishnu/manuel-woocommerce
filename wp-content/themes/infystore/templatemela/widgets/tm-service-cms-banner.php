<?php
/**
 * TemplateMela
 * @copyright  Copyright (c) 2010 TemplateMela. (http://www.templatemela.com)
 * @license    http://www.templatemela.com/license/
 */
?><?php  // Reference:  http://codex.wordpress.org/Widgets_API
class ServiceCMSBannerWidget extends WP_Widget
{
    function __construct(){
		$widget_settings = array('description' => 'Service CMS Banner Widget', 'classname' => 'widgets-service-cms-banner');
		parent::__construct(false,$name='TM - Service CMS Banner Widget',$widget_settings);
    }
    function widget($args, $instance){
		extract($args);
		$title = empty($instance['title']) ? '' : $instance['title'];
		$description = empty($instance['description']) ? '' : $instance['description'];
		$icon = empty($instance['icon']) ? '' : $instance['icon'];
		$iconcolor = empty($instance['iconcolor']) ? '' : $instance['iconcolor'];		
		$classname = empty($instance['classname']) ? '' : $instance['classname'];
		$linktext = empty($instance['linktext']) ? '' : $instance['linktext'];
		echo $before_widget;	
	?> 
	<div class="service-cms-banner-list">
	<a href="<?php if($linktext == ""): echo esc_url(home_url( '/' )); else:?><?php echo esc_url($linktext); endif;?>">
		
		<div class="service-icon">
			<i class="fa <?php echo esc_attr($icon); ?>" style="color:#<?php echo esc_attr($iconcolor); ?>"></i>
		</div>
	
		<div class="service-details">
			<?php if($title) : ?>
			<div class="title"><?php echo esc_attr($title); ?></div>
			<?php endif; ?>	
			
			<?php if($description) : ?>
			<div class="description"><?php echo esc_attr($description);  ?></div>
			<?php endif; ?>	
		</div>	
		</a>
	</div>

		<?php		
		echo $after_widget;				
	}
    function update($new_instance, $old_instance){
		$instance = $old_instance;			
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['title'] =($new_instance['title']);
		$instance['description'] =($new_instance['description']);
		$instance['icon'] =($new_instance['icon']);
		$instance['iconcolor'] =($new_instance['iconcolor']);
		$instance['classname'] =($new_instance['classname']);
		$instance['linktext'] =($new_instance['linktext']);
		return $instance;
	}
    function form($instance){
		$instance = wp_parse_args( (array) $instance, array(
		'title'=>'Title of Service',
		'description'=>'Description of Service',
		'icon'=>'Icon',
		'iconcolor'=>'Icon Color',
		'classname'=>'Classname',
		'linktext'=>'Static Link') );			
		$title = esc_attr($instance['title']);
		$title	= esc_attr($instance['title']);	
		$description	= esc_attr($instance['description']);
		$icon	= esc_attr($instance['icon']);
		$iconcolor	= esc_attr($instance['iconcolor']);
		$classname	= esc_attr($instance['classname']);
		$linktext	= esc_attr($instance['linktext']);	
		?>
		<p><label for="<?php echo esc_attr($this->get_field_id('title'));?>"><?php esc_html_e('Title:', 'infystore'); ?></label><input class="widefat" id="<?php echo esc_attr($this->get_field_id('title'));?>" name="<?php echo esc_attr($this->get_field_name('title'));?>" type="text" value="<?php echo esc_attr($title);?>" />  </p>
		
		<p><label for="<?php echo esc_attr($this->get_field_id('description'));?>"><?php esc_html_e('Description:', 'infystore'); ?></label><input class="widefat" id="<?php echo esc_attr($this->get_field_id('description'));?>" name="<?php echo esc_attr($this->get_field_name('description'));?>" type="text" value="<?php echo esc_attr($description);?>"  /></p>
		
		
		<p><label for="<?php echo esc_attr($this->get_field_id('icon'));?>"><?php esc_html_e('Icon', 'infystore'); ?></label><input class="widefat" id="<?php echo esc_attr($this->get_field_id('icon'));?>" name="<?php echo esc_attr($this->get_field_name('icon'));?>" type="text" value="<?php echo esc_attr($icon);?>" /></p>

		<p><label for="<?php echo esc_attr($this->get_field_id('iconcolor'));?>"><?php esc_html_e('Icon Color', 'infystore'); ?></label><input class="widefat" id="<?php echo esc_attr($this->get_field_id('iconcolor'));?>" name="<?php echo esc_attr($this->get_field_name('iconcolor'));?>" type="text" value="<?php echo esc_attr($iconcolor);?>" /></p>
	
		<p><label for="<?php echo esc_attr($this->get_field_id('classname'));?>"><?php esc_html_e('Class Name', 'infystore'); ?></label><input class="widefat" id="<?php echo esc_attr($this->get_field_id('classname'));?>" name="<?php echo esc_attr($this->get_field_name('classname'));?>" type="text" value="<?php echo esc_attr($classname);?>" /></p>
		
				<p><label for="<?php echo esc_attr($this->get_field_id('linktext'));?>"><?php esc_html_e('Link Text', 'infystore'); ?></label><input class="widefat" id="<?php echo esc_attr($this->get_field_id('linktext'));?>" name="<?php echo esc_attr($this->get_field_name('linktext'));?>" type="text" value="<?php echo esc_attr($linktext);?>" /></p>
	
		<?php
	}
}
add_action('widgets_init', create_function('', 'return register_widget("ServiceCMSBannerWidget");'));
?>