<?php get_header(); ?>
  <main role="main" class="container">
    <div class="row">
      <div class="col s12 m12 l8 blog-main">
        <?php if(have_posts()) : ?>
          <header class ="page-header">
            <?php the_archive_title('<h1 class="page-title">', '</h1>');
                the_archive_description('<div class="taxonomy-description">', '</div>');
            ?>
          </header>
          <?php while(have_posts()) : the_post(); ?>
            <?php get_template_part('content', 'archive'); ?>
        <?php endwhile; ?> 
        <?php else : ?>
          <p><?php __('No Posts Found') ?></p>
        <?php endif; ?>
        </div><!-- /.blog-main -->
        <?php get_sidebar(); ?>
      </div><!-- /.row -->
    </main><!-- /.container -->
<?php get_footer(); ?>