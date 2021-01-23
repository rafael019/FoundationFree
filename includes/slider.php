<div class="slider-content-home">
	<div class="container">
		<div class="owl-carousel">
			<?php $get_posts = get_posts(array('posts_per_page'=>-1,'post-type'=>'sliders')); ?>
			<?php if ($get_posts) : ?>
				<?php foreach ($get_posts as $slider) : ?>
					<?php 
						$link = get_post_meta($slider->ID, 'link', true);
						$abrir_em_outra_aba = get_post_meta($slider->ID, 'abrir_em_outra_aba', true);
					?>
					<div class="slider-content">
						<?php if ($link): ?>
							<a href="<?php echo $link; ?>" title="<?php echo $slider->post_title; ?>" <?php echo ($abrir_em_outra_aba ? 'target="_blank"':'' ); ?> >
						<?php endif;?>
							<?php echo get_the_post_thumbnail($slider->ID, 'full', ''); ?>
						<?php if ($link): ?>
							</a>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			<?php endif; ?>
		</div>
	</div>
</div>