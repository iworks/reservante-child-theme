<?php
/**
 * Reservante Child Theme Functions
 */

/**
 * Enqueue parent theme's stylesheet
 */
function reservante_child_theme_enqueue_parent_styles() {
    // Enqueue parent theme's style.css
    wp_enqueue_style(
        'reservante-parent-style',
        get_template_directory_uri() . '/style.css',
        array(),
        md5_file(get_template_directory() . '/style.css')
    );

    // Enqueue child theme's style.css
    wp_enqueue_style(
        'reservante-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('reservante-parent-style'),
        md5_file(get_stylesheet_directory() . '/style.css')
    );
}
add_action('wp_enqueue_scripts', 'reservante_child_theme_enqueue_parent_styles');
