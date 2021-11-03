<?php

//funcion para llamar estilos
function test_cargar_estilos() {
    wp_register_style('estilo_tema',get_stylesheet_uri(), '', '1.0', 'all');
    wp_enqueue_style('estilo_tema');
}

add_action('wp_enqueue_scripts', 'test_cargar_estilos');

function test_registrar_sidebars() {
    register_sidebar(array (
        'name'  => __('Sidebar Principal', 'test'),
        'id'    => 'main_sidebar',
        'description' => __('Sidebar Principal de la plantilla', 'test'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3">'

    ));
}

add_action('widgets_init', 'test_registrar_sidebars');

?>