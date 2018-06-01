<div class="card-panel">
  <div class="row">
    <div class="col s12 m4 l3 center-align">
      <?php echo get_avatar( get_the_author_meta( 'ID' ), 125 ); ?>
    </div>
    <div class="col s12 m8 l9">
      <h4><?php echo get_the_author_meta( 'display_name' ); ?></h4>
      <p><?php echo get_the_author_meta( 'description' ); ?></p>
      <?php if( get_the_author_meta( 'url' ) ): ?>
        <a href="<?php echo get_the_author_meta( 'url' ); ?>" target="_blank" rel="noopener" title="Visit <?php echo get_the_author_meta( 'first_name' ); ?>'s website."><i class="material-icons">public</i></a>
      <?php endif; ?>
    </div>
  </div>
</div>