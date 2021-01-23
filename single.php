<?php get_template_part('includes/header-page'); ?>
<?php if(have_posts()) :while (have_posts()): the_post(); ?>
<div class="container py-3">
	<div class="row">
		<div class="col-lg-8">
			<?php the_content(); ?>
		</div>
		<div class="col-lg-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php 
endwhile;
next_posts_link('<<< Anterior');
previous_posts_link ('Proximo >>>') ;
else: endif; ?>
<?php echo paginate_links(); ?>
<?php get_template_part('includes/footer-page'); ?>
