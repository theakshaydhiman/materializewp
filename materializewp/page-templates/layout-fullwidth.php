<?php 

/*
  Template Name: Layout - Fullwidth
*/

  ?>

<?php get_header(); ?>
<?php get_template_part('inc/partials/partials', 'navbar'); ?>

  <main role="main" class="container">
    <div class="row">
      <div class="col s12 m12 l12 blog-main">
        <h1 class="blog-post-title"><?php the_title(); ?></h1>
          <div class="post-thumb">
            <?php if(has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('large', array( 'class' => 'post-thumb' )); ?>
            <?php endif; ?>
          </div>
        <?php while(have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?> 
      </div>
    </div>
  </main>

<?php get_footer(); ?>