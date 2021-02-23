<?php

/*
*    Arquivo para inserir as configurações do Wordpress
*    Existem diversas configurações que o Wordpress disponibiliza para criação de temas
*    e elas devem ser escritas nesse arquivo
*/

if ( class_exists( 'Redux' ) ) {
    require_once 'inc/theme-customizer-redux.php';
    require_once 'inc/theme-customizer-redux-sections.php';
}

global $redux_fields; 

function byron_styles() {

    // Inserir: outros arquivos css se necesśario

    wp_enqueue_style('materializeicon', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '');
    wp_enqueue_style('materialize', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css', array(), '');
    wp_enqueue_style('material_icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), '');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
    wp_enqueue_style('alexbrush', 'https://fonts.googleapis.com/css?family=Alex+Brush&display=swap', array(), '');
    wp_enqueue_style('montserrat', 'https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap', array(), '');

    // Inserir: outros arquivos javascript se necesśario

    wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), false, true );
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array("jquery"), false, true );
    wp_enqueue_script( 'materialize_js', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script('slick', "https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js", array(), false, true);
    wp_enqueue_script('fontawesome', "https://kit.fontawesome.com/dfb8742735.js", array(), false, true);

}
add_action( 'wp_enqueue_scripts', 'byron_styles' );


function byron_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'Menu Principal' )
        )
    );
    // Inserir: outros menus se necessário
}
add_action( 'init', 'byron_menus' );

function remove_menu_items() { 
    if( current_user_can( 'editor' ) ): //slug do usuário
        remove_menu_page( 'index.php' ); //Painel
        remove_menu_page( 'edit-comments.php' ); //comentários
        remove_menu_page('edit.php'); // Posts
    endif;
}
add_action( 'admin_menu', 'remove_menu_items' );

function create_post_type() {
  
    // Register Post Type: Portfólio
    register_post_type( 'Portfólio',
      array(
        'labels' => array(
          'name' => __( 'Portfólio' ),
          'singular_name' => __( 'Portfólio' )
        ),
        'public'      => true,
        'has_archive' => false,
            'menu_icon'   => 'dashicons-format-gallery',
            'taxonomies'  => ['category', 'post_tag'],
            'supports'    => ['title','editor','thumbnail', 'excerpt', 'author'],
        'rewrite'     => array('slug' => 'Portfólio')
      )
    );

        // Register Post Type: Nossos Serviços
    register_post_type( 'Nossos Serviços',
      array(
        'labels' => array(
          'name' => __( 'Serviços - Página Inicial' ),
          'singular_name' => __( 'Nossos Serviços' )
        ),
        'public'      => true,
        'has_archive' => false,
            'menu_icon'   => 'dashicons-admin-home',
            'taxonomies'  => ['category', 'post_tag'],
            'supports'    => ['title','editor','thumbnail', 'excerpt', 'author'],
        'rewrite'     => array('slug' => 'Nossos Serviços')
      )
    );

    // Register Post Type: Servicos
    register_post_type( 'Serviços',
    array(
      'labels' => array(
        'name' => __( 'Página de Serviços' ),
        'singular_name' => __( 'Serviços' )
      ),
      'public'      => true,
      'has_archive' => false,
          'menu_icon'   => 'dashicons-buddicons-groups',
          'taxonomies'  => ['category', 'post_tag'],
          'supports'    => ['title','editor','thumbnail', 'excerpt', 'author'],
      'rewrite'     => array('slug' => 'Serviços')
    )
  );

}
add_action( 'init', 'create_post_type' );

function byron_theme_setup(){
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'byron_theme_setup');