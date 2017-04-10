<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <title><?php bloginfo('name'); ?> |
    <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet">
  <?php wp_head(); ?>
  </head>

  <body>
    <nav class="navbar navbar-toggleable-md">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <hr class="hidden-lg-up">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'header-menu',
            'container'      => false,
            'menu_class'     => 'nav navbar-nav',
            'fallback_cb'    => '__return_false',
            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'          => 2,
            'walker'         => new wp_bootstrap_navwalker()
        ) );
        ?>
    </div>
</nav>

