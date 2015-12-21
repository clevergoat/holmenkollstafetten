<?php
// Register menus
register_nav_menus(
	array(
		'main-nav' => __( 'The Main Menu', 'jointswp' ),   // Main nav in header
        'mobile-lang' => __( 'Mobile Language', 'jointswp' ),   // Mobile Dropdown for mobiles
		'footer-links1' => __( 'Footer Links 1', 'jointswp' ), // Secondary nav in footer
        'footer-links2' => __( 'Footer Links 2', 'jointswp' ), // Secondary nav in footer
        'footer-links3' => __( 'Footer Links 3', 'jointswp' ) // Secondary nav in footer
	)
);

// The Top Menu
function joints_top_nav() {
	 wp_nav_menu(array(
        'container' => false,                           // Remove nav container
        'menu_class' => 'medium-horizontal menu',       // Adding custom nav class
        'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown">%3$s</ul>',
        'theme_location' => 'main-nav',        			// Where it's located in the theme
        'depth' => 5,                                   // Limit the depth of the nav
        'fallback_cb' => false,                         // Fallback function (see below)
        'walker' => new Topbar_Menu_Walker()
    ));
} /* End Top Menu */

// The Mobile Language menu
function mobile_lang_nav() {
     wp_nav_menu(array(
        'container' => false,                           // Remove nav container
        'menu_class' => 'vertical medium-horizontal menu',       // Adding custom nav class
        'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="accordion medium-dropdown">%3$s</ul>',
        'theme_location' => 'mobile-lang',                 // Where it's located in the theme
        'depth' => 5,                                   // Limit the depth of the nav
        'fallback_cb' => false,                         // Fallback function (see below)
        'walker' => new Topbar_Menu_Walker()
    ));
} /* End Top Menu */

// The Off Canvas Menu
function joints_off_canvas_nav() {
	 wp_nav_menu(array(
        'container' => false,                           // Remove nav container
        'menu_class' => 'vertical menu',       // Adding custom nav class
        'items_wrap' => '<ul id="%1$s" class="%2$s" data-accordion-menu>%3$s</ul>',
        'theme_location' => 'main-nav',        			// Where it's located in the theme
        'depth' => 5,                                   // Limit the depth of the nav
        'fallback_cb' => false,                         // Fallback function (see below)
        'walker' => new Off_Canvas_Menu_Walker()
    ));
} /* End Off Canvas Menu */

// The Footer Menu
function joints_footer_links1() {
    wp_nav_menu(array(
    	'container' => 'false',                              // Remove nav container
    	'menu' => __( 'Footer Links 1', 'jointswp' ),   	// Nav name
    	'menu_class' => 'menu',        					// Adding custom nav class
    	'theme_location' => 'footer-links1',             // Where it's located in the theme
        'depth' => 0,                                   // Limit the depth of the nav
    	'fallback_cb' => ''  							// Fallback function
	));
} /* End Footer Menu */

// The Footer Menu
function joints_footer_links2() {
    wp_nav_menu(array(
        'container' => 'false',                              // Remove nav container
        'menu' => __( 'Footer Links 2', 'jointswp' ),       // Nav name
        'menu_class' => 'menu',                         // Adding custom nav class
        'theme_location' => 'footer-links2',             // Where it's located in the theme
        'depth' => 0,                                   // Limit the depth of the nav
        'fallback_cb' => ''                             // Fallback function
    ));
} /* End Footer Menu */

// The Footer Menu
function joints_footer_links3() {
    wp_nav_menu(array(
        'container' => 'false',                              // Remove nav container
        'menu' => __( 'Footer Links 3', 'jointswp' ),       // Nav name
        'menu_class' => 'menu',                         // Adding custom nav class
        'theme_location' => 'footer-links3',             // Where it's located in the theme
        'depth' => 0,                                   // Limit the depth of the nav
        'fallback_cb' => ''                             // Fallback function
    ));
} /* End Footer Menu */

// Header Fallback Menu
function joints_main_nav_fallback() {
	wp_page_menu( array(
		'show_home' => true,
    	'menu_class' => '',      // Adding custom nav class
		'include'     => '',
		'exclude'     => '',
		'echo'        => true,
        'link_before' => '',                            // Before each link
        'link_after' => ''                             // After each link
	) );
}

// Footer Fallback Menu
function joints_footer_links_fallback() {
	/* You can put a default here if you like */
}