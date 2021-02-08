<?php


// Chamar a tag Title e adicionar os formatos de posts
function academico_theme_support() {

    // Chamar a tag Title
    add_theme_support('title-tag');

    // Adicionar os formatos de posts
    add_theme_support('post-formats', array('aside', 'image', 'video'));

    // Adicionar o logotipo
    add_theme_support( 'custom-logo' );
}
add_action('after_setup_theme', 'academico_theme_support');


// Registra o Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Registrar os menus
register_nav_menus( array(
    'principal' => __('Menu principal', 'academico')
));

// Definir as miniaturas dos posts
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1280, 720, true );

// Definir o tamanho do resumo
add_filter( 'excerpt_length', function($length) {
    return 12;
});


// Criar o tipo de post para o banner
function create_post_type() {

    register_post_type('banners',
    // Definir as opções
    array(
        'labels' => array(
            'name' => __('Banners'),
            'singular_name' => __('Banners')
        ),
        'supports' => array(
            'title', 'editor', 'thumbnail'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'rewrite' => array('slug' => 'banners'),
    ));
}
//Iniciar o tipo de post
add_action('init', 'create_post_type');

function lc_cpt() {

    // Informar os textos da interface
    $labels = array(
        'name'              => _x('Depoimentos', 'Depoimentos dos clientes', 'academico'),
        'singular_name'     => _x('Depoimento', 'Depoimento do cliente', 'academico'),
        'menu_name'         => __('Depoimentos', 'academico'),
        'all_items'         => __('Todos os depoimentos', 'academico'),
        'view_item'         => __('Ver depoimento', 'academico'),
        'add_new_item'      => __('Adicionar depoimento', 'academico'),
        'add_new'           => __('Adicionar novo', 'academico'),
        'edit_item'         => __('Eitar depoimento', 'academico'),
        'update_item'       => __('Atualizar depoimento', 'academico'),
        'search_items'      => __('Buscar depoimento', 'academico'),
        'not_found'         => __('Não encontrado', 'academico'),
        'not_fund_in_trash' => __('Não encontrado no lixo', 'academico')
    );

    // Informar as opções
    $args = array(
        'label'               => __('depoimentos', 'academico'),
        'description'         => __('Depoimentos dos clientes', 'academico'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'thumbnail'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-format-aside',
        'rewrite' => array('slug' => 'depoimentos'),
        
        'query_var' => true,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicy_queryable'   => true,
        'capability_type'     => 'post'
    );

    register_post_type('depoimentos', $args);
}

add_action('init', 'lc_cpt', 0);



   // Register Custom Status
   function custom_post_status() {

}
add_action( 'init', 'custom_post_status', 0 );



// Incluir as funções de personalização
require get_template_directory(). '/inc/customizer.php';

require get_template_directory(). '/inc/produto_cpt.php';

require get_template_directory(). '/inc/curso_cpt.php';


// registrar o woocomerce

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo 'Teste';
}

function my_theme_wrapper_end() {
  echo '</section>';
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

?>