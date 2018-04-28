<?php 
/*
class Walker_Nav_Primary extends Walker_Nav_Menu {

	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t",$depth);
		$submenu = ($depth > 0) ? ' sub-menu' : '';
		$output .= "\n$indent<ul class=\"dropdown-content$submenu depth_$depth\" id=\"dropdown-$depth\">\n";
	}

	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$indent = ($depth) ? str_repeat("\t", $depth) : '';

		$li_attributes ='';
		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;

		$classes[] = ($args->walker->has_children) ? 'dropdown-trigger' : '';
		$classes[] = ($item->current || $item->current_item_anchester) ? 'active' : '';
		$classes[] = 'menu-item-' . $item->ID;

		if( $depth && $args->walker->has_children ) {
			$classes[] = 'dropdown-content';
		}

		$class_names = join(' ', apply_filters('nav_manu_css_class', array_filter($classes), $item, $args ));
		$class_names = ' class="' . esc_attr($class_names) . '"';

		$id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
		$id = strlen($id) ? ' id="' . esc_attr($id) .'"' : '';

		$output .= $indent .'<li' . $id . $value . $class_names . $li_attributes . '>';

		$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
		$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
		$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
		$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';
		$attributes .= ( $args->walker->has_children ) ? ' class="dropdown-trigger" data-target="dropdown"' : '';

		$item_output = $args->before;
		$item_output .= '<a class="dropdown-trigger" data-target="dropdown-0"' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= ( $depth == 0 && $args->walker->has_children ) ? ' <b class="caret"></b></a>' : '</a>' ;
		$item_output .= $args->after;

		$output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args);

	}

}
*/
class Walker_Nav_Primary extends Walker {
  var $db_fields = array( 'parent' => 'menu_item_parent', 'id' => 'db_id' );

    function start_lvl( &$output, $depth = 0, $args = array() ) {
        // Depth-dependent classes.
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth + 1); // because it counts the first submenu as 0
        $classes = array(
            'dropdown-content',
            ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
            ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
            'menu-depth-' . $display_depth
        );
        $class_names = implode( ' ', $classes );

        // Build HTML for output.
        $output .= "\n" . $indent . ' class="' . $class_names . '">' . "\n";
    }

  function end_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul>\n";
  }

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        global $wp_query;
        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

        // Depth-dependent classes.
        $depth_classes = array(
            ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
            ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
            ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
            'menu-item-depth-' . $depth
        );
        $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

        // Passed classes.
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

    /* Add active class */
    if(in_array('current-menu-item', $classes)) {
      $classes[] = 'active';
      unset($classes['current-menu-item']);
    }

    /* Check for children */
    $children = get_posts(array(
      'post_type' => 'nav_menu_item',
      'nopaging' => true,
      'numberposts' => 1,
      'meta_key' => '_menu_item_menu_item_parent',
      'meta_value' => $item->ID
      ));

    if (!empty($children)) {
      $classes[] = 'dropdown';
    }
    $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
    // $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
    // $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
    // $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
    $output     .= $indent . '<li id="nav-menu-item-'.$item->ID.'-'.$GLOBALS['count'].'" class="' . $depth_class_names . '">';
    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
    $attributes .= ! empty( $children )         ? ' data-target="dropdown-'. $item->ID.'-'.$GLOBALS['count'] .'"' : '';
    $attributes .= ! empty( $children )         ? ' class="dropdown-trigger '. $depth_class_names .'"' : '';

    $item_output .= '<a'. $attributes .'>';
    $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;

    if(!empty($children))
      $item_output .= '<i class="material-icons right">arrow_drop_down</i>';

    $item_output .= '</a>';

    $item_output .= $args->after;

    if(!empty($children))
      $item_output .= '<ul id="dropdown-'.$item->ID.'-'.$GLOBALS['count'].'"';
    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

  }
  function end_el( &$output, $item, $depth = 0, $args = array() ) {
    $output .= "</li>\n";
  }
}