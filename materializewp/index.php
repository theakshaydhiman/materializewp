<?php get_header(); ?>
<?php get_template_part('inc/partials/partials', 'navbar'); ?>

  <main role="main" class="container">
    <div class="row">
      <div class="col s12 m12 l8 blog-main">
        <?php if( have_posts() ) : ?>
          <h1><?php single_post_title(); ?></h1>
          <?php while(have_posts()) : the_post(); ?>
            <?php get_template_part('post-templates/content', get_post_format()); ?>
          <?php endwhile; ?>

          <?php materializewp_pagination(); ?>

        <?php else : ?>
          <p><?php __('No Posts Found') ?></p>
        <?php endif; ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </main>

<?php get_template_part('inc/partials/partials', 'footer'); ?>
<?php get_footer(); ?>