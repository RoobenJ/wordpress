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
    <div class="blog-masthead">
      <div class="container">
     <nav class="nav blog-nav">
<?php bootstrap_nav(); ?>
</nav>
      </div>
    </div>

<div class="blog-header">
      <div class="container">
        <h1 class="blog-title"><?php if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
        }
        ?><?php bloginfo('name'); ?></h1><p class="lead blog-description"><?php bloginfo('description'); ?></p>
        
      </div>
    </div>