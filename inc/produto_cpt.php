<?php

add_action( 'init', 'register_cpt_produto' );
function register_cpt_produto() {
    register_post_type( 'produto',
        array(
            'labels' => array(
                'name' => __( 'Produtos', 'produto' ),
                'singular_name' => __( 'Produto', 'produto' ),
                'add_new' => _x( 'Adicionar novo', 'produto' ),
                'all_items' => _x( 'Todos os produtos', 'produto' ),
                'add_new_item' => _x( 'Adicionar novo produto', 'produto' ),
                'edit_item' => _x( 'Editar produto', 'produto' ),
                'new_item' => _x( 'Novo produto', 'produto' ),
                'view_item' => _x( 'Ver produto', 'produto' ),
                'search_items' => _x( 'Procurar produtos', 'produto' ),
                'not_found' => _x( 'Nenhum produto encontrado', 'produto' ),
                'not_found_in_trash' => _x( 'Nenhum produto encontrado na lixeira', 'produto' ),
                'parent_item_colon' => null,
                'menu_name' => _x( 'Produtos', 'produto' ),
            ),
            'public' => true,
            'rewrite' => array('slug' => 'produtos'), // <--- definimos o slug aqui...
            'has_archive' => true  // <-- isto diz ao WP que o CPT tem archive
        )
    );
}

?>