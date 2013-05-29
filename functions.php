<?php
add_action('init', 'portolio_register');
function portolio_register() {
	$labels = array(
		'name' => __('Portfolio'),
		'singular_name' => __('Portfolio'),
		'add_new' => __('Novo Projeto'),
		'add_new_item' => __('Adicionar novo projeto'),
		'edit_item' => __('Editar Projeto'),
		'new_item' => __('Novo Projeto'),
		'view_item' => __('Ver Projeto'),
		'search_items' => __('Buscar Projeto'),
		'not_found' =>  __('Nenhum projeto encontrado'),
		'not_found_in_trash' => __('Nada encontrado na Lixeira'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 6,
		'supports' => array('title','editor')
	  );
	register_post_type( 'portolio' , $args );
}


add_action('init', 'projetotipo_register');
function projetotipo_register(){
	$labels = array(
    'name' => __('Tipos'),
    'singular_name' => __('Tipo'),
    'search_items' =>  __('Buscar'),
    'popular_items' => __('Mais usados'),
    'all_items' => __('Todos os Tipos'),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __('Add novo'),
    'update_item' => __('Atualizar'),
    'add_new_item' => __('Adicionar novo Tipo'),
    'new_item_name' => __('Novo')
  );

	register_taxonomy('projetotipo', array('portolio'),
		array(
		'hierarchical' => false,
		'labels' => $labels,
		'singular_label' => 'Tipo',
		'all_items' => 'Todos os Todos',
		'query_var' => true,
		'rewrite' => array( 'slug' => '/portfolio/tipo' ))
	);
}
?>