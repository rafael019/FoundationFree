<?php get_template_part('includes/header-page'); ?>
<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<?php if(have_posts()): while(have_posts()): the_post(); 
				get_template_part('template-parts/content', get_post_format());
			endwhile; ?>
		</div>
		<div class="col-lg-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
	<?php echo paginate_links_bs(); ?>
</div>
<?php endif; ?>
<?php get_template_part('includes/footer-page'); ?>