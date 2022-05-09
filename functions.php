<?php
/**
 * WordPress Block Theme.
 */

add_action('after_theme_setup', function () {
    add_theme_support('post-thumbnails');
    add_theme_support('align-wide');

    add_theme_support('wp-block-styles');
    add_theme_support('editor-styles');
});
