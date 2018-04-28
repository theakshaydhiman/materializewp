<?php 

/*
  Template Name: Layout - Left Content, Right Sidebar
*/

  ?>

<?php get_header(); ?>
<?php get_template_part('inc/partials/partials', 'navbar'); ?>

  <main role="main" class="container">
    <div class="row">
      <div class="col s12 m12 l8 blog-main">
        <h1 class="blog-post-title"><?php the_title(); ?></h1>
        <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?> 
        <?php else : ?>
          <p><?php __('No Pages Found') ?></p>
        <?php endif; ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </main>

<?php get_template_part('inc/partials/partials', 'footer'); ?>
<?php get_footer(); ?>