<?php get_header();
get_template_part('inc/partials/partial', 'navbar'); ?>

  <main role="main" class="container">
    <div class="row">
      <div class="col s12 m12 l8 offset-l2 blog-main">
        <?php
          if(have_posts()) :
            while(have_posts()) : the_post();
              get_template_part('post-templates/content', get_post_format());
            endwhile;
          else : ?>
            <p><?php __('No Posts Found') ?></p>
        <?php endif; ?>
      </div>
      <?php /* get_sidebar(); */ ?>
    </div>
  </main>

<?php get_template_part('inc/partials/partial', 'footer');
get_footer(); ?>