<?php get_header(); ?>
    <main role="main" class="container">
      <div class="row">
        <div>
          <h1 class="blog-post-title">
            <?php the_title(); ?>
          </h1>
            <?php while(have_posts()) : the_post(); ?>
              <?php the_content(); ?>
          	<?php endwhile; ?> 
        </div><!-- /.blog-main -->
      </div><!-- /.row -->
    </main><!-- /.container -->
<?php get_footer(); ?>