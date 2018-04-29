<?php if(is_single() || is_page()): ?>

  <div class="blog-post">

    <div class="card-panel">
      <h1 class="blog-post-title"><?php the_title(); ?></h1>
      <p class="blog-post-meta grey-text text-darken-1">Written by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | <?php the_time('F j, Y'); ?> | <a href="<?php comments_link(); ?>"><?php comments_number('No Comments', '1 Comment', '% Comments'); ?></a>
      </p>
      <div class="post-thumb">
        <?php if(has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('large', array( 'class' => 'post-thumb' )); ?>
        <?php endif; ?>
      </div>
      <?php the_content(); ?>
    </div>
    
    <!-- Display comments -->
    <?php if( is_single() ):
      if( comments_open() ) { 
        comments_template();
      } else { 
        echo '<p>Comments are closed for this post.</p>';
        }
      endif;
    ?>

  </div>

<?php else : ?>

  <div class="blog-post-excerpt">
    <a href="<?php the_permalink(); ?>">

      <div class="card hoverable">

        <div>
          <?php if(has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium_large', array('class' => 'responsive-img') ); ?>
          <?php endif; ?>
        </div>

        <div class="card-content">
          <h2 class="blog-post-title"><?php the_title(); ?></h2>
          <p class="blog-post-meta grey-text text-darken-1">Written by <?php the_author(); ?> | <?php the_time('F j, Y'); ?> | <?php comments_number('No Comments', '1 Comment', '% Comments'); ?></p>
          <br>
          <?php the_excerpt(); ?>
        </div>

      </div>
    </a>
  </div>
<?php endif; ?>