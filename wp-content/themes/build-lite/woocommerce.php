<?php get_header(); ?>
<div class="container">
	<section class="site-main">
		<div class="site-aligner">
			<?php woocommerce_content(); ?>
		</div><!-- site-aligner -->
	</section>
	<?php get_sidebar();?>
	<div class="clear"></div>
</div><!-- content -->
<?php get_footer(); ?>