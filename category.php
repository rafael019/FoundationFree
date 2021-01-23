<?php get_template_part('includes/header-page'); ?>
<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
				<div class="post-single py-4">
					<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
					<h2><a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" class="btn btn-success">Leia Mais</a>
				</div>
			<?php endwhile; ?>
		</div>
		<div class="col-lg-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
	<?php echo paginate_links_bs(); ?>
</div>
<?php endif; ?>
<?php get_template_part('includes/footer-page'); ?>