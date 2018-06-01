<div class="card">
  <div class="card-content grey lighten-5">
    <div class="row">
      <div class="col s12 m4 l3 center-align">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 125 ); ?>
      </div>
      <div class="col s12 m8 l9">
        <h4 class="h5"><?php echo get_the_author_meta( 'display_name' ); ?></h4>
        <p class="grey-text text-darken-2"><?php echo get_the_author_meta( 'description' ); ?></p>
      </div>
    </div>
  </div>
  <div class="card-action grey lighten-4">
    <?php if( get_the_author_meta( 'url' ) ): ?>
      <a href="<?php echo get_the_author_meta( 'url' ); ?>" class="waves-effect red-text text-darken-1" target="_blank" rel="noopener"><i class="material-icons left">public</i> Visit <?php echo get_the_author_meta( 'first_name' ); ?>'s website</a>
    <?php endif; ?>
  </div>
</div>