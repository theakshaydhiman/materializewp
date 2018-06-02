<?php if(is_active_sidebar('header-one')): ?>
  <header class="grey lighten-3 header-widget-1">
    <div class="container">
      <?php dynamic_sidebar('header-one'); ?>
    </div>
  </header>
<?php endif; ?>

<?php if(is_active_sidebar('header-two')): ?>
  <header class="grey lighten-3 header-widget-2">
    <div class="container">
      <?php dynamic_sidebar('header-two'); ?>
    </div>
  </header>
<?php endif; ?>

<?php if(is_active_sidebar('header-three')): ?>
  <header class="grey lighten-3 header-widget-3">
    <div class="container">
      <?php dynamic_sidebar('header-three'); ?>
    </div>
  </header>
<?php endif; ?>

<?php if(is_active_sidebar('header-four')): ?>
  <header class="grey lighten-3 header-widget-4">
    <div class="container">
      <?php dynamic_sidebar('header-four'); ?>
    </div>
  </header>
<?php endif; ?>