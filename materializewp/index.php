<?php get_header(); ?>
    <main role="main" class="container">
      <div class="row">
        <div class="col s12 m12 l8 blog-main">
          <?php if(have_posts()) : ?>
                      <header class ="page-header">
            <?php the_archive_title('<h1 class="page-title">', '</h1>');
                the_archive_description('<div class="taxonomy-description">', '</div>');
            ?>
          </header>
            <?php while(have_posts()) : the_post(); ?>
              <?php get_template_part('content', get_post_format()); ?>
          <?php endwhile; ?> 

            <ul class="pagination">
              <li class="waves-effect"><a href="<?php echo get_previous_posts_page_link(); ?>"><i class="material-icons">chevron_left</i></a></li>
              <li class="active"><a href="#!">1</a></li>
              <li class="waves-effect"><a href="#!">2</a></li>
              <li class="waves-effect"><a href="#!">3</a></li>
              <li class="waves-effect"><a href="#!">4</a></li>
              <li class="waves-effect"><a href="#!">5</a></li>
              <li class="waves-effect"><a href="<?php echo get_next_posts_page_link(); ?>"><i class="material-icons">chevron_right</i></a></li>
            </ul>

                    <?php
                    global $wp_query;

                    $big = 999999999; // need an unlikely integer

                    echo paginate_links( array(
                      'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                      'format' => '?paged=%#%',
                      'current' => max( 1, get_query_var('paged') ),
                      'total' => $wp_query->max_num_pages
                    ) );
                    ?>

          <?php else : ?>
            <p><?php __('No Posts Found') ?></p>

          <?php endif; ?>
        </div><!-- /.blog-main -->
        <?php get_sidebar(); ?>
      </div><!-- /.row -->
    </main><!-- /.container -->
<?php get_footer(); ?>

<!-- 

paginate_link();

i = current page number
$total = $wp_query->max_num_pages;

for (i; i<=total; i++) {
a href=
}
  -->