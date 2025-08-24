<?php
/**
 * M&M Office Child Theme Functions
 */

// Enqueue parent and child theme styles
function mmoffice_child_styles() {
    // Parent theme style
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    
    // Child theme style (loads after parent for proper overrides)
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}
add_action('wp_enqueue_scripts', 'mmoffice_child_styles');