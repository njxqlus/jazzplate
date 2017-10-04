<?php
/**
 * Activate child theme translation
 */
load_theme_textdomain('jazzweb-child', __DIR__ . '/../lang');

/**
 * Include theme options
 */
require_once __DIR__ . '/theme-options.php';

/**
 * Include sidebars
 */
require_once __DIR__ . '/sidebars.php';

/**
 * Include Custom Post Types
 */
require_once __DIR__ . '/cpt.php';

/**
 * Include menus
 */
require_once __DIR__ . '/menus.php';

//todo use Cortex?
