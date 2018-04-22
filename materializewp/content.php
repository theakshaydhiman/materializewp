<div class="blog-post">

  <h1 class="blog-post-title">
    <?php if(is_single() || is_page()): ?>
      <?php the_title(); ?>
    <?php else : ?>  
      <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    <?php endif; ?>
    </a>
  </h1>

  <p class="blog-post-meta grey-text text-darken-1">Written by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | <?php the_time('F j, Y'); ?> | <a href="<?php comments_link(); ?>"><?php comments_number('No Comments', '1 Comment', '% Comments'); ?></a>
  </p>

  <div class="post-thumb">
    <?php if(has_post_thumbnail()) : ?>
      <?php the_post_thumbnail('large', array( 'class' => 'post-thumb' )); ?>
    <?php endif; ?>
  </div>

  <?php if(is_single() || is_page()): ?>
      <?php the_content(); ?>
    <?php else : ?>  
      <?php the_excerpt(); ?>
    <?php endif; ?>
    
  <?php if(is_single()): ?>
    <?php if( comments_open() ) { comments_template(); } else { echo '<p>Comments are closed for this post.</p>'; } ?>
  <?php endif; ?>


</div>