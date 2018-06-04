<div class="post-author">
  <div class="post-author__about">
    <p><i class="material-icons left">create</i>About the Author</p>
  </div>
  <div class="post-author__meta">
    <div class="post-author__meta--container">
      <div class="post-author__meta--avatar">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 120 ); ?>
      </div>
      <div class="post-author__meta--description">
        <h4 class="h5"><?php echo get_the_author_meta( 'display_name' ); ?></h4>
        <p class="grey-text text-darken-2"><?php echo get_the_author_meta( 'description' ); ?></p>
      </div>
    </div>
  </div>
  <div class="post-author__links">
    <?php if( get_the_author_meta( 'url' ) ): ?>
      <a href="<?php echo get_the_author_meta( 'url' ); ?>" class="waves-effect post-author__links--btn" target="_blank" rel="noopener"><i class="material-icons left">public</i> Visit <?php echo get_the_author_meta( 'first_name' ); ?>'s website</a>
    <?php endif; ?>
      <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="waves-effect post-author__links--btn"><i class="material-icons left">view_list</i>View posts</a>
  </div>
</div>