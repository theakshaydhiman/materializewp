<footer class="page-footer grey lighten-4">
	<div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h3>Subscribe</h3>
        <p class="grey-text text-darken-2">You will receive exclusive content that can't be found anywhere.</p>
    <!--    <button class="waves-effect waves-light btn">Subscribe</button> 
    -->
      </div>
      <div class="col l4 offset-l2 s12">
        <h3>Explore</h3>
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
<?php wp_footer(); ?>
</body>
</html>