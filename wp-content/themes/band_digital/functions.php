<?php
// правильный способ подключить стили и скрипты
add_action( 'wp_enqueue_scripts', 'band_digital_styles' );

function band_digital_styles() {
  // стили
	wp_enqueue_style( 'wp', get_stylesheet_uri() );
  // bootstrap.min css
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/plugins/bootstrap/css/bootstrap.css' );
  // Icofont Css
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/plugins/fontawesome/css/all.css' );
  // animate.css
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/plugins/animate-css/animate.css' );
  // icofont.css
	wp_enqueue_style( 'icofont', get_template_directory_uri() . '/plugins/icofont/icofont.css' );
  // Main Stylesheet
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css' );


  // скрипты
  // jQuery
  wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/plugins/jquery/jquery.min.js', array(), null, true);

  // Bootstrap  
  wp_enqueue_script( 'popper', get_template_directory_uri() . '/plugins/bootstrap/js/popper.min.js', array('jquery'), null, true );
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/plugins/bootstrap/js/bootstrap.min.js', array('jquery'), null, true );
  
  // Woow animtaion
  wp_enqueue_script( 'wow', get_template_directory_uri() . '/plugins/counterup/wow.min.js', array('jquery'), null, true );
  wp_enqueue_script( 'easing', get_template_directory_uri() . '/plugins/counterup/jquery.easing.1.3.js', array('jquery'), null, true );
  
  // Counterup
  wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/plugins/counterup/jquery.waypoints.js', array('jquery'), null, true );
  wp_enqueue_script( 'counterup', get_template_directory_uri() . '/plugins/counterup/counterup.min.js', array('jquery'), null, true );
  
  // Google Map
  wp_enqueue_script( 'gmap3', get_template_directory_uri() . '/plugins/google-map/gmap3.min.js', array('jquery'), null, true );
  wp_enqueue_script( 'maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap', array('jquery'), null, true );
  
  // Contact Form
  wp_enqueue_script( 'contact', get_template_directory_uri() . '/plugins/jquery/contact.js', array('jquery'), null, true );
  wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), null, true );
}
