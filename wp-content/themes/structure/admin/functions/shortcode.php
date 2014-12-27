<?php

// ADD SHORTCODE FOR HOME SPECIMEN
// -------------------------------------------------

// Add STYLE
function my_theme_add_editor_styles() {
	add_editor_style( 'css/custom-editor-style.css' );
}
add_action( 'after_setup_theme', 'my_theme_add_editor_styles' );
// Add FORMATS button
function my_mce_buttons_2( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
add_filter('mce_buttons_2', 'my_mce_buttons_2');
// FORMATS button settings
function my_mce_before_init_insert_formats( $init_array ) {

	// On récupère la liste de toutes les fontes
	// TODO: supprimer les produits parents (ex: print)
	$args = array( 
		'post_type' => 'product', 
		'orderby' =>'date',
		'order' => 'DESC' 
		);

	$loop = new WP_Query( $args );

	// On remplit le tableau $style_formats que l'on insère ensuite dans le select du Tiny MCE
	while ( $loop->have_posts() ) : $loop->the_post(); global $product;
		$font_title = get_the_title();
		// Pour utiliser directement le nom de la font comme classe css
		// TODO: checker aussi les accents et caractères spéciaux
		$uri_font_title = preg_replace('/\s+/', '', strtolower($font_title));

		$style_formats[] = array( 
			'title' => $font_title,
			'selector' => 'h1, h2, h3, h4, h5, h6, p',
			'classes' => $uri_font_title,
			'wrapper' => false
		);
	endwhile;

	$init_array['style_formats'] = json_encode( $style_formats );
	return $init_array;
}
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );


// END SHORTCODE FOR HOME SPECIMEN
// -------------------------------------------------



