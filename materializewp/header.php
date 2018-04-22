<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="Akshay Dhiman">
    <link rel="icon" href="">
    <title>
      <?php bloginfo('name'); ?><?php wp_title('|'); ?>
    </title>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header>
      <nav>
        <div class="nav-wrapper container">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        
          <div class="right">
            <?php wp_nav_menu(array(
              'menu' => 'primary',
              'theme_location' => 'primary',
              'menu_class' => 'hide-on-med-and-down',
              'walker' => new Walker_Nav_Primary(),
              )); ?>
          </div>


        </div>
      </nav>
      <?php wp_nav_menu(array(
        'menu' => 'primary',
//              'theme_location' => 'primary',
        'menu_class' => 'sidenav',
        'menu_id' => 'mobile-demo',
        'walker' => new Walker_Nav_Primary(),
        )); ?>

    </header>