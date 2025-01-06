<?php

function custom_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'Entete du menu');
} 

function custom_enqueue_styles() {
    wp_enqueue_style('tailwind-style', get_template_directory_uri() . '/tailwind.css');
}

function custom_enqueue_scripts() {
    wp_enqueue_script(
        'menu-script',
        get_stylesheet_directory_uri() . '/assets/js/menu.js',
        array(),
        '1.0',
        true
    );
}

function custom_pagination() {
    echo '<nav class="mt-8">';
    echo '<ul class="flex items-center -space-x-px h-8 text-sm">';
    $pages = paginate_links(['type' => 'array']);

    if (is_array($pages)) {
        foreach ($pages as $page) {
            $active = strpos($page, 'current') !== false;
            $class = 'flex';
            if($active) {
                $class .= ' bg-blue-100';
            }
            echo '<li class="' . $class . ' items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">' . $page . '</li>';
        }
        echo '</ul>';
        echo '</nav>';
    }
}

add_action( 'wp_enqueue_scripts', 'custom_enqueue_scripts' );
add_action('wp_enqueue_scripts', 'custom_enqueue_styles');
add_action('after_setup_theme', 'custom_theme_support');

function custom_register_sidebar() {
    register_sidebar([
        'id'            => 'sidebar',
        'name'          => __('Sidebar', 'textdomain'),
        'description'   => __('Widgets area for the sidebar.', 'textdomain'),
        'before_widget' => '<div class="widget mb-8">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="text-xl font-semibold mb-4">',
        'after_title'   => '</h2>',
    ]);
}
add_action('widgets_init', 'custom_register_sidebar');