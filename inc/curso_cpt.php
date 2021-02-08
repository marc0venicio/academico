<?php

function lc_cptc() {

    // Informar os textos da interface
    $labels = array(
        'name'              => _x('Cursos', 'Cursos da Escola', 'academico'),
        'singular_name'     => _x('Curso', 'Curso da escola', 'academico'),
        'menu_name'         => __('Cursos', 'academico'),
        'all_items'         => __('Todos os cursos', 'academico'),
        'view_item'         => __('Ver cursos', 'academico'),
        'add_new_item'      => __('Adicionar cursos', 'academico'),
        'add_new'           => __('Adicionar novo', 'academico'),
        'edit_item'         => __('Eitar cursos', 'academico'),
        'update_item'       => __('Atualizar cursos', 'academico'),
        'search_items'      => __('Buscar cursos', 'academico'),
        'not_found'         => __('Não encontrado', 'academico'),
        'not_fund_in_trash' => __('Não encontrado no lixo', 'academico')
    );

    // Informar as opções
    $args = array(
        'label'               => __('Curso', 'academico'),
        'description'         => __('Cursos', 'academico'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'thumbnail', 'excerpt','page-attributes'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'query_var' => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-format-aside',
        'rewrite' => array('slug' => 'cursos'),
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicy_queryable'   => true,
        'capability_type'     => 'page',
        'taxonomies'          => array( 'category', 'post_tag' ),
    );

    register_post_type('cursos', $args);
 
}

add_action('init', 'lc_cptc', 0);

?>