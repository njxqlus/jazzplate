<?php
/**
 * Show ACF in admin menu
 * @since 2.0.0
 */
//add_filter('acf/settings/show_admin', '__return_false');

/**
 * Include theme settings
 * @since 2.0.0
 */
get_template_part('/functions/ts/ts', 'additional');

/**
 * Include theme options
 * @since 2.0.0
 */
get_template_part('/functions/ts/theme', 'options');
