<?php
// ***********************************
//  Styles & Scripts
// ***********************************
function theme_files() {
    wp_enqueue_style('main-styles', get_theme_file_uri('/dist/styles.css'));

    // wp_enqueue_script('main-scripts', get_theme_file_uri('/dist/scripts.js'), NULL, '1.0', true);
    wp_enqueue_script('gsap-scripts', get_theme_file_uri('/dist/gsap-scrolltrigger-3.6.0.js'), NULL, '1.0', true);
}
add_action('wp_enqueue_scripts', 'theme_files');




// ***********************************
//  Scripts with type="module" attribute
// ***********************************
function enqueue_module_script() {
    wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/dist/scripts.js', array(), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_module_script' );

function set_module_script_type( $tag, $handle ) {
    if ( 'main-scripts' === $handle ) {
        $tag = str_replace( 'type=\'text/javascript\'', 'type=\'module\'', $tag );
    }
    return $tag;
}
add_filter( 'script_loader_tag', 'set_module_script_type', 10, 2 );




// ***********************************
//  Ability to add custom classes to 'wp_nav_menu' <li> elements
// ***********************************
function add_menu_list_item_class($classes, $item, $args) {
  if (property_exists($args, 'list_item_class')) {
      $classes[] = $args->list_item_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);

// ***********************************
//  Ability to add custom classes to 'wp_nav_menu' <a> elements
// ***********************************
function add_menu_link_class( $atts, $item, $args ) {
  if (property_exists($args, 'link_class')) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );




// ***********************************
//  Load inline SVG images
// ***********************************
// credit: https://enshrined.co.uk/2018/09/19/how-to-properly-include-inline-svgs-in-a-wordpress-theme/
function load_inline_svg( $filename ) {
    // Add the path to your SVG directory inside your theme.
    $svg_path = '/assets/';
 
    // Check the SVG file exists
    if ( file_exists( get_stylesheet_directory() . $svg_path . $filename ) ) {
        // Load and return the contents of the file
        echo file_get_contents( get_stylesheet_directory_uri() . $svg_path . $filename );
    }
 
    // Return a blank string if we can't find the file.
    return '';
}
?>