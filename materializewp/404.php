<?php get_header();
get_template_part('inc/partials/partial', 'navbar'); ?>

  <main role="main" class="container">
    <div>
      <h1>Error 404</h1>
      <p>If you were looking for nothing, congratulations you've found it!</p>
      <p>If that's not the case, how about search it?</p>
      <?php get_search_form(); ?>
      <br>
    </div>
  </main>

<?php get_template_part('inc/partials/partial', 'footer');
get_footer(); ?>