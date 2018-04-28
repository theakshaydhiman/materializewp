<?php 

/*
  Template Name: Layout - Left Sidebar, Right Content
*/

  ?>

<?php get_header(); ?>
<?php get_template_part('inc/partials/partials', 'navbar'); ?>

  <main role="main" class="container">
    <div class="row">

      <?php if(is_active_sidebar('sidebar')): ?>
        <div class="col s12 m12 l3">
          <?php dynamic_sidebar('sidebar'); ?>
        </div>
      <?php endif; ?>

      <div class="col s12 m12 l8 offset-l1 blog-main">
        <div class="card-panel">
          <h1 class="blog-post-title"><?php the_title(); ?></h1>
          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
              <?php the_content(); ?>
          <?php endwhile; ?> 
          <?php else : ?>
            <p><?php __('No Pages Found') ?></p>
          <?php endif; ?>
        </div>
      </div>
      
    </div>
  </main>

<?php get_template_part('inc/partials/partials', 'footer'); ?>
<?php get_footer(); ?>