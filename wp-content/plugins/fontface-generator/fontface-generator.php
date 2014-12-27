<?php

// Block direct access
defined('ABSPATH') or die("No script kiddies please!");

/**
 * Plugin Name: Fontface generator
 * Plugin URI: #
 * Description: Generate font-face rules when uploading a new font
 * Version: 0.0.1
 * Author: Yannick Mathey
 * Author URI: #
 * License: WTFPL
 */

add_action( 'save_post', 'wpse41912_save_post' );
function wpse41912_save_post() {

	$args = array( 
		'post_type' => 'product', 
		'orderby' =>'date',
		'order' => 'DESC'
		);
	// TODO: supprimer les produits parents ( ex: Print -> NON :: Print regular-> OUI )

	$loop = new WP_Query( $args );

	// On remplit un tableau qui nous sert ensuite pour générer le css correspondant
	while ( $loop->have_posts() ) : $loop->the_post(); global $product;
		$font_title = get_the_title();
		// Pour utiliser directement le nom de la font comme classe css
		// TODO: checker aussi les accents et caractères spéciaux
		$uri_font_title = preg_replace('/\s+/', '', strtolower($font_title));
		$families[] = $uri_font_title;
	endwhile;

	// On recrée le fichier font-face
	$open = fopen("../wp-content/themes/structure/src/fonts.css","w+");
	$text = '';
	foreach ($families as $key => $value) {
		$text .= "
			@font-face {
		    font-family: '". $families[$key] ."';
		    src: url('../fonts/print/". $families[$key] ."/". $families[$key] .".eot');
		    src: url('../fonts/print/". $families[$key] ."/". $families[$key] .".eot?#iefix') format('embedded-opentype'),
		         url('../fonts/print/". $families[$key] ."/". $families[$key] .".woff') format('woff'),
		         url('../fonts/print/". $families[$key] ."/". $families[$key] .".ttf') format('truetype'),
		         url('../fonts/print/". $families[$key] ."/". $families[$key] .".svg#". $families[$key] ."') format('svg');
		    font-weight: normal;
		    font-style: normal;
			}
			.". $families[$key] ." {
				font-family: '". $families[$key] ."', 'Comic Sans MS';
			}";

	}

	fwrite($open, $text);
	fclose($open);

}

?>