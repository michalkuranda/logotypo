<?php
ob_start();
add_filter( 'show_admin_bar', '__return_false' );
         function mainHeader($text,$number) {
            ?>
             <?php if( $text ) { ?>            
             <div class="row fullrow">              
              <div class="columns large-3 medium-2 small-1">                
              &nbsp;                     
              </div> 
              <div class="columns large-6 medium-8 small-10 text-center">                
              <?php echo "<".$number.">".$text."</".$number.">" ?>                             
              </div> 
              <div class="columns large-3 medium-2 small-1">                
              &nbsp;                     
              </div>                   
            </div>            
            <?php } ?>
            <?php
         }
require_once('library/joints.php'); // if you remove this, Joints will break
require_once('library/custom-post-type-multipage.php'); // you can disable this if you like
require_once('library/custom-post-type-produkty.php'); // you can disable this if you like
require_once('library/custom-post-type-realizace.php'); // you can disable this if you like
require_once('library/custom-post-type-promo.php'); // you can disable this if you like
require_once('library/custom-post-type-slider.php'); // you can disable this if you like
require_once('library/custom-post-type-setting.php'); // you can disable this if you like
require_once('library/custom-post-type-klienti.php'); // you can disable this if you like
require_once('library/custom-post-type-thumbklienti.php'); // you can disable this if you like
add_image_size( 'slider', 1024, 500, true );
add_image_size( 'joints-thumb-600', 600, 150, true );
add_image_size( 'joints-thumb-300', 300, 100, true );
register_nav_menus(
	array(
		'main-nav' => __( 'The Main Menu' ),   // main nav in header
		'footer-links' => __( 'Footer Links' ) // secondary nav in footer
	)
);
function joints_main_nav() {
    wp_nav_menu(array(
    	'container' => false,                           // remove nav container
    	'container_class' => '',           // class of container (should you choose to use it)
    	'menu' => __( 'The Main Menu', 'jointstheme' ),  // nav name
    	'menu_class' => '',         // adding custom nav class
    	'theme_location' => 'main-nav',                 // where it's located in the theme
    	'before' => '',                                 // before the menu
        'after' => '',                                  // after the menu
        'link_before' => '',                            // before each link
        'link_after' => '',                             // after each link
    	'fallback_cb' => 'joints_main_nav_fallback'      // fallback function
	));
} 
function joints_footer_links() {

    wp_nav_menu(array(
    	'container' => '',                              // remove nav container
    	'container_class' => 'footer-links clearfix',   // class of container (should you choose to use it)
    	'menu' => __( 'Footer Links', 'jointstheme' ),   // nav name
    	'menu_class' => 'sub-nav',      // adding custom nav class
    	'theme_location' => 'footer-links',             // where it's located in the theme
    	'before' => '',                                 // before the menu
        'after' => '',                                  // after the menu
        'link_before' => '',                            // before each link
        'link_after' => '',                             // after each link
        'depth' => 0,                                   // limit the depth of the nav
    	'fallback_cb' => 'joints_footer_links_fallback'  // fallback function
	));
} 
function joints_main_nav_fallback() {
	wp_page_menu( array(
		'show_home' => true,
    	'menu_class' => 'top-bar top-bar-section',      // adding custom nav class
		'include'     => '',
		'exclude'     => '',
		'echo'        => true,
        'link_before' => '',                            // before each link
        'link_after' => ''                             // after each link
	) );
}
function joints_footer_links_fallback() {
}
function joints_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __('Nepoužívat', 'jointstheme'),
		'description' => __('V této šabloně nejsou použity widgety.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
} // don't remove this bracket!