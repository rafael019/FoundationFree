<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php the_custom_logo(); ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php 
        wp_nav_menu( array(
          'menu'            => 'header',
          'theme_location'  => 'header',
          'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
          'container'       => 'ul',
          'menu_class'      => 'navbar-nav ml-auto',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
      ));
      get_search_form();
      ?>
    </div>
  </div>
</nav>