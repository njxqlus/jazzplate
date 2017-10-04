<?php
/**
 * Activate child theme translation
 */
load_theme_textdomain('jazzweb-child', __DIR__ . '/lang');

/**
 * Include theme options
 */
require_once __DIR__ . '/functions/theme-options.php';

/**
 * Register menus
 */
register_nav_menus([
    'main' => __('Main Menu', 'jazzweb-child'),
]);

/**
 * Register sidebars
 */
get_template_part('/functions/sidebars');

/**
 * Register custom post types and taxonomies
 */
get_template_part('functions/cpt');
