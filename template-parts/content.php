<div class="post-single py-4" post-id="<?php the_ID(); ?>" >
    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>" class="img-fluid">
    <h2><a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p>Data: <?php echo get_the_date(''); ?></p>
    <p>Autor: <?php the_author_posts_link(); ?></pData:>
    <p>Categoria: <?php the_category(' ')?></p>
    <p><?php the_tags('Tags: ',', '); ?></p>
    <?php the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>" class="btn btn-success">Leia Mais</a>
</div>