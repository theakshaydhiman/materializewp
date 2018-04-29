<div class="blog-post post-image">
	<div class="card">
		<div class="card-image">
      <?php if(has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('large', array( 'class' => 'post-thumb responsive-img materialboxed' )); ?>
      <?php endif; ?>
    </div>
    <div class="card-content">
      <h2 class="card-title activator grey-text text-darken-4"><?php the_title(); ?><i class="material-icons right">more_vert</i></h2>
      <p class="grey-text text-darken-1 activator"><?php the_author(); ?> on <?php echo get_the_date(); ?></p>
		</div>
    <div class="card-reveal">
      <h2 class="card-title grey-text text-darken-4"><?php the_title(); ?><i class="material-icons right">close</i></h2>
      <p class="grey-text text-darken-1 activator"><?php the_author(); ?> on <?php echo get_the_date(); ?></p>
      <?php the_content(); ?>
    </div>
	</div>
</div>