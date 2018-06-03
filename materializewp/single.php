<?php get_header();
get_template_part('inc/partials/partial', 'navbar'); ?>

  <main class="container">
    <div class="row">

      <h1 class="blog-post-title"><?php the_title(); ?></h1>
      <?php
        if ( has_excerpt() ) {
          ?><span class="h5 grey-text text-darken-1"><?php the_excerpt(); ?></span><?php
        } else {
            // This post has no excerpt
        }
      ?>
      
      <div class="post-thumb">
        <?php 
          if( has_post_thumbnail() ) {
            the_post_thumbnail('large', array( 'class' => 'post-thumb' ));
          }
        ?>
      </div>

      <div class="col s12 m12 l2 grey-text text-darken-1">
        <div style="margin-top: 20px;">
          <?php 
          global $post;
          $author_id = $post->post_author;
          echo get_avatar( $author_id, 90 ); ?>
        </div>
        <small>
          <p>
            Written by <b><?php
            the_author_meta( 'display_name', $author_id );
            ?></b>
          </p>
          <p>Published <?php the_time('F j, Y'); ?></p>
        </small>
      </div>
      
      <div class="col s12 m12 l8 blog-main">
        <?php
          if(have_posts()) :
            while(have_posts()) : the_post();
              get_template_part('post-templates/content', get_post_format());
            endwhile;
          else : ?>
            <p><?php __('No Posts Found') ?></p>
        <?php endif; ?>
      </div>
    </div>
  </main>

<?php get_template_part('inc/partials/partial', 'footer');
get_footer(); ?>