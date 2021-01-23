<?php get_template_part('includes/header-page'); ?>
<div class="container py-3">
	<div class="row">
		<div class="col-lg-12">
			<?php while(have_posts()): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</div>
</div>
<?php get_template_part('includes/footer-page'); ?>