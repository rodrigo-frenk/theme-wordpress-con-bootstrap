<?php

add_action( 'init', 'register_cpt' );


function register_cpt() {
	$labels = array(
		'name'               => _x( 'Libros', 'post type general name', 'nombre_proyecto' ),
		'singular_name'      => _x( 'Libro', 'post type singular name', 'nombre_proyecto' ),
		'menu_name'          => _x( 'Libros', 'admin menu', 'nombre_proyecto' ),
		'name_admin_bar'     => _x( 'Libro', 'add new on admin bar', 'nombre_proyecto' ),
		'add_new'            => _x( 'Add New', 'libro', 'nombre_proyecto' ),
		'add_new_item'       => __( 'Add New Libro', 'nombre_proyecto' ),
		'new_item'           => __( 'New Libro', 'nombre_proyecto' ),
		'edit_item'          => __( 'Edit Libro', 'nombre_proyecto' ),
		'edit_item'          => __( 'Edit Libro', 'nombre_proyecto' ),
		'view_item'          => __( 'View Libro', 'nombre_proyecto' ),
		'all_items'          => __( 'All Libros', 'nombre_proyecto' ),
		'search_items'       => __( 'Search Libros', 'nombre_proyecto' ),
		'parent_item_colon'  => __( 'Parent Libros:', 'nombre_proyecto' ),
		'not_found'          => __( 'No Libros found.', 'nombre_proyecto' ),
		'not_found_in_trash' => __( 'No Libros found in Trash.', 'nombre_proyecto' )
	);

	$args = array(
		'labels'             => $labels,
      'description'        => __( 'Description.', 'nombre_proyecto' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'libro' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'libro', $args );
}






function add_libros_meta_box()
{
	add_meta_box("libro-meta-box", "Libro", "libros_meta_box_markup", "libro", "side", "high", null);
}

add_action("add_meta_boxes", "add_libros_meta_box");




function libros_meta_box_markup($object)
{


	wp_nonce_field( basename( __FILE__ ), "metadato-nonce" );

	?>
	<label for="isbn">ISBN</label>
	<input name="isbn" type="text" value="<?php echo get_post_meta($object->ID, "isbn", true); ?>">
        
    <label for="precio">Precio</label>
     
    <input name="precio" type="text" value="<?php echo get_post_meta($object->ID, "precio", true); ?>">
    
    <label for="sello_editorial">Sello editorial</label>
        <input name="sello_editorial" type="text" value="<?php echo get_post_meta($object->ID, "sello_editorial", true); ?>">

	<?php
}


function save_libros_meta_box($post_id, $post, $update)
{
	if (!isset($_POST["metadato-nonce"]) || !wp_verify_nonce($_POST["metadato-nonce"], basename(__FILE__)))
	return $post_id;

	if(!current_user_can("edit_post", $post_id))
	return $post_id;

	if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
	return $post_id;

	$slug = "libro";
	if($slug != $post->post_type)
	return $post_id;

	$meta_box_metadato = "";

	if(isset($_POST["isbn"]))
	{
		$meta_box_metadato = $_POST["isbn"];
	}
	update_post_meta($post_id, "isbn", $meta_box_metadato );

	if(isset($_POST["precio"]))
	{
		$meta_box_metadato = $_POST["precio"];
	}
	update_post_meta($post_id, "precio", $meta_box_metadato );

	if(isset($_POST["sello_editorial"]))
	{
		$meta_box_metadato = $_POST["sello_editorial"];
	}
	update_post_meta($post_id, "sello_editorial", $meta_box_metadato );

}

add_action("save_post", "save_libros_meta_box", 10, 3);



?>