<?php

/** Theme Supports */
function ecom_theme_supports(){

    add_theme_support( 'post-thumbnails' );

	// Custom logo.
	$logo_width  = 120;
	$logo_height = 90;

	// If the retina setting is active, double the recommended width and height.
	if ( get_theme_mod( 'retina_logo', false ) ) {
		$logo_width  = floor( $logo_width * 2 );
		$logo_height = floor( $logo_height * 2 );
	}
	add_theme_support(
		'custom-logo',
		array(
			'height'      => $logo_height,
			'width'       => $logo_width,
			'flex-height' => true,
			'flex-width'  => true,
		)
    );
    
    	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
		)
    );
    

    add_theme_support( 'title-tag' );

    // Woocommerce
    if( class_exists( 'woocommerce' )){
		add_theme_support( 'woocommerce'
		    // , array(
			// 	'thumbnail_image_width' => 150,
			// 	'single_image_width'    => 300,
		
			// 	'product_grid'          => array(
			// 		'default_rows'    => 3,
			// 		'min_rows'        => 2,
			// 		'max_rows'        => 8,
			// 		'default_columns' => 4,
			// 		'min_columns'     => 1,
			// 		'max_columns'     => 3,
			// 	),

			// ) 
		);

		// Single product Zoom, slider, lightbox ENABLED
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );

		/** Add Div for products */
		// add_action( 'woocommerce_before_main_content', 'products_div_wrapper' );
		// function products_div_wrapper(){

		// }

        /** Remove Sidebar */
        // remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' , 10 );
        /** Remove Page Name */
        // remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description' , 10 );
        // remove_action( 'woocommerce_archive_description', 'woocommerce_product_archive_description' , 10 );
        // remove_action( 'woocommerce_after_shop_loop_item', 10 );
		
		// Remove Page Or Template Name
		add_filter( 'woocommerce_show_page_title', 'toggle_page_title' );

		function toggle_page_title( $val )
		{
			$val = false;
			return $val;
		}

		function woocommerce_product_category( $args = array() ) {
			$woocommerce_category_id = get_queried_object_id();
		  $args = array(
			  'parent' => $woocommerce_category_id
		  );
		  $terms = get_terms( 'product_cat', $args );
		  if ( $terms ) {
			  echo '<ul class="">';
			  foreach ( $terms as $term ) {
				  echo '<li class="">';
					// woocommerce_subcategory_thumbnail( $term );
				//   echo '<h2>';
				  echo '<a href="' .  esc_url( get_term_link( $term ) ) . '" class="' . $term->slug . '">';
				  echo $term->name;
				  echo '</a>';
				//   echo '</h2>';
				  echo '</li>';
			  }
			  echo '</ul>';
		  }
		}
		// add_action( 'woocommerce_before_main_content', 'woocommerce_product_category', 100 );
		
		
		// Function to return new Thumbnail image URL.
		function ts_custom_woocommerce_placeholder( $image_url ) {
			// $image_url = 'https://www.tychesoftwares.com/wp-content/uploads/2019/05/ts_cart-1.jpg'; // change this to the URL to your custom thumbnail image url
			return null;
		}
		add_filter( 'woocommerce_placeholder_img_src', 'ts_custom_woocommerce_placeholder', 10 );

		//Remove the category count everywhere
		// Remove the category count for WooCommerce categories
		add_filter( 'woocommerce_subcategory_count_html', '__return_null' );


		//Remove Breadcrumbs
		// remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
	
	}
    // Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for responsive embeds.
    add_theme_support( 'responsive-embeds' );
    

}

add_action( 'after_setup_theme', 'ecom_theme_supports' );

/** Assets */
function assets_init()
{
    $theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style("bootstrap", "://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css", array(), "1.0", "all");

    // js files
    wp_enqueue_script("bootstrap", get_template_directory_uri() . "/assets/vendor/bootstrap/js/bootstrap.bundle.min.js", array("jquery"), "1.0", true);
	wp_enqueue_style( 'ecom-style', get_template_directory_uri(), array(), $theme_version );
	wp_enqueue_style( 'tailwind-css',  get_template_directory_uri() . '/assets/css/app.css' , array(), $theme_version );
	wp_enqueue_style( 'ecom-css',  get_template_directory_uri() . '/assets/css/custom.css' , array(), $theme_version );
    wp_enqueue_script( 'ecom-js', get_template_directory_uri() . '/assets/js/app.js', array(), $theme_version, false );

}
add_action( 'wp_enqueue_scripts', 'assets_init' );