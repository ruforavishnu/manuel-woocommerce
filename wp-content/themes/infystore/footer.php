<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage TemplateMela
 * @since TemplateMela 1.0
 */
?>
<?php tm_content_after(); ?>
</div>
<!-- .main-content-inner -->
</div>
<!-- .main_inner -->
</div>
<!-- #main -->
<?php tm_footer_before(); ?>
<footer id="colophon" class="site-footer" role="contentinfo">
	   <?php if (is_active_sidebar('footer-top-area')) : ?><div class="footer-top-newsletter">  <div class="footer-top-inner theme-container"><?php dynamic_sidebar('footer-top-area'); ?></div></div><?php endif; ?>
  <div class="footer-top">
  <div class="theme-container">
  	<?php if (is_active_sidebar('footer-top-cms')) : ?><div class="footer-top-cms-wrapper"><?php dynamic_sidebar('footer-top-cms'); ?></div><?php endif; ?>
    <?php tm_footer_inside(); ?>
    <?php get_sidebar('footer'); ?>
	</div>
	<!-- .footer-bottom -->
  </div>
		<div class="footer-bottom">	
			<div class="theme-container">
			<div class="footer-bottom-left">
				<?php if ( is_active_sidebar( 'sixth-footer-widget-area' ) ) : ?>
				<div class="footer-bottom-left"><?php dynamic_sidebar( 'sixth-footer-widget-area' ); ?></div>
			<?php endif; ?>			   
					  </div>
					  <div class="site-info">  <?php echo esc_html__( 'Copyright', 'infystore' ); ?> &copy; <?php echo esc_attr(date('Y')); ?> <a href="<?php echo esc_url(get_option('tm_footer_link')); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php echo esc_attr(stripslashes(get_option('tm_footer_slog')))?>
						</a>
						<?php do_action( 'tm_credits' ); ?>
					  </div>
			<?php if ( is_active_sidebar( 'payment-widget-area' ) ) : ?>
				<div class="footer-bottom-right"><?php dynamic_sidebar( 'payment-widget-area' ); ?></div>
			<?php endif; ?>
		  </div>
    </div>
</footer>
<!-- #colophon -->
<?php tm_footer_after(); ?>
</div>
<!-- #page -->
<?php tm_go_top(); ?>
<?php tm_get_widget('before-end-body-widget'); ?>
<?php wp_footer(); ?>
</body>
</html>