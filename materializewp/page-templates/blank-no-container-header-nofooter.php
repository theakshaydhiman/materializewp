<?php 

/*
  Template Name: Blank - No Container | Header, No Footer
*/

get_header();
get_template_part('inc/partials/partial', 'navbar'); ?>

  <main role="main">
    <div class="row">
      <div class="col s12 m12 l12 blog-main">
        <?php 
          if( have_posts() ) :
            while(have_posts()) : the_post();
              the_content();
            endwhile;
          else : 
          ?>
          <p><?php __('No Pages Found') ?></p>
        <?php endif; ?>
      </div>
    </div>
  </main>

<?php get_footer(); ?>