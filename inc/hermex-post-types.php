<?php
add_action('init', 'hermex_register_post_types');
/*
 * Advantages
 */
function hermex_register_post_types(){
	register_post_type('advantages', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Advantages', // основное название для типа записи
			'singular_name'      => 'Advantage', // название для одной записи этого типа
			'add_new'            => 'Add Advantage', // для добавления новой записи
			'add_new_item'       => 'Add Advantage', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Write Advantage', // для редактирования типа записи
			'new_item'           => 'New Advantage', // текст новой записи
			'view_item'          => 'View Advantage', // для просмотра записи этого типа.
			'search_items'       => 'Search Advantage', // для поиска по этим типам записи
			'not_found'          => 'Not Found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not Found In Trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Advantages', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => null, // зависит от public
		'exclude_from_search' => null, // зависит от public
		'show_ui'             => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => null, // зависит от public
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title','editor','thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => true,
		'rewrite'             => true,
		'query_var'           => true,
	) );
	/*
	 * Testimonials
	 */
	register_post_type('testimonials', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Testimonials', // основное название для типа записи
			'singular_name'      => 'Testimonial', // название для одной записи этого типа
			'add_new'            => 'Add Testimonial', // для добавления новой записи
			'add_new_item'       => 'Add Testimonial', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Write Testimonial', // для редактирования типа записи
			'new_item'           => 'New Testimonial', // текст новой записи
			'view_item'          => 'View Testimonial', // для просмотра записи этого типа.
			'search_items'       => 'Search Testimonial', // для поиска по этим типам записи
			'not_found'          => 'Not Found', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Not Found In Trash', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Testimonials', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => null, // зависит от public
		'exclude_from_search' => null, // зависит от public
		'show_ui'             => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => null, // зависит от public
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array( 'title'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	) );
}