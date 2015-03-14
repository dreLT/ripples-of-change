<?php

// Load Theme CSS
function theme_styles() {
	wp_enqueue_style( 'webfont', 'http://fonts.googleapis.com/css?family=Lato:400,700,400italic' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

/* Load Theme JS
function theme_js() {
	wp_register_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js.js', '', true );
}
add_action( 'wp_enqueue_scripts', 'theme_js' );
*/

// Enable custom menus
add_theme_support( 'menus'); 

// Enable Post Thumbnails
add_theme_support( 'post-thumbnails' );

// Blog Post Pagination

if ( ! function_exists( 'my_pagination' ) ) :
	function my_pagination() {
		global $wp_query;

		$big = 999999999; // need an unlikely integer
		
		echo paginate_links( array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $wp_query->max_num_pages,
			'prev_text' => '< Newer Articles',
			'next_text' => 'Previous Articles >'
		) );
	}
endif;

// Replaces the excerpt "More" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Removes auto-scrolling in blog post "More" links
function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );
?>