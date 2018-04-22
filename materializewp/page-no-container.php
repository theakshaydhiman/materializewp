<?php 

/*
  Template Name: Page No Container
*/

  ?>

<?php get_header(); ?>
  <main role="main">
    <div class="row">
      <div class="col s12 m12 l12 blog-main">
        <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
            <?php get_template_part('content', get_post_format()); ?>
        <?php endwhile; ?> 
        <?php else : ?>
          <p><?php __('No Pages Found') ?></p>
        <?php endif; ?>
      </div>
    </div>
  </main>
<?php get_footer(); ?>