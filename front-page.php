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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <?php wp_head(); ?>
  <style>
  	.showcase{
  		background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/showcase.jpg') ?>) no-repeat center ;
  	}  	
  </style>
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
	<section class="showcase">
<div class="container">
<h1><?php echo get_theme_mod('showcase_heading', 'Custom Bootstrap Wordpress Theme'); ?></h1>
<p><?php echo get_theme_mod('showcase_text', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.'); ?></p>
<a href="<?php echo get_theme_mod('btn_url', '#'); ?>"class="btn btn-primary btn-lg"><?php echo get_theme_mod('btn_text', 'Read More'); ?></a>
</div>
</section>
<section class="boxes">
  <div class="container2">
    <div class="row">
      <div class="col-md-4">
          <?php if(is_active_sidebar('box1')) : ?>
            <?php dynamic_sidebar('box1'); ?>
          <?php endif; ?>
      </div>

      <div class="col-md-4">
          <?php if(is_active_sidebar('box2')) : ?>
            <?php dynamic_sidebar('box2'); ?>
          <?php endif; ?>
      </div>

      <div class="col-md-4">
          <?php if(is_active_sidebar('box3')) : ?>
            <?php dynamic_sidebar('box3'); ?>
          <?php endif; ?>
      </div>
    </div>
  </div>
</section>
   <footer class="blog-footer">
      <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
      <p>
      <a href="http://localhost/wordpress/wp-admin/">Admin Login</a>
      ||
        <a href="#">Back to top</a>
      </p>
    </footer>
    <?php wp_footer(); ?>


<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

  </body>
</html>