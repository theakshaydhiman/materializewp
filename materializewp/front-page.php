<?php get_header(); ?>
<?php get_template_part('inc/partials/partials', 'navbar'); ?>

  <main class="container">
    <h1 class="blog-post-title"><?php the_title(); ?></h1>
    <?php while(have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>
  </main>

<?php get_template_part('inc/partials/partials', 'footer'); ?>
<?php get_footer(); ?>