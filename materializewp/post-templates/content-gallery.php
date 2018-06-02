<?php 
  // @todo 
  // 1. Add <img alt>
  // 2. Find better method to omit first gallery from the_content().
?>

<?php if(is_single() || is_page()): ?>

<div class="blog-post">
  <div class="post-image">
    <h1 class="blog-post-title"><?php the_title(); ?></h1>
    <?php
      if ( has_excerpt() ) {
        ?><span class="h5"><?php the_excerpt(); ?></span><?php
      } else {
          // This post has no excerpt
      }
    ?>
    <p class="blog-post-meta grey-text text-darken-1">Written by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | <?php the_time('F j, Y'); ?> | <a href="<?php comments_link(); ?>"><?php comments_number('No Comments', '1 Comment', '% Comments'); ?></a>
        </p>
    <?php if ( get_post_gallery() ) :
          
      $gallery = get_post_gallery( get_the_ID(), false );
      ?>
      <div class="carousel carousel-slider">
      <?php
        /* Loop through all the image and output them one by one */
        foreach( $gallery['src'] as $src ) : ?>
          <img src="<?php echo $src; ?>" class="responsive-img carousel-item" alt="" />
        <?php endforeach; ?>
      </div>
    <?php endif; 
    
    the_content();

    /* Display author section. */
    if( is_single() ) {
      get_template_part('inc/partials/partial', 'post-author');
    }
  
    /* Display comments */
    if( is_single() ):
      if( comments_open() ) { 
        comments_template();
      } else { 
        echo '<p>Comments are closed for this post.</p>';
        }
    endif;
    ?>

</div>

<?php else: ?>

<div class="blog-post card hoverable">

  <div class="card-image">
    <?php if ( get_post_gallery() ) :
          
      $gallery = get_post_gallery( get_the_ID(), false );
      ?>
      <div class="carousel carousel-slider">
      <?php
        /* Loop through all the image and output them one by one */
        foreach( $gallery['src'] as $src ) : ?>
          <img src="<?php echo $src; ?>" class="responsive-img carousel-item" alt="" />
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  
    <div class="card-content blog-post-excerpt">
      <a href="<?php the_permalink(); ?>">
        <h2 class="h4 blog-post-title"><?php the_title(); ?></h2>
        <p class="blog-post-meta grey-text text-darken-1">Written by <?php the_author(); ?> | <?php the_time('F j, Y'); ?> | <?php comments_number('No Comments', '1 Comment', '% Comments'); ?></p>
        <br>
        <?php the_excerpt(); ?>
      </a>
    </div>
  </div>
  
</div>

<?php endif; ?>