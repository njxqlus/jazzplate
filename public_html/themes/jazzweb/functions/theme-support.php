<?php
/**
 * Add theme support
 * @since 3.0
 */
add_action('after_setup_theme',
    function ()
    {
        add_theme_support('post-thumbnails');
        add_theme_support('woocommerce');
    }
);
