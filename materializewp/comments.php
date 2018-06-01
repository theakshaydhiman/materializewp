<div class="comments">

  <?php if ( have_comments() ) : ?>

  <h3 class="h4">Comments</h3>

  <?php endif; ?>
  <div class="comment-list">
    <?php

    $args = array(
      'walker'            => null,
      'max_depth'         => '',
      'style'             => 'div',
      'callback'          => null,
      'end-callback'      => null,
      'type'              => 'all',
      'reply_text'        => 'Reply',
      'page'              => '',
      'per_page'          => '',
      'avatar_size'       => 120,
      'reverse_top_level' => null,
      'reverse_children'  => '',
      'format'            => 'html5',
      'short_ping'        => false,
      'echo'              => true,
      );

    wp_list_comments($args, $comments);
    ?>
  </div>
  <?php
  $commenter = wp_get_current_commenter();
  $req = get_option( 'require_name_email' );
  $aria_req = ( $req ? " aria-required='true'" : '' );
  $fields = array(

    'author' =>
      '<p class="comment-form-author input-field"><label for="author">' . __( 'Name', 'domainreference' ) .
      ( $req ? '<span class="required">*</span>' : '' ) . '</label>' .
      '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
      '" size="30"' . $aria_req . ' /></p>',

    'email' =>
      '<p class="comment-form-email input-field"><label for="email">' . __( 'Email', 'domainreference' ) .
      ( $req ? '<span class="required">*</span>' : '' ) . '</label>' .
      '<input id="email" name="email" class="validate" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) .
      '" size="30"' . $aria_req . ' /></p>',

    'url' =>
      '<p class="comment-form-url input-field"><label for="url">' . __( 'Website', 'domainreference' ) . '</label>' .
      '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
      '" size="30" /></p>',
  );

  $comments_args = array(
    'label_submit'=>'Submit',
    'class_submit'=>'btn',
    'title_reply'=>'Leave a Comment',
    'comment_notes_after' => '',
    'comment_field' => '<p class="comment-form-comment input-field"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" aria-required="true" class="materialize-textarea"></textarea></p>',
    'fields' => apply_filters( 'comment_form_default_fields', $fields ),
    'submit_button' => '<button name="%1$s" type="submit" id="%2$s" class="%3$s btn waves-effect waves-light">%4$s</button>'
  );

  comment_form($comments_args);

  ?>
</div>