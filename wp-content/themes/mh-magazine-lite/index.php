<?php get_header(); ?>
<div class="wrapper clearfix">
        <div id='top-image'>
            <img src='http://www.namie-tablet.org/wp-content/uploads/2015/04/cropped-img_main.png' width='800px' style='margin-bottom:20px'/>
        </div>
	<section class="content <?php mh_content_class(); ?>">
		<?php mh_before_page_content(); ?>
		<?php if (category_description()) { ?>
			<section class="cat-desc">
				<?php echo category_description(); ?>
			</section>
		<?php } ?>
		<?php mh_loop_content(); ?>
	</section>
	<aside class="sidebar <?php mh_sb_class(); ?>">
    	<?php dynamic_sidebar('sidebar'); ?>
	</aside>
</div>
<?php get_footer(); ?>
