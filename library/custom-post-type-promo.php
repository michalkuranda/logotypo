<?php
/* joints Custom Post Type Example
This page walks you through creating 
a custom post type and taxonomies. You
can edit this one or copy the following code 
to create another one. 

I put this in a separate file so as to 
keep it organized. I find it easier to edit
and change things if they are concentrated
in their own file.

*/


// let's create the function for the custom type
function custom_post_example4() { 
	// creating (registering) the custom type 
	register_post_type( 'promo', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Výhody', 'legabeton'), /* This is the Title of the Group */
			'singular_name' => __('Výhody', 'legabeton'), /* This is the individual type */
			'all_items' => __('Všechny položky', 'legabeton'), /* the all items menu item */
			'add_new' => __('Vložit nový', 'legabeton'), /* The add new menu item */
			'add_new_item' => __('Vložit nový', 'legabeton'), /* Add New Display Title */
			'edit' => __( 'Edit', 'legabeton' ), /* Edit Dialog */
			'edit_item' => __('Edit', 'legabeton'), /* Edit Display Title */
			'new_item' => __('Nový', 'legabeton'), /* New Display Title */
			'view_item' => __('Zobrazit', 'legabeton'), /* View Display Title */
			'search_items' => __('Vyhledat', 'legabeton'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nic nenalezeno.', 'legabeton'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Koš je brázdný', 'legabeton'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the example custom post type', 'legabeton' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
			'rewrite'	=> array( 'slug' => 'promo', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'promo', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
	 	) /* end of options */
	); /* end of register post type */
	

	
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_example4');
	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
 
?>
