<?php
/**
 * WordPress Block Theme.
 */

add_action('after_theme_setup', function () {
    add_theme_support('post-thumbnails');
    add_theme_support('align-wide');

    add_theme_support('block-templates');
    add_theme_support('wp-block-styles');
    add_theme_support('editor-styles');
});

add_action('init', function () {
    register_block_pattern_category(
        'wordpress-block-theme',
        [
            'label' => __('Block Theme', 'wordpress-block-theme')
        ]
    );
});
