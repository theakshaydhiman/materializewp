<footer class="page-footer grey lighten-4">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <!-- Add widget -->
      </div>
      <div class="col l6 s12">
        <?php wp_nav_menu(array('theme_location' => 'secondary')); ?>
      </div>
    </div>
  </div>
  <div class="footer-copyright grey darken-3 grey-text text-lighten-1">
    <div class="container">
      <p>&copy; <?php echo Date('Y'); ?> <?php bloginfo('name'); ?></p>
    </div>
  </div>
</footer>