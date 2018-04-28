<?php get_header(); ?>
<?php get_template_part('inc/partials/partials', 'navbar'); ?>

  <main role="main" class="container">
    <div class="row">
      <div class="col s12 m12 l8 blog-main">
        <?php if(have_posts()) : ?>
          <header class ="page-header">
            <?php the_archive_title('<h1 class="page-title">', '</h1>');
                the_archive_description('<div class="taxonomy-description">', '</div>');
            ?>
          </header>
          <?php while(have_posts()) : the_post();
            get_template_part('post-templates/content', 'archive');
            endwhile;
            else : ?>
              <p><?php __('No Posts Found') ?></p>
        <?php endif; ?>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </main>

<?php get_template_part('inc/partials/partials', 'footer'); ?>
<?php get_footer(); ?>