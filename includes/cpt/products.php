<?php

function register_product_post_type() {
    $singular = 'Product'; // Singular name (jedan proizvod)
    $plural = 'Products';  // Plural name (proizvodi)
    
    $slug = str_replace( ' ', '-', strtolower( $singular ) );

    // Definicija labela (tekstova koji će se prikazivati u admin panelu)
    $labels = array(
        'name'                  => __( $plural, 'text-domain' ),
        'singular_name'         => __( $singular, 'text-domain' ),
        'add_new'               => _x( 'Add New', 'product', 'text-domain' ),
        'add_new_item'          => __( 'Add New ' . $singular, 'text-domain' ),
        'edit_item'             => __( 'Edit ' . $singular, 'text-domain' ),
        'new_item'              => __( 'New ' . $singular, 'text-domain' ),
        'view_item'             => __( 'View ' . $singular, 'text-domain' ),
        'view_items'            => __( 'View ' . $plural, 'text-domain' ),
        'search_items'          => __( 'Search ' . $plural, 'text-domain' ),
        'not_found'             => __( 'No ' . $plural . ' found', 'text-domain' ),
        'not_found_in_trash'    => __( 'No ' . $plural . ' in Trash', 'text-domain' ),
        'all_items'             => __( 'All ' . $plural, 'text-domain' ),
        'archives'              => __( $singular . ' Archives', 'text-domain' ),
        'attributes'            => __( $singular . ' Attributes', 'text-domain' ),
        'insert_into_item'      => __( 'Insert into ' . $singular, 'text-domain' ),
        'uploaded_to_this_item' => __( 'Uploaded to this ' . $singular, 'text-domain' ),
        'menu_name'             => __( $plural, 'text-domain' ),
    );

    // Definicija argumenata za custom post type
    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_icon'             => 'dashicons-products', // Ikona u meniju admin panela
        'has_archive'           => true,
        'rewrite'               => array( 'slug' => $slug ),
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'comments' ), // Podrška za title, editor, thumbnail i ostale opcije
        'taxonomies'            => array( 'category', 'post_tag' ), // Podrška za kategorije i tagove
        'show_in_rest'          => false, // Omogućava Gutenberg editor
    );

    // Registracija Custom Post Type-a
    register_post_type( $slug, $args );
}

// Poziv funkcije prilikom inicijalizacije
add_action( 'init', 'register_product_post_type' );

?>
