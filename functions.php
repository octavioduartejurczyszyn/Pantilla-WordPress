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

function crear_cpt_proyectos() {
    $labels = array(
        'name' => 'Proyectos',
        'singular_name' => 'Proyecto',
        'menu_name' => 'Proyectos',
        'name_admin_bar' => 'Proyecto',
        'add_new' => 'Añadir nuevo',
        'add_new_item' => 'Añadir nuevo proyecto',
        'new_item' => 'Nuevo proyecto',
        'edit_item' => 'Editar proyecto',
        'view_item' => 'Ver proyecto',
        'all_items' => 'Todos los proyectos',
        'search_items' => 'Buscar proyectos',
        'not_found' => 'No se encontraron proyectos',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'proyectos'),
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-location-alt', // icono piola
        'show_in_rest' => true, // para usar el editor de bloques
    );

    register_post_type('proyectos', $args);
}
add_action('init', 'crear_cpt_proyectos');


function excluir_proyectos_de_home($query) {
    if ($query->is_home() && $query->is_main_query()) {
        $query->set('post_type', array('post')); // Sólo posts, sin proyectos
    }
}
add_action('pre_get_posts', 'excluir_proyectos_de_home');



