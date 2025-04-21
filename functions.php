<?php
add_theme_support('post-thumbnails');

function registrar_mis_menus() {
    register_nav_menus(array(
        'menu-principal' => 'Menú Principal',
        'menu-footer'    => 'Menú Pie de Página'
    ));
}
add_action('after_setup_theme', 'registrar_mis_menus');

add_theme_support('title-tag');

function agregar_estilos_tema() {
    wp_enqueue_style('estilos-principales', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'agregar_estilos_tema');

add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

remove_action('wp_head', 'wp_generator');

function mi_sidebar_personalizada() {
    register_sidebar(array(
        'name'          => 'Sidebar Principal',
        'id'            => 'sidebar-principal',
        'description'   => 'Aparece en el blog y otras páginas.',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="titulo-widget">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'mi_sidebar_personalizada');


