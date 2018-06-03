<?php if(is_active_sidebar('footer-four')): ?>
  <footer class="footer-widget-4">
    <div class="container">
      <?php dynamic_sidebar('footer-four'); ?>
    </div>
  </footer>
<?php endif; ?>

<?php if(is_active_sidebar('footer-three')): ?>
  <footer class="footer-widget-3">
    <div class="container">
      <?php dynamic_sidebar('footer-three'); ?>
    </div>
  </footer>
<?php endif; ?>

<?php if(is_active_sidebar('footer-two')): ?>
  <footer class="footer-widget-2">
    <div class="container">
      <?php dynamic_sidebar('footer-two'); ?>
    </div>
  </footer>
<?php endif; ?>

<?php if(is_active_sidebar('footer-one')): ?>
  <footer class="footer-widget-1">
    <div class="container">
      <?php dynamic_sidebar('footer-one'); ?>
    </div>
  </footer>
<?php endif; ?>

<!-- Footer copyright area -->
<footer class="page-footer">
  <div class="page-footer__content">
    <div class="container">
      <p>&copy; <?php echo Date('Y'); ?> <?php bloginfo('name'); ?><span class="right"><small>Powered by <a href="https://github.com/theakshaydhiman/materializewp" rel="noopener" target="_blank">MaterializeWP</a></small></span></p>
    </div>
  </div>
</footer>