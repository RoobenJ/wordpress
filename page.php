<?php get_header(); ?>
    

    <div class="container">

      <div class="row">

        <div class="col-sm-8 blog-main">


          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
          <div class="blog-post">
            <h2 class="blog-post-title">
            <?php the_title(); ?>
              
            </h2>
            <?php the_content(); ?>
          </div><!-- /.blog-post -->
            <?php endwhile; ?>
            <?php else : ?>
            <p><?php __('No Posts Found'); ?></p>
          <?php endif; ?>

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->
<?php get_footer(); ?>