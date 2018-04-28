<?php 

/*
  Template Name: Blank - No Container | No Header, No Footer
*/

  ?>

<?php get_header(); ?>

  <main role="main">
    <div class="row">
      <div class="col s12 m12 l12 blog-main">
        <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
          <?php else : ?>
          <p><?php __('No Pages Found') ?></p>
        <?php endif; ?>
      </div>
    </div>
  </main>

<?php get_footer(); ?>