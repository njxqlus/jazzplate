<?php
/**
 * Activate translations
 * @since 2.0.0
 */
load_theme_textdomain('jazzweb', __DIR__ . '/../lang');

/**
 * Activate hooks
 * @since 2.0.0
 */
require_once __DIR__ . '/hooks.php';

/**
 * Activate Advanced Custom Fields
 * @since 2.0.0
 */
require_once __DIR__ . '/acf.php';

/**
 * Add theme support
 * @since 3.0
 */
require_once __DIR__ . '/theme-support.php';

/**
 * Activate Wordplate/Plate
 * @since 3.0
 */
require_once __DIR__ . '/plate.php';

/**
 * Activate Roots/Soil
 * @since 3.0
 */
require_once __DIR__ . '/soil.php';
