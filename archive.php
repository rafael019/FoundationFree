<?php 
/* 
* Página responsável por filtrar posts por categorias, tags ou data de postagem
* Pode ser customizada como desejar
*/
get_header();
the_archive_title('<h1>',"</h1>");
the_archive_description( ); ?>
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