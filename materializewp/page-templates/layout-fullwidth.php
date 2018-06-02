<?php 

/*
  Template Name: Layout - Fullwidth
*/

get_header();
get_template_part('inc/partials/partial', 'navbar'); ?>

  <main role="main" class="container">
    <div class="row">
      <div class="col s12 m12 l12 blog-main">
          <h1 class="blog-post-title"><?php the_title(); ?></h1>
          <?php 
          if( have_posts() ) :
            while(have_posts()) : the_post();
              the_content();
            endwhile;
          endif;
          ?>
        </div>
      </div>
    </div>
  </main>

<?php get_template_part('inc/partials/partial', 'footer');
get_footer(); ?>