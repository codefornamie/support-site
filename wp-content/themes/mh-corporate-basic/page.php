<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="mh-wrapper clearfix">
    <div class="mh-content <?php mh_content_class(); ?>">
    	<?php mh_before_page_content(); ?>
		<?php get_template_part('content', 'page'); ?>
		<?php endwhile; ?>
			<?php comments_template(); ?>
        <?php endif; ?>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>