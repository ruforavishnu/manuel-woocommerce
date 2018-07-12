<?php
/* Template Name: About */
?>
<?php get_header(); 
$tm_content_position = tm_content_position();
?>
<!-- Start blog-list -->
<div id="main-content" class="main-content about-page <?php echo esc_attr(tm_sidebar_position()); ?>">
<div id="primary" class="content-area">
<div class="page-title"><div class="page-title-inner"><h3 class="entry-title-main"><?php  the_title();?></h3>
	<?php tm_breadcrumbs(); ?></div>
	</div>
    <div id="content" class="site-content" role="main">
     <?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
					// Include the page content template.
					get_template_part( 'content', 'page' ); ?>
      <?php endwhile;
			?>
</div>
<!-- End blog-list -->
<?php get_footer(); ?>