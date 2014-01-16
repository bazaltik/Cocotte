<?php

// Define the version so we can easily replace it throughout the theme
define( 'BAZNUDE_VERSION', 0.1 );

/*-----------------------------------------------------------------------------------*/
/* Add Rss feed support to Head section
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );

/*-----------------------------------------------------------------------------------*/
/* Register main menu for Wordpress use
/*-----------------------------------------------------------------------------------*/
register_nav_menus( 
	array(
		'primary'	=>	__( 'Primary Menu', 'baznude' ), // Register the Primary menu
		// Copy and paste the line above right here if you want to make another menu, 
		// just change the 'primary' to another name
		)
	);

/*-----------------------------------------------------------------------------------*/
/* Register sidebar for Wordpress use
/*-----------------------------------------------------------------------------------*/
register_sidebar(array('name'=>'Sidebar',));

/*-----------------------------------------------------------------------------------*/
/* Make the "read more" link to the post
/*-----------------------------------------------------------------------------------*/
function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">[.....]</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );