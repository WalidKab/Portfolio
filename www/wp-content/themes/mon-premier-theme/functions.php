<?php

require 'inc/wp_boostrap_navwalker.php';

/**
 * Loading All CSS Stylesheets and Javascript Files.
 */
function wordpress_scripts_loader()
{
    $theme_version = wp_get_theme()->get('Version');

    // 1. Styles.
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', [], $theme_version, 'all');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', [], $theme_version, 'all'); // main.scss: Compiled Framework source + custom styles.

    if (is_rtl()) {
        wp_enqueue_style('rtl', get_template_directory_uri() . '/assets/css/rtl.css', [], $theme_version, 'all');
    }

    // 2. Scripts.
    wp_enqueue_script('mainjs', get_template_directory_uri() . '/assets/js/main.bundle.js', [], $theme_version, true);
    wp_enqueue_script('ion-icon', 'https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js');

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'wordpress_scripts_loader');


function custom_menus()
{
    register_nav_menus([
        'main' => 'Main menu',
        'footer' => 'Footer'
    ]);
}

add_action('init', 'custom_menus');

function carbon_widgets_init()
{
    register_sidebar(array(
        'name' => __('Blog Sidebar', 'carbon'),
        'id' => 'sidebar-1',
        'description' => __('Add widgets for your blog here.', 'carbon'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>'
    ));
}

add_action('widgets_init', 'carbon_widgets_init');

function montheme_init(){
    register_post_type('projets',[
        'label' => 'Projets',
        'public' => true,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-welcome-write-blog',
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true,
        'has_archive' => true,
        'rewrite' => ['slug' => 'mes-projets'],
    ]);
}

add_action('init', 'montheme_init');