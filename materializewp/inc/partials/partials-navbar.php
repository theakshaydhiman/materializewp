<header>
  <nav>
    <div class="nav-wrapper container">
    <?php if ( function_exists( 'the_custom_logo' ) ):
      if ( has_custom_logo() ) :
        the_custom_logo();
      else : ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a>
      <?php endif; endif; ?>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    
      <div class="right">
        <?php wp_nav_menu(array(
          'menu' => 'primary',
          'theme_location' => 'primary',
          'menu_class' => 'hide-on-med-and-down',
          'walker' => new MWP_Walker_Nav_Primary(),
          )); ?>
      </div>

    </div>
  </nav>
  <?php wp_nav_menu(array(
    'menu' => 'primary',
    'theme_location' => 'primary', // sub level does not work
    'menu_class' => 'sidenav',
    'menu_id' => 'mobile-demo',
    'walker' => new MWP_Walker_Nav_Primary(),
    )); ?>

</header>

<!-- Include header partial for header widgets. -->
<?php get_template_part('inc/partials/partials', 'header'); ?>